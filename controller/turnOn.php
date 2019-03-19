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
		$status = "true";

		$data = array("status" => $status);

		$jsonString = json_encode($data);


		$uri = "http://lightcontrollerwebservice20171205094253.azurewebsites.net/Service1.svc/roomlight/" . $status;
		$ch  = curl_init($uri);

		// curl is good for more complex operations than just plain GET
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonString);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		// TRUE to return the transfer as a string of the return value of curl_exec() instead of outputting it directly.

		$httpheader = array('Content-Type: application/json', 'Content-Length: ' . strlen($jsonString));
		curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);

		$jsonData = curl_exec($ch);

		$returnStatus = json_decode($jsonData, true);
		echo $returnStatus;


		//$statusArray = array($createStatus);
		//	echo $statusArray -> status;


		/*echo "Author: " . $bookArray -> Author . "\nTitle " . $bookArray -> Title . "\nPublisher: "
			 . $bookArray -> Publisher
			 . "\nPrice: "
			 . $bookArray -> Price;*/
	}
?>