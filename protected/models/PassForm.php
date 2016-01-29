<?php

class PassForm extends CFormModel {

    public $email;

    public function rules() {
        return array(
            array('email', 'required'),
            array('email', 'email'),
            array('email', 'exist', 'className' => 'User', 'message' => 'Користувач з таким {attribute} ще не зареєстровинй'),
        );
    }
    
    

    public function attributeLabels() {
        return array(
            'verifyCode' => 'Verification Code',
        );
    }
    

}
