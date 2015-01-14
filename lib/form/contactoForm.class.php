<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class ContactoForm extends sfForm
{
  public function configure()
  {
    $this->setWidgets(array(
      'nombre'   => new sfWidgetFormInputText(),
      'email'   => new sfWidgetFormInputText(),
      'mensaje' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'nombre'   => new sfValidatorString(),
      'email'   => new sfValidatorEmail(),
      'mensaje' => new sfValidatorString(array('max_length' => 1255)),
    ));

    $this->widgetSchema->setNameFormat('contacto[%s]');
  }
}

?>
