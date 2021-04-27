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
           
            <li><a href="Books.html">Books</a></li>
            <li><a href="Contact.html">Contact</a></li>
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

<table border='1' WIDTH='75%'>
            
<tr>

<TD style="color:darkgreen" WIDTH='30%'><b><u>User Name</u></b></TD>
<TD style="color:darkgreen" WIDTH='20%'><b><u>Email</u></b></TD>
<TD style="color:darkgreen" WIDTH='20%'><b><u>User Age</u></b></TD>

<TD style="color:darkgreen" WIDTH='30%'><b><u>Delete option</u></b></TD>     
              
            </tr>
			
			<?php
		$i=1;
		$sql="SELECT * FROM userdetails";
		$res=mysqli_query($conn,$sql);
		
		if(mysqli_num_rows($res)>0) {
			while($row =mysqli_fetch_assoc($res)){
			echo "<tr>";
				
				echo "<td>" .$row['name']."</td>";
				echo "<td>" .$row['email']."</td>";
				echo "<td>" .$row['userage']."</td>";
				echo "<td>
                    <form action = 'deleteu.php' method = 'POST'>
                        <input type = 'hidden' name = 'id' value = '".$row['user_id']."'>
                        <button type='submit'>Delete user</button>
        </form></td> ";
			}
		}
		?>
		 </tr>

          </table>
        


</section>


</body>
</html>