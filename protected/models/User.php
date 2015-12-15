<?php

class User extends CActiveRecord {

    public $password_repeat;

    public function tableName() {
        return 'user';
    }

    public function rules() {

        return array(
            array('username, email, password, password_repeat', 'required'),
            array('password_repeat', 'compare', 'compareAttribute' => 'password'),
            array('username', 'unique', 'message' => "Цей логін зайнятий іншим користувачем."),
            array('email', 'email'),
            array('email', 'unique', 'message' => "Користувач з такий email вже існує."),
            array('username, email, password', 'length', 'max' => 30),
        );
    }

    public function relations() {

        return array(
        );
    }

    public function attributeLabels() {
        return array(
            'id' => 'Ваш id',
            'username' => 'Ваш логін',
            'email' => 'Ваш email',
            'password' => 'Ваш пароль',
            'password_repeat' => 'Повторіть пароль',
        );
    }

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
