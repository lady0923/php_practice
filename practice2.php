<?php
echo 'hello php!';
echo "\n";

//プログラムの実行を条件分岐構文と繰り返し構文で制御

//if文

$height = 160;
if ($height <150) {
    echo "150cm 未満の方はご乗車できません。";
}
// =>何も表示されない

echo "\n";

// else文
//if文で書いた条件を満たさなかった場合にelseのあとの{}が実行される

$height = 160;
if ($height < 150) {
    echo "150cm 未満の方はご乗車できません。";
} else {
    echo "ご乗車になれます。";
}
// =>"ご乗車になれます。"が表示される

echo "\n";

//else if文
//複数の条件で分岐したいとき

$height = 230;
if($height < 150) {
    echo "150cm 未満の方はご乗車できません。";
} else if($height >= 200) {
    echo "200cm 以上の方はご乗車できません。";
} else {
    echo "ご乗車になれます。";
}
// =>200cm 以上の方はご乗車できません。が表示される

echo "\n";

// switch文

$weekday = "月曜";
switch ($weekday) {
    case "月曜":
    echo "可燃ごみの日です。";
    break;
    case "水曜":
    echo "資源ごみの日です。";
    break;
    default:
    echo "回収はありません。";
    break;
}
// =>"可燃ごみの日です。"が表示される

//case文の処理の終わりには必ずbreak文を入れる
//break文を入れないと、全ての条件が実行されてしまう

echo "\n";

//break文を入れないメリット

$weekday = "木曜";
switch ($weekday) {
    case "月曜":
    case "木曜":
        echo "可燃ごみの日です。";
        break;
    case "水曜":
        echo "資源ごみの日です。";
        break;
    default:
        echo "回収はありません。";
}
// =>"可燃ごみの日です。"が表示される

echo "\n";

// さまざまな条件の比較

$a = 3;
$b = 3;
$c = "3";

// $aと$bが正しいときにtrue、そうでなければfalse
var_dump($a == $b);
// =>bool(true)が表示される

// $aと＄bが等しくないときにtrue
var_dump($a != $b);
// =>bool(false)が表示される

// $aが$bより大きいときにtrue、そうでなければfalse
var_dump($a > $b);
// =>bool(false)が表示される

// $aが$b以上のときtrue、そうでなければfalse
var_dump($a >= $b);
// =>bool(true)が表示される

// $aが$bより小さいときtrue、そうでなければfalse
var_dump($a < $b);
// bool(false)が表示される

// $aが$bより小さいか、または等しいときにtrue、そうでなければfalse
var_dump($a <= $b);
// bool(true)が表示される

// $aが$cとデータ型が等しく、かつ値も等しいときにtrue、そうでなければfalse
var_dump($a === $c);
// =>bool(false)が表示される

// $aと$cがデータ型が等しくないか、もしくは値が等しくないときにtrue、そうでなければfalse
var_dump($a !== $c);
// =>bool(true)が表示される

// for文
// for(カウンター変数の初期化; ループを続ける条件; 条件の変化指定);{
//  要素一つに対して実行したい処理 
//  }

// $iは０から始まり、$iが10未満になるまで$iに1足し続ける
for($i = 0; $i < 10; $i++) {
    echo $i;
}
// =>0123456789が表示される

echo "\n";

// 1~100までを繰り返し処理で足す
$total = 0;
echo $total;
// =>0と表示される

echo "\n";

for($i =1; $i <=100; $i++) {
    $total += $i;
}
echo $total;
// =>5050と表示される

echo "\n";

//　配列のすべての要素を出力
$fruits = array("apple", "orange", "lemon");
echo count($fruits);
// =>3と表示される

echo "\n";

for($i = 0; $i < count($fruits); $i++) {
echo "要素は" .$fruits[$i];
echo "\n";
}
// =>要素はapple
// =>要素はorange
// =>要素はlemon
// =>と表示される

// foreach文
// 配列の要素を順番に処理するための構文
// toreach(配列 as 一時変数) {
// 要素ひとつに対して実行したい処理
//  }

//$animalsから一つずつ要素を取り出して、$animalに代入する
$animals = array("dog", "cat", "panda");

foreach($animals as $animal) {
    echo "要素は" .$animal;
    echo "\n";
}
// =>要素はdog
// =>要素はcat
// =>要素はpanda
// =>と表示される

// 課題1

$name = "三木彩貴";
if ($name = "三木彩貴") {
    echo "私は三木彩貴です。";
} else {
    echo "私は三木彩貴ではありません。";
}

echo "\n";

// 課題2

$total = 0;
echo $total;

echo "\n";

for($i = 0; $i <=10000; $i++) {
    $total += $i;
}
echo $total;

echo "\n";

// 課題3

$fruits = array("strawberry", "banana", "lemon", "orange", "kiwi");
foreach ($fruits as $fruit) {
    echo "要素は" . $fruit;
    echo "\n";
}

echo "\n";

// 課題4

$i = 0;
echo $i;

echo "\n";

for ($i = 0; $i<=100; $i++) {
    if ($i % 5 == 0) {
        echo $i;
    }
}