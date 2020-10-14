<?php

    require "../libs/DB.php";
    if ($_POST){
    $ids = $_POST['prods'];
        
		echo '<div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 col-600 ">

		<table class="table table-bordered table-inverse table-condensed">
  <thead>
    <tr>
      <th>Удалить</th>
      <th>Продукт</th>
      <th>Количество</th>
      <th>Наименование</th>
	   <th>Цена</th>
    </tr>
 </thead>' . '<tbody> </div> ';
  

		
		
 
        
    foreach ($ids as $id){
        $prod = R::load('products', $id);
		
		$tovar = R::dispense('zakzas');
            $tovar->image = $datacont['image'];
            $tovar->name = $datacont['name'];
		$tovar->name = $datacont['price'];
	
	if (isset($prod)){
	$tovar = R::dispense('zakzas');
            $tovar->image = $prod->image;
            $tovar->name = $prod->name;
		$tovar->price = $prod->price;
		R::store($tovar);
	};
    
?>    


	

        <tr id="<?php echo $prod->id; ?>">
						<td class="invert-closeb">
							<div class="rem">
								<div class="close1"> </div>
							</div>
						</td>
						<td class="invert-image"><a><img src="<?php echo $prod->image2; ?>" alt=" " class="img-responsive" /></a></td>
						<td class="invert">
							 <div class="quantity"> 
								<div class="quantity-select">                           
									<div class="entry value-minus">&nbsp;</div>
									<div class="entry value"><span class="prodcount">1</span></div>
									<div class="entry value-plus active">&nbsp;</div>
								</div>
							</div>
						</td>
						<td class="invert"><?php echo $prod->name; ?></td>
						<td class="invert cost" price="<?php echo $prod->price; ?>"><?php echo $prod->price; ?><span>&#8381;</span></td>
					
						
										
					</tr>
					
					
					
					
<?php } echo '</tbody>'; } ?>
</table>

    <div class="checkout-right-basket2">
	
<button type="submit" name="sub" class="btn btn-success">Оформить Заказ</button>

</div>


