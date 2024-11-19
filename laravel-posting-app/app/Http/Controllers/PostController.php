<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // 投稿の作成フォームを表示する
    public function create()
    {
        return view('posts.create');
    }

    // 投稿をデータベースに保存する
    public function store(Request $request)
    {
        // バリデーションルールを定義
        $validated = $request->validate([
            'Name' => 'required|string|max:20',
            'Email' => 'required|max:100',
            'Password' => 'required|min:4',
        ]);

        // 新しい投稿を作成
        $post = new Post();
        $post->title = $validated['title'];
        $post->content = $validated['content'];

        // 画像がアップロードされていた場合
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/posts');
            $post->image_name = basename($imagePath);
        }

        // 投稿を保存
        $post->save();

        // 投稿作成後、投稿一覧ページにリダイレクト
        return redirect()->route('posts.index')->with('success', '投稿が作成されました！');
    }

    // 投稿一覧を表示する
    public function index()
    {
        $posts = Post::all(); // すべての投稿を取得
        return view('posts.index', compact('posts'));
    }

    // 特定の投稿を表示する
    public function show($id)
    {
        $post = Post::findOrFail($id); // 投稿が見つからなければ404エラー
        return view('posts.show', compact('post'));
    }
}
}
