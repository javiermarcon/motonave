<?php

/**
 * transporte filter form base class.
 *
 * @package    importmol
 * @subpackage filter
 * @author     Javier Marcon
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasetransporteFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'direccion'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ciudades_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ciudad'), 'add_empty' => true)),
      'telefono'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mail'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'nombre'      => new sfValidatorPass(array('required' => false)),
      'direccion'   => new sfValidatorPass(array('required' => false)),
      'ciudades_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ciudad'), 'column' => 'id')),
      'telefono'    => new sfValidatorPass(array('required' => false)),
      'mail'        => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('transporte_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'transporte';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'nombre'      => 'Text',
      'direccion'   => 'Text',
      'ciudades_id' => 'ForeignKey',
      'telefono'    => 'Text',
      'mail'        => 'Text',
    );
  }
}
