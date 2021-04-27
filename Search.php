<?php 

ob_start();
  session_start();
  if(!isset($_SESSION['loggedInUser'])){
    //send the iser to login page
    header("location:Home.php");
}
	include_once("includes/functions.php");
	include_once("includes/connection.php");
?>

<!DOCTYPE HTML>
<html>
<head>

	<script>
	function showResult(str) {
	  if (str.length==0) {
	    document.getElementById("livesearch").innerHTML="";
	    document.getElementById("livesearch").style.border="0px";
	    return;
	  }
	  if (window.XMLHttpRequest) {
	    // code for IE7+, Firefox, Chrome, Opera, Safari
	    xmlhttp=new XMLHttpRequest();
	  } else {  // code for IE6, IE5
	    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange=function() {
	    if (this.readyState==4 && this.status==200) {
	      document.getElementById("livesearch").innerHTML=this.responseText;
	      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
	    }
	  }
      //var typ = document.getElementById("type").value;
      //alert("type:"+typ);
	  xmlhttp.open("GET","livesearch.php?q="+str,true);
	  xmlhttp.send();
	}
	</script>

<title> Bibliophile | Welcome </title>
 <meta charset = "utf-8">
 <meta name="viewport" content="width=device-width">
 <meta name="description" content="A social cataloguing site">
 <meta name="keywords" content="Books, user-to-user recommendations">
 <meta name="Author" content="Avinash Bharadwaj">
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="./css/style1.css">


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
            <li><a href="profile.php">My Profile</a></li>
            <li><a href="ViewCart.php">MyShelf</a></li>
            <li><a href="about.php">About Us </a></li> 
            <li class="current"><a href="logout.php">Sign Out</a></li>    
          </ul>
           </nav>
      
 </header>


    	<section id="showcase">
        
        <div class="container">
          <h1 >Welcome</h1>
          <p>Meet your next favourite book!</p>
        </div>
      
      </section>
 
   <section>
   	<form method='POST' action='#'>

		<br>
		<input type='text' name='inp' onkeyup="showResult(this.value)" required />
		<div id="livesearch"></div>
	</form>
</section>

<?php

	/*if(isset($_POST['submit'])) {
		
		if($_POST['type']=="Author") {
			$sql="SELECT * from bookdetails where author='".$_POST['inp']."'";
			$res=mysqli_query($conn,$sql);
		}
		elseif ($_POST['type']=="Genre") {
			$sql="SELECT * from bookdetails where genre='".$_POST['inp']."'";
			$res=mysqli_query($conn,$sql);
		}
		elseif ($_POST['type']=="Book name") {
			$sql="SELECT * from bookdetails where book_name='".$_POST['inp']."'";
			$res=mysqli_query($conn,$sql);
		}
		elseif ($_POST['type']=="Age") {
			$sql="SELECT * from bookdetails where agegroup <='".$_POST['inp']."'";
			$res=mysqli_query($conn,$sql);
		}
		if(mysqli_num_rows($res)>0) {
			echo "<table>";
			echo "<tr>
			<th> Book cover </th>
			<th> Book name </th>
			<th> Author</th>
			<th> Genre </th>
			<th> Age group </th>
			<th>Rating</th>
			<th>Add To MyShelf</th></tr>";
			while($row=mysqli_fetch_assoc($res)) {
				echo "<tr>";
				echo "<td><img src='".$row['imgpath']."' /></td>"; 
				echo "<td>" .$row['book_name']."</td>";
				echo "<td>" .$row['author']."</td>";
				echo "<td>" .$row['genre']."</td>";
				echo "<td>" .$row['agegroup']."</td>";
				echo "<td> 
					<form action = 'addb.php' method = 'POST'>
					<input type='text' name='rating' placeholder='Enter rating' required>
                        
				</td>";
				echo "<td>
					<input type = 'hidden' name = 'id1' value = '".$row['book_id']."'>
                        <input type = 'hidden' name = 'id2' value = '".$_SESSION['user_id']."'>
                        <button type='submit'>Add book</button>
        			
					</form>
				</td></tr>";
			}
			echo "</table>";
		}
		else {
			echo "<h3><b>No results to show</b></h3>";
		}
	} */

	
?>