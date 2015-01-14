<?php

/**
 * producto form base class.
 *
 * @method producto getObject() Returns the current form's model object
 *
 * @package    importmol
 * @subpackage form
 * @author     Javier Marcon
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseproductoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'nombre'              => new sfWidgetFormInputText(),
      'descripcion'         => new sfWidgetFormTextarea(),
      'codbarras_proveedor' => new sfWidgetFormInputText(),
      'stock'               => new sfWidgetFormInputText(),
      'stock_min'           => new sfWidgetFormInputText(),
      'stock_reposicion'    => new sfWidgetFormInputText(),
      'foto1'               => new sfWidgetFormInputText(),
      'foto2'               => new sfWidgetFormInputText(),
      'foto3'               => new sfWidgetFormInputText(),
      'foto4'               => new sfWidgetFormInputText(),
      'foto5'               => new sfWidgetFormInputText(),
      'foto6'               => new sfWidgetFormInputText(),
      'categorias_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('categoria'), 'add_empty' => false)),
      'precio'              => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre'              => new sfValidatorString(array('max_length' => 150)),
      'descripcion'         => new sfValidatorString(array('required' => false)),
      'codbarras_proveedor' => new sfValidatorString(array('max_length' => 250)),
      'stock'               => new sfValidatorInteger(array('required' => false)),
      'stock_min'           => new sfValidatorInteger(array('required' => false)),
      'stock_reposicion'    => new sfValidatorInteger(array('required' => false)),
      'foto1'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'foto2'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'foto3'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'foto4'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'foto5'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'foto6'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'categorias_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('categoria'))),
      'precio'              => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('producto[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'producto';
  }

}
