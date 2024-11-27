<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // クラス「Product」を定義
        class Product {
            // 商品名のプロパティを定義
            public $name;

            // 商品名をセットするメソッド
            public function set_name(string $name) {
                $this->name = $name;
            }

            // 商品名を表示するメソッド
            public function show_name() {
                echo $this->name . '<br>';
            }
        }

        // 「Product」クラスのインスタンスを作成（コーヒー）
        $coffee = new Product();

        // メソッドを使って商品名をセットし、表示
        $coffee->set_name('コーヒー');
        $coffee->show_name();

        // 「Product」クラスのインスタンスを作成（シャンプー）
        $shampoo = new Product();

        // プロパティに直接アクセスして商品名をセット
        $shampoo->name = 'シャンプー';

        // プロパティに直接アクセスして商品名を表示
        echo $shampoo->name;
        ?>
    </p>
    <p>
        <?php
            //クラスを定義する
            class User {
            //プロパティを定義する
            private $name;
            private $age;
            private $gender;

            //コンストラクタを定義する
            public function __construct(string $name,int $age, string $gender){
                $this->name = $name;
                $this->name = $age;
                $this->name = $gender;
            }
         }
             //インスタンス化する
             $user = new User('侍太郎',36,'男性');

             //インスタンス$userの各プロパティの値を出力する
             print_r($user);

        ?>
    </p>
</body>

</html>
