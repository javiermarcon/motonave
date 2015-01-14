<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>

	<title></title>

	<script src="css/swfobject_modified.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/contentslider.js"></script>
	
	<link rel="stylesheet" type="text/css" href="css/shadowbox.css">
	<script type="text/javascript" src="js/shadowbox.js"></script>
	<script type="text/javascript">
		Shadowbox.init({
    		handleOversize: "drag",
    		modal: true,
			slideshowDelay: "3"
		});
	</script>
	<link href="css/global.css" rel="stylesheet" type="text/css">
	<link href="css/contentslider.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="js/bsn.js"></script>
	<script type="text/javascript">
		function MM_preloadImages() { //v3.0
  			var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
			var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
			if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
		}

		function MM_swapImgRestore() { //v3.0
		  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
		}

		function MM_findObj(n, d) { //v4.01
		  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
			d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
		  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
		  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
		  if(!x && d.getElementById) x=d.getElementById(n); return x;
		}

		function MM_swapImage() { //v3.0
		  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
		   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
		}
	</script>
</head>

<body onload="MM_preloadImages('images/1-logo-o.png','images/2-eventos-o.png','images/3-servicios-o.png','images/4-sucursales-o.png','images/5-marcas-o.png','images/6-modelos-o.png','images/7-contacto-o.png')">

    <?php echo $sf_content ?>
    
    <div id="menu">
	<a href="">
		<img src="images/1-logo.png" title="MOTOR DOS" name="inicio" id="inicio" onmouseover="MM_swapImage('inicio','','comunes/botones/1-logo-o.png',1)" onmouseout="MM_swapImgRestore()" height="52" width="371" border="0">
	</a> 
	<a href="">
		<img src="images/2-eventos.png" title="MOTOR DOS EVENTOS" name="eventos" id="eventos" onmouseover="MM_swapImage('eventos','','comunes/botones/2-eventos-o.png',1)" onmouseout="MM_swapImgRestore()" height="52" width="121" border="0">
	</a> 
	<a href="">
	    <img src="images/3-servicios.png" title="MOTOR DOS SERVICIOS" name="servicios" id="servicios" onmouseover="MM_swapImage('servicios','','comunes/botones/3-servicios-o.png',1)" onmouseout="MM_swapImgRestore()" height="52" width="94" border="0">
	</a> 
	<a href="">
	    <img src="images/4-sucursales.png" title="MOTOR DOS SUCURSALES" name="sucursales" id="sucursales" onmouseover="MM_swapImage('sucursales','','comunes/botones/4-sucursales-o.png',1)" onmouseout="MM_swapImgRestore()" height="52" width="108" border="0">
	</a> 
	<a href="">
	    <img src="images/5-marcas.png" title="MOTOR DOS MARCAS" name="marcas" id="marcas" onmouseover="MM_swapImage('marcas','','comunes/botones/5-marcas-o.png',1)" onmouseout="MM_swapImgRestore()" height="52" width="82" border="0">
	</a> 
	<a href="">
	    <img src="images/6-modelos.png" title="MOTOR DOS MODELOS" name="modelos" id="modelos" onmouseover="MM_swapImage('modelos','','comunes/botones/6-modelos-o.png',1)" onmouseout="MM_swapImgRestore()" height="52" width="89" border="0">
	</a> 
	<a href="">
	    <img src="images/7-contacto.png" title="MOTOR DOS CONTACTO" name="contacto" id="contacto" onmouseover="MM_swapImage('contacto','','comunes/botones/7-contacto-o.png',1)" onmouseout="MM_swapImgRestore()" height="52" width="95" border="0">
	</a> 
    </div>
    <div id="contenedor">

    <div id="sliders">
	<div id="slider1" class="sliderwrapper">
		<div style="display: none; z-index: 17; opacity: 1; visibility: visible;" class="contentdiv">
			<img src="images/6archivo.jpg" height="182" width="960" border="0">
		</div>
		<div style="display: none; z-index: 18; opacity: 1; visibility: visible;" class="contentdiv">
			<img src="images/7archivo.jpg" height="182" width="960" border="0">
		</div>
		<div style="display: none; z-index: 19; opacity: 1; visibility: visible;" class="contentdiv">
			<img src="images/8archivo.jpg" height="182" width="960" border="0">
		</div>
		<div style="display: block; z-index: 20; opacity: 1; visibility: visible;" class="contentdiv">
			<img src="images/9archivo.jpg" height="182" width="960" border="0">
		</div>
		<div style="display: none; z-index: 13; opacity: 1; visibility: visible;" class="contentdiv">
			<img src="images/10archivo.jpg" height="182" width="960" border="0">
		</div>
		<div style="display: none; z-index: 14; opacity: 1; visibility: visible;" class="contentdiv">
			<img src="images/11archivo.jpg" height="182" width="960" border="0">
		</div>
		<div style="display: none; z-index: 15; opacity: 1; visibility: visible;" class="contentdiv">
			<img src="images/12archivo.jpg" height="182" width="960" border="0">
		</div>
		<div style="display: none; z-index: 16; opacity: 1; visibility: visible;" class="contentdiv">
			<img src="images/13archivo.jpg" height="182" width="960" border="0">
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
    <div id="logo-home"><img src="images/logo-home.png" height="79" width="152"></div><div id="cuerpo">
<div id="cuerpo-left">
<div id="cuerpo-left-empresa"></div>
<div id="cuerpo-left-empresa-interior">
<ul>
<li><span class="verde">»</span> <a href="http://www.motordos.com.ar/index.php" title="INICIO">INICIO</a></li><li><span class="verde">»</span> <a href="http://www.motordos.com.ar/eventos.php" title="EVENTOS">EVENTOS</a></li><li><span class="verde">»</span> <a href="http://www.motordos.com.ar/servicios.php" title="SERVICIOS">SERVICIOS</a></li><li><span class="verde">»</span> <a href="http://www.motordos.com.ar/sucursales.php" title="SUCURSALES">SUCURSALES</a></li><li><span class="verde">»</span> <a href="http://www.motordos.com.ar/contacto.php" title="CONTACTO">CONTACTO</a></li><li><span class="verde">»</span> <a href="http://www.motordos.com.ar/pagina.php?idpagina=6" title="INDUMENTARIA Y ACCESORIOS">INDUMENTARIA Y ACCESORIOS</a></li><li><span class="verde">»</span> <a href="http://www.motordos.com.ar/novedades.php" title="NOVEDADES">NOVEDADES</a></li></ul>
</div>
<div id="cuerpo-left-tipo-moto"></div>
<div id="cuerpo-left-tipo-moto-interior">
<ul>
<li><span class="amarillo">»</span> <a href="http://www.motordos.com.ar/modelo-sm.php?modelo=CALLE" title="CALLE ">CALLE </a></li><li><span class="amarillo">»</span> <a href="http://www.motordos.com.ar/modelo-sm.php?modelo=CROSS" title="CROSS">CROSS</a></li><li><span class="amarillo">»</span> <a href="http://www.motordos.com.ar/modelo-sm.php?modelo=CUATRICICLOS%20DEPORTIVOS" title="CUATRICICLOS DEPORTIVOS">CUATRICICLOS DEPORTIVOS</a></li><li><span class="amarillo">»</span> <a href="http://www.motordos.com.ar/modelo-sm.php?modelo=CUATRICICLOS%20UTILITARIOS" title="CUATRICICLOS UTILITARIOS">CUATRICICLOS UTILITARIOS</a></li><li><span class="amarillo">»</span> <a href="http://www.motordos.com.ar/modelo-sm.php?modelo=CUSTOM" title="CUSTOM">CUSTOM</a></li><li><span class="amarillo">»</span> <a href="http://www.motordos.com.ar/modelo-sm.php?modelo=DEPORTIVAS" title="DEPORTIVAS">DEPORTIVAS</a></li><li><span class="amarillo">»</span> <a href="http://www.motordos.com.ar/modelo-sm.php?modelo=ENDURO" title="ENDURO">ENDURO</a></li><li><span class="amarillo">»</span> <a href="http://www.motordos.com.ar/modelo-sm.php?modelo=MOTOS%20DE%20AGUA" title="MOTOS DE AGUA">MOTOS DE AGUA</a></li><li><span class="amarillo">»</span> <a href="http://www.motordos.com.ar/modelo-sm.php?modelo=ON-OFF" title="ON-OFF">ON-OFF</a></li><li><span class="amarillo">»</span> <a href="http://www.motordos.com.ar/modelo-sm.php?modelo=SCOOTER" title="SCOOTER">SCOOTER</a></li><li><span class="amarillo">»</span> <a href="http://www.motordos.com.ar/modelo-sm.php?modelo=STREET" title="STREET">STREET</a></li><li><span class="amarillo">»</span> <a href="http://www.motordos.com.ar/modelo-sm.php?modelo=TOURING" title="TOURING">TOURING</a></li></ul>
</div>
<div id="cuerpo-left-marcas"></div>
<div id="cuerpo-left-marcas-interior">
<ul>
<li><span class="celeste">»</span> <a href="http://www.motordos.com.ar/marca.php?marca=CAN-AM" title="CAN-AM">CAN-AM</a></li><li><span class="celeste">»</span> <a href="http://www.motordos.com.ar/marca.php?marca=HONDA" title="HONDA">HONDA</a></li><li><span class="celeste">»</span> <a href="http://www.motordos.com.ar/marca.php?marca=KAWASAKI" title="KAWASAKI">KAWASAKI</a></li><li><span class="celeste">»</span> <a href="http://www.motordos.com.ar/marca.php?marca=KTM" title="KTM">KTM</a></li><li><span class="celeste">»</span> <a href="http://www.motordos.com.ar/marca.php?marca=SUZUKI" title="SUZUKI">SUZUKI</a></li><li><span class="celeste">»</span> <a href="http://www.motordos.com.ar/marca.php?marca=YAMAHA" title="YAMAHA">YAMAHA</a></li></ul>
</div>
<div id="cuerpo-left-inf"></div><div id="banner">
</div></div>
<div id="cuerpo-right">
<div id="cuerpo-right-interno">
<div id="cuerpo-right-interno-superior">

</div><div id="cuerpo-right-interno-completo">
<div id="bienvenidos3">
<h1>Marcas</h1>
</div>
<div id="productos">
<div id="productos-sup"></div>
<div id="productos-medio">
<div id="productos-interno">
<div id="cuadro"><div id="cuadro-foto"><a href="" title=""><img class="post-body-marca" src="" border="0"></a></div><div id="cuadro-texto"><span class="verde"><strong>» </strong></span><a href="" title="">YAMAHA</a></div></div><div id="cuadro"><div id="cuadro-foto"><a href="" title="HONDA"><img class="post-body-marca" src="" border="0"></a></div><div id="cuadro-texto"><span class="verde"><strong>» </strong></span><a href="" title="HONDA">HONDA</a></div></div><div id="cuadro"><div id="cuadro-foto"><a href="" title="SUZUKI"><img class="post-body-marca" src="" border="0"></a></div><div id="cuadro-texto"><span class="verde"><strong>» </strong></span><a href="" title="SUZUKI">SUZUKI</a></div></div><div id="cuadro"><div id="cuadro-foto"><a href="" title="KAWASAKI"><img class="post-body-marca" src="" border="0"></a></div><div id="cuadro-texto"><span class="verde"><strong>» </strong></span><a href="" title="KAWASAKI">KAWASAKI</a></div></div><div id="cuadro"><div id="cuadro-foto"><a href="" title="KTM"><img class="post-body-marca" src="" border="0"></a></div><div id="cuadro-texto"><span class="verde"><strong>» </strong></span><a href="" title="KTM">KTM</a></div></div><div id="cuadro"><div id="cuadro-foto"><a href="" title="CAN-AM"><img class="post-body-marca" src="" border="0"></a></div><div id="cuadro-texto"><span class="verde"><strong>» </strong></span><a href="" title="CAN-AM">CAN-AM</a></div></div></div>
</div>
<div id="productos-inf"></div>
</div>
</div>
</div>
</div>
</div>
<div id="pie">
© 2011 ImportMol S.A.
</div>
</div>
<div id="sb-container"><div id="sb-overlay"></div><div id="sb-wrapper"><div id="sb-title"><div id="sb-title-inner"></div></div><div id="sb-wrapper-inner"><div id="sb-body"><div id="sb-body-inner"></div><div id="sb-loading"><div id="sb-loading-inner"><span>cargando</span></div></div></div></div><div id="sb-info"><div id="sb-info-inner"><div id="sb-counter"></div><div id="sb-nav"><a id="sb-nav-close" title="Cerrar" onclick="Shadowbox.close()"></a><a id="sb-nav-next" title="Siguiente" onclick="Shadowbox.next()"></a><a id="sb-nav-play" title="Reproducir" onclick="Shadowbox.play()"></a><a id="sb-nav-pause" title="Pausa" onclick="Shadowbox.pause()"></a><a id="sb-nav-previous" title="Anterior" onclick="Shadowbox.previous()"></a></div></div></div></div></div></body></html>