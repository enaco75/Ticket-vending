<!-- 投入金額入力画面のビュー -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <title>券売機｜購入TOP</title>
</head>
<body>
    <header>
        <h1>きっぷを購入する</h1>
        <!-- 所持金をすべてリセットするボタン -->
        <a id="reset_btn" href="./csvreset.php">所持金をリセット</a>
    </header>

    <p id="index_p">きっぷの価格は現金の場合は<span><strong>130</strong>円</span>、電子マネーの場合は<span><strong>124</strong>円</span>です。</p>
    <form action="./index.php" method="POST">
        <div id="index_amount">
            <label class="title<?php echo $_SESSION['err_msg']!==''?$_SESSION['err_msg']:'';?>">購入枚数を入力してください</label>
            <select name='ticket_val' class="input_deposit">
                <?php for($i=0;$i<=10;$i++){?>
                    <option value='<?php echo $i;?>'<?php echo ($i==0)?' selected':'';?>><?php echo $i;?></option>
                <?php }?>
            </select>枚
        </div>
        
        <div id="btn">
            <button class="index_btn" type="submit" name="state" value="cash"><img src="./images/cash.png" alt="現金アイコン"><br><span>現金</span>で購入する</button>
            <button class="index_btn" type="submit" name="state" value="card"><img src="./images/card.png" alt="カードアイコン"><br><span>交通系電子マネー</span>で購入する</button>
        </div>
    </form>

    

<script src="js/add.js"></script>
</body>
</html>