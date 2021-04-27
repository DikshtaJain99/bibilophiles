
<?php
	echo "flag  : ".$_GET['flag']."<br>";
?>
<?php
ob_start();

session_start();


	include_once("includes/functions.php");
	include_once("includes/connection.php");


$flag = $_GET['flag'];
$id = $_SESSION['id'];

if($flag == 1) {
	$sql = "DELETE from usershelf WHERE book_id = '".$id."'";
	if (mysqli_query($conn,$sql)) {
		header("location:ViewCart.php");
	}	
	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
else if($flag == 2) {
	header("location:Books.php");
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
<link rel="stylesheet" href="./css/style1.css">
 <link rel="stylesheet" href="./css/style4.css">

 <link rel="stylesheet" href="./css/test2.css">
<style>
      table{
        padding:5px;
        border:10px solid gray;
        margin-top:20px;
        margin-left:150px;
      }
      td,th{
        padding:15px;
      }
      
    </style>
     </head>
    <body>
  <header>
        <img src="img/logo.png">
      <nav>
          <ul>
            <li class="current"><a href="Main.php">Home </a></li>
            <li><a href="Books.php">Books</a></li>
            <li><a href="Contact.php">Contact</a></li>
            <li class="current"><a href="Home.php">Sign Out</a></li>    
          </ul>
           </nav>
      
 </header>


    	<section id="showcase">
        
        <div class="container">
          <h1 >Welcome</h1>
          <p>Meet your next favourite book!</p>
        </div>
      
      </section>