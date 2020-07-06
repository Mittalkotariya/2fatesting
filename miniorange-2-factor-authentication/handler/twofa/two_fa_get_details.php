<?php

class two_fa_get_details {

	function getUserMethod($userid){
		$userMethod = get_user_meta($userid,'currentMethod',true);
		return $userMethod;
	}
	function setUserMethod($userid,$currentMethod){
		$response= update_user_meta($userid,'currentMethod',$currentMethod);
		//$userMethod = get_user_meta($userid,'currentMethod',true);
		return $response;
	}

	function setUserEmail($userid,$email){
		$response= update_user_meta($userid,'email',$email);
		//$userMethod = get_user_meta($userid,'currentMethod',true);
		return $response;
	}

	function getUserEmail($userid){
		$userEmail = get_user_meta($userid , 'email',true);
		return $userEmail;

	}
}