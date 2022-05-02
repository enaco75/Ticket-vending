<?php 
//確認画面のコントローラー
session_start();

$_SESSION['confirm_msg'] = '';

//不正なアクセスをされた場合
if(!isset($_SESSION['payment_amount'])){
    header('location:./index.php');
    exit;
}

$ticket_val = $_SESSION['ticket_val'];
$total_pay = 130 * $ticket_val;
$change = $_SESSION['payment_amount'] - $total_pay; //お釣り
//投入金額が不足している場合は、購入画面へ戻し、貨幣の再入力を促す。
if($change < 0){
    $_SESSION['confirm_msg'] = '投入金額が不足しています。';
    header('location:./cash.php');
    exit;
}

//ビューの表示
require_once 'tpl/cash_confirm.php';
?>