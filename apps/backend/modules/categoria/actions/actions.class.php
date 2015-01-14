<?php

require_once dirname(__FILE__).'/../lib/categoriaGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/categoriaGeneratorHelper.class.php';

/**
 * categoria actions.
 *
 * @package    importmol
 * @subpackage categoria
 * @author     Javier Marcon
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class categoriaActions extends autoCategoriaActions
{
	public function executeDelete(sfWebRequest $request)
	  {
	    $request->checkCSRFProtection();

	    $this->dispatcher->notify(new sfEvent($this, 'admin.delete_object', array('object' => $this->getRoute()->getObject())));

	    if ($this->getRoute()->getObject()->getNode()->delete())
	    {
	      $this->getUser()->setFlash('notice', 'La categoria se ha eliminado correctamente.');
	    }

	    $this->redirect('@categoria');
	  }

	protected function executeBatchDelete(sfWebRequest $request)
	{
	  $ids = $request->getParameter('ids');
	  $records = Doctrine_Query::create()
	    ->from('categoria')
	    ->whereIn('id', $ids)
	    ->execute();
	  foreach ($records as $record)
	  {
	    //$record->refresh(true);
		$record->getNode()->delete();
	  }

	  $this->getUser()->setFlash('notice', 'Las categorias seleccinadas han sido eliminadas correctamente.');
	  $this->redirect('@categoria');
	}

	protected function addSortQuery($query)
	{
	  $query->addOrderBy('root_id asc');
	  $query->addOrderBy('lft asc');
	}
}
