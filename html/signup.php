<!DOCTYPE html>
<html>
<head>
    <title>Create your My Notes Account</title>
    <link rel="icon" href="https://lh3.googleusercontent.com/pw/ACtC-32n3AfVM36ugBczzdtwkxC6Rai1so3ajf9OjGAD0YVgNENFMUt8cR8K8bhnacYMmmDWwZM9jOEVDODzFyZoQoOD_MiBWwIYfUll6EY9-xehPk7gg0be0PXsyCw9RMHX789iqKkTKm0atpBcd6YwdjUBJhpl_qpu=w699-h697-no">
    <link rel="stylesheet" type="text/css" href="../css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
   <img class="wave" src="https://lh3.googleusercontent.com/pw/ACtC-32n3AfVM36ugBczzdtwkxC6Rai1so3ajf9I_zCcnqbP29MGs0eiPZYZujiH_MA7W--ysOMY--eRlDYdeChJeKjaChTcr7ZmvHG8U2n4j7tTcygcrAAq_W39t_SUFShuYKB1F7eSRPS4eOFzK6xZ=w574-h697-no">
    <div class="container">
        <div class="img">
            <img src="https://lh3.googleusercontent.com/pw/ACtC-32n3AfVM36ugBczzdtwkxC6Rai1so3ajf9RAcwAeP8NbD7ZdRVcaYC0uygeCYq_bzXaMS1eIDC9smsIcvMA8RFkMy0_TYniJ0TJlEtjICiQNSust5Hap3VkcbD9khxAoAEps8s8bRcT=w838-h697-no">
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
