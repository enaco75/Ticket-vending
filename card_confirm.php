<?php 
//確認画面のコントローラー
session_start();

$_SESSION['confirm_msg'] = '';

//不正なアクセスをされた場合
if(!isset($_SESSION['ticket_val'])){
    header('location:./index.php');
    exit;
}

$ticket_val = $_SESSION['ticket_val'];
$total_pay = 124 * $ticket_val;

$fp = fopen("data.csv", "r");
$list = [];
while($row = fgets($fp)){
    $row = str_replace(["\r","\n"],'',$row);
    $row = explode(',',$row);
    $list[] = $row;
}
fclose($fp);
$disabled = '';
$change = $list[0][0] - $total_pay; //お釣り
//投入金額が不足している場合は、購入画面へ戻し、貨幣の再入力を促す。
if($change < 0){
    $_SESSION['confirm_msg'] = 'カード残高が不足しています。';
    $disabled = 'disabled';
    /* header('location:./card.php');
    exit; */
}

//ビューの表示
require_once 'tpl/card_confirm.php';
?>