<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="./one.css" />
<link rel="stylesheet" type="text/css" href="Login/login.css" />
</head>
<body>
<?php $name = $_GET['nm'];

$link10=mysqli_connect("localhost","root","","car_pull");
	$qry10="select `email` from `user` where `name`='$name'";
	$result10=mysqli_query($link10,$qry10);
    $owner_id=mysqli_fetch_row($result10);
    $owner = $owner_id[0];
?>
<header>
   <nav class="cont">
   <h1 class="clsh1"><img src="carlogo.jpg" class="img" />CAR PULLING </h1>
   <a class="cls2" href="home.php?user=<?php echo $name;?>">Home</a>
   <a class="cls2" href="car.php?nm=<?php echo $name;?>">Car</a>
   <a class="cls2" href="user.php?nm=<?php echo $name;?>">User</a>
   <a class="cls2" href="http://localhost/se_lab/one.php" name="logout">Logout</a>
   </nav>
</header>
<div>
<a href="https://www.facebook.com/savan.morya" target="_blank">
<img src="logo/fb.png" alt="not found" style="position: fixed; top: 160px; right: -11px; width: 60px; height: 60px;"/>
</a>
<a href="https://twitter.com/savanmoyrya" target="_blank">
<img src="logo/tw.png" alt="not found" style="position: fixed; top: 220px; right: -11px; width: 60px; height: 60px;"/>
</a>
<a href="https://www.youtube.com/?gl=IN" target="_blank">
<img src="logo/youtube.png" alt="not found" style="position: fixed; top: 280px; right: -11px; width: 60px; height: 60px;"/>
</a>
<a href="https://login.skype.com/login?client_id=578134&redirect_uri=https%3A%2F%2Fweb.skype.com%2F" target="_blank">
<img src="logo/skype.png" alt="not found" style="position: fixed; top: 340px; right: -11px; width: 60px; height: 60px;"/>
</a>
</div>

<nav class="user1">
<?php

$link1=mysqli_connect("localhost","root","","car_pull");
	$qry1="select * from `car` where owner_id in (select `email` from `user` where `name`='$name')";
	$result1=mysqli_query($link1,$qry1);
	if(!mysqli_num_rows($result1))
		echo "You have not any car !<br>";
	else
	{
		$cnt = 0;
echo "<center><b>Name:</b> $name<br> </center>";
while($res1=mysqli_fetch_row($result1))
{ $cnt++;
 echo "<b>Car: $cnt<br></b><b>Car Number: </b>$res1[0]<br> <b>Car Name: </b>$res1[1]<br> <b>From:</b>$res1[3]<br><b>To:</b> $res1[4]<br><b>Time:</b> $res1[5]<br>";
 echo "<hr style='border: 1px solid red;'/>";
}
	}
echo"<a data-toggle=\"modal\" data-target=\"#myModal3\" class='addcar' href='#'>Add New Car</a>";
?>
</nav>
<div  class="modal fade" id="myModal3" role="dialog"  >
    <div class="modal-dialog" style="background-color: brown; height: 530px;">
     <form method="post" style="height: 530px;">
         <h1>CAR REGISTRATION</h1>
		 <input type="text" name="carnum" placeholder="Car_number" required />
         <input type="text" name="carnam" placeholder="Car Name" required />
         <input type="date" name="dat" required />
		 <input type="text" name="frm" placeholder="From" required />
		 <input type="text" name="to" placeholder="To" required />
		 <input type="text" name="tm" placeholder="Time like 4am" required />
		  <input type="text" name="desc" placeholder="Descreption" required />
         <button type="submit" name="addcar">Register</button>          
     </form> 
    </div>
</div>

<?php
if(isset($_POST['addcar']))
{
	$carnum = $_POST['carnum'];
	$carnam = $_POST['carnam'];
	$dat = $_POST['dat'];
	$from = $_POST['frm'];
	$to = $_POST['to'];
	$time = $_POST['tm'];
	$desc = $_POST['desc'];
	
	$link11=mysqli_connect("localhost","root","","car_pull");
$qry11="insert into `car` values($carnum,'$carnam','$dat','$from','$to','$time','$owner','$desc')";
	$result11=mysqli_query($link11,$qry11);
	if($result11)
	{
		?>
		<script>alert("Car Added successfully");</script>
		<?php
	}else
	{
		?>
		<script>alert("There is some problem");</script>
		<?php
	}
}

?>



<footer class='ftr'>
<section style="margin-bottom: -600px;">
    &copy; Savan Morya and Groups
</section>
</footer>
</html>