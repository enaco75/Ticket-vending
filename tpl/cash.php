<!-- 投入金額入力画面のビュー -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>券売機｜現金投入</title>
</head>
<body>
    <header>
        <h1>現金で購入する</h1>
        <!-- 所持金をすべてリセットするボタン -->
        <a id="reset_btn" href="./csvreset.php">所持金をリセット</a>
    </header>

    <p class="cash_p">きっぷを<span><strong><?php echo $ticket_val;?></strong>枚</span>購入します</p>
    <p class="cash_p">購入金額は<span><strong><?php echo $total_pay;?></strong>円</span>です</p>

    <form action="./cash.php" method="POST">
    <h2 id="cash_h2">投入する金種と枚数を入力してください</h2>
        <div class="deposit">
            <label class="title" data-money="10">１０円玉</label>
            <p>
                <select name='coin10_num' class="input_deposit">
                <?php for($i=0;$i<=$list[0][7];$i++){?>
                    <option value='<?php echo $i;?>'<?php echo ($i==0)?' selected':'';?>><?php echo $i;?></option>
                <?php }?>
                </select>枚
            </p>
        </div>
        <div class="deposit">
            <label class="title" data-money="50">５０円玉</label>
            <p>
                <select name='coin50_num' class="input_deposit">
                <?php for($i=0;$i<=$list[0][6];$i++){?>
                    <option value='<?php echo $i;?>'<?php echo ($i==0)?' selected':'';?>><?php echo $i;?></option>
                <?php }?>
                </select>枚
            </p>
        </div>
        <div class="deposit">
            <label class="title" data-money="100">１００円玉</label>
            <p>
                <select name='coin100_num' class="input_deposit">
                <?php for($i=0;$i<=$list[0][5];$i++){?>
                    <option value='<?php echo $i;?>'<?php echo ($i==0)?' selected':'';?>><?php echo $i;?></option>
                <?php }?>
                </select>枚
            </p>
        </div>
        <div class="deposit">
            <label class="title" data-money="500">５００円玉</label>
            <p>
                <select name='coin500_num' class="input_deposit">
                <?php for($i=0;$i<=$list[0][4];$i++){?>
                    <option value='<?php echo $i;?>'<?php echo ($i==0)?' selected':'';?>><?php echo $i;?></option>
                <?php }?>
                </select>枚
            </p>
        </div>
        <div class="deposit">
            <label class="title" data-money="1000">１,０００円札</label>
            <p>
                <select name='bill1000_num' class="input_deposit">
                <?php for($i=0;$i<=$list[0][3];$i++){?>
                    <option value='<?php echo $i;?>'<?php echo ($i==0)?' selected':'';?>><?php echo $i;?></option>
                <?php }?>
                </select>枚
            </p>
        </div>
        <div class="deposit">
            <label class="title" data-money="5000">５,０００円札</label>
            <p>
                <select name='bill5000_num' class="input_deposit">
                <?php for($i=0;$i<=$list[0][2];$i++){?>
                    <option value='<?php echo $i;?>'<?php echo ($i==0)?' selected':'';?>><?php echo $i;?></option>
                <?php }?>
                </select>枚
            </p>
        </div>
        <div class="deposit">
            <label class="title" data-money="10000">１０,０００円札</label>
            <p>
                <select name='bill10000_num' class="input_deposit">
                <?php for($i=0;$i<=$list[0][1];$i++){?>
                    <option value='<?php echo $i;?>'<?php echo ($i==0)?' selected':'';?>><?php echo $i;?></option>
                <?php }?>
                </select>枚
            </p>
        </div>

        <div id="sum_deposit">
            <label class="title">投入金額</label>
            <p><input value="" name="payment_amount" type="text" id="payment_amount" readonly>円</p>
        </div>

        <!-- 投入金額が不足しているときのメッセージ -->
        <p><span><?php echo $_SESSION['confirm_msg'];?></span></p>
        
        <button id="confirm_btn" type="submit" name="state" value="confirm">確認する</button>
    </form>

<script src="js/add.js" charset="UTF-8"></script>
</body>
</html>