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
echo "You are logged in as Student username is ".$id;


}
public function x(){

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