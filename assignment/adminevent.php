<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include("auth.php");
        require "config.php";
        $user_id = $_SESSION['user_id'];
        $id = $_GET['hid'];
        $query ="SELECT * FROM `event_details` WHERE event_id = $id";
        $result = mysqli_query($con,$query);
        $row=mysqli_fetch_assoc($result);
        $hh= ($row['user_id'] == $_SESSION['user_id']);
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="imgs/icon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/event.css" id="cssmode">
    <script src="js/event.js" type="text/javascript"></script>
    <title><?php echo $row['event_name']; ?></title>
</head>
<body>
    <section class="home" >
        <nav>
            <img src="imgs/sistlogo.png" alt="logo" class="logo" href="welcome.php">
            <ul id="action">
                <li><a href="welcome.php" >Home</a></li>
                <li><a href="adminevents.php">Events</a></li>
                <li><a href="adminabout.php">About</a></li>
            </ul>

            <a href="logout.php" class="btn" >Sign Out!</a>

           
            
            <button id="menu" >
                <span></span>
                <span></span>
                <span></span>
            </button>
        </nav>
       
        <div class="content">
            <img src="imgs/eventbg.png" alt="">
        </div>
    </section>

    <section class="event-section">
        <div class="event-details">
            <div class="container-btns">
                <h4 id="alert" style=" display:none;"></h4>
                <?php
                        if($hh){
                       ?>
                <div class="container-btns-btn">
                         
                    <a href="delete.php?eid=<?php echo $row['event_id']; ?>"><span class="material-symbols-outlined">delete</span> </a> 
                       
                      
                           
                       
                </div>
                <?php }?> 
                <?php if (!$hh) {
                        ?>
                <div class="container-btns-btn" style="display:none;">
                <a  href="delete.php?eid=<?php echo $row['event_id']; ?>"><span class="material-symbols-outlined">delete</span> </a> 
                    </a>
                </div>
                <?php } ?>
                <div class="container-btns-btn">
                    <a href="editevent.php?eid=<?php echo $row['event_id']; ?>">
                        <span class="material-symbols-outlined">edit</span>
                    </a>
                </div>
            </div>
            <div class="event-name">
                <h2> <?php echo $row['event_name']; ?> </h2>
            </div>

            <div class="event-date">

                <div class="start-date">
                    <div class="date">
                        <span class="material-symbols-outlined">
                            event
                        </span>
                        <h4> <?php echo $row['start_date']; ?> </h4>
                    </div>
                    <div class="time">
                        <span class="material-symbols-outlined">
                            schedule
                        </span>
                        <h4><?php echo $row['start_time']; ?></h4>
                    </div>   
                </div>

                <div class="end-date">
                    <div class="date">
                        <span class="material-symbols-outlined">
                            event
                        </span>
                        <h4> <?php echo $row['end_date']; ?> </h4>
                    </div>
                    <div class="time">
                        <span class="material-symbols-outlined">
                            schedule
                        </span>
                        <h4><?php echo $row['end_time']; ?></h4>
                    </div>   
                </div>

            </div>

            <div class="event-description">
                <h4>Event Description</h4>
                <p><?php echo $row['event_description']; ?></p>
            </div>
           
        </div>

        <div class="event-uploads">

            <div class="main-img">
                <img src="<?php echo $row['image_url']; ?>" alt="">
            </div>

            <div class="other">
                <?php 
                    if (empty($row["image2"])) {
                ?>
                <div class="box" style="display:none;" >
                    <img src="<?php echo $row['image2']; ?>" alt="">
                </div>
                <?php    
                    }
                ?>
                <?php 
                    if (!empty($row["image2"])) {
                ?>
                <div class="box">
                    <img src="<?php echo $row['image2']; ?>" alt="">
                </div>
                <?php    
                    }
                ?>

                <?php 
                    if (empty($row["image3"])) {
                ?>
                <div class="box" style="display:none;">
                    <img src="<?php echo $row['image3']; ?>" alt="">
                </div>
                <?php    
                    }
                ?>
                <?php 
                    if (!empty($row["image3"])) {
                ?>
                <div class="box">
                    <img src="<?php echo $row['image3']; ?>" alt="">
                </div>
                <?php    
                    }
                ?>



                <?php 
                    if (empty($row["video_url"])) {
                ?>
                <div class="box" style="display:none;"> 
                    <video src="<?php echo $row['video_url']; ?>" controls></video>
                </div>
                <?php    
                    }
                ?>
                <?php 
                    if (!empty($row["video_url"])) {
                ?>
                <div class="box">
                    <video src="<?php echo $row['video_url']; ?>" controls></video>
                </div>
                <?php    
                    }
                ?>



                <?php 
                    if (empty($row["video2"])) {
                ?>
                        <div class="box" style="display:none;">
                            <video src="<?php echo $row['video2']; ?>" controls></video>
                        </div>
                <?php    
                    }
                ?>
                <?php 
                    if (!empty($row["video2"])) {
                ?>
                <div class="box">
                    <video src="<?php echo $row['video2']; ?>" controls></video>
                </div>
                <?php    
                    }
                ?>
            </div>
        </div>
    </section>








    <footer>
        <div class="content-footer">
            <h2>Student <span>Union</span></h2>
            <p>
                Thanks for checking our website!!
            </p>
            <p class="end">
                CopyRight By SIST British University
            </p>
        </div>
    </footer> 

    <div class="theme dark-mode" id="dark-mode" style="display: none;" onclick="golight()">
            <span class="material-symbols-outlined"  onclick="golight()">dark_mode</span>
    </div>

    <div class="theme light-mode" id="light-mode" onclick="godark()" >
            <span class="material-symbols-outlined" onclick="godark()">light_mode</span>
    </div>
</body>
</html>