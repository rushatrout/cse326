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
<?php $name = $_GET['nm'];?>
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
	$qry1="select * from user where name = '$name'";
	$result1=mysqli_query($link1,$qry1);
 while($res1=mysqli_fetch_row($result1))
{
 echo "<b>Name:</b> $name<br> <b>Email: </b>$res1[1]<br> <b>City: </b>$res1[2]<br> <b>ZipCode:</b>$res1[3]<br><b>Mobile:</b> $res1[5]<br><b>Password:</b> $res1[4]<br>";
 echo"<a data-toggle=\"modal\" data-target=\"#myModal1\" class='upd' href='#'>Update</a>";
}
?>

</nav>

<!--  Updation -->
<div  class="modal fade" id="myModal1" role="dialog"  >
    <div class="modal-dialog" style="background-color: brown; height: 469px;">
     <form style="height: 469px;" method="post" action="">
         <h1>Update Your Details</h1>
         <input type="text" name="uname" pattern="^[a-zA-Z0-9]{3,20}$" title="Min 3 Max 20 Chars" placeholder="FullName" required />
		 <input type="email" name="eml" placeholder="Email_id" required />
		 <input type="text" name="cty" placeholder="City" required />
		 <input type="text" name="pin" placeholder="Zip Code" required />
         <input type="password" name="pwd" placeholder="Password" required />
		 <input type="tel" name="mob" placeholder="Mobile Number" required />
         <button type="submit" name="signup">Update</button>          
</form> 
    </div>
</div>
<?php
if(isset($_POST['signup']))
{
	$nme= $_POST['uname'];
	$eml = $_POST['eml'];
	$city = $_POST['cty'];
	$pin = $_POST['pin'];
	$pwd = $_POST['pwd'];
	$mob = $_POST['mob'];
$link1=mysqli_connect("localhost","root","","car_pull");
$sql="update user SET name='$nme',email='$eml',city='$city',zipcode='$pin',pass='$pwd',mob='$mob' where name='$name'";
$result1=mysqli_query($link1,$sql);
if(!$result1)
{
?>
<html>
<body>
<script>
 alert("There Is Some Problem");
 header("Location: user.php");
</script>

<?php
}
else
{
?>
<script>
 alert("Your Profile Updated");
</script>
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