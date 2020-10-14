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
        $('.simpleCart_total').html(cost + '  &#8381;');
    }else{
        $('.simpleCart_total').html( 0 + '  &#8381;');
    };
    
    if (localStorage.getItem('ordcost')){
    if (document.location.pathname == '/checkout.php'){
        localStorage.setItem('cost', localStorage.getItem('ordcost'));
        $('.simpleCart_total').html(localStorage.getItem('ordcost') + '  &#8381;');
    };
    };
    
    $('.simpleCart_empty').click(function(){
    localStorage.clear();
    $('.simpleCart_quantity').html(0);
    $('.simpleCart_total').html(0 + '  &#8381;');
    location.reload();
});
    
    var newcost = parseInt(localStorage.getItem('cost'));
    //=== === ===//
    
$.ajax({
    url: "scripts/cartprods.php",
    type: "POST",
    data: {prods:prods},
    dataType: "html",
    success: function(result){
        if (result){
            $('.timetable_sub').html(result);
            $('.checkout-left').append(order);
            $('.checkout').find('h3').html('Корзина');
            values();
            delprod();
            letsorder();
        }else{
            $('.checkout').find('h3').html('Корзина пуста!');
        };
    }
 }); 
    
    
    
    function values(){
$('.value-plus').click(function(){
    var count = $(this).parent().find('.prodcount').html();
    count++;
    $(this).parent().find('.prodcount').html(count);
    
    newcost = newcost + parseInt($(this).parents().children('.cost').attr('price'));
    $('.simpleCart_total').html(newcost + '  &#8381;');
});
  
$('.value-minus').click(function(){
    var count = $(this).parent().find('.prodcount').html();
    if (count > 1){ count--; newcost = newcost - parseInt($(this).parents().children('.cost').attr('price')); };
    $(this).parent().find('.prodcount').html(count);
    
     
    $('.simpleCart_total').html(newcost + '  &#8381;');
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
            if ( $('#session').html() ){
                location.replace("order.php");
                
                var prodcounts = [];
                $.each($('.prodcount'), function(){ prodcounts.push( $(this).html() ) } );
                localStorage.setItem('counts', JSON.stringify(prodcounts));
                localStorage.setItem('ordcost', localStorage.getItem('cost'));
                localStorage.setItem('cost', newcost);
            }else{ alert('Пожалуйста, войдите в свой профиль или зарегистрируйтесь!') }
        });
    };
});