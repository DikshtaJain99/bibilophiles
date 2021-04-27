<?php
ob_start();

session_start();


//check if user has logged in or not


//connect ot database
include_once("includes/connection.php");
include_once("includes/functions.php");



//echo "flag  : ".$_GET['flag']."<br>";
$flag = $_COOKIE["flag"];



if(isset($_POST['id'])){
    $_SESSION['id'] = $_POST['id'];
}

?>
<SCRIPT LANGUAGE="JavaScript" type="text/javascript">

    var r = confirm("Do you want to delete ?");
    if (r == true) {
		var flag = 1;
    } else {
		var flag = 2; 
	}
	document.cookie = "flag="+flag;

    window.location.href = "http://localhost/Bibliophiles/deleteuser.php?flag="+flag ;

</script>