<!DOCTYPE html>
<!--
#474747
#CCCC99
#CCCCCC
-->
<html>
    <head>
        <title>Slides and Negatives. Rome 2014</title>
        <meta charset="utf-8"/>
        <meta name = "description" content = "Rome"/>
        <meta name = "author" content = "Birch">
        <link rel="stylesheet" type="text/css" href="../css/defaults.css"/>
        <link rel="icon" href="../pictures/favicon.png"/>
    </head>

    <body>
        <header>
            <!--Title area of the page-->
            <a  href="../index.php" title="Return to the home page"><img src="../pictures/logo.png" alt="Slides & Negatives"/></a>
            <h1>New York City 2014</h1>
            <br>
        </header>
        <!--Column 1 Area-->
        <div id="column1">
            <?php require '../scripts/menu.php';?>
        </div>
        <div id="column2">
            <?php require '../scripts/listPictures.php'; ?>
            <?php listPicturesInDir("ny2014"); ?>
        </div>
        <footer>&#169; Birch Sztabnik 2015</footer>
    </body>
</html>