<?php

class Teacher{
       public $id;
	function __construct($id){
                $this->id = $id;
                $this->x();
//echo "You are logged in as Teacher username is ".$_SESSION['user'];
		//$this->includee();

	}
	public function x(){


		$_SESSION['id']=$this->id;
    header('Location:thome.php');
	}




}
class Student {
public $id;
 function __construct($id){

$this->id = $id;

$this->x();


}

public function x(){

$_SESSION['id'] = $this->id ;
header('Location:home.php');


}


}



class Admin{
public $id;

function __construct($id){
   $this->id = $id;
   $this->x();

}
function x(){
  $_SESSION['id'] = $this->id ;
  header('Location:ahome.php');


}

}
class Parentt{
  public $id;
  function __construct($id){
    $this->id = $id;
    $this->x();
  }
  function x(){
  $_SESSION['id'] = $this->id ;
  header('Location:phome.php');


}

}



class TimeTable{
      public $classs;
  function generate($classs){
      $this->classs = $classs;
      
$connection = new Connection();
$conn = $connection -> conn();
      $db = mysqli_query($conn,"SELECT * from timetable where class = '$classs'");
      $dba = mysqli_fetch_array($db);
      $timea = unserialize($dba['timetable']);
      $y2 = "<h1>".$classs."</h1>";
      $y1="";
      $y= "<table>";
      $y = $y."<tr>";
            $y = $y."<th></th>";
            $y = $y."<th>Monday</th>";
            $y = $y."<th>Tuesday</th>";
            $y = $y."<th>Wednesday</th>";
            $y = $y."<th>Thurshday</th>";
            $y = $y."<th>Friday</th>";
          $y = $y."</tr>";
          
              for($x=0;$x<8;$x++){
                
                $y1 = $y1. "<tr>";
                 $y1 =$y1. "<td> period-".($x+1). "</td>";
                 for($r=0;$r<5;$r++){ 
                  $y1 = $y1. "<td>".$timea[$x][$r]."  </td>"; 
                } 
                $y1 = $y1. "</tr>";
              }
              

      //<div class=save><?php echo $str;</div>

echo $y2.$y.$y1;
  }



}
class Classes{

  public $timetable;
  private $cl;
  private $teach;
  
  //public $conn;
  
 function view(){

   $str="";
   $no = 1;
   $classes = array();
$connection = new Connection();
$conn = $connection -> conn();
    $db1 = mysqli_query($conn , "SELECT * from timetable");
    while($row = mysqli_fetch_array($db1)){
        $classes[] = $row['class'];
       // $str = $str.$no." . ". $row['class']."</br>";
        //$no++;
    }
    
    asort($classes);
    
    foreach ($classes as $key => $value) {
        $str = $str.$no." . ". $value."</br>";
        $no++;
    }
    echo $str;
 }
  
  function create($cl,$teach,$timetable){
        $this->cl = $cl;
        $this->teach = $teach;
        $this->timetable = $timetable;
        if(ctype_digit( substr($cl, 0,-1)) ){
$connection = new Connection();
$conn = $connection -> conn();
        $db = mysqli_query($conn,"INSERT into timetable (class,teacher,timetable) values ('$cl','$teach','$timetable')");
        
       // header("Location:aclass.php");
      }
      else{
        echo "Enter Valid class";
      }
  }

}
class Connection{
    public  $dbhost = "localhost";
    public $dbname = "root";
    public  $dbpw = "";
    public $dbuser = "user";
  public function conn(){
    $conn = mysqli_connect($this->dbhost ,$this->dbname ,$this->dbpw , $this->dbuser ) or die($conn);
    return $conn;

  }


}

class Notification{
 
  function notifi($reciever){
     session_start();
      $connection = new Connection();
    $conn = $connection -> conn();
    $db = mysqli_query($conn , "SELECT * from notify ORDER BY ind DESC ");
    $id  = $_SESSION['id'];
    $noti ="";
    $db1 = mysqli_query($conn,"SELECT * FROM user where username='$id'");
  $arr = mysqli_fetch_array($db1);
  $c = $arr['class'];
    while($row = mysqli_fetch_array($db)){
      if($row['reciever'] == $reciever ){
      $noti.="<p>".$row['message']."<small style=float:right;  > To you all [". $row['date_']. "] </small> </p>";
    }
    elseif ( $row['reciever'] == $c ) {
      $noti.="<p>".$row['message']."<small style=float:right;>  To ".$c." only [". $row['date_']. "]</small>  </p>";
    }
    elseif( $row['reciever'] == "ev"){
      
      $noti.="<p>".$row['message']."<small style=float:right;> To everyone![". $row['date_']. "] </small>  </p>";

    }
}
echo "<table>".$noti."</table>";

  }
}


class Club{

  
  //public $conn;
  
 function view(){

   $str="";
   $no = 1;
   $club = array();
$connection = new Connection();
$conn = $connection -> conn();
    $db2 = mysqli_query($conn , "SELECT * from club");
    while($row = mysqli_fetch_array($db2)){
        $club[] = $row['club'];
       // $str = $str.$no." . ". $row['class']."</br>";
        //$no++;
    }
    
 
    foreach ($club as $key => $value) {

        $str = $str.$no." . ". $value."</br>";
        $no++;
    }

    echo $str;
   
 }

 } 
 ?>

     
    