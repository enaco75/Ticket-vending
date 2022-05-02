//class="deposit"の[0]=10円玉、[1]=50円玉、[2]=100円玉、[3]=500円玉、[4]=1000円札、[5]=5000円札、[6]=10000円札

// 投入金額の合計を自動計算してくれます
console.log($(".deposit").length);
$('.input_deposit').on('change keyup',function(){ 
    let amount_array = [];
    for(let i = 0; i < $(".deposit").length; i++){
        let money_type = $(".title").eq(i).data("money");
        console.log(money_type);
        let select_num = $(".input_deposit").eq(i).val();
        console.log(select_num);
        amount_array.push(money_type * select_num);
        console.log(amount_array);
    }
    
    let total = 0;
    for(let j = 0; j < amount_array.length; j++){
        total += amount_array[j];
    }
    console.log(total);
    $("#payment_amount").val(total);
    
});