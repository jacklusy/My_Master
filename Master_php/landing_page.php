<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>3D Model Website</title>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="../Master_CSS/landing.css">
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    <script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script>


    <!-- link for google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">

    
</head>

<body>
    <!-- navbar -->
    <?php include('navbar.php'); ?>
    
    <!-- <div class="img">
        <img src="../Master_img/black_and_white__squares__graphic__illustration__and_geometric_image_inspiration_on_Designspiration-removebg-preview.png" alt="squers">
    </div> -->
    <div id="container">
       
        <div id="aSide">
            <!-- <img src="../Master_img/[☀] black and white art fluid wallpaper - Apps on Galaxy Store.png" alt=""> -->
            <model-viewer src="../Models/model8/scene.gltf" alt="model robot" auto-rotate camera-controls ar ios-src="../Models/model8/scene.gltf" class="model"></model-viewer>
        </div>

        <div class="welcome">
            <h1>Welcome</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit <br> Eveniet consequuntur dolorum, cupiditate esse pariatur distinctio dolorem</p>
            <div class="log_re_btn">
                <a href="login.php" class="login_btn">
                    <span>Login</span>
                    <div class="liquid"></div>
                </a>
                <a href="#" class="register_btn">
                    <span>Register</span>
                    <div class="liquid"></div>
                </a>
            </div>
        </div>
        
        <div id="aSide2">
            <!-- <img src="../Master_img/[☀] black and white art fluid wallpaper - Apps on Galaxy Store.png" alt=""> -->
            <model-viewer src="../Models/model9/scene.gltf" alt="model robot" auto-rotate camera-controls ar ios-src="../Models/model9/scene.gltf" class="model"></model-viewer>
        </div>
        
    </div>

    <!-- footer -->
    <?php include('footer.php'); ?>

</body>
</html>