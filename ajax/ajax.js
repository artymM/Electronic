$(document).ready(function(){
    
    function ajax(){
        var prods = [];
    var added = "<button type=\"submit\" name=\"cart\" class=\"w3ls-cart\">В корзине</button>";
    
    //--- --- ---//
    
    if (localStorage.getItem('prods')){
        var prods = JSON.parse(localStorage.getItem('prods'));
        $('.simpleCart_quantity').html(prods.length);
    }else{
        $('.simpleCart_quantity').html(0);
    };
    
    if (localStorage.getItem('prods')){
        var cost = JSON.parse(localStorage.getItem('cost'));
        $('.simpleCart_total').html(cost + '  &#8381;')
    }else{
        var cost = 0;
        $('.simpleCart_total').html(cost + '  &#8381;');
    };
    
    //--- --- ---//
    
    $.each(prods, function(n, id){
        $('#'+id).replaceWith(added);
        
    });
    
    //--- --- ---//
    
$('.w3ls-cart').on("click",function(){
    if ($(this).attr('id')){
    prods.push($(this).attr('id'));
        
    cost = cost + parseInt( $(this).parent().parent().children('p').children('.item_price').html());
    };
    
    
    var id = $(this).attr('id');
    $('#'+id).replaceWith(added);
    localStorage.setItem('prods', JSON.stringify(prods));
    localStorage.setItem('cost', JSON.stringify(cost));
    $('.simpleCart_quantity').html(prods.length);
    $('.simpleCart_total').html(cost + '  &#8381;');
    
});
    };
    ajax();
$('.simpleCart_empty').click(function(){
    localStorage.clear();
    $('.simpleCart_quantity').html(0);
    $('.simpleCart_total').html(0 + '  &#8381;');
    location.reload();
});

    $('#country2').on("change",function(){
    $.ajax({
        url: "ajax/sort1.php",
        type: "POST",
        data: {option:$(this).val(), cat:$('#hid').val()},
        dataType: "html",
        success: function(result){
         $('.ttt').html(result);
            ajax();
        }
    });
});
    
$('#country1').on("change",function(){
    $.ajax({
        url: "ajax/sort.php",
        type: "POST",
        data: {option:$(this).val(), cat:$('#hid').val(), color:$('#hid1').val()},
        dataType: "html",
        success: function(result){
         $('.w3ls_mobiles_grid_right_grid3').html(result);
            ajax();
        }
    });
});
});