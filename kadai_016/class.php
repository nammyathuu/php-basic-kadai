<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        //クラス定義
          class Food {
            //プロパティ定義
            public $name ;
            public $price ;
            //コンストラクタ定義
            public function __construct(string $name , int $price){
                $this->name = $name ;
                $this->price = $price ;
            }
            //メソッド定義
            public function show_Price(){
              echo $this->price . '<br>' ;
          }
         }
         //インスタンス化
         $food = new Food('tomato' , 500) ;
         //出力
          print_r($food) ;
          $food->show_Price() ;
        
        //クラス定義 
         class Animal{
            //プロパティ定義
            public $name ;
            public $height ;
            public $weight ;
            //コンストラクタ定義
            public function __construct(string $name, int $height, int $weight){
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
            //メソッドを定義
                public function show_height(){
                echo $this->height . '<br>';
            }
         }    
            //インスタンス化
            $animal = new Animal('cat' , 50 , 4000) ;
            //出力
               print_r($animal);
               $animal->show_height();  
        ?>
    </p>
</body>
    
</html>
      