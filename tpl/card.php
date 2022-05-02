<!-- 投入金額入力画面のビュー -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>券売機｜カード読み取り</title>
</head>
<body>
    <header><h1>交通系電子マネーで購入する</h1></header>
    <p class="cash_p">きっぷを<span><strong><?php echo $ticket_val;?></strong>枚</span>購入します</p>
    <p class="cash_p">購入金額は<span><strong><?php echo $total_pay;?></strong>円</span>です</p>

    <p id="attention"><strong>読み取り機にカードをかざしてください</strong></p>
    <form action="./card.php" method="POST">
        <button id="cardScan" type="submit" name="state" value="confirm"><img src="./images/scan.png" alt="カードをかざすアイコン"><br>カードをかざす</button>
    </form>

<script src="js/add.js" charset="UTF-8"></script>
</body>
</html>