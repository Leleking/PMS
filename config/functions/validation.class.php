<?php
/**
* 
*/
class Validation 
{
	//the function holds all functions in the mvc project
	//You can edit anything here
	public function empty_field($a){
		 if (in_array(null, $a)) {
    // There are null values.ret
		 	return false;
  }else return true;
		
    }
    public function email_validate($email)
    {
    	$emailValidation = "/^[_a-z0-9]+(\.[_a-z0-9-])*@[a-z0-9]+(\.[a-z]{2,4})$/";
    	if (!preg_match($emailValidation,$email)){
	
		return false;

		}else
		return true;
	}

	public function name_validate($name){
		$name_validaiton = "/^[A-Z] [a-zA-Z ]+$/";
		if ( !preg_match ("/^[a-zA-Z\s]+$/",$name)) {

		  return false;


		}else {
		return true;
		}
	}
    


}