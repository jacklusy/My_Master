<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=7, initial-scale=1.0">
    <title>Contact US</title>
    <link rel="stylesheet" href="../Master_CSS/contact.css">

    
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    <script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script>


    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">

</head>
<body>
<?php include('navbar.php'); ?>

    <div class="contact">
        <div class="contact-form">
            <div class="first-container">
                <div class="info-container">
                    <div id="aSide2">
                        <h2>Contact US  </h2>
                        <model-viewer src="../Models/model18/scene.gltf" alt="model robot" auto-rotate camera-controls ar ios-src="../Models/model18/scene.gltf" class="model"></model-viewer>
                    </div>
                </div>
            </div>

            <div class="form-wrapper2 sign-in">      
                <form action="">
                    
                    <div class="input-group">
                        <input type="text" required>
                        <label for="">First Name</label>
                    </div>

                    
                    <div class="input-group">
                        <input type="text" required>
                        <label for="">Last Name</label>
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
                    <div class="log_re_btn">
                        
                    </div>

                    
                </form>
            </div>


        </div>
    </div>


<?php include('footer.php'); ?>
    
<script src="../Master_js/login_register.js"></script>
</body>
</html>