<?php
		// Calling the Connection file!
		require "config.php";
		
		if(isset($_POST['submit'])) {
			$firstname=$_POST["firstname"];
			$lastname=$_POST["lastname"];
            $gender=$_POST["gender"];
			$adress1=$_POST["adress1"];
			$adress2=$_POST["adress2"];
			$adress3=$_POST["adress3"];
			$title=$_POST["title"];
			$email=$_POST["email"];
			$username=$_POST["username"];
			$password=$_POST["password"];
			
			$sql_query="INSERT INTO users (firstname, lastname, gender, adress1, adress2, adress3, title, email, username, password) values('$firstname','$lastname','$gender','$adress1','$adress2','$adress3','$title','$email','$username','$password')";

            if(mysqli_query($con,$sql_query)) {
				header("Location: login.php");
			}
            
		}	
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
    <title>Register</title>
</head>
<body >
    <section>
        <div class="login">
            <div class="container-logo">
               <a href="index.php"><img src="imgs/sistlogo.png" alt="logo" > </a> 
            </div>
            <div class="container-login">
                <div class="container-text">
                    <h1>Registration form</h1>
                    <h5>Please enter your details.</h5> 
                </div>
                <div class="container-form">
                    <div class="form">
                        <form action="" method="post" name="login" >
                            <div class="form-one">
                                <label for="firstname">First Name</label><br>
                                <input type="text" name="firstname" id="firstname" maxlength="20" placeholder="Enter your FirstName" required><br>
                                <label for="lastname">Last Name</label><br>
                                <input type="text" name="lastname" id="lastname" maxlength="20" placeholder="Enter your LastName" required><br>
                                <label for="gender">Gender:</label><br>
                                <div class="gender-choice">
                                    <label for="male">Male</label> &nbsp
                                    <input type="radio" name="gender" id="male" value="male" required> &nbsp
                                    <label for="female">Female</label> &nbsp
                                    <input type="radio" name="gender" id="female" value="female" required>
                                    
                                </div><br>
                                <label for="adress1">Adress 1</label><br>
                                <input type="text" name="adress1" id="adress1" maxlength="50" placeholder="Enter your Adress" required><br>
                                <label for="adress2">Adress 2 (Optional)</label><br>
                                <input type="text" name="adress2" id="adress2" maxlength="50" placeholder="Enter your Adress"><br>
                                <label for="adress3">Adress 3 (Optional)</label><br>
                                <input type="text" name="adress3" id="adress3" maxlength="50" placeholder="Enter your Adress"><br>
                                
                            </div>
                            <div class="form-two">
                                <label for="title">Title</label><br>
                                <input type="text" name="title" id="title" placeholder="Enter your Title" maxlength="10" required><br>
                                <label for="email">Email</label><br>
                                <input type="email" name="email" id="email" placeholder="Enter your Email" maxlength="100" required><br>
                                <label for="username">Username</label><br>
                                <input type="text" name="username" id="username" placeholder="  Enter your Username" maxlength="20" required><br>
                                <label for="password">Password</label><br>
                                <input type="password" name="password" id="password" placeholder="  Enter your Password" maxlength="10" required><br>
                                <div class="show">
                                    <label for="showpass" class="showpass">Show Password </label> &nbsp
                                    <input type="checkbox" name="showpass" id="showpass" onclick="showpassword()">
                                </div><br>
                                <input type="submit" name="submit" value="Register" class="loginbtn"><br><br>
                                <p>Already have an account? <a href="login.php">Login now</a></p> 
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

