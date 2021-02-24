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