
<?php
	$a=true;
	$b=12;
	$c=3;
	$name="Soham";
	$age=18;
	echo "Hello";
		// $answer=3.149;
		// echo "The answer is $answer,what was the question again?\n";
		// $x="12"+4;
		// echo $x
		// // String concatenation - (.)
		// // Identity (=== !==)
		// //ternary(?:)
		// $a=12;
		// $y=15+$a++;
		// echo $y
		// echo $x
	/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/
	print(123);
	print_r([1,2,3]);
	var_dump($b);
	var_export(12);	
	echo '<h1>' . $name . ' is ' . $age . ' years old</h1>';
	define('PIE',3.147);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<h1>Hello<?php print(' Soham'); ?></h1>
<h1>Hello <?= 'Soham ' ?></h1>
<h1><?php echo(PIE)?></h1>
</body>
</html>
