<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/logincss.css">
<title>MyApp Login</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<!-- Photo by Phil Botha on Unsplash -->
<body background="images/wallpaper.jpg">
<div>
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <img src="images/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    MyApp Login Panel
  </a>
</nav>


<!-- BEGIN of custom CSS -->
<style>
    html, body {
        background-repeat:no-repeat;
        background-size:cover;  
        width: 100%;  
        height: 100%;  
    }

    /* snippet taken from https://codepen.io/tyrus/pen/eLlgs */
    input {
        opacity: 0.8;
    }
    input[type="text"]:focus,
    input[type="password"]:focus {
        box-shadow: inset 0 1px 2px rgba(255,255,255, .35), 0px 1px 15px rgba(0,246,255,.5);
        border: 1px solid #08c;
        outline: none;
    }
    /* end of snippet */

    footer {
        background: #2E3338;
        bottom: 0;
        position:fixed;
        right:0;
        left:0;
    }
    footer .copyright-section {
        background: #2E3338;
        padding: 10px 1000; 
    }
    footer .copyright-section .copyright {
        margin-top: 5px; 
    }
    footer .copyright-section .copyright p {
        text-align: center;
        font-family: 'Comic Sans MS';
        color: #249D3D; 
    }
    h3{
        color: #F95239;
    }
</style>

</br><br><br><br>
<div class="container">
    <form class="form-signin" action="login.php" method="post">
        <input type="text" class="form-control" placeholder="username" name="username" required="True" autofocus="">
        <input type="password" class="form-control" placeholder="password" name="password" required="True">
        <button class="btn btn-lg btn-outline-success btn-block" type="submit">
            Sign In
        </button>
    </form>

</div>


<?php # login.php   
    // Adjust the time zone for PHP 5.1 and greater...
    date_default_timezone_set('UTC');
    
    if ($_SERVER['REQUEST_METHOD']=='POST'){
        require('mysqli_connect.php');
        
        if (!empty($_POST['username'])){
            $u = mysqli_real_escape_string($conn, $_POST['username']);
        }else{
            echo '<center><h3>You forgot to enter your username!</h3></center>';
        }
        if (!empty($_POST['password'])){
            $p = mysqli_real_escape_string($conn, $_POST['password']);
        }else{
            echo '<center><h3>You forgot to enter your Password!</h3></center>';
        }
        
        if ($u && $p){ // if both username and password are entered...
            $q = "SELECT userid FROM credentials WHERE (username='$u' AND password=SHA1('$p'))";
            $r = mysqli_query($conn, $q);
            if (mysqli_num_rows($r)==1){
                session_start();
                $_SESSION['username'] = $_POST['username'];
                mysqli_free_result($r);
                mysqli_close($conn);
                ob_end_clean();
                echo("<script>location.href='index.php';</script>");
                exit();
            }else{
                // no match was made - wrong credentials
                echo '<center><h3>Wrong credentials!</h3></center>';
            }
        }else{
            echo '<center><h3>Error! Please try again later!</h3></center>';
        }
        mysqli_close($conn);
    }
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<footer>
<section class="copyright-section">
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="copyright">
                <p>Copyright &copy; 2017. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</div>
</section>
</footer> 
</div>
</body>
</html>