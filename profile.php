<?php 

ob_start();
  session_start();
  if(!isset($_SESSION['loggedInUser'])){
    //send the iser to login page
    header("location:Home.php");
}
    include_once("includes/functions.php");
    include_once("includes/connection.php");


$id=$_SESSION['user_id'];
    if(isset($_POST['submit'])) {
      $imgpath=$_POST['imgpath'];
  $sql="UPDATE userdetails SET imgpath='img/$imgpath' where user_id='".$id."'";
  $res=mysqli_query($conn,$sql);
  if($res) {
    //echo '<script> alert("Sign Up successful") </script>';
    header("location:profile.php");
  }
}
?>

<!DOCTYPE HTML>
<html>
<head>

<title> Bibliophile | Profile </title>
 <meta charset = "utf-8">
 <meta name="viewport" content="width=device-width">
 <meta name="description" content="A social cataloguing site">
 <meta name="keywords" content="Books, user-to-user recommendations">
 <meta name="Author" content="Avinash Bharadwaj">
 <link rel="stylesheet" href="profile.css">

 
 </head>

 <body>
 	
 	<header>
 		<img src="img/logo.png">
			<nav>
      		<ul>
      			<li class="current"><a href="Main.php">Home </a></li>
            <li><a href="profile.php">My Profile</a></li>
            <li><a href="ViewCart.php">My Shelf</a></li>
            <li><a href="about.php">About Us </a></li> 
            <li class="current"><a href="logout.php">Sign Out</a></li>        
      		</ul>
      	   </nav>
 	</header>

 	<section id="usershowcase">
 		<div class="box">
 			<div class="container">

<br>

<?php
  $id=$_SESSION['user_id'];
  $sql="SELECT * from userdetails where user_id='".$id."'";
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_assoc($res);

	echo "<img src='".$row['imgpath']."' />";
  
	echo "<div class='userdetails'>	";
    
		echo "<h1>".$row['name']."</h1>";
		echo "<h3>" .strstr($row['email'],'@',true). "</h3>";
		echo "<h3>".$row['email']."</h3>";
		echo "<h3>Age : ".$row['userage']."</h3>"; ?>
		<button class="button_1" onclick="location.href='ViewCart.php'">My Shelf</button></div><br>
    <?php
    if($row['imgpath']==NULL) { ?>
    <form method="post">
    <input type="file" name="imgpath" id="imgpath" placeholder="Image path" required><br>
    <input type="submit" name="submit" id="submit"></form>
	<?php
} ?>
 	
			</div>
		</div>

	</section>

 </body>