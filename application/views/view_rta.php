<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="<?= base_url(); ?>jquery.mobile/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>jquery.mobile/jquery.mobile.icons-1.4.5.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>jquery.mobile/jquery.mobile.structure-1.4.5.min.css">

	<script type="text/javascript" src="<?= base_url(); ?>jquery.mobile/jquery.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>jquery.mobile/jquery.mobile-1.4.5.js"></script>

</head>
<body>
	<div data-role="page" id="rta">
		<div data-role="header">
			<a href="index.php" data-icon="home">Inicio</a>
			<h1> <img src="<?= base_url(); ?>images/leon.png" width="15%"> </h1>
			<a href="#" data-icon="grid">Login</a>

			<nav data-role="navbar">
				<ul>
					<li><a href="#page2">acerca</a></li>
					<li><a href="#">Productos</a></li>
					<li><a href="#">Sucursales</a></li>
					<li><a href="#">Contacto</a></li>
					</ul>
			</nav>
		</div>
		<div data-role="main">
			<!--center>
				<h1>BEBIDAS</h1>
			</center -->
			<!--div class="ui-grid-c">
				<div class="ui-block-a">
					<center>
						<h2>IMAGEN BEBIDA</h2>
					<div class="ui-bar ui-bar-a" style="height:100px">
						Agua Cristal potable tratada x 3.125L
						<div class="text-center">
							<img src="<?= base_url(); ?>images/aguacristalpotabletratadax3.125l.png" width="30%">
						</div>
					</div>
					</center>
				</div>
				<div class="ui-block-b">
					<center>
						<h2>PRECIO</h2>
					<div class="ui-bar ui-bar-a" style="height:100px">
						<br><br>$2000
					</div>
					</center>
				</div>
				<div class="ui-block-c">
					<center>
						<h2>CANTIDAD</h2>
					<div class="ui-bar ui-bar-a" style="height:100px">
						<input type="text" name="cantidad" style="text-align:center" placeholder="Cantidad">
						<button type="submit" name="button" style="width:30%">VALOR</button>
					</div>
					</center>
				</div>
				<div class="ui-block-d">
					<center>
						<h2>VALOR</h2>
					<div class="ui-bar ui-bar-a" style="height:100px">
						
					</div>
					</center>
				</div>
			</div --><!-- /grid-c -->
			<ul data-role="listview" data-filter="true" 
				data-filter-placeholder="Buscar..."
				data-filter-reveal="false"
				
				data-inset="true">
				
				<li data-role="list-divider">AGUA</li>
				<li data-icon="delete">
					<a href="#" target="_blank">
						<img src="<?= base_url(); ?>images/aguacristalpotabletratadax3.125l.png" alt="">
						<!--img src="<?= base_url(); ?>jquery.mobile/demos/_assets/img/de.png" alt="Francia" 
						class="ui-li-icon ui-corner-none"--> Agua Cristal <span class="ui-li-count">0</span>
						<h2>Agua Cristal potable tratada x 3.125L</h2>
						<p></p>
					</a>
					<a href="#compra" data-rel="popup" data-position="pop">carr</a>
				</li>
			</ul>
			<div data-role="popup" id="compra" data-theme="a" class="iu-content" style="max-width:340px; padding-bottom:2em;">
				<h3>Articulo de compra</h3>
				<p>Este articulo contiene las cosas necesarias para que lo compre</p>
				<a href="" data-rel="back" class="ui-shadow ui-btn ui-corner-all ui-btn-b ui-icon-check ui-icon-left ui-btn-inline ui-mini">
					compra: $2.000 COP c/u
				</a>
				<a href="" data-rel="back" class="ui-shadow ui-btn ui-corner-all ui-byn-inline ui-mini">
					Cancelar
				</a>
			</div>
		</div>	
		<div data-role="footer">
		</div>
	</div>
</body>
</html>