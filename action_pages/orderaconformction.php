<!DOCTYPE html>
<html>
<head>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

</body>
</html>

<?php

//Database Connection include start
include_once("../includes/dbconnection.php");
//Database Connection include end

$emailid = $_POST["emailid"];
$foodid = $_POST["orderid"];
$status = $_POST["ordervalue"];

$Result = mysqli_query($db,"UPDATE foodorders SET orderstatus='$status' WHERE customerid='$emailid' AND foodorderid ='$foodid'");
if($Result){
	echo "<script type='text/javascript'>
      
	swal({ title: 'Success !',text: 'order confirmed',icon: 'success'}).then(okay => {
	if (okay) {
    window.location.href = '../admindashbord.php';}
	});
    </script>";

	}

else{
	echo "<script type='text/javascript'>
                
	swal({ title: 'An error occured!',text: 'Try again',icon: 'error'}).then(okay => {
	if (okay) {
    window.location.href = '../admindashbord.php';}
	});
    </script>";
}

?>