<?php
// Include config file
require_once "config.php";
//phppot
session_start();
 
// Define variables and initialize with empty values
$username = $password = $confirm_password ="";
$username_err = $password_err = $confirm_password_err = "";


     
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
     
    
    
    
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
         } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have at least 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
   
   
        
       

         //create SQL query string for inserting data into the database
        
         
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
        
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <link rel ="icon" href="BROFORCE.png" type="image/x-icon">
    <link href="IT/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">  
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.css" rel="stylesheet">
<title>Signup-AirrrUniverse</title>
<style>
         body{
             background:url('macbook_3-wallpaper-1366x768.jpg')black no-repeat;
             margin: 0;
             padding: 0;
             background-size: cover;
    }
   
    
     #head{
         font-family: Courier New;
         text-align: center;
         font-size: 20px;
         
     }
    
     .fixed-nav-bar{
         position: fixed;
         top: 0;
         left: 0;
         z-index: 9999;
         width: 100%;
         height: 50px;
         background-color: #00a087;
     }
        .login-box{
            width: 280px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            color: white;
            
        } 
    .login-box h1{
        font-family: Courier New;
        float: left;
        font-size: 40px;
        border-bottom: 6px solid #4caf50;
        margin-bottom: 50px;
        padding: 13px 0;
    }
    .text-box{
    
        width: 100%;
        overflow: hidden;
        font-size: 20px;
        padding: 6px 0;
        margin: 6px 0;
        border-bottom: 1px solid #4caf50;
        
    }
    .text-box input{
        border: none;
        outline: none;
        background: none;
        color: white;
        font-size: 18px;
        width: 80%;
        float: left;
        margin: 0 10px;
    }
    .btn{
        width: 100%;
        background: none;
        border: 2px solid #4caf50;
        color: white;
        padding: 5px;
        font-size: 18px;
        cursor: pointer;
        margin: 12px 0;
    }
        .fixed-footer{
         width:100%;
         position:fixed;
         background: black;
         padding: 10px 0;
         color: dimgrey;
        text-align: center;
     }
     .fixed-footer{
         bottom:0;
     }
    .footer-img{
        align-content: center;
    }
	.fontuser i{
		position: absolute;
		right: 15px;
	}
    	.social-links a{
	font-size: 18px;
	display: inline-block;
	background: #fff;
	color: #000;
	line-height: 1;
	padding: 8px 0;
	margin-right: 4px;
	border-radius: 50%;
	text-align: center;
	width: 36px;
	height: 36px;
	transition: 0.3s;
}
    </style>
    </head>
    <body>
         <div class=" fixed-nav-bar">
   
        <nav class=" navbar  navbar-expand-sm navbar-dark" style="background-color:#002e4e"><!--or md-->
        <a href="welcome.php" class="navbar-brand" style="font-family:Courier New">AIRRR UNIVERSE</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ml-auto "><!--mr-auto align left-->
            <li class="nav-item active">
            
        
               <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
               role="button" data-toggle="dropdown">Plartforms</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Photography</a>
                    <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="#">View Our portfolio</a>
                 <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="#">Trainings</a>
                   </div>
            </li>
              <li class="nav-item">
            <a href="#" class="nav-link">About</a>    
            </li>
            
            
           
            </ul>
             
                </div>
            
        </nav> 
        </div>
        
    
    <div class="login-box">
        <h1 style="font-family: Cursive">Sign Up!</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div  class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <div class="text-box fontuser">
				<i class="fa fa-user-circle user"></i> 
                <input id="use" type="text" name="username" placeholder="Username"
                       value="<?php echo $username; ?>"></div>
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <div class="text-box fontuser">
				     <i class="fa fa-eye" onclick="myFunction()" ></i>
                <input id="pass" type="password" name="password" placeholder="Password" 
                       value="<?php echo $password; ?>"></div>
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <div class="text-box fontuser">
					  <i class="fa fa-eye" onclick="myFunctions()" ></i>
                <input id="confirm" type="password" name="confirm_password"
                           placeholder="Confirm Password"
                       value="<?php echo $confirm_password; ?>"></div>
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
                <input id="sub" type="submit" class="btn btn-block btn-primary" value="SignUp">
            
            Already have an account? <a href="login.php">Login here.</a>
        </form>
    </div>
           <footer class="fixed-footer ">©Copyright AIRRRUNIVERSE. All rights reserved
			   <div class="social-links"><ul>
					<a href="#" class="twitter" style="background-color:#3b5999;"><i class="fa fa-twitter"></i></a>
						<a href="#" class="twitter"  style="background-color:#55acee;"><i class="fa fa-facebook"></i></a>
						<a href="#" class="twitter"  style="background-color:#e44057;"><i class="fa fa-instagram"></i></a>
						<a href="#" class="twitter"style="background-color:#0077B5"><i class="fa fa-linkedin"></i></a>
				</ul>
					</div>
     
        </footer>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <script>
			function myFunction() {
    var x = document.getElementById("pass");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
					function myFunctions() {
    var x = document.getElementById("confirm");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
			
		</script>
        
        
        
        <script type="text/javascript" src="js/jquery.js"></script> 
        <script src="js/bootstrap.js"></script>
    </body>
</html>