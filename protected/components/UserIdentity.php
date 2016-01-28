<?php

class UserIdentity extends CUserIdentity {

    protected $_id;

    public function authenticate() {

        $user = User::model()->find('LOWER(username)=?', array(strtolower($this->username)));
        if (($user === null) or ( md5($this->password) !== $user->password)) {
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        } else {
            $this->_id = $user->id;
            $this->username = $user->username;
            $this->errorCode = self::ERROR_NONE;
        }
        return !$this->errorCode;
    }

    public function getId() {
        return $this->_id;
    }

}
