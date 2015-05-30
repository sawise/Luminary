<?php
require_once('../../config.php');
require_once(ROOT_PATH.'/includes.php');
$db = new Db(); 
$userID = $db->deleteUser($_POST['id']);	

if($userID){
	echo 'success';
}