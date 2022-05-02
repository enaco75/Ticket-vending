<!-- 確認画面のビュー -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>券売機｜現金購入確認</title>
</head>
<body>
    <header><h1>購入内容をご確認ください</h1></header>
    <p class="cash_p">きっぷを<span><strong><?php echo $ticket_val;?></strong>枚</span>購入します</p>
    <p class="cash_p">購入金額は<span><strong><?php echo $total_pay;?></strong>円</span>です</p>
    <form action="./cash_complete.php" method="post">

        <div class="deposit">
            <label class="title">１０円玉</label>
            <div class="input_set"><p class="namae"><strong><?php echo $_SESSION['coin10_num'];?></strong>枚</p></div>
        </div>            
        <div class="deposit">
            <label class="title">５０円玉</label>
            <div class="input_set"><p class="namae"><strong><?php echo $_SESSION['coin50_num'];?></strong>枚</p></div>
        </div>
        <div class="deposit">
            <label class="title">１００円玉</label>
            <div class="input_set"><p class="namae"><strong><?php echo $_SESSION['coin100_num'];?></strong>枚</p></div>
        </div>
        <div class="deposit">
            <label class="title">５００円玉</label>
            <div class="input_set"><p class="namae"><strong><?php echo $_SESSION['coin500_num'];?></strong>枚</p></div>
        </div>
        <div class="deposit">
            <label class="title">１,０００円札</label>
            <div class="input_set"><p class="namae"><strong><?php echo $_SESSION['bill1000_num'];?></strong>枚</p></div>
        </div>
        <div class="deposit">
            <label class="title">５,０００円札</label>
            <div class="input_set"><p class="namae"><strong><?php echo $_SESSION['bill5000_num'];?></strong>枚</p></div>
        </div>
        <div class="deposit">
            <label class="title">１０,０００円札</label>
            <div class="input_set"><p class="namae"><strong><?php echo $_SESSION['bill10000_num'];?></strong>枚</p></div>
        </div>
        <div id="sum_deposit">
            <label class="title">投入金額</label>
            <p><input value="<?php echo $_SESSION['payment_amount'];?>" name="payment_amount" type="text" id="payment_amount" readonly>円</p>
        </div>

        <p class="check_msg">上記の内容で購入いたします。</p>
        

        <div class="btn_wrap">
            <button id="confirm_btn" type="submit" name="state" value="cancel" class="cancel">キャンセル</button>
            <button id="confirm_btn" type="submit" name="state" value="complete">購入する</button>
        </div>
    </form>
</body>
</html>