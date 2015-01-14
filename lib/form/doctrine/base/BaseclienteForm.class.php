<?php

/**
 * cliente form base class.
 *
 * @method cliente getObject() Returns the current form's model object
 *
 * @package    importmol
 * @subpackage form
 * @author     Javier Marcon
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseclienteForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                      => new sfWidgetFormInputHidden(),
      'empresa'                 => new sfWidgetFormInputText(),
      'cuit'                    => new sfWidgetFormInputText(),
      'direccion'               => new sfWidgetFormInputText(),
      'ciudades_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ciudad'), 'add_empty' => false)),
      'telefono'                => new sfWidgetFormInputText(),
      'mail'                    => new sfWidgetFormInputText(),
      'web'                     => new sfWidgetFormInputText(),
      'referencias_comerciales' => new sfWidgetFormTextarea(),
      'transportes_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('transporte'), 'add_empty' => false)),
      'tiposactividades_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('tiposactividad'), 'add_empty' => false)),
      'referidos'               => new sfWidgetFormTextarea(),
      'usuarios_id'             => new sfWidgetFormInputText(),
      'created_at'              => new sfWidgetFormDateTime(),
      'updated_at'              => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'empresa'                 => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'cuit'                    => new sfValidatorString(array('max_length' => 13, 'required' => false)),
      'direccion'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'ciudades_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ciudad'))),
      'telefono'                => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'mail'                    => new sfValidatorString(array('max_length' => 100)),
      'web'                     => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'referencias_comerciales' => new sfValidatorString(array('required' => false)),
      'transportes_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('transporte'))),
      'tiposactividades_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('tiposactividad'))),
      'referidos'               => new sfValidatorString(array('required' => false)),
      'usuarios_id'             => new sfValidatorInteger(),
      'created_at'              => new sfValidatorDateTime(),
      'updated_at'              => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('cliente[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'cliente';
  }

}
