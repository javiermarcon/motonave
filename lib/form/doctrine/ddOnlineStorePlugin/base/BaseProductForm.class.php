<?php

/**
 * Product form base class.
 *
 * @method Product getObject() Returns the current form's model object
 *
 * @package    importmol
 * @subpackage form
 * @author     Javier Marcon
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProductForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'category_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('category'), 'add_empty' => false)),
      'name'           => new sfWidgetFormInputText(),
      'subname'        => new sfWidgetFormInputText(),
      'description'    => new sfWidgetFormTextarea(),
      'specifications' => new sfWidgetFormTextarea(),
      'capacity'       => new sfWidgetFormInputText(),
      'price'          => new sfWidgetFormInputText(),
      'is_available'   => new sfWidgetFormInputCheckbox(),
      'is_featured'    => new sfWidgetFormInputCheckbox(),
      'slug'           => new sfWidgetFormInputText(),
      'created_at'     => new sfWidgetFormDateTime(),
      'updated_at'     => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'category_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('category'))),
      'name'           => new sfValidatorString(array('max_length' => 255)),
      'subname'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'description'    => new sfValidatorString(array('required' => false)),
      'specifications' => new sfValidatorString(array('required' => false)),
      'capacity'       => new sfValidatorInteger(array('required' => false)),
      'price'          => new sfValidatorNumber(),
      'is_available'   => new sfValidatorBoolean(array('required' => false)),
      'is_featured'    => new sfValidatorBoolean(array('required' => false)),
      'slug'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'     => new sfValidatorDateTime(),
      'updated_at'     => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Product', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('product[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Product';
  }

}
