<!DOCTYPE html>
<html>
<head>
    <title>Create your My Notes Account</title>
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
            <form id="signupform" class="form-horizontal" role="form" action="../php/register.php" method="POST">
                <h2 class="title">Sign Up</h2>
               <?php
                if(@$_GET['Error']==true)
                {
              ?>
              <p class="txt_error"> <?php echo $_GET['Error'] ?>  </p>
                                                                 
              <?php
                }
              ?>
              <?php 
                if(@$_GET['Success']==true)
                {
              ?>
              <p class="txt_success"> <?php echo $_GET['Success'] ?>  </p>
            
                                              
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
              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-user"></i>
                 </div>
                 <div class="div">
                    <h5>First Name</h5>
                    <input type="text" class="input" name="firstname">
                 </div>
              </div>
              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-user"></i>
                 </div>
                 <div class="div">
                    <h5>Last Name</h5>
                    <input type="text" class="input" name="lastname">
                 </div>
              </div>
              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-lock"></i>
                 </div>
                 <div class="div">
                    <h5>Password</h5>
                    <input type="password" class="input" name="password">
                 </div>
              </div>
                <div class="input-div pass">
                   <div class="i"> 
                        <i class="fas fa-lock"></i>
                   </div>
                   <div class="div">
                        <h5>Confirm Password</h5>
                        <input type="password" class="input" name="confirmpassword">
                   </div>
                </div>
                <input type="submit" class="btn" value="register" name="register">
              <p class="txt_signup"> Already have an account? <a class="txt_signup" href="login.php">Login here.</a> </p>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="../js/main.js"></script>
</body>
</html>
