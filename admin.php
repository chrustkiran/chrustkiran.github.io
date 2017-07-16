<!DOCTYPE html>
<html>
<head>

<style>

}

p{
font-family: Arial;
font-size : 20px;
}


.container{
     overflow: hidden;
    background-color: #2eada4;
   font-family: "Comic Sans MS", cursive, sans-serif;

     
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
body{
  
}
</style>
</head>
<body>

<div class="container">
  <a href="ahome.php">Home</a>
  <a href="atimetable.php">TimeTable</a>
  <div class="dropdown">
    <button class="dropbtn">Assign</button>
    <div class="dropdown-content">
      <a href="astudent.php">Student</a>
      <a href="ateacher.php">Teacher</a>
      <a href=aclass.php>Class</a>
      <a href="aclub.php">Club</a>
    </div>
  </div> 
  <a href="adetail.php">Details</a>
<a href="anotify.php">Notify</a>
<div class="dropdown">
    <button class="dropbtn">Update</button>
    <div class="dropdown-content">
      <a href="ateachup.php">Teacher</a>
      <a href="aschool.php">School</a>
      <a href="aclubup.php">Club</a>
      <a href="aexam.php">Exam</a>
    
    </div>
  </div> 
<div class="right">
<a href="aacc.php">Accounts</a>
<a href="logout.php" >logout</a>
</div>
</div>
<div class="side">
</div>
<div class="side1"></div>




</body>
</html>