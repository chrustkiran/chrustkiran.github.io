<?php
	 include_once('teacher.php');
	 session_start();
	 $con = mysqli_connect('localhost','root','','user') or die($con);
	 $id=mysqli_real_escape_string($con,$_SESSION['id']);
	 $re = mysqli_fetch_array(mysqli_query($con,"SELECT * from user where username = '$id' "));
      $class = mysqli_real_escape_string($con,$re['class']);
      include_once('main.php');
      $t = new TimeTable();
     

     

 ?>
 <!DOCTYPE html>
<html>
<head>
     <title></title>
     <style type="text/css">
          table{
          margin-left: 50px;
     }
     table,th,td{
          border-style: solid;
          border-width: 2px;
          width: 70px;
           border-color: #2eada4;
          height: 10px;
     }
     #timeta{
          margin-left: 500px;
          font-family : "Comic Sans MS", cursive, sans-serif;
          color: #2eada4;
         
     }
     h1{
          margin-left: 250px;
     }

     </style>
</head>
<body>
<form id="frm1">
     <div id="timeta">
          <?php
               $t->generate($class);
          ?>
     </div>
</form>
</body>
</html>

