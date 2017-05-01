<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="./one.css" />
<link rel="stylesheet" type="text/css" href="Login/login.css" />
</head>
<body>
<header>
   <nav class="cont">

   <h1 class="clsh1"><img src="carlogo.jpg" class="img" />CAR PULLING </h1>
   <nav class="cls2" onclick="fun()">Home</nav>
   <nav class="cls2" data-toggle="modal" data-target="#myModal1">SignUp</nav>
   <nav class="cls2" data-toggle="modal" data-target="#myModal2">Login</nav>
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


<section class="sec1">
    <nav>
	<select name="select1" class="sec11">
	  <option>Current City</option>
	  <option>Vellore</option>
	  <option>Chennai</option>
	  <option>Banglore</option>
	   <option>Patna</option>
	</select>
	<input type="date" class="date1" />
	<input type="text" name="box1" class="inpt1" placeholder="From" />
	<input type="text" name="box2" class="inpt1" placeholder="To" />
	<input type="submit" class="btn1" value="Search" onclick="fun()"/>
	</nav>
</section>

<!-- login -->
<div  class="modal fade" id="myModal2" role="dialog"  >
    <div class="modal-dialog" style="background-color: brown;">
     <form method="post">
         <h1>Login Form</h1>
         <input type="text" name="uname" placeholder="Username" required>
         <input type="password" name="pwd" placeholder="Password" required>
         <button type="submit" name="login">Sign In</button>          
     </form> 
    </div>
</div>

<!-- SignUp -->
<div  class="modal fade" id="myModal1" role="dialog"  >
    <div class="modal-dialog" style="background-color: brown; height: 455px;">
     <form style="height: 462px;" method="post" action="">
         <h1>SignUp Form</h1>
         <input type="text" name="uname" pattern="^[a-zA-Z0-9 ]{3,20}$" title="Min 3 Max 20 Chars" placeholder="FullName" required />
		 <input type="email" name="eml" placeholder="Email_id" required />
		 <input type="text" name="cty" placeholder="City" required />
		 <input type="text" name="pin" placeholder="Zip Code" required />
         <input type="password" name="pwd" placeholder="Password" required />
		  <input type="text" name="mob" placeholder="Mobile Number" required />
         <button type="submit" name="signup">Sign In</button>          
</form> 
    </div>
</div>

<script>

function fun()
{
	alert("It seems that you haven't Loged In Plz Login");
}

</script>
<footer class="footer">
<section>
    &copy; Savan Morya and Groups
  </section>
</footer>

<?php
if(isset($_POST['login']))
{
	
	$user = $_POST['uname'];
	$pass = $_POST['pwd'];
	
    $link1=mysqli_connect("localhost","root","","car_pull");
	$qry1="select * from user";
	$result1=mysqli_query($link1,$qry1);
 while($res1=mysqli_fetch_row($result1))
{
	if($res1[1] == $user && $res1[4] == $pass)
	{
		header("Location: home.php?user=$res1[0]");
	}else
	{

?>
<script>
alert("Invalid User");
</script>
<?php
}
}		
}
?>

<?php
if(isset($_POST['signup']))
{
	$name= $_POST['uname'];
	$eml = $_POST['eml'];
	$city = $_POST['cty'];
	$pin = $_POST['pin'];
	$pwd = $_POST['pwd'];
	$mob = $_POST['mob'];
$link1=mysqli_connect("localhost","root","","car_pull");
$sql="insert into user values('$name','$eml','$city','$pin','$pwd','$mob')";
$result1=mysqli_query($link1,$sql);
if(!$result1)
{
?>
<html>
<body>
<script>
 alert("There Is Some Problem");
 header("Location: one.php");
</script>

<?php
}
else
{
?>
<script>
 alert("Successful Login Now");
</script>
<?php
}
}
?>
</body>
</html>

</body>
</html>