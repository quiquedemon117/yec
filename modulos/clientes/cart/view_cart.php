<?php
session_start(); //start session
include("config.inc.php");
setlocale(LC_MONETARY,"en_US"); // US national format (see : http://php.net/money_format)
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Tienda de cursos</title>
<link href="../cart/style/cart.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="../../../images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="../../../sweetalert/sweetalert.css">
<link rel="stylesheet" type="text/css" href="../../../asset/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../../../asset/css/bootstrap-theme.css">
<link rel="stylesheet" href="../../../css/font-awesome.css">
<style type="text/css">
a:hover{text-decoration:none;}
a{text-decoration:none;}
</style>
<script type="text/javascript" src="../../../sweetalert/sweetalert.min.js"></script>
<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="../../../asset/js/bootstrap.js"></script>
</head>
<body>
<center><br><img src='../../../images/logo.png' alt='' width='20%'></center>
<h3 style="text-align:center">Resumen de compra</h3>
<?php
if(isset($_SESSION["products"]) && count($_SESSION["products"])>0){
	$total 			= 0;
	$list_tax 		= '';
	$cart_box 		= '<ul class="view-cart">';

	foreach($_SESSION["products"] as $product){ //Print each item, quantity and price.
		$product_name = $product["product_name"];
		$product_qty = $product["product_qty"];
		$product_price = $product["product_price"];
		$product_code = $product["product_code"];
		$product_color = $product["product_color"];
		$product_size = $product["product_size"];
		
		$item_price 	= sprintf("%01.2f",($product_price * $product_qty));  // price x qty = total item price
		
		$cart_box 		.=  "<li>$product_code &ndash;  $product_name (Qty : $product_qty | $product_color | $product_size) <span> $ . $item_price </span></li>";
		
		$subtotal 		= ($product_price * $product_qty); //Multiply item quantity * price
		$total 			= ($total + $subtotal); //Add up to total price
	}
	
	
	$shipping_cost = ($total * 0.16);
	$grand_total = $total + $shipping_cost; //grand total


	foreach($taxes as $key => $value){ //list and calculate all taxes in array
			$tax_amount 	= round($total * ($value / 100));
			$tax_item[$key] = $tax_amount;
			$grand_total 	= $grand_total; 
	}
	
	foreach($tax_item as $key => $value){ //taxes List
		$list_tax .= $key. ' $'. sprintf("%01.2f", $value).'<br />';
	}
	
	$shipping_cost = ($shipping_cost)?'IVA : $'. sprintf("%01.2f", $shipping_cost).'<br />':'';
	
	//Print Shipping, VAT and Total
	$cart_box .= "<li class=\"view-cart-total\">Subtotal: $total <br>  $shipping_cost <hr>Total a pagar : $ ".sprintf("%01.2f", $grand_total)."<br><br><form action='https://www.paypal.com/mx/cgi-bin/webscr' method='post'><input type='hidden' name='cmd' value='_xclick'><input type='hidden' name='business' value='ing_lebd@hotmail.com'><input type='hidden' name='item_name' value='Cursos'><input type='hidden' name='currency_code' value='MXN'><input type='hidden' name='amount' value='{$grand_total}'><input type='image' src='images/paypal.png' name='submit' alt='Make payments with PayPal - it's fast, free and secure!' width='30%'>
</form></li>";
	$cart_box .= "</ul>";
	
	
	echo $cart_box;

}else{
	echo "El carrito esta vacio";
}
?>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</body>
</html>

