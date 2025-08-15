<?php
// Q1 tic-tac問題
for ($i = 1; $i <= 100; $i++) {

	if ($i % 4 === 0 && $i % 5 === 0) {
			echo "tic-tac\n";
	} elseif ($i % 4 === 0) {
			echo "tic\n";
	} elseif ($i % 5 === 0) {
			echo "tac\n";
	} else {
			echo $i . "\n";
	}
}


// Q2 多次元連想配列-1
$personalInfos = [
	[
			'name' => 'Aさん',
			'mail' => 'aaa@mail.com',
			'tel'  => '09011112222'
	],
	[
			'name' => 'Bさん',
			'mail' => 'bbb@mail.com',
			'tel'  => '08033334444'
	],
	[
			'name' => 'Cさん',
			'mail' => 'ccc@mail.com',
			'tel'  => '09055556666'
	],
];
echo $personalInfos[1]["name"] . 'の電話番号は' . $personalInfos[1]["tel"] . 'です。';


// Q2 多次元連想配列-2
$personalInfos = [
	[
			'name' => 'Aさん',
			'mail' => 'aaa@mail.com',
			'tel'  => '09011112222'
	],
	[
			'name' => 'Bさん',
			'mail' => 'bbb@mail.com',
			'tel'  => '08033334444'
	],
	[
			'name' => 'Cさん',
			'mail' => 'ccc@mail.com',
			'tel'  => '09055556666'
	],
];

$counter = 1; // 

foreach ($personalInfos as $personalInfo) {
	echo $counter . "番目の" . $personalInfo['name'] . "のメールアドレスは" . $personalInfo['mail'] . "で、電話番号は" . $personalInfo['tel'] . "です。" . "\n";
	$counter++;
}


// Q2 多次元連想配列-3
$personalInfos = [
	[
			'name' => 'Aさん',
			'mail' => 'aaa@mail.com',
			'tel'  => '09011112222'
	],
	[
			'name' => 'Bさん',
			'mail' => 'bbb@mail.com',
			'tel'  => '08033334444'
	],
	[
			'name' => 'Cさん',
			'mail' => 'ccc@mail.com',
			'tel'  => '09055556666'
	],
];

$ageList = [25, 30, 18];

foreach ($personalInfos as $index => &$personalInfo) {
	$personalInfo['age'] = $ageList[$index];
}
unset($personalInfo); 


var_dump($personalInfos);


// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$yamada = new Student(120, '山田');
echo "学籍番号{$yamada->studentId}番の生徒は{$yamada->studentName}です。";


// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($event)
    {
        echo "{$this->studentName}は{$event}の授業に参加しました。学籍番号:{$this->studentId}";
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');


// Q5 定義済みクラス-1
$date =new DateTime();
$date->modify('-1 month');

echo $date->format('Y-m-d');


// Q5 定義済みクラス-2
$today = new DateTime();

$pastDate = new DateTime('1992-04-25');

$interval = $today->diff($pastDate);

$totalDays = $interval->days;

echo "あの日から" . $totalDays . "日経過しました";
?>