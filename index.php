<?php 
//投入金額入力画面のコントローラー
session_start();

$_SESSION['confirm_msg'] = '';

//[現金で購入する]ボタンを押された時
if(isset($_POST['state']) && $_POST['state'] == 'cash'){
    if($_POST['ticket_val'] == 0){
        $_SESSION['err_msg'] = ' err';
        //入力内容の確認ページへ遷移
        header('location:./index.php');
        exit;
    }
    $_SESSION['err_msg'] = '';
    
    //入力されたデータをセッションに突っ込んで、入力内容の確認画面（チェック画面）に飛ばす
    $_SESSION['ticket_val'] = $_POST['ticket_val'];
    
    //入力内容の確認ページへ遷移
    header('location:./cash.php');
    exit;
}

//[現金で購入する]ボタンを押された時
if(isset($_POST['state']) && $_POST['state'] == 'card'){
    if($_POST['ticket_val'] == 0){
        $_SESSION['err_msg'] = ' err';
        //入力内容の確認ページへ遷移
        header('location:./index.php');
        exit;
    }
    $_SESSION['err_msg'] = '';

    //入力されたデータをセッションに突っ込んで、入力内容の確認画面（チェック画面）に飛ばす
    $_SESSION['ticket_val'] = $_POST['ticket_val'];
    
    //入力内容の確認ページへ遷移
    header('location:./card.php');
    exit;
}

//ビューの表示
require_once 'tpl/index.php';
?>