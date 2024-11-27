<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎</title>
</head>
<body>
    <p>
        <?php
        //定数に変数を代入
        const SHIPPING_FEE = 500;

        //定数の中身を出力する
        echo SHIPPING_FEE;
         ?>

         <?php
         //クラスを定義する
         class Product{
            //クラス内に定数を定義する
            public const TAX = 1.1;
            }

         //クラス内に定義された定数にアクセスする
         echo Product::TAX;
         ?>
    </p>
     <?php
     // 定数に配列を入れる
     const SEVEN_REGIONS = [
        '北海道地方',
        '東北地方',
        '関東地方',
        '中部地方',
        '近畿地方',
        '中国・四国地方',
        '九州地方'
    ];

    // 定数（配列）の中身を出力する
    print_r(SEVEN_REGIONS);
     ?>
    <p>
    </p>
</body>
</html>
