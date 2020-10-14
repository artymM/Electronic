$(document).ready(function(){
    
    $('#ord_button').click(function(){
        
        var cost = localStorage.getItem('cost');
        var prods = JSON.parse( localStorage.getItem('prods') );
        var counts = JSON.parse( localStorage.getItem('counts') );
        var ord_name = $('#ord_name').val();
        var ord_phone = $('#ord_phone').val();
        var ord_addr = $('#ord_addr').val();
		var country1 = $('#country1').val();
		var country2 = $('#country2').val();
        
        $.ajax({
        url: "ajax/ordering.php",
        type: "POST",
        data: {
                ord_name:ord_name,
                ord_phone:ord_phone,
                ord_addr:ord_addr,
                cost, prods, counts,country1,country2
                },
        dataType: "html",
        success: function(result){
            alert(result);
            location.replace("index.php");
            localStorage.clear();
        }
        
    });
	

});
});