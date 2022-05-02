$(function(){
    let bill = [10, 50, 100, 500, 1000, 5000, 10000];
    var DoSum = function(self){
        var GROUP = self.data('group');
        var SUM = 0;
        
        $("[data-group='"+ GROUP +"']").each(function(index){
            SUM = SUM + (Number($(this).val()) * bill[index]);
        });
    
        $("#Sum" + GROUP).val(SUM);
    };

    $('[data-group]').change(function(){
        DoSum($(this));
    });
});