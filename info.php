<!DOCTYPE html>
<html>
    <head>
        <title>CourseTube</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/info.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,400italic">
    </head>
    <body>
        <?php 
            include "info2.php" 
        ?>
        <div class="navbar">
            <div class="float">
                <img src="image/course.png">
                <p>CourseTube</p>
            </div>
        </div>
        <div class="clear"></div>
        <div class="info">
            <?php echo $output; ?>
        </div>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/custom2.js"></script>
        <script src="js/jquery.nicescroll.min.js"></script>
    </body>
</html>