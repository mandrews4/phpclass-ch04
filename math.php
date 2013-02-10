<html>
  <head>
		<title>Simple Calculator</title>
		<style type="text/css" media="screen"> .number { font-weight: bold; }
</style>
	</head>
	<body>
		<?php

		// ch04 Homework - math.php

		// Retrieve the numbers, mathematical operation and number of decimal
		// places to display from the _POST array

		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$operation = $_POST['operation'];
		$decpoints = $_POST['decpoints'];

		$expression = "$num1 $operation $num2";

		// Evaluate the mathematical expression and display the result

		$result = eval("return($expression);");

		// Evaluate the result of the expression to the specified number of
		// decimal points.
		//
		// If the integer portion of the result is equal to the result, remove
		// the decimal points from the result.
		
		$result = number_format($result, $decpoints);
		$int_result = floor($result);
		if ($result == $int_result) {
			$result = $int_result;
		}

		print "<p>Result:<br />
			<span class=\"number\">$expression = $result</span></p>";

		?>
	</body>
</html>
