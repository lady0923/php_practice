// 関数を理解しよう

<?php
function sum($max) {
    $result = 0;
for($i = 1; $i <= $max; $i++) {
    $result += $i;
}
return $result;
}
echo sum(100);
?>

// PHPのビルトイン関数

// strlen : 文字の長さを取得する
<?php
$string = "ABCDEF";
echo strlen($string);
?>

// str_replace : 文字列を置換する
<?php
$string = "I love Ruby!";
$new_string = str_replace("Ruby", "PHP", $string);
echo $new_string;
?>

// count : 配列の要素の個数を取得する
<?php
$array = array(1,2,3,4,5,6,7,8,9,10);
echo count($array);
?>

// asort,arsort : 配列をソートする
<?php
$array= array(2,5,9,7,3,1,8,6,4);
asort($array);
print_r($array);
?>

<?php
$array= array(2,5,9,7,3,1,8,6,4);
arsort($array);
print_r($array);
?>

// 課題1
// 引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

<?php
function double($x) {
    return $x * 2;
}
echo double(5);
?>

// 課題2
// $aと$bを仮引数に持ち、$aと$bを足した結果を返す関数を作成してください

<?php
function f($a, $b) {
    return $a + $b;
}
echo f(2,5);
?>

// 課題3
// $arrという配列の仮引数を持ち、数値が入った配列$array(1,3,5,7,9)を渡すとその要素をすべてかけた結果を返す関数を作成してください

