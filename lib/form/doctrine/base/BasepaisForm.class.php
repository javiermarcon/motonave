<?php

/**
 * pais form base class.
 *
 * @method pais getObject() Returns the current form's model object
 *
 * @package    importmol
 * @subpackage form
 * @author     Javier Marcon
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasepaisForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo'      => new sfWidgetFormInputHidden(),
      'nombre'      => new sfWidgetFormInputText(),
      'continente'  => new sfWidgetFormInputText(),
      'region'      => new sfWidgetFormInputText(),
      'nombrelocal' => new sfWidgetFormInputText(),
      'capital'     => new sfWidgetFormInputText(),
      'codigo2'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'codigo'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('codigo')), 'empty_value' => $this->getObject()->get('codigo'), 'required' => false)),
      'nombre'      => new sfValidatorString(array('max_length' => 52, 'required' => false)),
      'continente'  => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'region'      => new sfValidatorString(array('max_length' => 26, 'required' => false)),
      'nombrelocal' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'capital'     => new sfValidatorInteger(array('required' => false)),
      'codigo2'     => new sfValidatorString(array('max_length' => 2, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('pais[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'pais';
  }

}
