<?php

class NewPassword extends CFormModel {

    public $password;
    public $password_repeat;

    public function rules() {
        return array(
            array('password, password_repeat', 'required' ),
            array('password_repeat', 'compare', 'compareAttribute' => 'password'),
        );
    }

}
