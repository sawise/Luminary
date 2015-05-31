<?php
require_once('../../config.php');
require_once(ROOT_PATH.'/includes.php');

$db = new Db();
$crypt = new Crypt();
$date = new DateTime($_POST['employmentdate']);
$personalid = $_POST['personalid'];

$userID = $db->createUser($_POST['firstname'],$_POST['lastname'], $crypt->simple_encrypt($personalid),$date->format('Y-m-d'));
	
if($userID){
	echo 'success';
}