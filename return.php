<?php
    session_start();
	require_once ('main.php');
   $s=unserialize($_SESSION['s']);
   $s->x();
    
  
   // echo "hi";
	//new Student($_SESSION['user']);



?>