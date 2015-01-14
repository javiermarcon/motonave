<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
    <?php include_javascripts() ?>

	<title><?php if (!include_slot('titulo_pagina')): ?>Importmol - Indumentaria, cascos y accesorios para motos.<?php endif; ?></title>

	<script type="text/javascript">
		Shadowbox.init({
    		handleOversize: "drag",
    		modal: true,
			slideshowDelay: "3"
		});
		

$(document).ready(function(){
    
	// first example
	    $("#browser").treeview();
		
		    // second example
			$("#navigation").treeview({
				persist: "location",
					collapsed: true,
						unique: true
						    });
							
							    // third example
								$("#red").treeview({
									animated: "fast",
										collapsed: true,
											unique: true,
												persist: "cookie",
													toggle: function() {
														    window.console && console.log("%o was toggled", this);
															    }
																});
																    
																	// fourth example
																	    $("#black, #gray").treeview({
																		    control: "#treecontrol",
																			    persist: "cookie",
																				    cookieId: "treeview-black"
																					});
																					
																					});

		
	</script>

</head>

<body>
    <div id="contenedor">

    <div id="sliders">
	<div id="slider1" class="sliderwrapper">
		<div style="display: none; z-index: 17; opacity: 1; visibility: visible;" class="contentdiv">
			<img src="/images/imag11.jpg" height="182" width="960" border="0" />
		</div>
		<div style="display: none; z-index: 18; opacity: 1; visibility: visible;" class="contentdiv">
			<img src="/images/imag22.jpg" height="182" width="960" border="0" />
		</div>
		<div style="display: none; z-index: 19; opacity: 1; visibility: visible;" class="contentdiv">
			<img src="/images/imag33.jpg" height="182" width="960" border="0" />
		</div>
	</div>
		<div id="paginate-slider1" class="pagination">
			<a href="#prev" class="prev">&lt;</a>
			<a rel="1" href="#1" class="toc">1</a>
			<a rel="2" href="#2" class="toc">2</a>
			<a rel="3" href="#3" class="toc">3</a>
			<a rel="4" href="#4" class="toc selected">4</a>
			<a rel="5" href="#5" class="toc">5</a>
			<a rel="6" href="#6" class="toc">6</a>
			<a rel="7" href="#7" class="toc">7</a>
			<a rel="8" href="#8" class="toc">8</a>
			<a href="#next" class="next">&gt;</a>
		</div>
    </div>
    <script type="text/javascript">

    featuredcontentslider.init({
	    id: "slider1",  //id of main slider DIV
	    contentsource: ["inline", ""],  //Valid values: ["inline", ""] or ["ajax", "path_to_file"]
	    toc: "#increment",  //Valid values: "#increment", "markup", ["label1", "label2", etc]
	    nextprev: ["<", ">"],  //labels for "prev" and "next" links. Set to "" to hide.
	    revealtype: "click", //Behavior of pagination links to reveal the slides: "click" or "mouseover"
	    enablefade: [true, 0.02],  //[true/false, fadedegree]
	    autorotate: [true, 5000],  //[true/false, pausetime]
	    onChange: function(previndex, curindex){  //event handler fired whenever script changes slide
		    //previndex holds index of last slide viewed b4 current (1=1st slide, 2nd=2nd etc)
		    //curindex holds index of currently shown slide (1=1st slide, 2nd=2nd etc)
	    }
    })
    </script>
    <div id="cuerpo">
<div id="cuerpo-left">
<div id="cuerpo-left-empresa"></div>
<div id="cuerpo-left-empresa-interior">
<ul>
<li><span class="verde">»</span> <?php echo link_to('Inicio', '@homepage') ?></li>
<?php if ($sf_user->isAuthenticated()): ?>
	<li><span class="verde">»</span> <?php echo link_to('Contacto', '@contacto') ?></li>
	<li><span class="verde">»</span> <?php echo link_to('Salir', '@sf_guard_signout') ?></li>
<?php else: ?>
	<li><span class="verde">»</span> <?php echo link_to('Registrarse', '@user_registro') ?></li>
	<li><span class="verde">»</span> <?php echo link_to('Recordar Contraseña', '@sf_guard_forgot_password') ?></li>
<?php endif ?>
<!-- <li><span class="verde">»</span> <a href="" title="Catalogo">Catalogo</a></li>-->
<!-- <li><span class="verde">»</span> <a href="" title="Contacto">Contacto</a></li>-->
</ul>
</div>
<div id="cuerpo-left-tipo-moto"></div>
<div id="cuerpo-left-tipo-moto-interior">
	<?php include_component('listacategorias', 'listacategorias') ?>
</div>
<div id="cuerpo-left-inf"></div></div>
<div id="cuerpo-right">
<div id="cuerpo-right-interno">
<div id="cuerpo-right-interno-superior">
    <marquee class="marquesina">Motonave iMportMol S.A. Importaci&oacute;n y distribuci&oacute;n a todo el pais en cascos, accesorios e 
        indumentaria para Motocross, alta velocidad o pista y custom.
    </marquee>
</div><div id="cuerpo-right-interno-completo">

<div id="productos">
<div id="productos-sup"></div>
<div id="productos-medio">
<div id="productos-interno">
    <?php echo $sf_content ?>
</div>
</div>
<div id="productos-inf"></div>
</div>
</div>
</div>
</div>
</div>
<div id="pie">
© 2011 Motonave ImportMol S.A. | Tel&eacute;fono: 0054 - 011 - 4747 - 0620 | mail: contacto@importmol.com
</div>
</div>
<div id="sb-container">
	<div id="sb-overlay"></div>
	<div id="sb-wrapper">
		<div id="sb-title">
			<div id="sb-title-inner"></div>
		</div>
		<div id="sb-wrapper-inner">
			<div id="sb-body">
				<div id="sb-body-inner"></div>
				<div id="sb-loading">
					<div id="sb-loading-inner">
						<span>Cargando</span></div>
				</div>
			</div>
		</div>
		<div id="sb-info">
			<div id="sb-info-inner">
				<div id="sb-counter"></div>
				<div id="sb-nav">
					<a id="sb-nav-close" title="Cerrar" onclick="Shadowbox.close()"></a>
					<a id="sb-nav-next" title="Siguiente" onclick="Shadowbox.next()"></a>
					<a id="sb-nav-play" title="Reproducir" onclick="Shadowbox.play()"></a>
					<a id="sb-nav-pause" title="Pausa" onclick="Shadowbox.pause()"></a>
					<a id="sb-nav-previous" title="Anterior" onclick="Shadowbox.previous()"></a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>