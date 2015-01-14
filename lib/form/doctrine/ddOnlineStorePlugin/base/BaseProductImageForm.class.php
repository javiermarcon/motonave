<?php

/**
 * ProductImage form base class.
 *
 * @method ProductImage getObject() Returns the current form's model object
 *
 * @package    importmol
 * @subpackage form
 * @author     Javier Marcon
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProductImageForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'product_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Product'), 'add_empty' => true)),
      'position'      => new sfWidgetFormInputText(),
      'image_name'    => new sfWidgetFormInputText(),
      'image_name_x1' => new sfWidgetFormInputText(),
      'image_name_y1' => new sfWidgetFormInputText(),
      'image_name_x2' => new sfWidgetFormInputText(),
      'image_name_y2' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'product_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Product'), 'required' => false)),
      'position'      => new sfValidatorInteger(array('required' => false)),
      'image_name'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'image_name_x1' => new sfValidatorInteger(array('required' => false)),
      'image_name_y1' => new sfValidatorInteger(array('required' => false)),
      'image_name_x2' => new sfValidatorInteger(array('required' => false)),
      'image_name_y2' => new sfValidatorInteger(array('required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'ProductImage', 'column' => array('position', 'product_id')))
    );

    $this->widgetSchema->setNameFormat('product_image[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProductImage';
  }

}
