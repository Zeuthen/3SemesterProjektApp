$(document).ready(function()
	{
		// Handler for .ready() called.
		$("#light-turn-on").click(function()
		{
			$.ajax({
				type   : 'POST',
				url    : 'controller/turnOn.php',
				success: function(data)
				{
					alert(data);
				}
			});
		});
		$("#light-turn-off").click(function()
		{
			$.ajax({
				type   : 'POST',
				url    : 'controller/turnOff.php',
				success: function(data)
				{
					alert(data);
				}
			});
		});

		$("#set-limit").submit(function(e)
		{
			/* stop form from submitting normally */
			e.preventDefault();

			$.ajax({
				type   : "POST",
				url    : "controller/setLimit.php",
				data   : $(this).serialize(),
				success: function(data)
				{
					alert(data);
				}
			});
		});

		$("#set-timer").submit(function(e)
		{
			/* stop form from submitting normally */
			e.preventDefault();

			$.ajax({
				type   : "POST",
				url    : "controller/setTimer.php",
				data   : $(this).serialize(),
				success: function(data)
				{
					alert(data);
				}
			});
		});

		function zeroPadded(val)
		{
			if(val >= 10)
			{
				return val;
			}
			else
			{
				return '0' + val;
			}
		}

		function timenow()
		{
			if(!$('#light-timer-turn-on').is(":focus") && !$('#light-timer-turn-off').is(":focus"))
			{
				d = new Date();
				$('#light-timer-turn-on')
					.val(d.getFullYear() +
						 "-" +
						 zeroPadded(d.getMonth() + 1) +
						 "-" +
						 zeroPadded(d.getDate()) +
						 "T" +
						 d.getHours() +
						 ":" +
						 d.getMinutes() +
						 ":00");
				$('#light-timer-turn-off')
					.val(d.getFullYear() +
						 "-" +
						 zeroPadded(d.getMonth() + 1) +
						 "-" +
						 zeroPadded(d.getDate() + 1) +
						 "T" +
						 d.getHours() +
						 ":" +
						 d.getMinutes() +
						 ":00");
			}
		}

		timenow();
		setInterval(timenow, 5000); // 5 * 1000 miliseconds

		function measure()
		{
			$.ajax({
				type    : 'GET',
				url     : 'controller/recentMeasurement.php',
				success : function(data)
				{
					$('.measureResult').html(data);
				},
				complete: function()
				{
					// Schedule the next request when the current one's complete
					setTimeout(measure, 60000);
				}
			});
		}

		measure();

		function temperature()
		{
			$.ajax({
				type   : 'GET',
				url    : 'controller/temperature.php',
				success: function(data)
				{
					$('#temperature').html(data);
				}
			});
		}

		temperature();

		function weather()
		{
			$.ajax({
				type   : 'GET',
				url    : 'controller/weather.php',
				success: function(data)
				{
					$('#weather').html(data);
				}
			});
		}

		weather();
	}
);