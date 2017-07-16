<?php
 include_once('teacher.php');
 date_default_timezone_set("Asia/Colombo");
 $time  = date("Y-m-d");

 session_start();
$conn = mysqli_connect("localhost","root","","user") or die($conn);
$id = mysqli_real_escape_string($conn,$_SESSION['id']);
$db = mysqli_query($conn,"SELECT * FROM user where username='$id'");
$arr = mysqli_fetch_array($db);
$c = $arr['class'];
 $db1 = mysqli_query($conn,"SELECT * FROM user where class='$c'");
 $db2 = mysqli_query($conn,"SELECT * FROM user where class='$c'");


 
 
?>
<!DOCTYPE html>
<html>

<head>
  <title>Attendance</title>

 

</head>
<script type="text/javascript">
  function printt(){
    
   // document.getElementById('printt').innerHTML = "check";
    var date1 = document.getElementById('date1').value;
      var classs = document.getElementById('class').value;
   //alert(date1+" "+classs);
    var xml = new XMLHttpRequest();

    xml.onreadystatechange = function(){
      if(this.readyState == 4 && this.status == 200){
        document.getElementById('printt').innerHTML = this.responseText;
      }
    }
    xml.open('GET','tattins.php?date1='+date1+'&classs='+classs,true)
    xml.send();
  }
</script>
<style type="text/css">
  .main{
    margin-top: 15px;
    margin-left: 400px;
    border-style: solid;
    border-width: 2px;
    padding: 70px;
    width: 500px;
    text-align: center;
    border-color: #2eada4;
   font-family: "Comic Sans MS", cursive, sans-serif;
   border-radius: 15px;
   color : #2eada4;

  }
input{
  border-style: solid;
    border-width: 2px;
text-align: center;
border-color: #2eada4;
font-family: "Comic Sans MS", cursive, sans-serif;
   border-radius: 15px;
color : #2eada4;

}
p,input{
  font-family: "Comic Sans MS", cursive, sans-serif;
  border-color: #2eada4;
}


</style>

<body> 
<form action="tattpro.php" method="POST">
<div class="main">
<h1> Attendance of <?php echo $c; ?></h1>
 <label>Pick a date :</label>
 <input type="date" name="date" id="date1"  value=<?php echo $time; ?> >
<a href="#" onclick="printt()">show</a>
 <input type="hidden" name="class" id="class" value=<?php echo $c; ?>>
  <div id="printt">
 
  </div> 
</div>
</form>
</body>
</html>
<!--
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
</head>
-->