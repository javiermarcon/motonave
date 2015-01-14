<?php

/**
 * producto filter form base class.
 *
 * @package    importmol
 * @subpackage filter
 * @author     Javier Marcon
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseproductoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descripcion'         => new sfWidgetFormFilterInput(),
      'codbarras_proveedor' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'stock'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'stock_min'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'stock_reposicion'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'foto1'               => new sfWidgetFormFilterInput(),
      'foto2'               => new sfWidgetFormFilterInput(),
      'foto3'               => new sfWidgetFormFilterInput(),
      'foto4'               => new sfWidgetFormFilterInput(),
      'foto5'               => new sfWidgetFormFilterInput(),
      'foto6'               => new sfWidgetFormFilterInput(),
      'categorias_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('categoria'), 'add_empty' => true)),
      'precio'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'nombre'              => new sfValidatorPass(array('required' => false)),
      'descripcion'         => new sfValidatorPass(array('required' => false)),
      'codbarras_proveedor' => new sfValidatorPass(array('required' => false)),
      'stock'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'stock_min'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'stock_reposicion'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'foto1'               => new sfValidatorPass(array('required' => false)),
      'foto2'               => new sfValidatorPass(array('required' => false)),
      'foto3'               => new sfValidatorPass(array('required' => false)),
      'foto4'               => new sfValidatorPass(array('required' => false)),
      'foto5'               => new sfValidatorPass(array('required' => false)),
      'foto6'               => new sfValidatorPass(array('required' => false)),
      'categorias_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('categoria'), 'column' => 'id')),
      'precio'              => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('producto_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'producto';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'nombre'              => 'Text',
      'descripcion'         => 'Text',
      'codbarras_proveedor' => 'Text',
      'stock'               => 'Number',
      'stock_min'           => 'Number',
      'stock_reposicion'    => 'Number',
      'foto1'               => 'Text',
      'foto2'               => 'Text',
      'foto3'               => 'Text',
      'foto4'               => 'Text',
      'foto5'               => 'Text',
      'foto6'               => 'Text',
      'categorias_id'       => 'ForeignKey',
      'precio'              => 'Number',
    );
  }
}
