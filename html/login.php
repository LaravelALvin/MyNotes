<?php
date_default_timezone_set('Asia/Manila');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign in - My Notes</title>
    <link rel="icon" href="https://lh3.googleusercontent.com/pw/ACtC-3dwAs4wQi00Xkzyxq0tOkXexJnbRs6dprouBETxGF7eTOxhPnjs9jJtka9UU-nviZRU4SVzD7RSdCUkDsx0iHacCcAdUd1hHFu4W_VOnZdCR7e9ik15ilGwSpJQF_N450P-o5Q91FpqEJQFIUo1HEOO=w699-h697-no">
    <link rel="stylesheet" type="text/css" href="../css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <img class="wave" src="https://lh3.googleusercontent.com/pw/ACtC-3c_JxUlKl01SIqfGisMFnLYVGrDwVl3PcGbAcKrFQ7TOVadTwesBaF9QVBi609EV9M7eCCfmcnHjbw_MXDZn8b_rmVrR6jazOm2wpXaRcWB5PaFan9zKqdYNq878GybjlLaaYLISdZ-0HW-R_VhqSaR=w574-h697-no">
    <div class="container">
        <div class="img">
            <img src="https://lh3.googleusercontent.com/pw/ACtC-3ft5TL-Gepf2mIz7uE5bthM0O4FrdQr8NcJNkknHze8bIH8BMycGsNBLqbeFxy6N5yNm5Msfgpx0DnQRKgdVqEZ7SHmhabJw6anUEym9s8GALAquKVhimA7VCf275Wism1MYEKzG0CNFmaF4P812Xed=w838-h697-no">
        </div>
        <div class="login-content">
            <form id="loginform" class="form-horizontal" role="form" action="../php/login.php" method="POST">
                <img src="https://lh3.googleusercontent.com/pw/ACtC-3c-mRMtkuBdOlKb2uOoAWJbdI5HV73ehiLDDrffH1OzaOf68FqRrvZFjmBEe04MXdXVY0Tdfy-VQ2XvGOi81TbOSqsUpmqtAaOJVaJTcXiRG-PYp3RGea7mb2AbikO2PQ2Vn1RDzLW6z9-33FpIzQ9q=s697-no">
                <h2 class="title">Welcome</h2>
              <?php
                if(@$_GET['Empty']==true)
                {
              ?>
              <p class="txt_error"> <?php echo $_GET['Empty'] ?>  </p>
                                                                 
              <?php
                }
              ?>
              <?php 
                if(@$_GET['Invalid']==true)
                {
              ?>
              <p class="txt_error"> <?php echo $_GET['Invalid'] ?>  </p>
            
                                              
              <?php
                }
              ?>
              
                <div class="input-div one">
                   <div class="i">
                        <i class="fas fa-user"></i>
                   </div>
                   <div class="div">
                        <h5>Username</h5>
                        <input type="text" class="input" name="username">
                   </div>
                </div>
                <div class="input-div pass">
                   <div class="i"> 
                        <i class="fas fa-lock"></i>
                   </div>
                   <div class="div">
                        <h5>Password</h5>
                        <input type="password" class="input" name="password">
                   </div>
                </div>
                <a href="#">Forgot Password?</a>
                <input type="submit" class="btn" value="Login" name="Login">
                <p class="txt_signup"> New User? <a class="txt_signup" href="signup.php">Sign up here.</a> </p>
                
            </form>
        </div>
    </div>
    <script type="text/javascript" src="../js/main.js"></script>
</body>
</html>
