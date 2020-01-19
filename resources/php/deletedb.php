<?php
	$db = new mysqli('127.0.0.1','root','');
	$deletedb= $db->query("DROP DATABASE todoDb");
	
?>