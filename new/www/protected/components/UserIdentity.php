<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
    private $_id;
 
    public function authenticate()
    {
        $username=strtolower($this->username);
        $user=Users::model()->find('LOWER(username)=?',array($username));
		//var_dump($user);
        if($user===null)
		{
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        }
		else if(!$user->validatePassword($this->password,$user->username))
		{
		//var_dump($this->password);var_dump($user->username);         
		 $this->errorCode=self::ERROR_PASSWORD_INVALID;
        }
		else
        {
		//	var_dump($user->id);
            $this->_id=$user->id;
            $this->username=$user->username;
            $this->errorCode=self::ERROR_NONE;
        }
        return $this->errorCode==self::ERROR_NONE;
    }
 
    public function getId()
    {
        return $this->_id;
    }
}