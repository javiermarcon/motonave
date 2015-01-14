<?php

/**
 * listacategorias actions.
 *
 * @package    importmol
 * @subpackage listacategorias
 * @author     Javier Marcon
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class listacategoriasActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->category = $this->getRoute()->getObject();
  }
}
