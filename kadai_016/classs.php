<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎</title>
</head>
<body>
    <p>
      <?php
        //クラスを定義する
        class Food{
        private $name;
        private $price;
     
        public function __construct( $name, $price){
        $this->name = $name;
        $this->price = $price;
     }
    
        public function show_price(){
        echo $this->price . '<br>';
     }
     }
    
        //クラスを定義する
        class Animal{
        private $name;
        private $height;
        private $weight;
         
        public function __construct(string $name, int $height, int $weight){
           $this->name = $name;
           $this->height = $height;
           $this->weight = $weight;
            }
        public function show_height(){
        echo $this->height . '<br>';
       }
    }
       ?>
   </p>
   <p>
      <?php
       //インスタンス化する
       $food = new Food('poteto',250);
       $animal = new Animal('dog',60,5000);

       //インスタンス$Foodの各プロパティの値を出力する
      print_r($food);
      echo '<br>';
      print_r($animal);
      echo '<br>';

      //メソッドへアクセスする
      $food->show_price();
      $animal->show_height();
      ?>
    <p>
 </body>
</html>
