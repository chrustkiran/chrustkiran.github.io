<?php
$conn = mysqli_connect("localhost","root","","user") or die($conn);
$c = mysqli_query($conn,"SELECT * from timetable");
$arr = mysqli_fetch_array($c);
$arra = unserialize($arr['timetable']);
$class = $_REQUEST['class'];
$y1 = "";
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
								 	if($arr['timetable']==""){
									$y1 = $y1. "<td> <input type=text name=".$x.$r." > </td>"; 
								    }
								    else{
								    	$y1 = $y1. "<td> <input type=text name=".$x.$r." value=".$arra[$x][$r]." > </td>"; 
								    }

								} 
								$y1 = $y1. "</tr>";
							}
							
						


			$y2 = 	"
				</table>
				<button name=save id=btn>Save</button>
			";
			//<div class=save><?php echo $str;</div>

echo $y.$y1.$y2;
?>