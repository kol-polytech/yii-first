<?php

class User extends CActiveRecord {

    public function tableName() {
        return 'user';
    }

    public function rules() {

        return array(
            array('username, email, password', 'required'),
            array('username, email, password', 'length', 'max' => 30),
            array('id, username, email, password', 'safe', 'on' => 'search'),
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
        );
    }

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
