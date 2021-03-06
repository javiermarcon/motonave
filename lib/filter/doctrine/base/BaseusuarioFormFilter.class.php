<?php

/**
 * usuario filter form base class.
 *
 * @package    importmol
 * @subpackage filter
 * @author     Javier Marcon
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseusuarioFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'password' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'nombre'   => new sfValidatorPass(array('required' => false)),
      'password' => new sfValidatorPass(array('required' => false)),
      'tipo'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('usuario_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'usuario';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'nombre'   => 'Text',
      'password' => 'Text',
      'tipo'     => 'Text',
    );
  }
}
