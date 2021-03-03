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

echo "\n";


// PHPのビルトイン関数

// strlen : 文字の長さを取得する
$string = "ABCDEF";
echo strlen($string);

echo "\n";

// str_replace : 文字列を置換する
$string = "I love Ruby!";
$new_string = str_replace("Ruby", "PHP", $string);
echo $new_string;

echo "\n";


// count : 配列の要素の個数を取得する
$array = array(1,2,3,4,5,6,7,8,9,10);
echo count($array);

echo "\n";

// asort,arsort : 配列をソートする
$array= array(2,5,9,7,3,1,8,6,4);
asort($array);
print_r($array);

echo "\n";

$array= array(2,5,9,7,3,1,8,6,4);
arsort($array);
print_r($array);

echo "\n";


// 課題1
// 引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function double($x) {
    return $x * 2;
}
echo double(5);

echo "\n";

// 課題2
// $aと$bを仮引数に持ち、$aと$bを足した結果を返す関数を作成してください
echo "-------課題２-------";
echo "\n";
function f($a, $b) {
   return $a + $b;
}
 echo f(2,5);


echo "\n";

// 課題3
// $arrという配列の仮引数を持ち、数値が入った配列$array(1,3,5,7,9)を渡すとその要素をすべてかけた結果を返す関数を作成してください
function x($arr) {
    $result = 1;
    foreach($arr as $val) {
        $result = $result * $val;
    }
    return $result;
}
echo x(array(1,3,5,7,9));

echo "\n";
 

// 課題4
// 配列の中で一番大きい値を返す max_array という関数を実装
// 途中の部分を完成させる
function max_array($arr) {
    $max_number = $arr[0];
    foreach($arr as $a) {
   
    }
    return $max_number;
}

echo "\n";

// 課題5
// ビルトイン関数の用途、使い方を調べて実際に使ってみる

// strip_tags：HTMLタグを取り除く
// $変数 = strip_tags(文字列, 許可するタグ);
$string = '<a href="http://google.com">Google</a>';
$result = strip_tags($string);
echo $result;

echo "\n";

// array_push
// 配列の末尾に追加する
// $変数 = array_push(配列、追加したい要素);
$input = [30,40,50];
array_push($input, 60, 70);
print_r($input);

echo "\n";

// array_merge
// 配列をマージする
// $配列 = array_merge($元の配列, $追加配列);
$data = array("TV1" => "500", "TV2" => "100", "RADIO1" => "800");
$add_data = array("TV1" => "2000", "RADIO2" => "600");
$result = array_merge($data, $add_data);
print_r($result);

echo "\n";

// time,mktime
// time:UNIXのタイムスタンプを表示する
// UNIXタイムとはコンピュータシステム上での時刻表現の一種。
// $変数 = time();
$now = time();
print $now;

echo "\n";

// mktime:日付をUNIXのタイムスタンプとして取得する
// $変数 = mktime(時間,分,秒,月,年,);
$timestamp = mktime(0, 0, 0, 20, 11, 2015);
print $timestamp;

echo "\n";

// date
// UNIXタイムスタンプを日付にする
// $変数 = date(フォーマット, UNIXタイムスタンプ);
$timestamp = time() + (60 * 60 *24) * 7;
$next_week = date('Y年m月d日H時i分s秒', $timestamp);
print $next_week;

