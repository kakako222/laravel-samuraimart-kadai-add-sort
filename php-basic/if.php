<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
         <?php
         // 算術演算子を使った場合の戻り値を出力する
         echo 45 + 18;
 
         // 改行する
         echo '<br>';
 
         // 比較演算子を使った場合の戻り値を出力する
         var_dump(45 > 18);
         ?>
     </p>
     <p>
         <?php
         //等価演算子を使った場合の戻り値を出力する
         var_dump('5' == 5);

         //改行する
         echo '<br>';

         //厳密等価演算子を使った戻り値を出力する
         var_dump('5' === 5);
         ?>
      </p>
      <p>
        <?php
        //変数$numに０〜４までのランダムな整数を代入する
        $num = mt_rand(0,4);
        //変数numの値を出力する
        echo $num;
        //改行
        echo '<br>';
        //変数$numの値が４の時大当たりですという文字列を出力する
        if ($num === 4){
            echo '大当たりです';
            }elseif($num ===3){
                echo 'あたりです';
            }else{
                echo 'ハズレです';
                }
        ?>
</p>
<p>
    <?php
    $num = 20;
    //&&(かつ)を記述し、すべての条件が成り立つ時のみに処理を行う（変数$numの値が１１〜２９）
    if($num > 10 && $num < 30){
        echo'変数numは１０より大きく、３０より小さい';
    }else{
        echo'条件が成り立ちませんでした';
    }
    //改行
    echo '<br>';
    $num = 30;
    //11（または）を記述し、１つでも条件が成り立てば処理を行う（変数$numの値が１０または３０）
    if($num === 10 || $num === 30){
        echo'変数numは１０または３０です';
    }else{
        echo '条件が成り立ちませんでした';
    }
    ?>
 </p>
 </body>
 
 </html>