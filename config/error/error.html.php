<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php $path = sfConfig::get('sf_relative_url_root', preg_replace('#/[^/]+\.php5?$#', '', isset($_SERVER['SCRIPT_NAME']) ? $_SERVER['SCRIPT_NAME'] : (isset($_SERVER['ORIG_SCRIPT_NAME']) ? $_SERVER['ORIG_SCRIPT_NAME'] : ''))) ?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="title" content="Motonave Importmol" />
<meta name="robots" content="index, follow" />
<meta name="description" content="Motonave Importmol" />
<meta name="keywords" content="motos, indumentaria, accesorios, cascos" />
<meta name="language" content="es" />
<title>Motonave Importmol</title>

<link rel="shortcut icon" href="/favicon.ico" />
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $path ?>/sf/sf_default/css/screen.css" />
<!--[if lt IE 7.]>
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $path ?>/sf/sf_default/css/ie.css" />
<![endif]-->

</head>
<body>
<div class="sfTContainer">
  <a title="symfony website" href="http://www.symfony-project.org/"><img alt="symfony PHP Framework" class="sfTLogo" src="<?php echo $path ?>/sf/sf_default/images/sfTLogo.png" height="39" width="186" /></a>
  <div class="sfTMessageContainer sfTAlert">
    <img alt="page not found" class="sfTMessageIcon" src="<?php echo $path ?>/sf/sf_default/images/icons/tools48.png" height="48" width="48" />
    <div class="sfTMessageWrap">
      <h1>Hay un error</h1>
      <h5>Error: "<?php echo $code ?> <?php echo $text ?>".</h5>
    </div>
  </div>

  <dl class="sfTMessageInfo">
    <dt>Algo está mal en la página</dt>
    <dd>Si ud cree que es un error del servidor, envíenos un aviso de que esta página no se encuentra funcionando para poder arreglarlo lo más rápido posible.</dd>

    <dt>ahora....</dt>
    <dd>
      <ul class="sfTIconList">
        <li class="sfTLinkMessage"><a href="javascript:history.go(-1)">Volver a la página anterior</a></li>
        <li class="sfTLinkMessage"><a href="/">Ir a la pagina principal</a></li>
		<li class="sfTLinkMessage"><?php echo link_to('Si te logueaste con un usario sin privilegios, podes salir.', 'sf_guard_signout') ?></li>
      </ul>
    </dd>
  </dl>
</div>
</body>
</html>
