<?php 

// algemene functies
session_start();

function activeClass($pageName, $navigationName) {
	if(!is_null($pageName) & !is_null($navigationName)) {
		if ($pageName == $navigationName) {
			return "active";
		}
	}
}


?>