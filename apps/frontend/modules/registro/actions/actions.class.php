<?php

/**
 * registro actions.
 *
 * @package    importmol
 * @subpackage registro
 * @author     Javier Marcon
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class registroActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    /* $params = $request->getParameter('registro');
    $this->form = new RegisterForm();
    if ($request->isMethod('post')) {
        $this->form->bind($params);
        // save the object is the user
        // details entered a correct and everything else is place.
        if ($this->form->isValid()) {
            $this->form->save();
            // get the user object
            $user = $this->form->getObject();
 
            // get the normal user group
            $normal_user_group = sfConfig::get('grupo_de_clientes');
 
            // deactivate the account, till the user verifies the account
            $user->setIsActive(false);
 
            // set the activation token
            $profile = $user->getProfile();
            $profile->setToken(md5(time()));
 
            // notify the user about the signup
            ///$this->notifySignup($user, $profile);
            $user->save(); // save the record in the database
 
            //$this->getUser()->setFlash('register_confirm', true);
        }
    }
    */
    
  }
}
