<?php

/**
 * categoria form.
 *
 * @package    importmol
 * @subpackage form
 * @author     Javier Marcon
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class categoriaForm extends BasecategoriaForm
{
  public function configure()
  {
    // create a new widget to represent this category's "parent"
    $this->setWidget('parent', new sfWidgetFormDoctrineChoiceNestedSet(array(
      'model'     => 'Categoria',
      'add_empty' => true,
    )));

    // if the current category has a parent, make it the default choice
    if ($this->getObject()->getNode()->hasParent())
    {
      $this->setDefault('parent', $this->getObject()->getNode()->getParent()->getId());
    }

    // only allow the user to change the name of the category, and its parent
    $this->useFields(array(
      'nombre',
      'parent',
    ));
    // set labels of fields
    $this->widgetSchema->setLabels(array(
      'name'   => 'Categoria',
      'parent' => 'Subcategoria de',
    ));
    // set a validator for parent which prevents a category being moved to one of its own descendants
    $this->setValidator('parent', new sfValidatorDoctrineChoiceNestedSet(array(
      'required' => false,
      'model'    => 'Categoria',
      'node'     => $this->getObject(),
    )));
    $this->getValidator('parent')->setMessage('node', 'Una categoria no puede ser una subcategoria de si misma.');
  
	//unset($this['root_id'], $this['lft'], $this['rgt'], $this['level']);
  }

  /**
   * Updates and saves the current object. Overrides the parent method
   * by treating the record as a node in the nested set and updating
   * the tree accordingly.
   *
   * @param Doctrine_Connection $con An optional connection parameter
   */
  public function doSave($con = null)
  {
    // save the record itself
    parent::doSave($con);
    // if a parent has been specified, add/move this node to be the child of that node
    if ($this->getValue('parent'))
    {
      $parent = Doctrine::getTable('Categoria')->findOneById($this->getValue('parent'));
      if ($this->isNew())
      {
        $this->getObject()->getNode()->insertAsLastChildOf($parent);
      }
      else
      {
        $this->getObject()->getNode()->moveAsLastChildOf($parent);
      }
    }
    // if no parent was selected, add/move this node to be a new root in the tree
    else
    {
      $categoryTree = Doctrine::getTable('Categoria')->getTree();
      if ($this->isNew())
      {
        $categoryTree->createRoot($this->getObject());
      }
      else
      {
        $this->getObject()->getNode()->makeRoot($this->getObject()->getId());
      }
    }
  }
}
