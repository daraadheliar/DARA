<?php
require_once('FormModel.class.php');

class FormController{
	public $modelData;
	
	public function __construct(){
		$this->modelData = new FormModel();
	}
	
	public function getInput(){		
		require_once('ViewForm.class.php');
	}
	
	public function getSave(){
		$this->modelData->setData();
		$counter = $this->modelData->getData();
		require_once('ViewGreeting.class.php');
	}
}
?>