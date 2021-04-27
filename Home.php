<?php 
session_start();

include_once("includes/functions.php");
include_once("includes/connection.php");
$flag = 0;	


if(isset($_POST['button_1'])){
	$errors = "";
	$succ =0;
	
    //taking input from user
    $formUsername=validateFormData($_POST['email1']);
    $formPassword=validatePassword($_POST['passw']);
    if($formUsername=='admin@gmail.com') {
      $query="SELECT * from administrator where email='$formUsername'";
    }
    
    //fetching data from database
    else {  
      $query="SELECT * from userdetails where email='$formUsername'";
    }
    $result=mysqli_query($conn,$query);
    

	if(mysqli_num_rows($result)>0) {
    $row=mysqli_fetch_assoc($result);
    if($formUsername=='admin@gmail.com') {
		  $_SESSION['user_id']  =$row['admin_id'];
    }
    else {
      $_SESSION['user_id']  =$row['user_id'];
    }
    $_SESSION['username']=$row['email'];
    $pass=$row['password'];
    $loginsuccess = 0;

		if($_SESSION['username'] == 'admin@gmail.com') {
        $hashedPassword=base64_decode($pass);
        $loginsuccess = 1;
    }
    else {
      if(password_verify($formPassword,$pass)){
        $loginsuccess = 1;
      }
    }

    if($loginsuccess == 1){
        $_SESSION['loggedInUser']=$row['name'];
        $_SESSION['loggedInEmail']=$row['email'];
        if($_SESSION['username'] == 'admin@gmail.com') {
          header("location:Books.php");
        }
        else
          header("location:Main.php");
    }
    else{
			echo "<script> alert('Incorrect Password') </script>";
    }
  }
  mysqli_close($conn);
}

if(isset($_POST['button_2'])) {
  $result='';
  $success=0;
  $flag=0;


  if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $result= $result."Invalid Email<br>"; 
	  $flag=1;
  }


  if(!empty($_POST['pass1']) && !empty($_POST['pass2']))
  {
  	if(strcmp($_POST['pass1'],$_POST['pass2'])!=0)
  	{
  		$result= $result."Passwords do not match , Please Re enter<br>"; 
  	  $flag=1;
  	}
  }



  include_once("includes/connection.php");

  	$uname=$_POST['name'];
  	$uemail=$_POST['email'];
  	$usage=$_POST['uage'];
  	$pass=$_POST['pass1'];
    $i=0;
  	
  	if($uemail == 'admin@gmail.com')
  	{
  		$hashPassword = base64_encode($pass);
      $sql="INSERT INTO administrator(name,email,password) values('$uname','$uemail','$hashPassword')";
  	}
  	else
  	{
  		$options = array("cost"=>4);
  		$hashPassword = password_hash($pass,PASSWORD_BCRYPT,$options);
      $sql="INSERT INTO userdetails(name,email,userage,password) values('$uname','$uemail',$usage,'$hashPassword')";
      $i=1;
  	}
  	$success=0;	


    if(mysqli_query($conn,$sql)) {
    	echo '<script> alert("Sign Up successful") </script>';
    	$success=1;
    }
    else{	
      echo '<div class="error">'.mysqli_error($conn).'</div>';
    }


    if($success==1 && $i=1) {
    	header("Location:Main.php");
    }
    elseif($success==1 && $i=0) {
      header("Location:Books.php");
    }
}
?>

<!DOCTYPE HTML>
<html>
<head>

<title> Bibliophile | Welcome </title>
 <meta charset = "utf-8">
 <meta name="viewport" content="width=device-width">
 <meta name="description" content="A social cataloguing site">
 <meta name="keywords" content="Books, user-to-user recommendations">
 <meta name="Author" content="Avinash Bharadwaj">
 <link rel="stylesheet" href="./css/style.css">

 </head>
    <body>
    	<header>
        
        	<img src="img/logo.png">
       
        <form method="POST">
              <input type="email" id="email1" name="email1" placeholder="Enter email..." required>
              <input type="password" id="passw" name="passw" placeholder="Enter password..." required>
              <button type="submit" class="button_1" name="button_1">Log In</button>
        </form>


       
      </header>


    	<section id="showcase">
        
        <div class="container">
          <h1 >Welcome</h1>
          <p>Meet your next favourite book!</p>
        </div>
      
      </section>

	 <section id="signup">
              
			 <div class="container"> 
            
            
           <text class="detail">Can't decide what to read next? You're at the right place.<br>With Bibliophile, you can see what the world is reading!</br></text> 
            <text>What are you waiting for? Sign up today!</text> 
			 <text class="smalldetail">Be aware of what's the next trending book your friends are raving about.<br> 
			 
			 </text> 
            
			<form method="POST">
              <br>

              
            <input type="name" id="name" name="name" placeholder="Enter name..." required><br>
            <input type="email" id="email" name="email" placeholder="Enter e-mail..." required> <br>
            <input type="number" id="uage" name="uage" placeholder="Enter the age..." required><br>
            <input type="password" id="pass1" name="pass1" placeholder="Enter password..." required><br>
            <input type="password" id="pass2" name="pass2" placeholder="Confirm password..." required><br><br>
            <button type="submit" class="button_2" name="button_2">Signup</button><br>
           </form>  
           </div>
     </section>  
    	 <footer>
    	</footer> 
    </body>
        </html>