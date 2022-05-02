<?php 
//投入金額入力画面のコントローラー
session_start();

$ticket_val = $_SESSION['ticket_val'];  //購入する切符の枚数
$total_pay = 124 * $ticket_val; //購入金額

//不正なアクセスをされた場合
if(!isset($_SESSION['ticket_val'])){
    header('location:./index.php');
    exit;
}

//[カードをかざす]ボタンを押された時
if(isset($_POST['state']) && $_POST['state'] == 'confirm'){

    //入力内容の確認ページへ遷移
    header('location:./card_confirm.php');
    exit;
    
}

//ビューの表示
require_once 'tpl/card.php';
?>