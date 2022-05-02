<?php 
//投入金額入力画面のコントローラー
session_start();

$ticket_val = $_SESSION['ticket_val'];  //購入する切符の枚数
$total_pay = 130 * $ticket_val; //購入金額

//不正なアクセスをされた場合
if(!isset($_SESSION['ticket_val'])){
    header('location:./index.php');
    exit;
}


//[確認]ボタンを押された時
if(isset($_POST['state']) && $_POST['state'] == 'confirm'){
    if($_POST['payment_amount'] == 0){
        $_SESSION['confirm_msg'] = '投入金額が不足しています。';
        header('location:./cash.php');
        exit;
    }
    //入力されたデータをセッションに突っ込んで、入力内容の確認画面（チェック画面）に飛んでけ〜。
    $_SESSION['coin10_num'] = ($_POST['coin10_num'] !== '')?$_POST['coin10_num']:'0';
    $_SESSION['coin50_num'] = ($_POST['coin50_num'] !== '')?$_POST['coin50_num']:'0';
    $_SESSION['coin100_num'] = ($_POST['coin100_num'] !== '')?$_POST['coin100_num']:'0';
    $_SESSION['coin500_num'] = ($_POST['coin500_num'] !== '')?$_POST['coin500_num']:'0';
    $_SESSION['bill1000_num'] = ($_POST['bill1000_num'] !== '')?$_POST['bill1000_num']:'0';
    $_SESSION['bill5000_num'] = ($_POST['bill5000_num'] !== '')?$_POST['bill5000_num']:'0';
    $_SESSION['bill10000_num'] = ($_POST['bill10000_num'] !== '')?$_POST['bill10000_num']:'0';
    $_SESSION['payment_amount'] = $_POST['payment_amount'];

    //入力内容の確認ページへ遷移
    header('location:./cash_confirm.php');
    exit;
}

//手元にある金額の枚数データを取得してくる
$fp = fopen("data.csv", "r");
$list = [];
while($row = fgets($fp)){
    $row = str_replace(["\r","\n"],'',$row);
    $row = explode(',',$row);
    $list[] = $row;
}
fclose($fp);

//所持金
$money = [10000,5000,1000,500,100,50,10];
$sum = 0;
for($i=1;$i<=7;$i++){
    $sum = $sum + ($money[$i-1] * $list[0][$i]);
}
if($sum < $total_pay){
    $_SESSION['confirm_msg'] = '※所持金をリセットしてください';
}


//ビューの表示
require_once 'tpl/cash.php';
?>