<?php
//vaikev��rtus kui nimi puudub
function hello($name="tundmatu kasutaja"){
	echo "hello".$name;
}

$user="Siim";
hello($user);
?>