<?php 
$classs = $_REQUEST['classs'];
$date1 = $_REQUEST['date1'];

 $conn = mysqli_connect("localhost","root","","user") or die($conn);
 $db = mysqli_query($conn,"SELECT * FROM attendance where class='$classs' and datee ='$date1'");
 $db1 = mysqli_query($conn,"SELECT * FROM user where class='$classs'");
 if(mysqli_num_rows($db)>0){
 	$row = mysqli_fetch_array($db);
 	foreach (unserialize($row['attend']) as $key => $value){
 			$count=1; 
 			 echo '<p>'.$count.".".$key." -";
 			 if($value == "1"){
        	 echo "<input type=checkbox name=".$key." value=1 checked> </p>";
        	}
        	else{
        		echo "<input type=checkbox name=".$key." value=1 > </p>";
        	}
       		 $count++;
        	
 	} 


 }
 else{
 	        while($array = mysqli_fetch_array($db1)){
 	        	if(substr($array['username'], -1)=="S" or substr($array['username'], -1)=="s"){
 			     $count=1; 
 			 echo '<p>'.$count.".".$array['username']." -";
 			
        	 echo "<input type=checkbox name=".$array['username']." value=1 > </p>";
        	
        
       		 $count++;
        	
 	} 
 }}

 
  	echo "</p>
  <input type=submit name=save value=save>";

 ?>
      
 

 