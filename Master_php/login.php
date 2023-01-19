<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=7, initial-scale=1.0">
    <title>Login & Register</title>
    <link rel="stylesheet" href="../Master_CSS/login.css">
</head>
<body>
<?php include('navbar.php'); ?>

<div class="warpper"> 
    <div class="form-wrapper sign-in">
        <div class="form-wrapper2 sign-in">      
            <form action="">
                <h2>Login</h2>
                <div class="input-group">
                    <input type="email" required>
                    <label for="">Email</label>
                </div>
            
                <div class="input-group">
                    <input type="password" required>
                    <label for="">Password</label>
                </div>

                <div class="remember">
                    <label for="">
                        <input type="checkbox"> Remember me
                    </label>
                </div>

                <button type="submit">Login</button>

                <!-- <div class="log_re_btn">
                    <a href="#" class="login_btn">
                        <span>Login</span>
                        <div class="liquid"></div>
                    </a>
                </div> -->

                <div class="register-link" >
                    <p>Don't have account?<a href="#" 
                    class="registerBtn-link" onclick="white()">Register</a></p>
                </div>
            </form>
        </div>

        <div class=" form-wrapper2 sign-in">      
            <form action="">
                <h2>Register</h2>
                <!-- <div class="input-group">
                    <input type="text" required>
                    <label for="">First Name</label>
                </div> -->
                <div class="input-group" >
                    <input type="text" required>
                    <label for="">Username</label>
                </div>
                <div class="input-group" >
                    <input type="email" required>
                    <label for="">Email</label>
                </div>
            
                <div class="input-group" >
                    <input type="password" required>
                    <label for="">password</label>
                </div>
            
                <div class="input-group" >
                    <input type="password" required>
                    <label for="">Reset Password</label>
                </div>
    
                <div class="remember" >
                    <label for="">
                        <input type="checkbox"> I agree to the terms & conditions
                    </label>
                </div>
    
                <button type="submit">Register</button>
    
                <!-- <div class="log_re_btn">
                    <a href="#" class="login_btn">
                        <span class="pad_re">Register</span>
                        <div class="liquid"></div>
                    </a>
                </div> -->
    
                <div class="register-link">
                    <p>Already have account?<a href="#" 
                    class="signInBtn-link" onclick="white2()">Login</a></p>
                </div>
            </form>
        </div>

    </div>

</div>

<div id="back_white">
    <pre>  </pre>
</div>

<?php include('footer.php'); ?>
    
<script src="../Master_js/login_register.js"></script>
</body>
</html>