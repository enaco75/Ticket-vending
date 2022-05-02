<?php 
//現金購入完了画面のコントローラー
session_start();

//不正なアクセスをされた場合
if(!isset($_SESSION['payment_amount'])){
    header('location:./index.php');
    exit;
}

$result = [];
$money = [10000,5000,1000,500,100,50,10];
//SESSIONの受け取り
$ticket_val = $_SESSION['ticket_val'];
$total_pay = 130 * $ticket_val;
//投入された枚数
$coin10_num = $_SESSION['coin10_num'];
$coin50_num = $_SESSION['coin50_num'];
$coin100_num = $_SESSION['coin100_num'];
$coin500_num = $_SESSION['coin500_num'];
$bill1000_num = $_SESSION['bill1000_num'];
$bill5000_num = $_SESSION['bill5000_num'];
$bill10000_num = $_SESSION['bill10000_num'];
$payment_amount = $_SESSION['payment_amount'];  // 支払い金額（投入金額）
$total_pay = 130 * $_SESSION['ticket_val']; // 購入金額

session_destroy();
$msg = '';
//確認ページで「キャンセル」ボタンを押された場合
if(isset($_POST['state']) && $_POST['state'] == 'cancel'){//確認画面でキャンセルボタンを押された場合。
    $msg = '購入がキャンセルされました';
    $change = $payment_amount;
    //払い戻し枚数
    $result['10000'] = $bill10000_num;
    $result['5000'] = $bill5000_num;
    $result['1000'] = $bill1000_num;
    $result['500'] = $coin500_num;
    $result['100'] = $coin100_num;
    $result['50'] = $coin50_num;
    $result['10'] = $coin10_num;
}


//確認ページで「購入する」ボタンを押された場合
if(isset($_POST['state']) && $_POST['state'] == 'complete'){
    $msg = 'ご購入ありがとうございました';
    $msg2 = '<p class="cash_p">きっぷを<span><strong>'.$ticket_val.'</strong>枚</span>購入しました</p>';
    $msg3 = '<p class="cash_p">購入金額は<span><strong>'.$total_pay.'</strong>円</span>でした</p>';
    //お釣り
    $change = $payment_amount - $total_pay;
    $change_buf = $change;
    //払い戻し枚数の計算
    foreach ($money as $value) {
        if($change_buf <= 0){
          $result[$value] = 0;
        }else{
          $page = floor($change_buf/$value);    //各金種のお釣り枚数
          $result[$value] = $page; 
          //$change_buf -= ($page*$value);
          $change_buf = $change_buf%$value;
        }
    }  
}

//手元に残った金額の枚数を計算する
$fp = fopen("data.csv", "r");
$list = [];
while($row = fgets($fp)){
    $row = str_replace(["\r","\n"],'',$row);
    $row = explode(',',$row);
    $list[] = $row;
}
fclose($fp);

$list[0][1] = $list[0][1] - $bill10000_num + $result['10000'];
$list[0][2] = $list[0][2] - $bill5000_num + $result['5000'];
$list[0][3] = $list[0][3] - $bill1000_num + $result['1000'];
$list[0][4] = $list[0][4] - $coin500_num + $result['500'];
$list[0][5] = $list[0][5] - $coin100_num + $result['100'];
$list[0][6] = $list[0][6] - $coin50_num + $result['50'];
$list[0][7] = $list[0][7] - $coin10_num + $result['10'];

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
require_once 'tpl/cash_complete.php';
?>