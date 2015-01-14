<?php

/**
 * ProductImage filter form base class.
 *
 * @package    importmol
 * @subpackage filter
 * @author     Javier Marcon
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseProductImageFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'product_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Product'), 'add_empty' => true)),
      'position'      => new sfWidgetFormFilterInput(),
      'image_name'    => new sfWidgetFormFilterInput(),
      'image_name_x1' => new sfWidgetFormFilterInput(),
      'image_name_y1' => new sfWidgetFormFilterInput(),
      'image_name_x2' => new sfWidgetFormFilterInput(),
      'image_name_y2' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'product_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Product'), 'column' => 'id')),
      'position'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'image_name'    => new sfValidatorPass(array('required' => false)),
      'image_name_x1' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'image_name_y1' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'image_name_x2' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'image_name_y2' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('product_image_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProductImage';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'product_id'    => 'ForeignKey',
      'position'      => 'Number',
      'image_name'    => 'Text',
      'image_name_x1' => 'Number',
      'image_name_y1' => 'Number',
      'image_name_x2' => 'Number',
      'image_name_y2' => 'Number',
    );
  }
}
