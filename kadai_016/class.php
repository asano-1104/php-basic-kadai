<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    //クラスを定義する
    class Food{
      //プロパティを定義する
      private $name;
      private $price;
    
      //メソッドを定義する
      public function set_price(int $price){
        $this ->price = $price;
      }

      public function show_price(){
        echo $this -> price . '<br>';
      }

      //コンストラクタを定義する
      public function __construct(string $name, int $price){
        $this -> name = $name;
        $this -> price = $price;
      }
    }

    class Animal{
      private $name;
      private $height;
      private $weight;
    
      public function set_height(int $height){
        $this -> height = $height;
      }

      public function show_height(){
        echo $this -> height . '<br>';
      }

      public function __construct(string $name, int $height,int $weight){
        $this -> name = $name;
        $this -> height = $height;
        $this -> weight = $weight;
      }
      }
      $food = new Food('potato',250);
      $animal = new Animal('dog',60,5000);

      print_r($food);
      echo '<br>';
      print_r($animal);
      echo '<br>';

      //メソッドにアクセスして実行する
      $food ->show_price();
      $animal-> show_height();

    ?>
  </p>
</body>