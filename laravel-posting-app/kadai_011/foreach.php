<!DOCTYPE html>
<html lang="ja">
 <head>
    <meta charset"UTF-8">
    <title>kadai_011</title>
    <body>
      <p>
        <?php
        //配列
        $yasi_data = ['野菜' => '玉ねぎ','値段' => '200','産地' => '北海道'];
        //要素を一つずつ順番に出力
        foreach($yasi_data as $key => $value){
            echo "{$key}:{$value} <br>";
        }
        ?>
      </p>  
    </body>
</html>
</head>