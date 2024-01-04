<?php

    include_once("auth.php");
    require_once "config.php";

$id = $_GET['eid']; 
$user_id = $_SESSION['user_id'];
$query = mysqli_query($con,"SELECT * FROM event_details WHERE event_id = '$id'"); 
$row=mysqli_fetch_assoc($query);
$uid = $row['user_id'];
if ( $row['user_id'] == $_SESSION['user_id']) {
    $del = mysqli_query($con,"DELETE FROM event_details WHERE event_id = '$id'"); 

    if($del){
        mysqli_close($con); 
        header("location:adminevents.php"); 
        exit;	
    }
    else{
        echo "Error deleting record"; 
    }
}
else{
    header("location:adminevent.php?hid=$id");
}
?>