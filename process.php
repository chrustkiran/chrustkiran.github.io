<?php


$conn = mysqli_connect("localhost","id1577001_userss","kiran123","id1577001_users") or die($conn);


if( isset($_POST['login']) ){
session_start();
$username = mysqli_real_escape_string($conn,$_POST["user"]);
$password = mysqli_real_escape_string($conn,($_POST["pass"]));
}
else{
//if(session_id()==''){session_start();}
$username = $_SESSION['userr'];
$password = $_SESSION['passs'] ;
}
$re = mysqli_query($conn,"SELECT * from user where username = '$username'and password = '$password'") or die("can't connect ".mysqli_error($conn));

 $count = mysqli_num_rows($re);
 $res = mysqli_fetch_array($re) ;
//if(($res['username']==$username && $res['password']==$password)|| $password=='123' ){
 if($count == 1){
        
	$_SESSION['user'] = $username;
        if($username[-1]=="t" or $username[-1]=="T"){
        require "main.php";
        new Teacher($username);}

        elseif($username[-1]=="s" or $username[-1]=="S"){
        require "main.php";
        new Student($username);}
        elseif($username[-1]=="p" or $username[-1]=="P"){
       require "main.php";
        new Parentt($username);
}
      }  

else{
       echo "Sorry!";
       echo $username;
       echo $password;
}
//}
//else
	//echo "Sorry dude!!!";


?>