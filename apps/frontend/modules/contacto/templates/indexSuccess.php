<?php if ($sf_user->hasFlash('notice')): ?>
          <div class="flash_notice">
            <?php echo $sf_user->getFlash('notice') ?>
          </div>
        <?php endif; ?>

        <?php if ($sf_user->hasFlash('error')): ?>
          <div class="flash_error">
            <?php echo $sf_user->getFlash('error') ?>
          </div>
        <?php endif; ?>
<table>
<form action="<?php echo url_for('contacto'); ?>" method="post">
    <?php echo $form; ?>
  <tr><td class="submit"><input type="submit" value="Enviar" /></td></tr>
</form>
</table>