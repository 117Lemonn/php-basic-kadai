<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<boby>
    <p>
        <?php
        class Food {
            //プロパティを定義する
            private $name;
            private $price;

//コストラクタの初期化
public function __construct(string $name,int $price)
{
    $this->name=$name;
    $this->price=$price;
}



//メゾットを定義
            public function show_price(){
                
                echo $this->price.'<br>';
            }    
        }

//インスタンス化
$potato=new Food('potao',250);

//メソッドにアクセスしメソッドを実行
print_r($potato);
echo '<br>';

//クラスの定義
    class Animal {
        //プロパティを定義する
        public $name;
        public $height;
        public $weight;
        //メソッドの定義
        public function show_height(){
           
            echo $this->height.'<br>';

        }
        //コントラクタの初期化
        public function __construct(string $name,int $height, float $weight){

        
        
            $this->name=$name;
            $this->height=$height;
            $this->weight=$weight;

        }


    }
//インスタンス化
$animal=new Animal('dog',60,5000);
//インスタンス$animalに各プロパティの値を出力する



print_r($animal);
echo '<br>';

$potato->show_price();
//echo '<br>';
$animal->show_height();
//echo '<br>';

    ?>
</p>
</boby>
</html>

