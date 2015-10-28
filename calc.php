<?php

function multiply($x,$y){
	$answer=$x*$y;
	return $answer;
}

function divide($x,$y){
	$answer=$x/$y;
	return $answer;
}

$result=0;
$result=multiply(2,5);
var_dump($result);

$result=0;
$result=divide(18,5);
var_dump($result);

$multiply_result=$divide_result=0;

if(isset($_GET["operator"])){
	if ($_GET["operator"]=="multiply"){
		$multiply_result=multiply($_GET["number_one"],$_GET["number_two"]);
	}
	elseif ($_GET["operator"]=="divide"){
		$divide_result=divide($_GET["number_one"],$_GET["number_two"]);
	}
	
}

?>

<h1>korruta</h1>
<form>
	<input type="hidden" name="operator" value="multiply">
	<input name="number_one"> X <input name="number_two">
	=<?=$multiply_result;?>
	<input type="submit">
</form>

<h1>Jaga</h1>
<form>
	<input type="hidden" name="operator" value="divide">
	<input name="number_one"> / <input name="number_two">
	=<?php echo $divide_result;?>
	<input type="submit">
</form>