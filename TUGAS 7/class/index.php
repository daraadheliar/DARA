<?php
require_once 'FormController.class.php';

$data = new FormController();

if(!isset($_GET['do'])){
	$data->getInput();
}else{
	$data->getSave();
}	
?>