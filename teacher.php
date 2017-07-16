
<!DOCTYPE html>
<html>
<head>

<style>
p{
font-family: Arial;
font-size : 20px;
}


.containerr{
     overflow: hidden;
    background-color: #2eada4;
    font-family: Arial;

     
}

.containerr a{
   text-decoration: none;
    float: left;
    font-size: 16px;
    color:white;
    text-align: center;
 padding: 14px 16px;
    

}
.right {
    
    float: right;

   
    
}

.dropdownn {
    float: left;
    overflow: hidden;
}

.dropdownn .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
}

.containerr a:hover, .dropdownn:hover {
    background-color: #195c63;
}

.dropdown-contentt {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-contentt a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-contentt a:hover {
    background-color: #195c63;
}

.dropdownn:hover .dropdown-contentt {
    display: block;
}

.side{
  
  border-left: 3px solid #2eada4;
  border-right: 3px solid #2eada4;
  height:800px;
  width: 250px;
 float: left;

}
.side1{
  
  border-left: 3px solid #2eada4;
  border-right: 3px solid #2eada4;
  height:800px;
  width: 250px;
 float: right;

}
</style>
</head>
<body>

<div class="containerr">
  <a href="thome.php">Home</a>
  <a href="ttimetable.php">Time Table</a>
  <div class="dropdownn">
    <button class="dropbtn">Details</button>
    <div class="dropdown-contentt">
      <a href="tattend.php">Attendance</a>
      <a href="tschool.php">School</a>
      <a href=tclass.php>Class</a>
    </div>
  </div> 
  <a href="tstuup.php">Update</a>
  <a href="texam.php">Exam</a>
<a href="tmessage.php">Messages</a>
<div class="right">
<a href="tacc.php">Accounts</a>
<a href="logout.php" >logout</a>
</div>
</div>
<div class="side">
</div>
<div class="side1"></div>




</body>
</html>