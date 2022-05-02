<!-- 確認画面のビュー -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>券売機｜カード購入確認</title>
</head>
<body>
<header><h1>購入内容をご確認ください</h1></header>
    <p class="cash_p">きっぷを<span><strong><?php echo $ticket_val;?></strong>枚</span>購入します</p>
    <p class="cash_p">購入金額は<span><strong><?php echo $total_pay;?></strong>円</span>です</p>
    <p id="balance">カード残高：<?php echo $list[0][0];?>円<br><span><?php echo $_SESSION['confirm_msg'];?></span></p>

    <form action="./card_complete.php" method="post">

        <p class="check_msg">上記の内容で購入いたします。</p>
        

        <div class="btn_wrap">
            <button id="confirm_btn" type="submit" name="state" value="cancel" class="cancel">キャンセル</button>
            <button id="<?php echo $disabled==''?'confirm_btn':$disabled;?>" type="submit" name="state" value="complete" <?php echo $disabled;?>>購入する</button>
        </div>
    </form>
</body>
</html>