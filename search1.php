<?php

//$id=$_GET['nm'];

function search_results1($name1,$name2,$date,$user)
{  
$count = 1;
	$link = mysqli_connect("localhost","root","","car_pull");

	$result = "select * from `car` where `desc` like '%$name1%' or `desc` like '%name2'";
	$res1 = mysqli_query($link,$result);
	if(mysqli_num_rows($res1)===0)
	{
	echo "<h3   color='#1cff33'>Nothing Found!!!</h3><br><br><br><br><br><br><br><br><br><br><br>";
	}
	else
	while($res = mysqli_fetch_row($res1))
{
	$link1 = mysqli_connect("localhost","root","","car_pull");
	$usr = "select * from `user` where `email` = '$res[6]'";
	$ust1 = mysqli_query($link1,$usr);
	$row1 = mysqli_fetch_row($ust1);
echo "
<div class='output'>";
 echo $count++;
 echo "&nbsp &nbsp &nbsp";
 echo $res[1]; 
 echo "&nbsp &nbsp &nbsp";
 echo $date;
 echo "&nbsp &nbsp &nbsp";
 echo $res[5];
 echo "&nbsp &nbsp &nbsp &nbsp &nbsp";
 echo "<input type='submit' name='pick' value='pick' class='pick' onclick=\"myfun('$res[1]','$row1[0]','$row1[5]');\"/>";
 echo "</div>";
}
}
?>