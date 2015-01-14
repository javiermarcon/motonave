<?php

class listacategoriasComponents extends sfComponents
{
  public function executeListacategorias(sfWebRequest $request)
  {
    $this->cates = Doctrine_Core::getTable('categoria')->getListaCategorias();
  }
}
?>
