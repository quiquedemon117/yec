<?php
session_start(); //start session
include("config.inc.php"); //include config file
require('../../usuarios/sesion.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tienda de cursos</title>
<link rel="shortcut icon" href="../../images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="../../../sweetalert/sweetalert.css">
<link rel="stylesheet" type="text/css" href="../../../asset/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../../../asset/css/bootstrap-theme.css">
<link href="../cart/style/cart.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../../../css/style.css">
<link rel="stylesheet" type="text/css" href="../../../css/color/light-red.css">
<link rel="stylesheet" type="text/css" href="../../../css/responsive.css">
<link rel="stylesheet" type="text/css" href="../../../css/font-awesome.css">
<style type="text/css">
a:hover{text-decoration:none;}
a{text-decoration:none;}
</style>
<script type="text/javascript" src="../../../sweetalert/sweetalert.min.js"></script>
<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="../../../asset/js/bootstrap.js"></script>
<script>
$(document).ready(function(){	
		$(".form-item").submit(function(e){
			var form_data = $(this).serialize();
			var button_content = $(this).find('button[type=submit]');
			button_content.html('Agregando al carrito...'); //Loading button text 

			$.ajax({ //make ajax request to cart_process.php
				url: "cart_process.php",
				type: "POST",
				dataType:"json", //expect json value from server
				data: form_data
			}).done(function(data){ //on Ajax success
				$("#cart-info").html(data.items); //total items in cart-info element
				button_content.html('Agregar al carrito'); //reset button text to original text
				swal(  'Felicidades!', '¡El curso se agrego al carrito!', 'success'); //alert user
				if($(".shopping-cart-box").css("display") == "block"){ //if cart box is still visible
					$(".cart-box").trigger( "click" ); //trigger click to update the cart box.
				}
			})
			e.preventDefault();
		});

	//Show Items in Cart
	$( ".cart-box").click(function(e) { //when user clicks on cart box
		e.preventDefault(); 
		$(".shopping-cart-box").fadeIn(); //display cart box
		$("#shopping-cart-results").html('<img src="images/ajax-loader.gif">'); //show loading image
		$("#shopping-cart-results" ).load( "cart_process.php", {"load_cart":"1"}); //Make ajax request using jQuery Load() & update results
	});
	
	//Close Cart
	$( ".close-shopping-cart-box").click(function(e){ //user click on cart box close link
		e.preventDefault(); 
		$(".shopping-cart-box").fadeOut(); //close cart-box
	});
	
	//Remove items from cart
	$("#shopping-cart-results").on('click', 'a.remove-item', function(e) {
		e.preventDefault(); 
		var pcode = $(this).attr("data-code"); //get product code
		$(this).parent().fadeOut(); //remove item element from box
		$.getJSON( "cart_process.php", {"remove_code":pcode} , function(data){ //get Item count from Server
			$("#cart-info").html(data.items); //update Item count in cart-info
			$(".cart-box").trigger( "click" ); //trigger click on cart-box to update the items list
		});
	});

});
</script>
</head>
<body>
	<div class="container">
		<div class="row">
<div align="center">
<a href="../../clientes/clientes.php"><img src="../../../images/logo.png" width="35%"></a><br>
<h1>Cursos a la venta</h1>
</div>

<a href="#" class="cart-box" id="cart-info" title="Ver carrito de compras">
<?php 
if(isset($_SESSION["products"])){
	echo count($_SESSION["products"]); 
}else{
	echo 0; 
}
?>
</a>

<div class="shopping-cart-box">
<a href="#" class="close-shopping-cart-box" >Cerrar</a>
<h3>Tu carrito de la compra</h3>
    <div id="shopping-cart-results">
    </div>
</div>

<?php
//List products from database
$results = $mysqli_conn->query("SELECT product_name, product_desc, product_code, product_image, product_price FROM cursos");
//Display fetched records as you please

$cursos =  '<ul class="products-wrp">';

while($row = $results->fetch_assoc()) {
$product_desc = $row["product_desc"];
$descuento = $row["product_price"];
$preciof = 0.5*$row["product_price"];
$cursos .= <<<EOT
<li>
<form class="form-item">
<h4>{$row["product_name"]}</h4>
<div><img src="images/{$row["product_image"]}"></div>
<p class='precio-original'>$<del>{$descuento}</del></p>
<h3>$ {$preciof}</h3><span class='success'>50% OFF</span>
<div class="item-box">
    <div class="form-group hide">
	<label>Color :</label>
    <select class="form-control" name="product_color">
    <option value="Red">Red</option>
    <option value="Blue">Blue</option>
    <option value="Orange">Orange</option>
    </select>
	</div>

        <div class="form-group hide">
    <label>Descripción :</label>
        <input type="text" name="product_desc" value="{$product_desc}">
    </div>
	
	<div class="form-group hide">
    <label>Qty :</label>
    <select class="form-control" name="product_qty">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    </select>
	</div>
	
	<div class="form-group hide">
    <label>Size :</label>
    <select class="form-control" name="product_size">
	<option value="M">M</option>
    <option value="XL">XL</option>
    <option value="XXL">XLL</option>
    </select>
	</div>
	
    <input name="product_code" type="hidden" value="{$row["product_code"]}">
    <center>
    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="business" value="cristi_escalona@hotmail.com">
<input type="hidden" name="lc" value="AL">
<input type="hidden" name="item_name" value="CANSADA Y EN PIE DE GUERRA">
<input type="hidden" name="item_number" value="{$row["product_code"]}">
<input type="hidden" name="amount" value="150.00">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="button_subtype" value="products">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="add" value="1">
<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">
<button type="submit" name="submit" class="producto btn" precio="{$row["product_price"]}" role="button">Agregar al carrito</button>
</form>
    </center>
</div>
</form>
</li>
EOT;

}
$cursos .= '</ul></div>';

echo $cursos;
?>
<div class="container text-center">
    <br>
    <span class="label label-success">Los precios son en Dolares Americanos <span class="badge">(USD)</span></span>
</div>
</div>
</div>
        <footer class="style-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <span class="copyright h3">Contactanos</span><br>
                        <i class="fa fa-phone-square copyright" aria-hidden="true" style="font-size: 100%;"></i>
                        <span class="copyright h5">984-153-4811</span>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="footer-social text-center">
                        	<span class="copyright h3">Formas de pago</span><br><br>
                            <ul>
                                <li><a href="#" title="Paypal"><i class="fa fa-paypal"></i></a></li>
                                <li><a href="#" title="Visa"><i class="fa fa-cc-visa"></i></a></li>
                                <li><a href="#" title="Mastercard"><i class="fa fa-cc-mastercard"></i></a></li>
                                <li><a href="#" title="American Express"><i class="fa fa-cc-amex"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="footer-link text-center">
                        	<span class="copyright h3">Ligas adicionales</span><br>
                            <ul >
                                <li><a href="#">Política de privacidad</a><br>
                                </li>
                                <li><a href="#">Terminos de uso</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

</body>
</html>