$(document).ready(function(){
    
    var prods = [];
        var order = '<div class="checkout-right-basket2 animated wow slideInRight" data-wow-delay=".5s">' + '<a href="#">Оформить заказ</a>' + '</div>';
    if (localStorage.getItem('prods')){
        var prods = JSON.parse(localStorage.getItem('prods'));
        $('.simpleCart_quantity').html(prods.length);
    }else{
        $('.simpleCart_quantity').html(0);
    };
    
    if (localStorage.getItem('cost')){
        var cost = JSON.parse(localStorage.getItem('cost'));
        $('.simpleCart_total').html(cost + '  &#8381;')
    }else{
        var cost = 0;
        $('.simpleCart_total').html(cost + '  &#8381;');
    };
    
    $('.simpleCart_empty').click(function(){
    localStorage.clear();
    $('.simpleCart_quantity').html(0);
    $('.simpleCart_total').html(0 + '  &#8381;');
    location.reload();
});

    //=== === ===//
    
    
    
    $.ajax({
        url: "ajax/corzina.php",
        type: "POST",
        data: {prods:prods},
        dataType: "html",
        success: function(result){
            if (result){
            $('.mail').find('.container').html(result);
			        $('.checkout-left').append(order);
            $('.mail').append('<h3 class="itogo">Итого: ' + localStorage.getItem('cost') + '  &#8381;</h3>');
            }else{
                $('.mail').find('h3').html('Корзина пуста!');
            };
            values();
            delprod();
			  letsorder();
        counts_func();
        }
    });
    
    
    function values(){
$('.value-plus').click(function(){
    var count = $(this).parent().find('.value').children().html();
    count++;
    $(this).parent().find('.value').children().html(count);
});
  
$('.value-minus').click(function(){
    var count = $(this).parent().find('.value').children().html();
    if (count > 1){ count-- };
    $(this).parent().find('.value').children().html(count);
});
      
  };
    
    
    function delprod(){
        $('.close1').click(function(){
            var prodid = $(this).parents('tr').attr('id');
            var lS = JSON.parse(localStorage.getItem('prods'));
            lS.splice($.inArray(prodid,lS), 1);
            localStorage.setItem('prods', JSON.stringify(lS));
            $(this).parents('tr').remove();
            
            var price = parseInt($(this).parents().find('.cost').html());
            var lSprice = parseInt(localStorage.getItem('cost'));
            localStorage.setItem('cost', lSprice - price);
            if (localStorage.getItem('cost') == 0){localStorage.clear(); location.reload()};
            $('.itogo').html('Итого: ' + localStorage.getItem('cost') + '  &#8381;');
        });
    };
    
 
    
    
    function counts_func(){
        $('.checkout-right-basket2').click( function(){
            var prodcounts = [];
            $.each($('.prodcount'), function(){ prodcounts.push( $(this).html() ) } );
            localStorage.setItem('counts', JSON.stringify(prodcounts));
        } );
    }
});