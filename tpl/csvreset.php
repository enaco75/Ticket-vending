<!-- 現金購入完了画面のビュー -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>券売機｜所持金リセット完了</title>
</head>
<body>
    <header><h1><?php echo $msg;?></h1></header> 

    
    <h2 id="reset_h2">手元に残った各金種／枚数</h2>
    <p>カード残高：<?php echo $list[0][0];?>円</p>
    <p>あなたの手元にある現金：<?php echo $have_sum;?>円</p>
    <form>
        
        <div class="deposit">
            <label class="title">１０,０００円札</label>
            <div class="input_set"><p class="namae"><strong><?php echo $list[0][1];?></strong>枚</p></div>
        </div>
        <div class="deposit">
            <label class="title">５,０００円札</label>
            <div class="input_set"><p class="namae"><strong><?php echo $list[0][2];?></strong>枚</p></div>
        </div>
        <div class="deposit">
            <label class="title">１,０００円札</label>
            <div class="input_set"><p class="namae"><strong><?php echo $list[0][3];?></strong>枚</p></div>
        </div>
        <div class="deposit">
            <label class="title">５００円玉</label>
            <div class="input_set"><p class="namae"><strong><?php echo $list[0][4];?></strong>枚</p></div>
        </div>
        <div class="deposit">
            <label class="title">１００円玉</label>
            <div class="input_set"><p class="namae"><strong><?php echo $list[0][5];?></strong>枚</p></div>
        </div>
        <div class="deposit">
            <label class="title">５０円玉</label>
            <div class="input_set"><p class="namae"><strong><?php echo $list[0][6];?></strong>枚</p></div>
        </div>
        <div class="deposit">
            <label class="title">１０円玉</label>
            <div class="input_set"><p class="namae"><strong><?php echo $list[0][7];?></strong>枚</p></div>
        </div>   
    </form>

    <div id="btn_space"><a id="reset_btn" class="toTop_btn" href="./index.php">購入画面へ</a></div>
</body>
</html>