<?php $numprod = array(); ?>
<h1><?php $ancestros = $category->getNode()->getAncestors();
	  if (is_object($ancestros))
	  {
	    foreach ($ancestros as $ance)
	    {
		echo $ance.' » ';
	    }
	  }
	  //echo link_to($cate, 'listacategorias', $cate);
	  echo $category; ?></h1>
<table class="productos">
        <?php foreach ($category->getProductos() as $i => $prod): ?>
	<?php $numprod[$prod->getId()] = $prod->getId() ?>
        <?php if (!fmod($i, 2)): ?>
        	<tr>
        <?php endif; ?>
        <td>
        <table>
        <tr><td class="cuadro_sup"></td></tr>
        <tr><td class="cuadro_medio">
        <table>
          <tr>
            <td class="nombre" >
		<?php echo $prod->getNombre() ?>
            </td>
	  </tr>
	  <tr><td>
	    <table>
	    <tr>
	    <?php $most = 0;
	    for ($i = 1; $i <= 6; $i++)
			{
			$metodo = 'getFoto'.$i;
			if (!is_null($prod->$metodo()))
				{
				if ($most == 3)
					{
					echo "</tr>\n<tr>\n";
					$most = 0;
					}
				echo '<td class="imagen">';
				echo '<a class="producto'.$prod->getId();
				echo '" href="/uploads/productos/'.$prod->$metodo().'" >';
				echo '<img src="/uploads/productos/s_'.$prod->$metodo().
					'" alt="'.$prod->getNombre().' - foto '.$i.'" /></a>
</td>';
				$most++;
				}
			}
		?>
	    </tr>
          </table>
	  </td></tr>
        <tr>
            <td class="descripcion">
		<?php echo $prod->getDescripcion() ?>
            </td>
        </tr>
        </table>
        </td></tr>
        <tr><td class="cuadro_inf"></td></tr></table>
        </td>
        <?php if (!fmod($i, 2)): ?>
        	</tr>
        <?php endif; ?>
        <?php endforeach; ?>
      </table>
  <script>
  <?php foreach ($numprod as $numeroproducto): ?>
	$(document).ready(function(){
	    $(".producto<?php echo $numeroproducto?>").colorbox({rel:'producto<?php echo $numeroproducto?>', slideshow:true, current:"Foto {current} de {total}", slideshowStart: "Iniciar Secuencia", slideshowStop: "Detener Secuencia", slideshowAuto: false});
	});
  <?php endforeach; ?>
  </script>