<?php
// Q1 変数と文字列
$name = '池田';
echo "私の名前は「{$name}」です。";


// Q2 四則演算
$num = 5 * 4;
echo $num . "\n";
echo $num / 2;


// Q3 日付操作
echo date('現在時刻は、' . 'Y年m月d日 H時i分s秒' . 'です。');


// Q4 条件分岐-1 if文
$device = 'mac';

if ($device === 'windows') {
echo '使用OSはwindowsです。';
}
if ($device === 'mac') {
echo '使用OSはmacです。';
}
if ($device !== 'windows' && $device !== 'mac') {
echo 'どちらでもありません。';
}


// Q5 条件分岐-2 三項演算子
$age = 31;
$message = ($age > 18) ? '成人です。' : '未成年です。';
echo $message;


// Q6 配列
$prefecture = ['東京都', '神奈川県', '埼玉県', '栃木県', '千葉県', '群馬県', '茨城県',];

echo $prefecture[3] . 'と' . $prefecture[4] . 'は関東地方の都道府県です。';


// Q7 連想配列-1
$prefecture = [
	'東京都' => '新宿区', 
	'神奈川県' => '横浜市', 
	'千葉県' => '千葉市',
	'埼玉県' => 'さいたま市', 
	'栃木県' => '宇都宮市',  
	'群馬県' => '前橋市', 
	'茨城県' => '水戸市',
];
foreach ($prefecture as $city) {
  echo $city . "\n";
}


// Q8 連想配列-2
$prefecture = [
    '東京都' => '新宿区', 
    '神奈川県' => '横浜市', 
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市', 
    '栃木県' => '宇都宮市',  
    '群馬県' => '前橋市', 
    '茨城県' => '水戸市',
];

foreach ($prefecture as $saitama => $city) {
    if ($saitama === '埼玉県') {
        echo $saitama . 'の県庁所在地は、' . $city . 'です。';
    }
}


// Q9 連想配列-3
$prefecture = [
    '東京都' => '新宿区', 
    '神奈川県' => '横浜市', 
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市', 
    '栃木県' => '宇都宮市',  
    '群馬県' => '前橋市', 
    '茨城県' => '水戸市',
    '愛知県' => '名古屋市',
    '大阪府' => '大阪市',
];

$kanto_region = ["東京都", "神奈川県", "千葉県", "埼玉県", "栃木県",  "群馬県", "茨城県",];

foreach ($prefecture as $pref => $city) {
    if (in_array($pref, $kanto_region)) {
        echo "{$pref}の県庁所在地は、{$city}です。\n";
    } else {
        echo "{$pref}は関東地方ではありません。\n";
    }
}


// Q10 関数-1
function greet($name) {
  echo $name . "さん、こんにちは。\n";
}

greet("太郎");
greet("花子");


// Q11 関数-2
function calcTaxInPrice($price)
{
$taxInPrice = $price * 1.1;
return $price . "円の商品の税込み価格は" . $taxInPrice . "円です。";
}

echo calcTaxInPrice(1000);


// Q12 関数とif文
function distinguishNum($num) {
    if ($num % 2 === 0) {
        return $num . "は偶数です。";
    } else {
        return $num . "は奇数です。";
    }
}

echo distinguishNum(11) . "\n";
echo distinguishNum(24); 


// Q13 関数とswitch文
function evaluateGrade($grade) {
    switch ($grade) {
        case 'A':
        case 'B':
            return "合格です。";
        case 'C':
            return "合格ですが追加課題があります。";
        case 'D':
            return "不合格です。";
        default:
            return "判定不明です。講師に問い合わせてください。";
    }
}

echo evaluateGrade('A') . "\n"; 
echo evaluateGrade('Z') ; 
?>