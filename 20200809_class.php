<?php
// インスタンスを実体化しよう
class Greeting {
    public function sayHello() {
        echo "hello paiza";
    }
}
//クラスを実体化
$string = new Greeting();
//sayHelloメソッドを呼び出し
$string -> sayHello();


?>




<?php
// クラスにメソッドを定義しよう
class Greeting {
    // この下に、sayHelloメソッドを記述する
    public function sayHello(){
        echo "hello PHP";
    }
}
$paiza = new Greeting();
$paiza->sayHello();
?>


<?php
// クラスで変数を管理する
class Player{
    public function walk(){
        echo "勇者は歩いていた。\n";
    }
}

$player1 = new Player();
$player1 -> walk();
?>



<?php
// クラスで変数を管理する
class Player{
    //メンバ変数
    public $myName;
    public function __construct($name){
        $this -> myName = $name;
    }
    public function walk(){
        echo $this -> myName."は歩いていた。\n";
    }
}

$player1 = new Player("戦士");
$player1 -> walk();  //戦士は歩いていた。

$player2 = new Player("魔法使い");
$player2 -> walk();  //魔法使いは歩いていた。
?>



<?php
// インスタンスを実体化しよう
class Greeting {
    public $myName;

    public function __construct($name) {
        $this->myName = $name;
    }

    public function sayHello() {
        echo "hello " . $this->myName;
    }
}
// この下に、インスタンスを実体化し、メソッド呼び出しを記述する
$serihu = new Greeting("paiza");
$serihu -> sayHello();

?>



<?php
class Greeting {
    public $myName;

    public function __construct($name) {
        $this->myName = $name;
    }

    public function sayHello() {
        echo "hello " . $this->myName;
    }
}
$serihu = new Greeting("PHP");
$serihu -> sayHello();

// この下に、インスタンス生成とメソッド呼び出しを追加する


?>



<?php
// 間違い探し
class Greeting {
    public $myName;

    public function __construct($name) {
        $this->myName = $name;
    }

    public function sayHello() {
        echo "hello " . $this->myName;
    }
}

$paiza = new Greeting("paiza");
$paiza->sayHello();
?>



<?php
// RPGの攻撃シーン
class Player {
    public $myName;

    public function __construct($name) {
        $this->myName = $name;
    }

    public function attack($enemy) {
	    echo $this->myName . "は" . $enemy . "を攻撃した\n";
    }
}

//オブジェクトを配列に格納
$team[] = new Player("勇者");
$team[] = new Player("戦士");
$team[] = new Player("魔法使い");

foreach ($team as $member) {
    $member -> attack("スライム");
}
?>



<?php
// クラスで、引数と戻り値のあるメソッドを作ろう
class Item {
    public $price;
    public $quantity;

    public function __construct($newPrice, $newQuantity){
        $this->price = $newPrice;
        $this->quantity = $newQuantity;
    }

    public function getTotalPrice() {
        return $this->price * $this->quantity;
    }
}

$apple = new Item(120, 15);
$total = $apple->getTotalPrice();
echo "合計金額は" . $total . "円です。\n";
$orange = new Item(85, 32);
echo "合計金額は" . $orange->getTotalPrice() . "円です。\n";
?>




<?php
// 学生メソッドを呼び出す
class Gakusei {
    public $myKokugo;
    public $mySansu;

    public function __construct($kokugo, $sansu) {
        $this->myKokugo = $kokugo;
        $this->mySansu = $sansu;
    }

    public function sum() {
        return $this->myKokugo + $this->mySansu;
    }
}

// この下に、クラスをインスタンス化し、メソッド呼び出しを記述する
$student = new Gakusei(70,43);
echo "合計は" .$student->sum(). "点です\n";
?>




<?php
// 学生メソッドを作る
class Gakusei {
    private $myKokugo;
    private $mySansu;

    public function __construct($kokugo, $sansu) {
        $this->myKokugo = $kokugo;
        $this->mySansu = $sansu;
    }

    // この下に、合計得点を戻り値として返すsumメソッドを記述する
    public function sum(){
        return $this -> myKokugo + $this -> mySansu;
    }

}

$yamada = new Gakusei(70, 43);
echo "合計は" . $yamada->sum() . "点です\n";
?>



<?php
// アクセス修飾子を理解しよう
class Player {
    public $myName;
    public function __construct($name){
        $this->myName = $name;
    }
    private function walk() {
        echo $this->myName . "は荒野を歩いていた。\n";
    }
    public function output() {
        $this->walk();
    }
}

$player = new Player("勇者");
$player->output();
echo $player->myName . "\n";
?>



<?php
// staticを理解しよう
class Item {
    public static $tax = 1.08;
    // public $price;
    // public $quantity;

    // public function __construct($newPrice, $newQuantity){
    //     $this->price = $newPrice;
    //     $this->quantity = $newQuantity;
    // }

    public static function getTotalAmount($price, $quantity) {
        return round($price * $quantity * self::$tax);
    }
}
$total = Item::getTotalAmount(120, 15);
echo "合計金額は" . $total . "円です。\n";

?>



<?php
// 学生メソッドを呼び出す
class Gakusei {
    // この下に、合計得点を戻り値として返すsumメソッドを記述する
    public static function sum($kokugo, $sansu) {
        return $kokugo + $sansu;

    }
}

// この下に、合計得点を戻り値として返すGakuseiクラスsumメソッドを呼び出す
// 国語 = 70点、算数 = 43点
$total = Gakusei::sum(70,43);
echo "合計は" . $total . "点です。";
?>
