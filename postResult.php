<?php
$name = $_POST['name'];
$year = $_POST['year'];
$month = $_POST['month'];
$day = $_POST['day'];
$age = 2016 - $year + 1;

?>

<h1>Wow!</h1>
I know you, <?=$name?>!!<br>
Your birthday is <?=$year?>-<?=$month?>-<?=$day?><br>
your age: <?=$age?> years old.
