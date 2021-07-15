<?php
require_once("api.php");
require_once("../data/Application_Seminar_Manager.php");
	class Application_Seminar_api extends API{ 
		public function __construct() { 
	 
			parent::__construct();  
		}


		public function addSeminar()
		{
			$inputJSON = file_get_contents('php://input');
		 	$input = json_decode($inputJSON,TRUE);
			$Name= $input["Name"]; 
			$Desc= $input["Description"];
			$Branch= $input["Branch"];
			$application_Seminar_manager = new Application_Seminar_Manager;
			$result = $application_Seminar_manager->addSeminar($Name,$Desc,$Branch);
			echo parent::encodeToJson($result);
		}
		public function getReportByName()
		{
			$inputJSON = file_get_contents('php://input');
		 	$input = json_decode($inputJSON,TRUE);
			$Name= $input["Name"]; 
			$application_Seminar_manager = new Application_Seminar_Manager;
			$result = $application_Seminar_manager->getReportByName($Name);
			echo parent::encodeToJson($result);
		}
		public function deleteReport()
		{
			$inputJSON = file_get_contents('php://input');
		 	$input = json_decode($inputJSON,TRUE);
			$Name= $input["Name"]; 
			$application_Seminar_manager = new Application_Seminar_Manager;
			$result = $application_Seminar_manager->deleteReport($Name);
			echo parent::encodeToJson($result);
		}
		
	}
	$api = new Application_Seminar_api;
	$api->processApi();
?>
