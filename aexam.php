<?php
include_once('admin.php');
session_start();
$conn = mysqli_connect("localhost","root","","user") or die($conn);
$id = mysqli_real_escape_string($conn,$_SESSION['id']);
$db = mysqli_query($conn,"SELECT * FROM user where username='$id'");
$arr = mysqli_fetch_array($db);
$c = $arr['class'];

$cn = (int)substr($c, 0,-1);
$_SESSION['c'] = $cn;
$db1 = mysqli_query($conn,"SELECT * FROM timetable ");
$exam  = array(array("Tamil","Maths","Religion"), array("Tamil","Maths","Religion"),array("Tamil","Maths","Religion"),array("Tamil","Maths","Religion"),array("Tamil","Maths","Religion"), array("Tamil","Maths","Religion"),array("Tamil","Maths","Religion"),array("Tamil","Maths","Religion"),array("Tamil","Maths","Religion"), array("Tamil","Maths","Religion","Tamil-Lit","IT","History","Science","English","Commerce"),array("Tamil","Maths","Religion","Music","IT","History","Science","English","Commerce"));
$_SESSION['exam'] = serialize($exam);

 ?>
<!DOCTYPE html>
<html>
<head>

	<title>Examination</title>

   
	<style type="text/css">
     label{
       
        margin-left: 400px;
    }
    label,select{
        margin-top: 50px;
    }

table {
   margin-top: 50px;
    width: 60%;

}

td {
    height: 50px;
    vertical-align: bottom;
    text-align: center;
}
a{
    float: right;
}
input{
    height:100%;
    width: 50%;
    text-align: center;
    //border: none;
}
.save{
    width: 100px;
    margin-left: 700px;
    border-radius: 50px;
    height:35px;
    background-color:#2eada4;
}
.save :hover{
    background-color: black;
    font-size: 20px;
}
#inputs,input,select,label{
    color:#2eada4;
    font-family: "Comic Sans MS", cursive, sans-serif;
    border-radius: 50px; 
    border-color: #2eada4;
}   
    </style>


<script type="text/javascript">
    function view(){

        
        var val = document.getElementById('class').value;
        if(val != "index"){
            var xml = new XMLHttpRequest();
        xml.onreadystatechange = function(){
            if(this.readyState==4 && this.status==200){
                document.getElementById('inputs').innerHTML = this.responseText;
            }
        };
        xml.open('GET','aexamins.php?cla='+val,true);
        xml.send();
    }
        else{
             document.getElementById('inputs').innerHTML = "Results will be appeared here!";
        }
    }

</script>
</head>
<body>


<form name="students" action="aexampro.php" method="POST">
<label>Student:&nbsp</label>
<select name='class' id='class' onchange="view()" >
    <option value="index">Class</option>
   <?php 
   $classes = array();
   while($arr = mysqli_fetch_array($db1)){
                if(!in_array(substr($arr['class'],0,-1), $classes)){
                    $classes[] = substr($arr['class'],0,-1);
                    echo "<option value=".substr($arr['class'],0,-1).">".substr($arr['class'],0,-1)."</option>";
                }
            }
   
   
   ?>
</select>

  



<div id ='inputs'>
    Results will be appeared here!
</div>
<!--
<form name="ta" action="texampro.php" method="POST">


<table name="exta" >
    <tr class="title">
    	<th id="term1">Term-1</th>
    	<th id="term2">Term-2</th>
    	<th id="term3">Term-3</th>
    	
    </tr>
    <?php
              /*  for($x=0; $x<count($exam[$cn-1]); $x++){

                    echo "<tr>";
                    echo "<td><input type=text name=(term1".$exam[$cn-1][$x].") placeholder=".$exam[$cn-1][$x]."></td>";
                    echo "<td><input type=text name=(term2".$exam[$cn-1][$x].") placeholder=".$exam[$cn-1][$x]."></td>";
                    echo "<td><input type=text name=(term3".$exam[$cn-1][$x].") placeholder=".$exam[$cn-1][$x]."></td>";
                    echo "</tr>";

                }

*/

     ?>
  
    </table>
   
    <input type="submit" id="save" value="save">
    <a href="" onclick="save()">save</a>
  </form> -->

<!--<input type="submit" name="save" value="save" id='save'>-->

</form>


</body>
</html>