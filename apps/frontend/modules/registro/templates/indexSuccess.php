<?php if ($sf_user->hasFlash('notice')): ?>
<div class="flash_notice">
<?php echo $sf_user->getFlash('notice') ?>
</div>
<?php endif ?>
<?php if ($sf_user->hasFlash('error')): ?>
<div class="flash_error">
<?php echo $sf_user->getFlash('error') ?>
</div>
<?php endif ?>

<!-- <form action="<?php //echo url_for("@user_registro"); ?>" method="post">
  <?php //echo $form; ?>
  <input type="submit" value="Registrarse" />
</form> -->

Momentaneamente el formulario de registro no se encuentra activo.
<br /><br />
Para registrarse por favor complete la <a href="/uploads/planillas/registro_importmol.xls" title="Planilla">planilla</a> y env&iacute;ela a contacto@importmol.com
<br /><br />
<a href="/uploads/planillas/registro_importmol.xls" title="Planilla">Para descargar la planilla de registro puede hacer click aqui.</a>
<br /><br />
Motonave iMportmol.