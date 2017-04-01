<!DOCTYPE HTML>
<?php $Hello;?>
<html>
    <head>
        <title>Slides & Negatives</title>
        <meta charset="utf-8"/>
        <meta name = "description" content = "A film photography website with pictures from all over."/>
        <meta name = "author" content = "Birch">
        <link rel="stylesheet" type="text/css" href="css/defaults.css"/>
        <link rel="icon" href="pictures/favicon.png"/>

        <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>

        <style>
            .mpPics{
                opacity: .4;
                -moz-transition: opacity .5s;
                -webkit-transition: opacity .5s;
                transition-property: opacity .5s;
                padding:2px;
                border:1px solid #474747;
                color: #474747;
                width: 300px;
                height: auto;
            }
            .mpPics.wide{
                width: 400px;
                height: auto;
                display: block;
                margin-left: auto;
            }
            .mpPics.center{
                display: block;
                margin-left: auto;
                margin-right: auto;
            }

            .mpPics[data-fade="on"]{
                opacity:1;
            }
        </style>
    </head>

    <body>
        <header>
            <!--Title area of the page-->
            <a  href="index.php" title="Return to the home page"><img src="pictures/logo.png" alt="Slides & Negatives"/></a>
            <h1>Welcome to Slides &AMP; Negatives</h1>
            <br>
        </header>
        <!--Column 1 Area-->
        <div id="column1">
            <?php
            require('../web/scripts/menu.php');
            ?>
        </div>
        <!--Column 2 Area
        <div id="column2">
                <table>
                <tr>
                    <td><img class="mpPics" alt="Santorini Cliffs" src="pictures/photos/santorinicliffs.jpg"></td>
                    <td><img class="mpPics wide" alt="Cassis Train Station" src="pictures/photos/cassistrainstation.jpg"/></td>		
                    <td><img class="mpPics center" alt="New York Merrill Lynch Building" src="pictures/photos/merrilllynch.jpg"/></td>
                </tr>
                </table>
        </div>
        <br>
        <script>
            var $mpPics = document.getElementsByClassName("mpPics");
            var n = $mpPics.length;
            var c = 0;

            function fadeImg() {
                for (var i = 0; i < n; i++)
                    $mpPics[i].dataset.fade = "off";
                $mpPics[c++ % n].dataset.fade = "on";
            }
            fadeImg();

            setInterval(fadeImg, 3000);
        </script>-->
    </body>
</html>
