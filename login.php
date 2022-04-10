<?php
// Initialize the session
//complete user registeration using mysql database
//phppot
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: welcome.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<html>
<head>
    <meta charset="utf-8">
    <link rel ="icon" href="BROFORCE.png" type="image/x-icon">
 <link href="IT/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">  
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.css" rel="stylesheet">
<title>
Login-AirrrUniverse.com
    </title>    
<style>
         body{
             background:url('macbook_3-wallpaper-1366x768.jpg')black no-repeat;
             margin: 0;
             padding: 0;
             background-size: cover;
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
        padding: 8px 0;
        margin: 8px 0;
        border-bottom: 1px solid #4caf50;
        
    }
     .search{
         background-color: #007bff;
          margin-left: 3%;
    padding: 3px;
    border-radius: 50px;
         text-align: center;
         color: white;
     }.bg-dar{
             background-color:#f780ff;
         
         
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
    .icon{
        list-style-image: url(icons8-password-24.png);
        
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
	.user{
		text-align: left;
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
	.social-menu ul  a:hover {
	transform: translate(0, -10px);
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
        <br><br>
        
 
     
       <!---   
        <form action="</*?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group </*?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
         <div class="text-box">
         <input type="text" placeholder="Username" name="" value="</*?php echo $username; ?>">
         <span class="help-block"></*?php echo $username_err; ?></span>
        </div>
            </div>  
        <div class="form-group </*?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
        <div class="text-box">
    <input type="password" placeholder="Password" name="" value="</*?php echo $password; ?>">
                 <span class="help-block"></*?php echo $password_err; ?></span>
            </div></div>
        <input class="btn" type="submit" name="" value="Sign in">
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
            </form>
        </div>
    
        
        --->
       <div class="login-box">
        <h1>Login!</h1>
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class=" <?php echo (!empty($username_err)) ? 'has-error' : '';  ?> ">
              
                <div class="text-box fontuser">
             	  <i class="fa fa-user-circle user"></i> 
                <input id="use" type="text" name="username" placeholder="Username"   
                     value="<?php echo $username; ?>"></div>
                <span class="help-block"><?php echo $username_err; ?></span>
                </div>   
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <div class="text-box fontuser">
              
                <input id="pass" type="password" name="password" placeholder="Password"> 
                       <i class="fa fa-eye" onclick="myFunction()" ></i></div>
                <span class="help-block"><?php echo $password_err; ?></span>
                </div>
           
            <div class="form-group">
                <input onclick="fn1()" type="submit" class="btn btn-block btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="signup.php">Sign up now</a>.</p>
        </form>
    </div> 
        
        <footer class="fixed-footer ">©Copyright AIRRRUNIVERSE. All rights reserved
        <br>
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
		</script>
        
        <script type="text/javascript" src="js/jquery.js"></script> 
        <script src="js/bootstrap.js"></script>
    </body>
</html>