<?php
include_once('student.php');
session_start();
//$exam = unserialize($_SESSION['exam']);
$conn = mysqli_connect("localhost","root","","user") or die($conn);
$id = mysqli_real_escape_string($conn,$_SESSION['id']);
$db = mysqli_query($conn,"SELECT * FROM user where username='$id'");
$arr = mysqli_fetch_array($db);
$c = $arr['class'];
$cn = (int)substr($c, 0,-1);

$exam  = array(array("Tamil","Maths","Religion"), array("Tamil","Maths","Religion"),array("Tamil","Maths","Religion"),array("Tamil","Maths","Religion"),array("Tamil","Maths","Religion"), array("Tamil","Maths","Religion"),array("Tamil","Maths","Religion"),array("Tamil","Maths","Religion"),array("Tamil","Maths","Religion"), array("Tamil","Maths","Religion","Tamil-Lit","IT","History","Science","English","Commerce"),array("Tamil","Maths","Religion","Music","IT","History","Science","English","Commerce"));


$user = $id;

$dbuser = mysqli_query($conn , "SELECT * from examinfo where class = '$cn'");
$arr = mysqli_fetch_array($dbuser);
$t1a = unserialize($arr['term1']);
$t2a = unserialize( $arr['term2']);
$t3a = unserialize($arr['term3']);
$tab = '';
for($x=0; $x<count($exam[$cn-1]); $x++){

                    $tab =$tab. "<tr>";
                    $tab = $tab."<td>".$exam[$cn-1][$x]."</td>";
                    if($t1a[$exam[$cn-1][$x]]==''){
                        $tab =$tab. "<td>-</td>";
                    }
                    else{
                        $tab =$tab. "<td>".$t1a[$exam[$cn-1][$x]]."</td>";
                    }
                    if($t2a[$exam[$cn-1][$x]]==''){
                        $tab =$tab. "<td>-</td>";
                    }
                    else{
                         $tab =$tab. "<td>".$t2a[$exam[$cn-1][$x]]."</td>";
                    }
                    if($t3a[$exam[$cn-1][$x]]==''){
                        $tab =$tab. "<td>-</td>";
                    }
                    else{
                         $tab =$tab. "<td>".$t3a[$exam[$cn-1][$x]]."</td>";
                    }
                    $tab =$tab. "</tr>";

              }/*  
$rank1 = array();
$rank2 = array();
$rank3 = array();
$db_rank = mysqli_query($conn , "SELECT * from user where class = '$c'");
while($row = mysqli_fetch_array($db_rank)){
    if(substr($row['username'],-1)=='S' or substr($row['username'],-1)=='s' ){
        $r = $row['username'];
        $db_ra = mysqli_query($conn,"SELECT * from exam where username='$r'");
        $row_rank = mysqli_fetch_array($db_ra);
        $rank1[] = unserialize($row_rank['term1'])['total'];
        $rank2[] = unserialize($row_rank['term2'])['total'];
        $rank3[] = unserialize($row_rank['term3'])['total'];
    }
}

arsort($rank1);
arsort($rank2);
arsort($rank3);
$ra1 = 1;
$ra2 = 1;
$ra3 = 1;
foreach ($rank1 as $key => $value){
    $orank1[$ra1] = $value;
    $ra1++;
}
foreach ($rank2 as $key => $value){
    $orank2[$ra2] = $value;
    $ra2++;
}
foreach ($rank3 as $key => $value){
    $orank3[$ra3] = $value;
    $ra3++;
}
*/
$x = "<table name=exta >
    <tr class=title>
        <th id=none> </th>
        <th id=term1>Term-1</th>
        <th id=term2>Term-2</th>
        <th id=term3>Term-3</th>
        
    </tr>
    
            ".$tab.  /*  
             <tr> 
                <th> Total </th> 
                <th>".$t1a['total']."</th>
                <th>".$t2a['total']."</th>
                <th>".$t3a['total']."</th>
            </tr>
            <tr>
                <th> Rank </th>
                <th>". ((int)array_search($t1a['total'],$orank1))." </th>
                <th>". array_search($t2a['total'],$orank2)."</th>
                <th>". array_search($t3a['total'],$orank3)."</th>
            </tr>
  
   */ "</table>";
    //session_start();
   // $_SESSION['x'] = $x;
   // echo $x;
    ?>
 
 <!DOCTYPE html>
 <html>
 <head>
     <title></title>
         <style type="text/css">
     table {
   margin-top: 50px;
    width: 60%;

}

td,th {
    height: 50px;
    vertical-align: bottom;
    text-align: center;
}
a{
    float: right;
}
h1{
    margin-left: 40%;
}
body{
    color: #2eada4;
   font-family: "Comic Sans MS", cursive, sans-serif;
}
 </style>
 </head>
 <body>
  <div  id='HTMLtoPDF'>
    <h1>Exam details for <?php echo $cn; ?> </h1>
        <?php echo $x; ?>
    </div>

 </body>
 </html>