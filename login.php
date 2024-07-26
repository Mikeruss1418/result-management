<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Link to custom CSS -->
    <link rel="stylesheet" href="login.css">
    <style>
        .error{
            color:red;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="title">Login</div>
        <center>
            <h4>
                <?php 
                error_reporting(0);
                session_start();
                session_destroy();
                ?><span  style="color: red;"> <?php echo $_SESSION['loginMessage'] ?> </span>
            
            </h4>
        </center>
        <div class="back">
       <a href="front.php" ><button id="bac"> <i class="fa fa-times" aria-hidden="true"></i></button></a>
        
    </div>
        <form method="POST" action="login_check.php">
        
      
            <div class="user-details">
               
                 
                 <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" placeholder="Enter your Username"  name="username" id="uname">
                    <span id="user" class="error"></span>
                </div>
                
                
                 <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" placeholder="Enter your Password" name="password" id="password">
                    <span id="pass" class="error"></span>
                </div>
                
            </div>
                 
                <div class="button" > 
                    <input type="submit" value="Login">
                </div>
         
        </form>
    </div>
  
</body>
</html>