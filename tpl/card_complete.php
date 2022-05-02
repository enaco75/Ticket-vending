<!-- 現金購入完了画面のビュー -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>券売機｜カード購入完了</title>
</head>
<body>
    <header><h1><?php echo $msg;?></h1></header> 

    <?php echo $msg2;?>
    <?php echo $msg3;?>

    <div class="comp_contents">
        <div>
            <h2>きっぷ購入前の電子マネー残高</h2>
            <p>購入前残額：<span><strong><?php echo $payment_amount;?></strong>円</span></p>
        </div>
    </div>

    <div class="comp_contents">
        <div>
            <h2>きっぷ購入前の電子マネー残高</h2>
            <p>購入前残額：<span><strong><?php echo $payment_amount;?></strong>円</span></p>
        </div>
    </div>

    
    <div class="comp_contents">
        <div>
            <h2>きっぷ購入後の電子マネー残高</h2>
            <p>購入取引後残額：<span><strong><?php echo $change;?></strong>円</span></p>
        </div>
    </div>

    
    <div class="comp_contents">
        <div>
            <h2>手元に残った各金種／枚数</h2>
            <p>カード残高：<span><strong><?php echo $list[0][0];?></strong>円</span></p>
            <p>あなたの手元にある現金：<span><strong><?php echo $have_sum;?></strong>円</span></p>
        </div>
        <div>
            <p>10000円札／<?php echo $list[0][1];?>枚</p>
            <p>5000円札／<?php echo $list[0][2];?>枚</p>
            <p>1000円札／<?php echo $list[0][3];?>枚</p>
            <p>500円玉／<?php echo $list[0][4];?>枚</p>
            <p>100円玉／<?php echo $list[0][5];?>枚</p>
            <p>50円玉／<?php echo $list[0][6];?>枚</p>
            <p>10円玉／<?php echo $list[0][7];?>枚</p>
        </div>
    </div>

    <div id="btn_space"><a id="reset_btn" class="toTop_btn" href="./index.php">購入画面へ</a></div>
</body>
</html>