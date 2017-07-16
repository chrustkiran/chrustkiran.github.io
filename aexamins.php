<?php 
session_start();
$conn = mysqli_connect("localhost","root","","user") or die($conn);
//$id = mysqli_real_escape_string($conn,$_SESSION['id']);
//$db = mysqli_query($conn,"SELECT * FROM user where username='$id'");
//$arr = mysqli_fetch_array($db);
//$c = $arr['class'];
$cla = $_REQUEST['cla'];
$clas = $cla;
$cn = (int)$cla;
//$_SESSION['c'] = $cn;
$db1 = mysqli_query($conn,"SELECT * FROM timetable");
$exam  = array(array("Tamil","Maths","Religion"), array("Tamil","Maths","Religion"),array("Tamil","Maths","Religion"),array("Tamil","Maths","Religion"),array("Tamil","Maths","Religion"), array("Tamil","Maths","Religion"),array("Tamil","Maths","Religion"),array("Tamil","Maths","Religion"),array("Tamil","Maths","Religion"), array("Tamil","Maths","Religion","Tamil-Lit","IT","History","Science","English","Commerce"),array("Tamil","Maths","Religion","Music","IT","History","Science","English","Commerce"));
//$_SESSION['exam'] = serialize($exam);
$dbuser = mysqli_query($conn , "SELECT * from examinfo where class = '$clas'");
$arr = mysqli_fetch_array($dbuser);
$t1a = unserialize($arr['term1']);
$t2a = unserialize( $arr['term2']);
$t3a = unserialize($arr['term3']);
$tab = '';
$total1 = 0;
$total2 = 0;
$total3 = 0;
for($x=0; $x<count($exam[$cn-1]); $x++){

                    $tab =$tab. "<tr>";
                    $tab = $tab."<td>".$exam[$cn-1][$x]."</td>";
                    if($t1a[$exam[$cn-1][$x]]==''){
                        $tab =$tab. "<td><input type=date name=(term1".$exam[$cn-1][$x].") placeholder=".$exam[$cn-1][$x]."></td>";
                    }
                    else{
                        $tab =$tab. "<td><input type=date name=(term1".$exam[$cn-1][$x].") placeholder=".$exam[$cn-1][$x]."=".$t1a[$exam[$cn-1][$x]]." value=".$t1a[$exam[$cn-1][$x]]."></td>";
                        //$total1 = $total1 + $t1a[$exam[$cn-1][$x]];
                    }
                    if($t2a[$exam[$cn-1][$x]]==''){
                        $tab =$tab. "<td><input type=date name=(term2".$exam[$cn-1][$x].") placeholder=".$exam[$cn-1][$x]."></td>";
                    }
                    else{
                         $tab =$tab. "<td><input type=date name=(term2".$exam[$cn-1][$x].") placeholder=".$exam[$cn-1][$x]."=".$t2a[$exam[$cn-1][$x]]." value=".$t2a[$exam[$cn-1][$x]]."></td>";
                         //$total2 = $total2 + $t2a[$exam[$cn-1][$x]];
                    }
                    if($t3a[$exam[$cn-1][$x]]==''){
                        $tab =$tab. "<td><input type=date name=(term3".$exam[$cn-1][$x].") placeholder=".$exam[$cn-1][$x]."></td>";
                    }
                    else{
                         $tab =$tab. "<td><input type=date name=(term3".$exam[$cn-1][$x].") placeholder=".$exam[$cn-1][$x]."=".$t3a[$exam[$cn-1][$x]]." value=".$t3a[$exam[$cn-1][$x]]."></td>";
                         //$total3 = $total3 + $t3a[$exam[$cn-1][$x]];
                    }
                    $tab =$tab. "</tr>";

                }
/*
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
        <th id=none></th>
        <th id=term1>Term-1</th>
        <th id=term2>Term-2</th>
        <th id=term3>Term-3</th>
        
    </tr>
    
            ".$tab./* " 
            <tr> 
                <td> Total </td> 
                <td>".$t1a['total']."</td>
                <td>".$t2a['total']."</td>
                <td>".$t3a['total']."</td>
            </tr>
            <tr>
                <td> Rank </td>
                <td>". ((int)array_search($t1a['total'],$orank1))." </td>
                <td>". array_search($t2a['total'],$orank2)."</td>
                <td>". array_search($t3a['total'],$orank3)."</td>
            </tr>*/"
    </table>
     <p>
     <button name=save class=save>save</button>
     </p>"; 
    echo $x;
    ?>