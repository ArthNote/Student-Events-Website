<?php
	// Calling the Connection file!

	include("auth.php");
    require "config.php";
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css" id="cssmode">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="imgs/icon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Home</title>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/home.js" type="text/javascript"></script>
</head>
<body>
    
    <section class="home" >
        <nav>
            <img src="imgs/sistlogo.png" alt="logo" class="logo" href="welcome.php">
            <ul id="action">
                <li><a href="welcome.php" >Home</a></li>
                <li><a href="adminevents.php">Events</a></li>
                <li><a href="adminabout.php">About Us</a></li>
            </ul>

            <a href="logout.php" class="btn" >Sign Out!</a>

           
            
            <button id="menu" >
                <span></span>
                <span></span>
                <span></span>
            </button>
        </nav>
       
        <div class="content">
            <div class="container-texts">
                <h4>Welcome to the</h4>
                <h1>Student <span>Union</span></h1>
                <h3>Have a<span> Break</span>. Have an<span> Event</span></h3>
                <a href="adminevents.php" class="btn" >Events</a>
            </div>
            <div class="container-images">
                <img src="imgs/bgg.png" alt="" class="pic" >
            </div>
        </div>
  
    </section>

    <section class="events">
        <h1 class="text-center"><span>Latest</span> Events</h1>
        <div class="events-container">
            <?php 
                $query = "SELECT * FROM `event_details` ORDER BY event_id DESC LIMIT 4";
                $result = mysqli_query($con,$query);
                while ($row=mysqli_fetch_assoc($result)) {  
            ?>
            <a href="adminevent.php?hid=<?php echo $row['event_id']; ?>">
            <div class="container">
                <div class="service">
                    <img src="<?php echo $row["image_url"]; ?>" alt="">
                    <h3><?php echo $row["start_date"]; ?></h3>
                </div>
            </div>
            </a>
            <?php
                }
            ?> 
        </div>
    </section>

    <section class="about">
        <div class="container-images">
            <img src="imgs/Graduation-rafiki.png" alt="">
        </div>
        <div class="container-texts">
            <h1>About <span>SIST</span></h1>
            <P>
                For 20 Years, SIST has delivered British education in Morocco awarding Bachelor, Masters and MBA degrees from Cardiff Metropolitan University, and is a unique higher education institute that operates entirely in English in Morocco. SIST students are privileged to receive British education and are awarded worldwide recognised degrees. SIST is also accredited by the Ministry of Higher Education in Morocco. Our graduates are taking over the English business world with their qualifications, fluency in three languages and abilities acquired through a British curriculum that teaches them the highest standards of professionalism and deliver success to any business they join.
            </P>
        </div>
    </section>

<section class="footer">
    <div class="content-footer">
        <h2>Student <span>Union</span></h2>
        <p>
            Thanks for checking our website!!
        </p>
        <p class="end">
            CopyRight By SIST British University
        </p>
    </div>
</section>


    <div class="theme dark-mode" id="dark-mode" style="display: none;" onclick="golight()">
            <span class="material-symbols-outlined"  onclick="golight()">dark_mode</span>
    </div>

    <div class="theme light-mode" id="light-mode" onclick="godark()" >
            <span class="material-symbols-outlined" onclick="godark()">light_mode</span>
    </div>


    







    


























    
</body>
</html>
