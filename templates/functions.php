<?php 

// algemene functies

function printActiveClass($pageName, $navigationName) {
	if(!is_null($pageName) & !is_null($navigationName)) {
		if ($pageName == $navigationName) {
			print("\"navLink active\"");
		} else {
			print("\"navLink\"");
		}
	}
}


?>