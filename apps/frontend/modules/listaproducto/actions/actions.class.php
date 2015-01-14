<?php

/**
 * listaproducto actions.
 *
 * @package    importmol
 * @subpackage listaproducto
 * @author     Javier Marcon
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class listaproductoActions extends sfActions
{
    /**
     * Variable para almacenar los ancestros 
     */
    private $nomancestros = array();
    private $categoriasflat = array();
    private $catnomflat = array();
    
  /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
  $this->cates = Doctrine_Core::getTable('categoria')->getListaCategorias(sfConfig::get('max_productos_en_pagina_principal'));
  
  // hago array chato de categorias con su parent
	/*foreach ($this->cates as $cate)
	{
	    $this->categoriasflat[$cate->getId()] = $cate->getRoot_id();
	    $this->catnomflat[$cate->getId()] = $cate->getNombre();
	    
	}
  
	// recorro el array y lleno los nombres de categoria
	foreach ($this->categoriasflat as $catflat=>$idflat)
	{
	    $this->buscoancestros($catflat, $idflat);
	}*/
	
	// pongo propiedad con array de ancestros
	/*foreach ($this->cates as $cate)
	{ // Fatal error: Can't use method return value in write context
	    $cate->ArrayAncestros() = $this->nomancestros[$cate->getId()];
	}*/
  
/*  $q = Doctrine_Query::create()
	->from('categoria c')
	->InnerJoin('c.productos p');
//$this->categorias = $q->getSqlQuery();
	$this->categorias = $q->execute();*/
  }
  
  /*public function buscoancestros($categoria, $ancestro)
    {
        do
	{
	    $ansesact = array();
	    $ancestro = array_search($ancestro, $this->categoriasflat);
	    if ($ancestro !== false)
	    {
		$ansesact[] = $this->catnomflat[$ancestro];
	    }
	    var_dump($ancestro, $ansesact);
	} while ($ancestro !== false);
	if (count($ansesact) > 0)
	{
	    $this->nomancestros[$categoria] = $ansesact;
	}
    }*/
}
