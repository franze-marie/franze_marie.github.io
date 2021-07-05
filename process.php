<?php
require_once 'function.php';
if($_SERVER['REQUEST_METHOD'] == "POST"){
	switch ($_POST['option']) {
		case 'Between':
			require_once 'between.php';
			break;
		default:
			require_once 'above_below.php';
			break;
	}
}
?>
