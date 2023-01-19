<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Creative</title>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="../Master_CSS/creative.css">

    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    <script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script>


    <!-- link for google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">

    
</head>

<body>
    
    <div id="container">
        
        <!-- //////////////// -->
        
        <div class="loading" id="js-loader">
            <div class="loader"></div>
        </div>
        <div class="wrapper">
            <!-- The canvas element is used to draw the 3D scene -->
            <canvas id="c"></canvas>
        </div>
        <div class="frame">
            <?php include('navbar.php'); ?>
        </div>
        <h2 class="frame__title">Creative</h2>
            <span class="action">Click me!</span>
            <!-- The main Three.js file -->
            <script src='https://cdnjs.cloudflare.com/ajax/libs/three.js/108/three.min.js'></script>
            <!-- This brings in the ability to load custom 3D objects in the .gltf file format. Blender allows the ability to export to this format out the box -->
            <script src='https://cdn.jsdelivr.net/gh/mrdoob/Three.js@r92/examples/js/loaders/GLTFLoader.js'></script>
            <!-- partial -->
            <script  src="../js/script.js"></script>

        <!-- //////////////// -->
        
    </div>

    <?php include('footer.php'); ?>

</body>
</html>