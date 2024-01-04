<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        require "config.php";
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/events.css" id="cssmode"> 
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="imgs/icon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="js/events.js" type="text/javascript"></script>
    <title>Events</title>
</head>
<body>
    <section class="home" >
        <nav>
            <img src="imgs/sistlogo.png" alt="logo" class="logo" href="index.php">
            <ul id="action">
                <li><a href="index.php" >Home</a></li>
                <li><a href="events.php">Events</a></li>
                <li><a href="about.html">About</a></li>
            </ul>

                <a href="login.php" class="btn" >Login</a>

           
            
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

    <div class="big-title">
        <h2>EVENTS LIST</h2>
    </div>

    <section class="events">
        <div class="tab-btn-holder">
            <div class="tab-buttons">
                <button class="tab" id="default" onclick="showevents(event, 'happening')">Happening</button>
                <button class="tab" onclick="showevents(event, 'upcoming')">Upcoming</button>
                <button class="tab" onclick="showevents(event, 'expired')">Expired</button>
            </div>
        </div>
        <div class="eventscontainer" id="happening">
        <?php 
                $query ="SELECT * FROM `event_details` WHERE start_date = CURRENT_DATE";
                $result = mysqli_query($con,$query);
                while ($row=mysqli_fetch_assoc($result)) {   
            ?>
            <div class="container" >
                <div class="event">
                    <div class="event-img">
                        <img src="<?php echo $row["image_url"]; ?>" alt="">
                    </div>
                    <div class="event-name">
                        <h1> <?php echo $row["event_name"]; ?> </h1>
                    </div>
                    <div class="event-datetime">
                        <h1> <?php echo $row["start_date"]; ?> </h1>
                        <h1> <?php echo $row["start_time"]; ?> </h1>
                    </div>
                    <div class="event-description">
                             <p> <?php echo $row["event_description"]; ?> </p>
                    </div>
                    <div class="event-btn">
                        <a href="event.php?myid=<?php echo $row['event_id']; ?>">Read More</a>
                    </div>
                </div>
            </div>
            <?php
                }  
            ?>
        </div>
        
        <div class="eventscontainer" id="upcoming" >
            <?php 
                $query ="SELECT * FROM `event_details` WHERE start_date > CURRENT_DATE";
                $result = mysqli_query($con,$query);
                while ($row=mysqli_fetch_assoc($result)) {   
            ?>
            <div class="container" >
                <div class="event">
                    <div class="event-img">
                        <img src="<?php echo $row["image_url"]; ?>" alt="">
                    </div>
                    <div class="event-name">
                        <h1> <?php echo $row["event_name"]; ?> </h1>
                    </div>
                    <div class="event-datetime">
                        <h1> <?php echo $row["start_date"]; ?> </h1>
                        <h1> <?php echo $row["start_time"]; ?> </h1>
                    </div>
                    <div class="event-description">
                             <p> <?php echo $row["event_description"]; ?> </p> 
                    </div>
                    <div class="event-btn">
                        <a href="event.php?myid=<?php echo $row['event_id']; ?>">Read More</a>
                    </div>
                </div>
            </div>
            <?php
                }  
            ?>
        </div>

        <div class="eventscontainer" id="expired" >
            <?php 
                $query ="SELECT * FROM `event_details` WHERE start_date < CURRENT_DATE";
                $result = mysqli_query($con,$query);
                while ($row=mysqli_fetch_assoc($result)) {   
            ?>
            <div class="container" >
                <div class="event">
                    <div class="event-img">
                        <img src="<?php echo $row["image_url"]; ?>" alt="">
                    </div>
                    <div class="event-name">
                        <h1> <?php echo $row["event_name"]; ?> </h1>
                    </div>
                    <div class="event-datetime">
                        <h1> <?php echo $row["start_date"]; ?> </h1>
                        <h1> <?php echo $row["start_time"]; ?> </h1>
                    </div>
                    <div class="event-description">
                             <p> <?php echo $row["event_description"]; ?> </p> 
                    </div>
                    <div class="event-btn">
                        <a href="event.php?myid=<?php echo $row['event_id']; ?>">Read More</a>
                    </div>
                </div>
            </div>
            <?php
                }  
            ?>
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

