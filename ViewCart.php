<?php 
  include_once("includes/functions.php");
  include_once("includes/connection.php");

  session_start();
  
?>

<!DOCTYPE HTML>
<html>
<head>

<title> Bibliophile | User Shelf </title>
 <meta charset = "utf-8">
 <meta name="viewport" content="width=device-width">
 <meta name="description" content="A social cataloguing site">
 <meta name="keywords" content="Books, user-to-user recommendations">
 <meta name="Author" content="Avinash Bharadwaj">
<link rel="stylesheet" href="./css/viewcart.css">
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

.button_2{
  border-width: 0;
  outline: none;
  border-radius: 2px;
  box-shadow: 0 1px 4px rgba(0, 0, 0, .6);
  padding:12px 24px;
  background-color: #e67e22;
  color: #ecf0f1;
  margin-left:50px;
  margin-top:200px;
}

.button_2:hover, .button_1:focus{
  background-color:#d35400;;
}


      
    </style>

 </head>
    <body>
  <header>
        <img src="img/logo.png">
      <nav>
          <ul>
            <li class="current"><a href="Main.php">Home </a></li>
            <li><a href="Profile.php">My Profile</a></li>
            <li><a href="ViewCart.php">MyShelf</a></li>
            <li><a href="about.php">About Us </a></li> 
            <li class="current"><a href="logout.php">Sign Out</a></li>  
              
          </ul>
           </nav>
      
 </header>


      <section id="showcase">
        
        <div class="container">
          <h1 >Welcome to your shelf</h1>
          <p>Your added titles will display here. You can also delete them.</p>
        </div>
      
      </section>

<table border='1' WIDTH='75%'>
            
<td WIDTH='20%' style="color:darkgreen; font-family: Trebuchet MS;"><b><u>Book cover</u></b></td>
<TD style="color:darkgreen; font-family: Trebuchet MS;" WIDTH='50%'><b><u>Book Name</u></b></TD>
<TD style="color:darkgreen; font-family: Trebuchet MS;" WIDTH='25%'><b><u>Option</u></b></TD> </tr>    
    
    <?php
    $userid=$_SESSION['user_id'];
    $i=0;
    $sql="SELECT * FROM bookdetails join usershelf on bookdetails.book_id=usershelf.book_id AND user_id='".$userid."'";
    $res=mysqli_query($conn,$sql);
    //$row=mysqli_fetch_assoc($res);
    if(mysqli_num_rows($res)>0) {
      while($row =mysqli_fetch_assoc($res)){
      echo "<tr>";
        echo "<td> <img src='".$row['imgpath']."' width='300' height='400' /></td>"; 
        echo "<td style='font-family:Trebuchet MS; font-size:24px'>" .$row['book_name']."</td>";
        echo "<td>
                    <form action = 'deletes.php' method = 'POST'>
                        <input type = 'hidden' name = 'id' value = '".$row['book_id']."'>
                        <button type='submit' class='button_1'>Delete</button>
        </form></td> ";
        $i=$i+1;
      }
    }
    ?>
     </tr>

          </table>
</body>
</html>

