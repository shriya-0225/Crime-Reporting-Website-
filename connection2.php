<?php

$username = "epiz_27403325";
$password = "PaCkzgB64IXs9z";
$server = 'sql109.epizy.com';
$db = 'epiz_27403325_crime';


// Create connection
$con = mysqli_connect($server, $username, $password, $db);
  
if($con){
	//echo "Connection succesful!";
?>
<script type="text/javascript">
	alert('Connection succesful');
</script>
	<?php 
}else {
    die("no connection". mysqli_connect_error());
}

?>