<!-- 現金購入完了画面のビュー -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>券売機｜現金購入完了</title>
</head>
<body>
    <header><h1><?php echo $msg;?></h1></header> 

    
    <?php echo $msg2;?>
    <?php echo $msg3;?>

    <div class="comp_contents">
        <div>
            <h2>投入した金種／枚数</h2>
            <p>投入金額：<span><strong><?php echo $payment_amount;?></strong>円</span></p>
        </div>
        <div>
            
            <p>10000円札／<?php echo $bill10000_num;?>枚</p>
            <p>5000円札／<?php echo $bill5000_num;?>枚</p>
            <p>1000円札／<?php echo $bill1000_num;?>枚</p>
            <p>500円玉／<?php echo $coin500_num;?>枚</p>
            <p>100円玉／<?php echo $coin100_num;?>枚</p>
            <p>50円玉／<?php echo $coin50_num;?>枚</p>
            <p>10円玉／<?php echo $coin10_num;?>枚</p>
        </div>
    </div>
    
    <div class="comp_contents">
        <div>
            <h2>返却・お釣り金種／枚数</h2>
            <p>返却金額：<span><strong><?php echo $change;?></strong>円</span></p>
        </div>
        <div>
            <p>10000円札／<?php echo $result['10000'];?>枚</p>
            <p>5000円札／<?php echo $result['5000'];?>枚</p>
            <p>1000円札／<?php echo $result['1000'];?>枚</p>
            <p>500円玉／<?php echo $result['500'];?>枚</p>
            <p>100円玉／<?php echo $result['100'];?>枚</p>
            <p>50円玉／<?php echo $result['50'];?>枚</p>
            <p>10円玉／<?php echo $result['10'];?>枚</p>
        </div>
    </div>

    <div class="comp_contents">
        <div>
            <h2>手元に残った各金種／枚数</h2>
            <p>あなたの手元にあるお金：<span><strong><?php echo $have_sum;?></strong>円</span></p>
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