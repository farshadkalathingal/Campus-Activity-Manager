<?php
require_once("api.php");
require_once("../data/Application_Book_Manager.php");
	class Application_Book_api extends API{ 
		public function __construct() { 
	 
			parent::__construct();  
		}
		public function getAllBooks()
		{
			$application_Book_manager = new Application_Book_Manager;
			$result = $application_Book_manager->getAllBooks();
			echo parent::encodeToJson($result);
		}
		public function getBookByID()
		{
			$inputJSON = file_get_contents('php://input');
		 	$input = json_decode($inputJSON,TRUE);   
			$Book_id= $input["Book_id"];
			$application_Book_manager = new Application_Book_Manager;
			$result = $application_Book_manager->getBookByID($Book_id);
			echo parent::encodeToJson($result);
		}
		public function issueBook()
		{
			$inputJSON = file_get_contents('php://input');
		 	$input = json_decode($inputJSON,TRUE);   
			$Book_id= $input["Book_id"];
			$Reg_no= $input["Register_no"];
			$Date= $input["Date"];
			$application_Book_manager = new Application_Book_Manager;
			$result = $application_Book_manager->issueBook($Book_id,$Reg_no,$Date);
			echo parent::encodeToJson($result);
		}
		public function addBook()
		{
			$inputJSON = file_get_contents('php://input');
		 	$input = json_decode($inputJSON,TRUE);   
			$book_name= $input["Book"];
			$author= $input["Author"];
			$subject= $input["Subject"];
			$application_Book_manager = new Application_Book_Manager;
			$result = $application_Book_manager->addBook($book_name,$author,$subject);
			echo parent::encodeToJson($result);
		}
		public function submitBook()
		{
			$inputJSON = file_get_contents('php://input');
		 	$input = json_decode($inputJSON,TRUE);   
			$Book_id= $input["Book_id"];
			$Date= $input["Date"];
			$application_Book_manager = new Application_Book_Manager;
			$result = $application_Book_manager->submitBook($Book_id,$Date);
			echo parent::encodeToJson($result);
		}
		public function deleteBook()
		{
			$inputJSON = file_get_contents('php://input');
		 	$input = json_decode($inputJSON,TRUE);   
			$Book_id= $input["Book_id"];
			$application_Book_manager = new Application_Book_Manager;
			$result = $application_Book_manager->deleteBook($Book_id);
			echo parent::encodeToJson($result);
		}
		public function checkBook()
		{
			$inputJSON = file_get_contents('php://input');
		 	$input = json_decode($inputJSON,TRUE);   
			$Book_id= $input["Book_id"];
			$application_Book_manager = new Application_Book_Manager;
			$result = $application_Book_manager->checkBook($Book_id);
			echo parent::encodeToJson($result);
		}
	}
	
	$api = new Application_Book_api;
	$api->processApi();
?>
