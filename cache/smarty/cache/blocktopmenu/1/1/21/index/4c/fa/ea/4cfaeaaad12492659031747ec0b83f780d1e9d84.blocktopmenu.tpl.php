<?php /*%%SmartyHeaderCode:92655526e1c0778a20-40786748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cfaeaaad12492659031747ec0b83f780d1e9d84' => 
    array (
      0 => 'C:\\xampp\\htdocs\\claudiasaer\\themes\\default-bootstrap\\modules\\blocktopmenu\\blocktopmenu.tpl',
      1 => 1428700708,
      2 => 'file',
    ),
    '267fa05fe243ee4abdb3a2730d1fce13cd77ddca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\claudiasaer\\themes\\default-bootstrap\\modules\\blockcart\\blockcart.tpl',
      1 => 1428701441,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92655526e1c0778a20-40786748',
  'cache_lifetime' => 31536000,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55284103807994_57567484',
  'variables' => 
  array (
    'MENU' => 0,
    'MENU_SEARCH' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55284103807994_57567484')) {function content_55284103807994_57567484($_smarty_tpl) {?>	<!-- Menu -->
	<div id="block_top_menu" class="sf-contener clearfix col-lg-12">
		<div class="cat-title">Categorías</div>
		<ul class="sf-menu clearfix menu-content">
			<li><a href="http://localhost/claudiasaer" title="Home">Home</a></li>
<li><a href="http://localhost/claudiasaer/es/content/4-sobre-nosotros" title="Sobre nosotros">Sobre nosotros</a></li>
<li><a href="http://localhost/claudiasaer/es/" title="Shop">Shop</a><ul><li><a href="http://localhost/claudiasaer/es/3-mujer" title="Mujer">Mujer</a><ul><li><a href="http://localhost/claudiasaer/es/4-tops" title="Tops">Tops</a><ul><li><a href="http://localhost/claudiasaer/es/5-camisetas" title="Camisetas">Camisetas</a></li><li><a href="http://localhost/claudiasaer/es/7-blusas" title="Blusas">Blusas</a></li></ul></li><li><a href="http://localhost/claudiasaer/es/8-vestidos" title="Vestidos">Vestidos</a><ul><li><a href="http://localhost/claudiasaer/es/9-vestidos-informales" title="Vestidos informales">Vestidos informales</a></li><li><a href="http://localhost/claudiasaer/es/10-vestidos-noche" title="Vestidos de noche">Vestidos de noche</a></li><li><a href="http://localhost/claudiasaer/es/11-vestidos-verano" title="Vestidos de verano">Vestidos de verano</a></li></ul></li></ul></li></ul></li><li><a href="http://localhost/claudiasaer/es/contactanos" title="Contacto">Contacto</a></li>
<li><a href="#" title="Eventos">Eventos</a></li>

			<!-- MODULE Block cart -->
	<div class="shopping_cart">
		<a href="http://localhost/claudiasaer/es/" title="Ver mi carrito de compra" rel="nofollow">
			<b>Carrito:</b>
			<span class="ajax_cart_quantity">2</span>
			<span class="ajax_cart_product_txt unvisible">producto</span>
			<span class="ajax_cart_product_txt_s">Productos</span>
			<span class="ajax_cart_total">
																					$79.97
												</span>
			<span class="ajax_cart_no_product unvisible">vacío</span>
					</a>
					<div class="cart_block block exclusive">
				<div class="block_content">
					<!-- block list of products -->
					<div class="cart_block_list">
												<p class="cart_block_no_products">
							Ningún producto
						</p>
												<div class="cart-prices">
							<div class="cart-prices-line first-line">
								<span class="price cart_block_shipping_cost ajax_cart_shipping_cost unvisible">
																			 A determinar																	</span>
								<span class="unvisible">
									Transporte
								</span>
							</div>
																					<div class="cart-prices-line last-line">
								<span class="price cart_block_total ajax_block_cart_total"></span>
								<span>Total</span>
							</div>
													</div>
						<p class="cart-buttons">
							<a id="button_order_cart" class="btn btn-default button button-small" href="http://localhost/claudiasaer/es/" title="Confirmar" rel="nofollow">
								<span>
									Confirmar<i class="icon-chevron-right right"></i>
								</span>
							</a>
						</p>
					</div>
				</div>
			</div><!-- .cart_block -->
			</div>

	<div id="layer_cart">
		<div class="clearfix">
			<div class="layer_cart_product col-xs-12 col-md-6">
				<span class="cross" title="Cerrar Ventana"></span>
				<h2>
					<i class="icon-check"></i>Producto añadido correctamente a su carrito de la compra
				</h2>
				<div class="product-image-container layer_cart_img">
				</div>
				<div class="layer_cart_product_info">
					<span id="layer_cart_product_title" class="product-name"></span>
					<span id="layer_cart_product_attributes"></span>
					<div>
						<strong class="dark">Cantidad</strong>
						<span id="layer_cart_product_quantity"></span>
					</div>
					<div>
						<strong class="dark">Total</strong>
						<span id="layer_cart_product_price"></span>
					</div>
				</div>
			</div>
			<div class="layer_cart_cart col-xs-12 col-md-6">
				<h2>
					<!-- Plural Case [both cases are needed because page may be updated in Javascript] -->
					<span class="ajax_cart_product_txt_s ">
						Hay <span class="ajax_cart_quantity">2</span> artículos en su carrito.
					</span>
					<!-- Singular Case [both cases are needed because page may be updated in Javascript] -->
					<span class="ajax_cart_product_txt  unvisible">
						Hay 1 artículo en su cesta.
					</span>
				</h2>

				<div class="layer_cart_row">
					<strong class="dark">
						Total productos:
											</strong>
					<span class="ajax_block_products_total">
													$79.97
											</span>
				</div>

								<div class="layer_cart_row">
					<strong class="dark unvisible">
						Total envío:&nbsp;					</strong>
					<span class="ajax_cart_shipping_cost unvisible">
													 A determinar											</span>
				</div>
								<div class="layer_cart_row">
					<strong class="dark">
						Total
											</strong>
					<span class="ajax_block_cart_total">
																					$81.97
																		</span>
				</div>
				<div class="button-container">
					<span class="continue btn btn-default button exclusive-medium" title="Continuar la compra">
						<span>
							<i class="icon-chevron-left left"></i>Continuar la compra
						</span>
					</span>
					<a class="btn btn-default button button-medium"	href="http://localhost/claudiasaer/es/" title="Ir a la caja" rel="nofollow">
						<span>
							Ir a la caja<i class="icon-chevron-right right"></i>
						</span>
					</a>
				</div>
			</div>
		</div>
		<div class="crossseling"></div>
	</div> <!-- #layer_cart -->
	<div class="layer_cart_overlay"></div>

<!-- /MODULE Block cart -->

							<li class="sf-search noBack" style="float:right">
					<form id="searchbox" action="http://localhost/claudiasaer/es/buscar" method="get">
						<p>
							<input type="hidden" name="controller" value="search" />
							<input type="hidden" value="position" name="orderby"/>
							<input type="hidden" value="desc" name="orderway"/>
							<input type="text" name="search_query" value="" />
						</p>
					</form>
				</li>
					</ul>
	</div>
	<!--/ Menu -->
<?php }} ?>
