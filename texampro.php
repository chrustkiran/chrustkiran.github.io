<?php
$conn = mysqli_connect("localhost","root","","user") or die($conn);
session_start();
$user = $_POST['student'];
if($user == 'index'){
	echo "Please select one!";
	header('location:texam.php');
}
else{
$cl = (int)$_SESSION['c'];
$t1examarr;
echo $cl.'</br>';

$arr = unserialize($_SESSION['exam']);
$total1 = 0;
$total2 = 0;
$total3 = 0;
for($y=0; $y<count($arr[$cl-1]); $y++){  
	//echo $arr[$cl-1][$y].':';
	//echo $_POST['(term1'.$arr[$cl-1][$y].')'];
	//echo '</br>';
	$t1examarr[$arr[$cl-1][$y]]=$_POST['(term1'.$arr[$cl-1][$y].')'];
	$total1 = $total1 + (int)$_POST['(term1'.$arr[$cl-1][$y].')'];
}
$t1examarr['total'] = $total1;
for($a=0; $a<count($arr[$cl-1]); $a++){  
//	echo $arr[$cl-1][$a].':';
//	echo $_POST['(term2'.$arr[$cl-1][$a].')'];
//	echo '</br>';
	$t2examarr[$arr[$cl-1][$a]]=$_POST['(term2'.$arr[$cl-1][$a].')'];
	$total2 = $total2 + (int)$_POST['(term2'.$arr[$cl-1][$a].')'];
}
$t2examarr['total'] = $total2;
for($b=0; $b<count($arr[$cl-1]); $b++){  
//	echo $arr[$cl-1][$b].':';
//	echo $_POST['(term3'.$arr[$cl-1][$b].')'];
//	echo '</br>';
	$t3examarr[$arr[$cl-1][$b]]=$_POST['(term3'.$arr[$cl-1][$b].')'];
	$total3 = $total3 + (int)$_POST['(term3'.$arr[$cl-1][$b].')'];
}
$t3examarr['total'] = $total3;
$t1 = serialize($t1examarr);
$t2 = serialize($t2examarr);
$t3 = serialize($t3examarr);
$db2 = mysqli_query($conn , "SELECT * from exam where username='$user'") or die("can't connect");
if(mysqli_num_rows($db2)==0){
$db = mysqli_query($conn , "INSERT into exam (username , term1,term2,term3) values ('$user','$t1','$t2','$t3')");
}
else{
	mysqli_query($conn,"UPDATE exam SET term1 = '$t1',term2 = '$t2' , term3='$t3' where username = '$user' ");
	echo "updated";
}
header('location:texam.php');
}
?>