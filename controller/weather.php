<?php
	/**
	 * Created by PhpStorm.
	 * User: brorm
	 * Date: 06-12-2017
	 * Time: 09:03
	 */

	//check if it's an ajax request, show data if it is.
	if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
	{
		$uri      = "http://lightcontrollerwebservice20171205094253.azurewebsites.net/Service1.svc/weather";
		$jsonData = file_get_contents($uri);
		//print_r($jsonData);

		//Parse JSON to Array.
		$weather = json_decode($jsonData, true);

		//Get last element of the array
		//$lastLumen = end($temperature);

		/*$longDate = $lastLumen["Date"];

		$match = preg_match('/\/Date\((\d+)([-+])(\d+)\)\//', $longDate, $shortDate);

		$timestamp = $shortDate[1] / 1000;
		$operator  = $shortDate[2];
		$hours     = $shortDate[3] * 36; // Get the seconds

		$datetime = new DateTime();

		$datetime -> setTimestamp($timestamp);
		$datetime -> modify($operator . $hours . ' seconds');

		$date = $datetime -> format('j/m');
		$time = $datetime -> format('H:i');*/


		//Print out the 5 first elements of the array "temperature"
		$outputTemperature = array_slice($weather, 0, 5);
		foreach($outputTemperature as $temp)
		{
			echo "<td> " . $temp["Vejret"] . "</td>";
		}
	}