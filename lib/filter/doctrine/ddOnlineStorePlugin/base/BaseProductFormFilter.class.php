<?php

/**
 * Product filter form base class.
 *
 * @package    importmol
 * @subpackage filter
 * @author     Javier Marcon
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseProductFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'category_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('category'), 'add_empty' => true)),
      'name'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'subname'        => new sfWidgetFormFilterInput(),
      'description'    => new sfWidgetFormFilterInput(),
      'specifications' => new sfWidgetFormFilterInput(),
      'capacity'       => new sfWidgetFormFilterInput(),
      'price'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'is_available'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_featured'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'slug'           => new sfWidgetFormFilterInput(),
      'created_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'category_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('category'), 'column' => 'id')),
      'name'           => new sfValidatorPass(array('required' => false)),
      'subname'        => new sfValidatorPass(array('required' => false)),
      'description'    => new sfValidatorPass(array('required' => false)),
      'specifications' => new sfValidatorPass(array('required' => false)),
      'capacity'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'price'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'is_available'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_featured'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'slug'           => new sfValidatorPass(array('required' => false)),
      'created_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('product_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Product';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'category_id'    => 'ForeignKey',
      'name'           => 'Text',
      'subname'        => 'Text',
      'description'    => 'Text',
      'specifications' => 'Text',
      'capacity'       => 'Number',
      'price'          => 'Number',
      'is_available'   => 'Boolean',
      'is_featured'    => 'Boolean',
      'slug'           => 'Text',
      'created_at'     => 'Date',
      'updated_at'     => 'Date',
    );
  }
}
