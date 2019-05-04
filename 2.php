<?php 

function validateUsername($username)
{
	// username jika benar
	if (preg_match("/^[a-z]+$/", $username) && strlen($username) == 8 ) {
		return true ;
	} 
	// username jika salah
	else {
		return false;
	}
}

var_dump(validateUsername('zeronull'));
var_dump(validateUsername('useroke'));

function validatePassword($password)
{
	// password jika benar
	if (preg_match("/^[A-Za-z0-9\\^'£$%^&*()}{@:'#~?><>,;@|\-=-_+-¬`]+$/", $password) && strlen($password) >= 8 ) {
		return true;
	} 
	// password jika salah
	else {
		return false;
	}
}

var_dump(validatePassword('qazW_123'));

 ?>