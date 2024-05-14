<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>kadai_016</title>
    </head>
    <body>
        <p>
            <?php

            //クラスの定義
            class Food {

                //プロパティを定義する
                private $name;
                private $price;

                // コンストラクタを定義する
                public function __construct(string $name, int $price) {
                    $this->name = $name;
                    $this->price = $price;
                }

                //メソッドを追加
                public function show_price() {
                echo $this->price , '<br>';
                }
            }

            // インスタンス化する
            $food = new Food('potato',250);
        
            // インスタンス$foodの各プロパティの値を出力する
            print_r($food);
            echo '<br>';

        

            class Animal {

                //プロパティを定義する
                private $name;
                private $height;
                private $weight;

                //メソッドを追加
                public function show_height() {
                echo $this->height;
                }

                // コンストラクタを定義する
                public function __construct(string $name, $height, $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
                }
            }

            // インスタンス化する
            $animal = new Animal ('dog',60, 5000);
        
            // インスタンス$animalの値を出力する
            print_r($animal);
            echo '<br>';


            // プロパティにアクセスし、値を出力する
            $food->show_price();

            // プロパティにアクセスし、値を出力する
            $animal->show_height();

            ?>
        </p>
    </body>
</html>
