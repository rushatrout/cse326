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
<?php
$user = $_GET['user'];
?>
<header>
   <nav class="cont"> 
   <h1 class="clsh1"><img src="carlogo.jpg" class="img" />CAR PULLING </h1>
   <a class="cls2">Home</a>
   <a class="cls2" href="car.php?nm=<?php echo $user;?>">Car</a>
   <a class="cls2" href="user.php?nm=<?php echo $user;?>">User</a>
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

<nav class="wlcm">
	<h4><marquee scrollamount=10 behavior=alternate direction=right>
<font color=#8811ff size=5>Welcome Mr. 
<?php
 echo "$user";
?>
</font></marquee></h4>
</nav>
<nav>
	<form name="frm" method="post" class="sec1" action="" /> 
	<select class="sec11" name="city">
	  <option>Current Loc</option>
	  <?php
	  $link1=mysqli_connect("localhost","root","","car_pull");
	  $qry1="select * from car";
	  $result1=mysqli_query($link1,$qry1);
 while($res1=mysqli_fetch_row($result1))
  {
	  echo "<option>$res1[3]</option>";
    }
	  ?>
	</select>
	<input type="date" id="data" class="date1" name="date" />
	<input type="text" name="box1" class="inpt1" placeholder="From" />
	<input type="text" name="box2" class="inpt1" placeholder="To" />
	<input type="submit" class="btn1" value="Search" name="sub" />
	</form>
</nav>


<section>
<!-- search starts    -->
<?php
if(isset($_POST['sub']))
{
echo "<center>
<div class='res' id='one'>
<div>
<hr style='border: 1px solid green;'/>
<font color=\"#22f099\" size=\"6\" >
Pick Your Cars
</font>
<hr style='border: 1px solid green;' />
</div>";

include('search1.php') ;
$name1 = htmlentities(trim($_POST['box1']));
$name2 = htmlentities(trim($_POST['box2']));
$errors=array();
if(empty($name1) || empty($name2))
{
	$errors[]='please Fill Both Fields!!';
}
else if(1==2)
{
	$errors[]='Nothing found !';
}

if(empty($errors))
{
	search_results1($name1,$name2,$_POST['date'],$user);
}
else
{
	foreach($errors as $error)
	{
echo "<h3> $error </h3><br><br><br><br><br><br><br><br><br><br><br>";
	}
}
}

?>
</section>
<nav id="two">
<script>
function myfun(car,owner_name,owner_mobile)
{
	$("nav:last").addClass("cont1");  //adding class to nav
	var a = document.getElementById('two');
	var user = <?php echo json_encode($user); ?>;
	//var from = ;
	var dat = document.getElementById('data').value;
	var con = "Mr. ";
	con+=user;
	con+="&nbsp <br> You Picked <b>&nbsp";
	con+=car;
	con+= "</b>&nbspcar Of<br> Mr. ";
	con+=owner_name;
	con+="<br> Contact: <b>";
	con+=owner_mobile;
	con+="</b> <br> Be On Time";
	a.innerHTML = con;
	a.innerHTML = a.innerHTML + b;
}
</script>
</nav>
<footer class="footer">
<section>
    &copy; Savan Morya and Groups
  </section>
</footer>
</body>
</html>