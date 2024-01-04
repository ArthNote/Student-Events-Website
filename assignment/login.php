<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/login.css" id="cssmode">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="icon" href="imgs/icon.png">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <title>Login</title>
        <script src="js/login.js"></script> 
    </head>
    <body>       
        <section>
            <div class="login">
                <div class="container-logo">
                  <a href="index.php"><img src="imgs/sistlogo.png" alt="logo" ></a>  
                </div>
                <div class="container-login">
                    <div class="container-text">
                        <h1>Welcome back</h1>
                        <h5>Please enter your details.</h5> 
                    </div>
                    <div class="container-form">
                        <div class="form">
                            <form action="" method="post" name="login" >
                                <label for="username">Username</label><br>
                                <input type="text" name="username" id="username" placeholder="  Enter your Username" maxlength="20" required><br><br><br>
                                <label for="password">Password</label><br>
                                <input type="password" name="password" id="password" placeholder="  Enter your Password" maxlength="10" required><br><br>
                                <label for="showpass" class="showpass">Show Password</label>
                                <input type="checkbox" name="showpass" id="showpass" onclick="showpassword()"><br><br>
<?php
	// Calling the Connection file!
	require "config.php";
	
	session_start();
	// If form submitted, insert values into the database.
	
	if (isset($_POST['username'])){
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con,$username);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
		//Checking is user existing in the database or not
        $query = "SELECT * FROM users WHERE username='$username' and password='$password'";
		$result = mysqli_query($con,$query);
		$rows = mysqli_num_rows($result);
        
		if($rows==1){
	    
            $row=mysqli_fetch_assoc($result);


            $user_id=$row['user_id'];
            
        
            $_SESSION['username'] = $username;
            $_SESSION['user_id'] = $user_id; 
		
	    header("Location: welcome.php");
        }
		else {
			echo "<div class='wrongpass' style='color:red; font-size:12px; margin-left: 3px;'><h3>Username or password is incorrect.</h3> </div> <br/>";
		}
	}
?>
                                <br>
                                <input type="submit" name="submit" value="Login" class="loginbtn"><br>
                            </form> <br>
                            <div class="container-register">
                                 <p>Don't have an account? <a href="register.php">Register now</a></p> 
                            </div>
                        </div>                        
                    </div>               
                </div>
            </div>
            <div class="art">                
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_KvK0ZJBQzu.json"  background="transparent"  speed="1.5"  style="width: 900px; height: 900px;"  loop  autoplay></lottie-player>
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
 
<script type="text/javascript" src="js/login.js"></script>

























