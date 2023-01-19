<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>3D Model Website</title>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="../Master_CSS/about.css">

    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    <script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script>


    <!-- link for google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">

    
</head>

<body>
    <?php include('navbar.php'); ?>
    
    <div id="container">
        <h2>About US</h2>
        <div id="aSide">
            <model-viewer src="../Models/model8/scene.gltf" alt="model robot" auto-rotate camera-controls ar ios-src="../Models/model8/scene.gltf" class="model"></model-viewer>
        </div>
        
        <div id="aSide2">
            <model-viewer src="../Models/model9/scene.gltf" alt="model robot" auto-rotate camera-controls ar ios-src="../Models/model9/scene.gltf" class="model"></model-viewer>
        </div>

        <div id="aSide3">
            <p><b>We are a company that specializes in making a 3D replica of you. You may be wondering <br> why we need it ??</b> <br><br>
                Most of the time, when users order clothes online, they may face a few problems, for example, the difficulty of knowing if the clothes fit their appearance, or not knowing the consistency of the clothes with each other. We have provided you with a way in which you can purchase to see your figure, which is the original thing you wear. The clothes that you select and style the clothes with each other and buy based on their consistency with your appearance

</p>
        </div>

        <div id="aSide4">
            <p><b>You may be wondering how our site works ??</b> <br><br>
                We will ask you for some data regarding the size of some of your limbs, such as hand length, waist size, etc. On this basis, a character will be created for you on the same size as the information entered, and then you will move to the clothing-selling platforms that deal with us and coordinate the clothes</p>
        </div>

        
    </div>

    <?php include('footer.php'); ?>

</body>
</html>