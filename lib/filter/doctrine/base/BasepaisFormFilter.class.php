<?php

/**
 * pais filter form base class.
 *
 * @package    importmol
 * @subpackage filter
 * @author     Javier Marcon
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasepaisFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'continente'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'region'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombrelocal' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'capital'     => new sfWidgetFormFilterInput(),
      'codigo2'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'nombre'      => new sfValidatorPass(array('required' => false)),
      'continente'  => new sfValidatorPass(array('required' => false)),
      'region'      => new sfValidatorPass(array('required' => false)),
      'nombrelocal' => new sfValidatorPass(array('required' => false)),
      'capital'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'codigo2'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('pais_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'pais';
  }

  public function getFields()
  {
    return array(
      'codigo'      => 'Text',
      'nombre'      => 'Text',
      'continente'  => 'Text',
      'region'      => 'Text',
      'nombrelocal' => 'Text',
      'capital'     => 'Number',
      'codigo2'     => 'Text',
    );
  }
}
