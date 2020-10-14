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
        $('.simpleCart_total').html( 0 + '  &#8381;');
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

          $('.mail').append('<h3 class="h3_itogo" >Итого: ' + localStorage.getItem('cost') + '  &#8381;</h3>');
            }else{
                $('.h3_itogo').find('h3_itogo').html('Корзина пуста!');
        };
        values();
        delprod();
        letsorder();
        counts_func();
    }
 }); 
    
    
    
    function values(){
$('.value-plus').click(function(){
    var count = $(this).parent().find('.prodcount').html();
    count++;
    $(this).parent().find('.prodcount').html(count);
});
  
$('.value-minus').click(function(){
    var count = $(this).parent().find('.prodcount').html();
    if (count > 1){ count-- };
    $(this).parent().find('.prodcount').html(count);
});
      
  };
    
    
    function delprod(){
        $('.close1').click(function(){
            var prodid = $(this).parents('tr').attr('id');
            var lS = JSON.parse(localStorage.getItem('prods'));
            lS.splice($.inArray(prodid,lS), 1);
            localStorage.setItem('prods', JSON.stringify(lS));
            
            var price = parseInt($(this).parents('tr').children('.cost').html());
            var lSprice = parseInt(localStorage.getItem('cost'));
            localStorage.setItem('cost', lSprice - price);
            if (localStorage.getItem('cost') == 0){localStorage.clear(); location.reload()};
            
            $(this).parents('tr').fadeOut(500, function(){ $(this).remove(); });
            if (localStorage.getItem('prods') || localStorage.getItem('cost')){
                $('.simpleCart_quantity').html(JSON.parse(localStorage.getItem('prods')).length);
                $('.simpleCart_total').html(localStorage.getItem('cost'));
            }else {
                $('.simpleCart_quantity').html(0);
                $('.simpleCart_total').html( 0 + '  &#8381;');
            };
        });
    };
    
    function letsorder(){
        $('.checkout-right-basket2').click( function(){
            if ( sessionStorage.getItem('auth') ){
                location.replace("zak.php");
            }else{ alert('Пожалуйста, войдите в свой профиль или зарегистрируйтесь!') }
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