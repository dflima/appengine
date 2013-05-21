<?php
require_once 'google/appengine/api/users/UserService.php' ;

use google\appengine\api\Users\User ;
use google\appengine\api\Users\UserService ;

$user = UserService::getCurrentUser() ;

if ( $user ) {
	echo 'Hello, ' . $user->getNickname() ;
}
else {
	header( 'Location: ' . UserService::createLoginURL( $_SERVER['REQUEST_URI'] ) ) ;
}