<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Vendor;
use App\Http\Requests\ProductStoreRequest;
use App\Events\ProductAddedEvent;

class ProductController extends Controller
{
    // indexメソッド: productsテーブルからすべてのデータを取得
    public function index() {
        $products = DB::table('products')->get();
        return view('products.index', compact('products'));
    }

    // showメソッド: 特定の商品の詳細を表示
    public function show($id) {
        $product = Product::find($id);
        return view('products.show', compact('product'));
    }

    // createメソッド: 新しい商品を作成するフォームを表示
    public function create() {
        // ベンダーコードを取得してビューに渡す
        $vendor_codes = Vendor::pluck('vendor_code');
        return view('products.create', compact('vendor_codes'));
    }

    // storeメソッド: 新しい商品を保存
    public function store(ProductStoreRequest $request) {
        $product = new Product();
        $product->product_name = $request->input('product_name');
        $product->price = $request->input('price');
        $product->vendor_code = $request->input('vendor_code');

        // アップロードされたファイル（name="image"）が存在すれば処理を実行する
        if ($request->hasFile('image')) {
            // アップロードされたファイル（name="image"）をstorage/app/public/productsフォルダに保存し、戻り値（ファイルパス）を変数$image_pathに代入する
            $image_path = $request->file('image')->store('public/products');
            // ファイルパスからファイル名のみを取得し、Productインスタンスのimage_nameプロパティに代入する
            $product->image_name = basename($image_path);
        }
        $product->save();

        // ProductAddedEventを発生させる
        event(new ProductAddedEvent($product));
        

        // 保存後、詳細ページへリダイレクト
        return redirect("/products/{$product->id}");
    }
}