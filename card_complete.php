<?php 
//現金購入完了画面のコントローラー
session_start();

//不正なアクセスをされた場合
if(!isset($_SESSION['ticket_val'])){
    header('location:./index.php');
    exit;
}

$result = [];
$money = [10000,5000,1000,500,100,50,10];
//SESSIONの受け取り
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

//投入された枚数
$payment_amount = $list[0][0];  // 購入前残高
$total_pay = 124 * $_SESSION['ticket_val']; // 購入金額


//session_destroy();
$msg = '';
//確認ページで「キャンセル」ボタンを押された場合
if(isset($_POST['state']) && $_POST['state'] == 'cancel'){//確認画面でキャンセルボタンを押された場合。
    $msg = '購入がキャンセルされました';
    $change = $payment_amount;
}


//確認ページで「購入する」ボタンを押された場合
if(isset($_POST['state']) && $_POST['state'] == 'complete'){
    $msg = 'ご購入ありがとうございました';
    $msg2 = '<p class="cash_p">きっぷを<span><strong>'.$ticket_val.'</strong>枚</span>購入しました</p>';
    $msg3 = '<p class="cash_p">購入金額は<span><strong>'.$total_pay.'</strong>円</span>でした</p>';
    //購入後の電子マネー残高
    $change = $payment_amount - $total_pay;
}
$list[0][0] = $change;
//手元に残った金額の枚数を計算する
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

//ビューの表示
require_once 'tpl/card_complete.php';
?>