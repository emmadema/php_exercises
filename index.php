<h1>Hello World!</h1>

<?php
	$place = "classroom";
	$concatenation = "Hello" . " " . $place;
	echo $concatenation;
?>

<br>
<br>

<?php
	for ($x = 0; $x <= 20; $x++) {
		echo "Number: $x <br>";
	}
?>

<br> 

<?php
	$name= "Emma";
?>

<?php
	if (strlen($name)<4){
	echo "Name to short";
	} elseif (strlen($name)>=4){
	echo "Name long enough";
	} else {
	echo "Name has no length";
	}
?>

<br>
<br>

<?php
	class Animal {
		public $color = "black";
		public $name = "Toad Money Young Money";
		public $type = "Ragamuffin";
	}

	class Cat extends Animal {
		public $lifestyle = "sleep all day";
		public $currentMood = "grumpy";
		public $favSleepingSpot = "dirty laundry";
	}

	$toad = new Cat();
	print_r($toad);
?>

<br>
<br>

<?php  
	$add = 1+1;
	$minus = 2-1;
	$times = 2*2;
	$divide = 42 / 2;

	echo "Answer is: $add <br>";
	echo "Answer is $minus <br>";
	echo "Answer is $times <br>";
	echo "Answer is $divide <br>"; 
?>

<br>
<br>

<?php 
	$num = array(1, 2, 3, 4, 5, 6, 7);
	var_dump($num);
?>

<br>
<br>

<?php 
	$people = array("Emma" => 26, "Mike" => 26, "Malcom" => 4);
	echo "Emma is " . $people['Emma'] . " years old. <br>";

	echo "Mike is " . $people['Mike'] . " years old. <br>";

	echo "Malcom is " . $people['Malcom'] . " years old, and a cat.";
?>

