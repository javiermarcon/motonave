<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
	<!-- inicio menu -->
	<?php if ($sf_user->isAuthenticated()): ?>
	  <div id="menu">
	    <?php echo link_to('clientes', 'cliente') ?>
	    <?php echo link_to('categorias', 'categoria') ?>
	    <?php echo link_to('productos', 'producto') ?>
	    <?php echo link_to('transportes', 'transporte') ?>
	    <?php echo link_to('ciudades', 'ciudad') ?>
	    <?php echo link_to('paises', 'pais') ?>
	    <?php echo link_to('Usuarios', 'sf_guard_user') ?>
	    <?php echo link_to('Salir', 'sf_guard_signout') ?>
	  </div>
	<?php endif ?>
	<!-- fin menu -->
    <?php echo $sf_content ?>
  </body>
</html>
