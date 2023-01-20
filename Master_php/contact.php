<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=7, initial-scale=1.0">
    <title>Contact US</title>
    <link rel="stylesheet" href="../Master_CSS/contact.css">


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Contact Us Page Design using Html CSS</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">

</head>
<body>
<?php include('navbar.php'); ?>


<div class="warpper"> 
    <div class="form-wrapper sign-in">
        <div class="form-wrapper2 sign-in">      
            <form action="">
                <h2>Contact US</h2>
                
                <div class="input-group">
                    <input type="text" required>
                    <label for="">Name</label>
                </div>
                
                <div class="input-group">
                    <input type="email" required>
                    <label for="">Email</label>
                </div>

                <div class="input-group">
                    <textarea name="" id="" cols="30" rows="8"></textarea>
                    <label for="">Massage</label>  
                </div>

                <button type="submit"><i class="fa-solid fa-paper-plane"></i>Send</button>
                <!-- <div class="log_re_btn">
                    <a href="#" class="login_btn">
                        <span><i class="fa-solid fa-paper-plane"></i>Send</span>
                        <div class="liquid"></div>
                    </a>
                </div> -->

                
            </form>
        </div>

        

    </div>

</div>


<?php include('footer.php'); ?>
    
<script src="../Master_js/login_register.js"></script>
</body>
</html>