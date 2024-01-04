
<?php
       
require "config.php";
include("auth.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="icon" href="imgs/icon.png">
<link rel="stylesheet" href="css/register.css" id="cssmode">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<title>Add Event</title>
</head>
<body >
<section>
    <div class="login">
        <div class="container-logo">
           <a href="welcome.php"><img src="imgs/sistlogo.png" alt="logo" > </a> 
        </div>
        <div class="container-login">
            <div class="container-text">
                <h1>Create Event</h1>
                <h5>Please enter the event details.</h5> 
            </div>
            <div class="container-form">
                <div class="form">
                    <form action="add.php" method="POST" name="add" enctype="multipart/form-data">
                        <div class="form-one">
                            <label for="name">Name</label><br>
                            <input type="text" name="event_name" id="event_name" maxlength="100" placeholder="Enter the Event Name" required><br>
                            <label for="image_url">Img Url</label><br>
                            <input type="text" name="image_url" id="image_url" maxlength="10000" placeholder="Enter an Img Url"  required ><br>
                            <label for="image2">Img 2 (Optional)</label><br>
                            <input type="text" name="image2" id="image2" maxlength="10000" placeholder="Enter an Img Url"   ><br>
                            <label for="image3">Img 3 (Optional)</label><br>
                            <input type="text" name="image3" id="image3" maxlength="10000" placeholder="Enter an Img Url"   ><br>
                            <label for="startdate">Start Date</label><br>
                            <input type="date" name="start_date" id="start_date" required><br>
                            <label for="enddate">End Date</label><br>
                            <input type="date" name="end_date" id="end_date" required><br>
                            <label for="video_url">Video Url (Optional)</label><br>
                            <input type="text" name="video_url" id="video_url" maxlength="10000" placeholder="Enter a video Url" ><br>
                        </div>
                        <div class="form-two">
                            <label for="video2">Video 2 (Optional)</label><br>
                            <input type="text" name="video2" id="video2" maxlength="10000" placeholder="Enter a video Url" ><br>
                            <label for="starttime">Start Time</label><br>
                            <input type="time" name="start_time" id="start_time" required><br>
                            <label for="endtime">End Time</label><br>
                            <input type="time" name="end_time" id="end_time" required><br>
                            <label for="description">Description</label><br>
                            <textarea maxlength="10000" name="event_description" id="event_description"  rows="10" cols="24" required>
                            </textarea>
                            <br><br><br><br>
                            <input type="submit" name="submit" value="Add Event" class="loginbtn"><br>
                            
                            
                        </div>
                    </form>
                </div>                        
            </div>               
        </div>
    </div>
    <div class="art">                
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_KvK0ZJBQzu.json"  background="transparent"  speed="1.5"  style="width: 900px; height: 900px;"  loop  autoplay></lottie-player>
    </div>
</section>  

<script src="js/register.js"></script>  

<div class="theme dark-mode" id="dark-mode" style="display: none;" onclick="golight()">
        <span class="material-symbols-outlined"  onclick="golight()">dark_mode</span>
</div>

<div class="theme light-mode" id="light-mode" onclick="godark()" >
        <span class="material-symbols-outlined" onclick="godark()">light_mode</span>
</div>















</body>
</html>

