<?php
function check_timeout(){
  $datetime_1 = $_SESSION['time']; 
  $datetime_2 = date("Y-m-d h:i:s"); 

  $start_datetime = new DateTime($datetime_1); 
  $diff = $start_datetime->diff(new DateTime($datetime_2));

  if($diff->i > 30){
    header('Location: http://localhost/bootstrap/admin/logout.php');
  }
}


function wa_auth(){
	if(!isset($_SESSION['email'])){
	  header('Location: http://localhost/bootstrap/admin/login.php');
	}
	else{
		return true;
	}
}


function price($amount=0)
{
	return "$ " . number_format($amount,2);
}
?>