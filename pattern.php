<!DOCTYPE html>
<html>
<head>
	<title> Pattern Design </title>
</head>
<body>

<h1>Patterns</h1>

<div>
	
	<h3>Simple pattern</h3>
<!-- In the below code the first loop is use for rows and second is use for column -->
	<?php 
	for($i=1;$i<=6;$i++){
		for($j=0;$j<$i;$j++){
			echo "*";
		}
		echo "<br/>";
	}
	 ?>

</div>
<!-- ------------------------------------------------------------------------------ -->
<div>
	<h3>upside down pattern</h3>
	<?php 
	for($i=1;$i<=6;$i++){
		for ($j=$i;$j<=6;$j++) { 
			echo "*";
		}
		echo "<br/>";
	}
	 ?>
	
</div>
<!-- ------------------------------------------------------------------------------ -->
<div>
	<h3>Simple numeric pattern</h3>
	<?php 
	for($i=1;$i<=6;$i++){
		for($j=0;$j<$i;$j++){
			echo $j + 1 ." "; //we have to give space after 1 
		}
		echo "<br/>";
	}
	 ?>
	
</div>
<!-- ------------------------------------------------------------------------------ -->
<div>
	<h3>Star Pattern</h3>

		<?php 
		echo "<pre>";
		for ($i=1; $i<8; $i++) 
		{
			for ($j=$i; $j < 8 ; $j++) 
				echo "&nbsp;&nbsp;";
				for ($j = 2 * $i - 1; $j > 0 ; $j--)  
					echo ("&nbsp;*");
					echo "<br>";
		}

		$n = 8;
		for ($i=8; $i>0; $i--) 
		{
			for ($j=$n-$i; $j > 0 ; $j--) 
				echo "&nbsp;&nbsp;";
				for ($j=2*$i-1; $j > 0 ; $j--)  
					echo ("&nbsp;*");
					echo "<br>";	
		}
		echo "</pre>";
		 ?>
</div>
<!-- ------------------------------------------------------------------------------ -->
</body>
</html>
