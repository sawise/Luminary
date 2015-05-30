<?php
require_once('../../config.php');
require_once(ROOT_PATH.'/includes.php');

$db = new Db();
$crypt = new Crypt();
$date = new DateTime($_POST['employmentdate']);
$personalId = $_POST['personalid'];

$userID = $db->updateUser($_POST['id'], $_POST['firstname'],$_POST['lastname'], $crypt->simple_encrypt($personalId),$date->format('Y-m-d'));
	
if($userID){
	echo 'success';
}