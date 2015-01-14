<?php

/**
 * sf_guard_user_profile filter form base class.
 *
 * @package    importmol
 * @subpackage filter
 * @author     Javier Marcon
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class Basesf_guard_user_profileFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_id'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
      'first_name'              => new sfWidgetFormFilterInput(),
      'last_name'               => new sfWidgetFormFilterInput(),
      'token'                   => new sfWidgetFormFilterInput(),
      'empresa'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cuit'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'direccion'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ciudades_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ciudad'), 'add_empty' => true)),
      'telefono'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mail'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'web'                     => new sfWidgetFormFilterInput(),
      'referencias_comerciales' => new sfWidgetFormFilterInput(),
      'transportes_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('transporte'), 'add_empty' => true)),
      'tiposactividades_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('tiposactividad'), 'add_empty' => true)),
      'referidos'               => new sfWidgetFormFilterInput(),
      'usuarios_id'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'              => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'              => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'user_id'                 => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('User'), 'column' => 'id')),
      'first_name'              => new sfValidatorPass(array('required' => false)),
      'last_name'               => new sfValidatorPass(array('required' => false)),
      'token'                   => new sfValidatorPass(array('required' => false)),
      'empresa'                 => new sfValidatorPass(array('required' => false)),
      'cuit'                    => new sfValidatorPass(array('required' => false)),
      'direccion'               => new sfValidatorPass(array('required' => false)),
      'ciudades_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ciudad'), 'column' => 'id')),
      'telefono'                => new sfValidatorPass(array('required' => false)),
      'mail'                    => new sfValidatorPass(array('required' => false)),
      'web'                     => new sfValidatorPass(array('required' => false)),
      'referencias_comerciales' => new sfValidatorPass(array('required' => false)),
      'transportes_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('transporte'), 'column' => 'id')),
      'tiposactividades_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('tiposactividad'), 'column' => 'id')),
      'referidos'               => new sfValidatorPass(array('required' => false)),
      'usuarios_id'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'              => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'              => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('sf_guard_user_profile_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'sf_guard_user_profile';
  }

  public function getFields()
  {
    return array(
      'id'                      => 'Number',
      'user_id'                 => 'ForeignKey',
      'first_name'              => 'Text',
      'last_name'               => 'Text',
      'token'                   => 'Text',
      'empresa'                 => 'Text',
      'cuit'                    => 'Text',
      'direccion'               => 'Text',
      'ciudades_id'             => 'ForeignKey',
      'telefono'                => 'Text',
      'mail'                    => 'Text',
      'web'                     => 'Text',
      'referencias_comerciales' => 'Text',
      'transportes_id'          => 'ForeignKey',
      'tiposactividades_id'     => 'ForeignKey',
      'referidos'               => 'Text',
      'usuarios_id'             => 'Number',
      'created_at'              => 'Date',
      'updated_at'              => 'Date',
    );
  }
}
