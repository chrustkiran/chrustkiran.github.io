
<!DOCTYPE html>
<html>
<head>
<style>
p{
font-family: Arial;
font-size : 20px;
}


.container{
     overflow: hidden;
    background-color: #2eada4;
    font-family: Arial;

     
}

.container a{
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

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
}

.container a:hover, .dropdown:hover {
    background-color: #195c63;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #195c63;
}

.dropdown:hover .dropdown-content {
    display: block;
}



.side{
  
  border-left: thick solid #2eada4;
  border-right: 3px solid #2eada4;
  //position: fixed;
  //padding: 100%;
  height:800px;
  width: 12.5%;
  overflow: auto;
 float: left;

}
.side1{
  
  border-left: 3px solid #2eada4;
  border-right: thick solid #2eada4;
  height: 100%; min-height: 100%;
  height:800px;
  width: 12.5%;
 float: right;

}
</style>
</head>
<body>

<div class="container">
  <a href="home.php">Home</a>
  <a href="stimetable.php">Time Table</a>
  <div class="dropdown">
    <button class="dropbtn">Details</button>
    <div class="dropdown-content">
      <a href="sattend.php">Attendance</a>
      <a href="sschool.php">School</a>
      <a href=classstu.php>Class</a>
    </div>
  </div> 
   <div class="dropdown">
    <button class="dropbtn">Exam</button>
    <div class="dropdown-content">
      <a href="studentexam.php">Marks report</a>
      <a href="sexam.php">Details</a>
    
    </div>
  </div> 
 
<a href="message.php">Messages</a>
<a href="sclub.php">Club</a>
<div class="right">
<a href="sacc.php">Accounts</a>
<a href="logout.php" >logout</a>
</div>
</div>
<div class="side">
</div>
<div class="side1"></div>




</body>
</html>