<!DOCTYPE html>
<html>
<head>
	<title>3X + 1</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form method="post">
			<h1>Made by <a href="http://adeyinka.000webhsotapp.com" style="text-decoration: none;">Adetunji Adeyinka</a></h1>
			<div class="d-flex flex-row">
				<h1>Input any number: </h1>
				<input class="p-2" type="number" name="number" style="border-radius: 10px; margin-left: 5px;">
				<button class="p-2 ml-5" name="submit_btn" style="border-radius: 10px;">Submit</button>
				<br>
			</div>
				<?php 
					echo "If the number is odd multiply by 3 then add 1.";
					echo "<br>";
					echo "If the number is even divide by 2.";
					echo "<br>";
					echo "Odd Number Equations are bold while Even Numbeer Equations are bold and italised.";
					echo "<br>";
					if (isset($_POST['submit_btn'])) {
						$num = $_POST['number'];
						echo "<br>";
						echo "Your Number: $num";
						echo "<br>";
						while ($num > 1) {
							echo "<br>";
							if ($num % 2 == 0) {
								echo "$num/2" ;
								echo ":  ";
								$num = $num/2;
								echo "<b><i>$num</i></b>";
								echo "<br>";
							}
							else{
								echo "($num x 3) + 1";
								echo ":  ";
								$num = (3*$num)+1;
								echo "<b>$num</b>";
								echo "<br>";
							}
							if ($num == 1) {
								echo "<br>";
								echo "<h2>End of Solution 😉</h2>";
								echo "<h3>Try Another Number 👇🏿</h3>
									<div class='d-flex flex-row'>
										<h4>Input any number: </h4>
										<input class='p-2' type='number' name='number' style='border-radius: 10px; margin-left: 5px;'>
										<button class='p-2 ml-5' name='submit_btn' style='border-radius: 10px;'>Submit</button>
										<br>
									</div>";
							}
						}
					}
				?>
		</form>
	</div>
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap.min.js"></script>
</body>
</html>