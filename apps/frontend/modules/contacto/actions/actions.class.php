<?php

/**
 * contacto actions.
 *
 * @package    guiaabogados
 * @subpackage contacto
 * @author     Javier Marcon
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class contactoActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->form = new contactoForm();

    if($request->isMethod("post"))
    {
        $this->form->bind($request->getParameter("contacto"));
        if($this->form->isValid())
	{
	    // envio mail de contacto
	    $email_diduca = sfConfig::get('app_email_motonave');
	    $email_diduca_nombre = sfConfig::get('app_email_motonave_nombre');
	    $asunto_contacto = sfConfig::get('app_asunto_contacto');
	    $nombre = $this->form->getValue("nombre");
	    $email = $this->form->getValue("email");
	    $mensaje = $this->form->getValue("mensaje");
	    // envio
	    $message = $this->getMailer()->compose(
	array($email_diduca => $email_diduca_nombre),
	$email_diduca,
	$asunto_contacto,
	<<<EOF
Consulta desde la página web de guia de abogados:

Nombre: {$nombre}.

email: {$email}.

Comentarios: {$mensaje}.

EOF
    );

    $this->getMailer()->send($message);

	    $this->getUser()->setFlash('notice', 'El mensaje se ha enviado correctamente.');
	    $this->redirect($this->generateUrl('contacto'));
	}
    }
  }
}
