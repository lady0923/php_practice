<?php
echo 'hello php!';
echo "\n";

//変数とは

//変数$integerに20を代入
$integer = 20;

//変数＄stringに"abc"を代入
$string = "abc";

//変数$integerを出力
echo $integer;
//=>20と表示される

echo "\n";

//変数$springを出力
echo $string;
//=>abcと表示される

echo "\n";

//変数$integerと10を足した結果を変数$new_integer
$new_integer = $integer +10;

//変数$new_integerを出力する
echo $new_integer;
//=>30と表示される

echo "\n";

//変数$arrayに配列[2017,2018,2019,2020]を代入する
$array = [2017,2018,2019,2020];

//$arrayから2017を取り出して表示する
echo $array[0];
//=>2017と表示される

echo "\n";

//$arrayから2019を取り出して表示する
echo $array[2];
//=>2019と表示される

echo "\n";

//$array2にspring,summer,autom,winterを代入する
$array2 = ["spring","summer","autom","winter"];
//array2からautomを取り出して表示する
echo $array2[2];
//=>automを表示される

echo "\n";

//$animalsという連想配列を定義する
$animals = [
    "cat" => "猫",
    "dog" => "犬",
    "bird" => "鳥"
    ];
    
//$animalsから"猫"を取り出して表示する
echo $animals["cat"];
//　=>猫と表示される

echo "\n";

//$animalsから"鳥"を取り出して表示する
echo $animals ["bird"];
// =>鳥と表示される

echo "\n";

//$resultにtrueを代入する
$result = true;

//もし$resultがtrueであれば、成功しました。が表示される
//もしそうでなければ、失敗しました が表示される
if ($result == true) {
    echo "成功しました。";
} else {
    echo "失敗しました。";
}
//=>成功しました。が表示される

echo "\n";

//+は数値を加算する演算子
$value = 6;
echo $value +2;
//=>8が表示される

echo "\n";

//-は数値を減算する演算子
echo $value -2;
//=>4が表示される

echo "\n";

//*は数値を積算する演算子
echo $value *2;
//=>12が表示される

echo "\n";

// /は数値を除算する演算子
echo $value /2;
//=>3が表示される

echo "\n";

// .は文字列を連結する演算子
$value = "AAA";
echo $value ."BBB";
//=> "AAABBB"が表示される

echo "\n";

// ==は左項と右項が等しいか判定する
$value = 10;
$result = $value == 20;
var_dump($result);
//=> bool(false)が表示される

// <は左項が右項より小さいか判定する
$value = 10;
$result = $value < 20;
var_dump($result);
//=> bool(true)が表示される

// >は左項が宇高より大きいか判定する
$result = $value > 20;
var_dump($result);
//=>bool(false)が表示される

// === は左項と右項が同じ型で同じ値を持つか判定する
$a = "20";
$b = 20;
$result = $a === $b;
var_dump($result);
//=>bool (false)が表示される

$result = $a == $b;
var_dump($result);
//=>bool(true)が表示される

//単項演算

// ++は変数の値をひとつ増加させる
$value = 10;
++ $value;
echo $value;
//=>11と表示される

echo "\n";

//--は変数の値をひとつ減少させる
$value = 10;
-- $value;
echo $value;
//=>9と表示される

echo "\n";

//複合演算

// +=は変数の値を増加させる
$value = 10;
$value += 5;
echo $value;
//=>15と表示される

echo "\n";

// -=は変数の値を減少させる
$value = 10;
$value -= 5;
echo $value;
//->5と表示される

echo "\n";

// .=は変数に文字列を連結する
$value = 'apple';
$value .= 'orange';
echo $value;
//=> appleorangeと表示される

echo "\n";

//三項演算





// 課題1
$a = 3;
$b = 7;
echo $a + $b;

