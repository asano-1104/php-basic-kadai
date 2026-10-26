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
      public function show_price(int $price){
        $this ->price = $price;
      }
      //コンストラクタを定義する
      public function __construct(string $name, int $price){
        $this -> name = $name;
        $this -> price = $price;
      }
    }

    class Annimal{
      private $name;
      private $height;
      private $weight;
    
      public function show_height(int $height){
        $this -> height = $height;
      }
      public function __construct(string $name, int $height,int $weight){
        $this -> name = $name;
        $this -> height = $height;
        $this -> weight = $weight;
      }
      }
      $food = new Food('potato',250);
      $annimal = new Annimal('dog',60,5000);

      print_r($food);
      echo '<br>';
      print_r($annimal);


    ?>
  </p>
</body>