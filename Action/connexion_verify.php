<?php
	if(!isset($_SESSION['auth']) || (!$_SESSION['auth'])){
		header('Location: Login.php');
}