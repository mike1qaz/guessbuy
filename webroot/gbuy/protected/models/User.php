<?php
class User extends CActiveRecord{

	public static function model($className=__CLASS__)
    {
       	return parent::model($className);
    }

    public static function allUsers(){
    	$users = User::model()->findAll();
		$data=array_map(create_function('$m','return $m->getAttributes(array(\'id\',\'name\'));'),$users);
		return $data;
    }

}