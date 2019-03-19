<?php
	/**
	 * Created by PhpStorm.
	 * User: brorm
	 * Date: 03-12-2017
	 * Time: 01:27
	 */

	//check if it's an ajax request, show data if it is.
	if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
	{
		$limit = "";

		if(isset($_POST["limit"]))
		{
			$limit = $_POST["limit"];
		}

		//If it is an ajax request
		$data = array("limit" => $limit);

		$jsonString = json_encode($data);

		$uri = "http://lightcontrollerwebservice20171205094253.azurewebsites.net/Service1.svc/roomlight/limit/" . $limit;

		$ch = curl_init($uri);

		// curl is good for more complex operations than just plain GET
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonString);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


		// TRUE to return the transfer as a string of the return value of curl_exec() instead of outputting it directly.
		$httpheader = array('Content-Type: application/json', 'Content-Length: ' . strlen($jsonString));
		curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);

		$jsonData = curl_exec($ch);

		$returnTimer = json_decode($jsonData, true);
		echo $returnTimer;

		//$bookArray = array($createBook);

		/*echo "Author: " . $bookArray -> Author . "\nTitle " . $bookArray -> Title . "\nPublisher: "
			 . $bookArray -> Publisher
			 . "\nPrice: "
			 . $bookArray -> Price;*/
	}
?>