<?php 
//現金購入完了画面のコントローラー

/* //関数呼び出し
require_once './func.php'; */

/* //不正なアクセスをされた場合
if(!isset($_SESSION['coin10_num'])){
    header('location:./index.php');
    exit;
} */

$money = [10000,5000,1000,500,100,50,10];
$msg = "所持金をリセットしました。";
$have = [];
$list[0][0] = 1000;
$list[0][1] = 1;
$list[0][2] = 1;
$list[0][3] = 1;
$list[0][4] = 1;
$list[0][5] = 2;
$list[0][6] = 3;
$list[0][7] = 15;

$cnt = 0;
$have_sum = 0;
foreach ($money as $value) {
    $have_sum = $have_sum + ($list[0][$cnt+1] * $value);
    $cnt++;
}

//csvファイルに上書き
$fp = fopen("data.csv", "w");
foreach($list as $row){
    fputs($fp,implode(',',$row)."\n");
}
fclose($fp);

// var_dump($list);

//ビューの表示
require_once 'tpl/csvreset.php';
?>