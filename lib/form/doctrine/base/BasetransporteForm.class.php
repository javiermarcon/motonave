<?php

/**
 * transporte form base class.
 *
 * @method transporte getObject() Returns the current form's model object
 *
 * @package    importmol
 * @subpackage form
 * @author     Javier Marcon
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasetransporteForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'nombre'      => new sfWidgetFormInputText(),
      'direccion'   => new sfWidgetFormInputText(),
      'ciudades_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ciudad'), 'add_empty' => false)),
      'telefono'    => new sfWidgetFormInputText(),
      'mail'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre'      => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'direccion'   => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'ciudades_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ciudad'))),
      'telefono'    => new sfValidatorString(array('max_length' => 100)),
      'mail'        => new sfValidatorString(array('max_length' => 100)),
    ));

    $this->widgetSchema->setNameFormat('transporte[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'transporte';
  }

}
