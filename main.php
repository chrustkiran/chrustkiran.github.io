<?php
class Teacher{
       public $id;
	function __construct($id){
                $this->id = $id;
echo "You are logged in as Teacher username is ".$_SESSION['user'];
		//$this->includee();

	}
	public function includee(){


		include "page.html";
	}




}
class Student {
public $id;
 function __construct($id){
$this->id = $id;

$this->x();


}
public function x(){
?> <!DOCTYPE html>
<html>
<head>
<style>
p{
font-family: Arial;
font-size : 20px;
}
img{
size : width:48px;height:48px;}
.container {
    overflow: hidden;
    background-color: #333;
    font-family: Arial;
}

.container a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

 .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
}

.container a:hover, .dropdown:hover .dropbtn {
    background-color: red;
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
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body>

<div class="container">
  <a href="message.php">Messages</a>
  <a href="#news">Time Table</a>
  <div class="dropdown">
    <button class="dropbtn">Details</button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div> 
  <a href="#news">My Profile</a>
</div>

<h3>Welcome <img src="data:image/png;base64,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" > </h3>
<p>.You are logged in as Student username is <?php echo $this->id; ?></p>

</body>
</html> <?php




}


}
class Parentt{
public $id;
function __construct($id){
$this->id = $id;
echo "You are logged in as Parent username is ".$_SESSION['user'];
}

}
class Admin{
public $id;
function __construct($id){
   $this->id = $id;
echo "You are logged in as Admin username is ".$_SESSION['user'];
}

}


 ?>
