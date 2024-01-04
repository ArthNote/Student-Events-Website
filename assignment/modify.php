<?php
    require_once "config.php";
    include_once("auth.php");

    if (isset($_GET['hid']) && isset($_POST['edit'])) {
        $id = $_GET['hid'];
        $event_name=$_POST["event_name"];
        $event_description=$_POST["event_description"];
        $video_url=$_POST["video_url"];
        $video2=$_POST["video2"];
        $image_url=$_POST["image_url"];
        $image2=$_POST["image2"];
        $image3=$_POST["image3"];
        $start_date=$_POST["start_date"];
        $end_date=$_POST["end_date"];
        $start_time=$_POST["start_time"];
        $end_time=$_POST["end_time"];
        
        $sql = "UPDATE `event_details` SET 
        `event_name`='$event_name',
        `event_description`='$event_description',
        `video_url`='$video_url',
        `image_url`='$image_url',
        `start_date`='$start_date',
        `end_date`='$end_date',
        `start_time`='$start_time',
        `end_time`='$end_time',
        `video2`='$video2',
        `image2`='$image2',
        `image3`='$image3'
         WHERE event_id = $id";

        if(mysqli_query($con,$sql)) {
            header("Location: adminevents.php");
        }

    }













?>