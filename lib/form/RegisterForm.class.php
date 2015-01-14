<?php
/**
 * RegisterForm for signup process and requires
 * sfGuardPlugin
 *
 * @author Rajat Pandit
 */
class RegisterForm extends sfGuardUserForm {
    public function configure()
    {
        // remove the fields that you no longer need
        unset(
            $this['is_active'],
            $this['is_super_admin'],
            $this['updated_at'],
            $this['groups_list'],
            $this['permissions_list'],
            $this['last_login'],
            $this['created_at'],
            $this['salt'],
            $this['algorithm']
            );
 
        // change the name format as we dont want to the
        // world to know that we are using sfGuardPlugin
        $this->widgetSchema->setNameFormat('signup[%s]');
 
        // Setup proper password validation with confirmation
        $this->widgetSchema['password']                 = new sfWidgetFormInputPassword();
        $this->widgetSchema['password_confirmation']    = new sfWidgetFormInputPassword();
        $this->widgetSchema['toc']                      = new sfWidgetFormInputCheckbox();
 
        $this->widgetSchema->setLabel('username', 'Email');
        $this->widgetSchema->setLabel(
                'password_confirmation',
                'Confirm Password'
            );
        $this->widgetSchema->setLabel(
                'toc',
                'I agree to the Terms of Service, Privacy, & Refund policies'
            );
 
        $this->validatorSchema['username']   = new sfValidatorEmail(
                array(),
                array(
                        'required' => 'Please provide an email address',
                        'invalid'  => 'Please enter a valid email address'
                     )
                    );
        $this->validatorSchema['toc']       = new sfValidatorBoolean(
                                        array('required' => true),
                                        array(
                                            'required' =>
                                            'You need to accept the terms and conditions to proceed')
                                             );
 
        $this->validatorSchema['password_confirmation'] = clone $this->validatorSchema['password'];
        $this->validatorSchema['password']->setOption('required', true);
        $this->widgetSchema->moveField('password_confirmation', 'after', 'password');
        $this->mergePostValidator(new sfValidatorSchemaCompare('password',
                                        sfValidatorSchemaCompare::EQUAL, 'password_confirmation',
                                        array(),
                                        array(
                                                'required' => 'You are required to enter a password'
                                            )));
 
    }
}