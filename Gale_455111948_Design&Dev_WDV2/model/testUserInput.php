<?php

//sanitise data sent via POST and SEND
function testUserInput($data) {
	$data = trim($data);
	$data= stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>