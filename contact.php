<!DOCTYPE html>
<html>
    <head>
        <title>Slides and Negatives. Contact me</title>
        <meta charset="utf-8"/>
        <meta name = "description" content = "Contact me"/>
        <meta name = "author" content = "Birch">
        <link rel="stylesheet" type="text/css" href="css/defaults.css"/>
        <link rel="icon" href="pictures/favicon.png"/>
    </head>
    <body>
        <header>
            <!--Title area of the page-->
            <a  href="index.php" title="Return to the home page"><img src="pictures/logo.png" alt="Slides & Negatives"/></a>
            <h1>Contact</h1>
            <br>
        </header>
        <!--Column 1 Area-->
        <div id="column1">
            <?php require '../web/scripts/menu.php';?>
        </div>
        <div id="column2">
            <div id="contact_page">
                Leave me a message! I'd like to hear back from visitors!
                <form action="scripts/mail.php" method="post">
                    <br>Your name<br>
                    <input type="text" name="cf_name"><br>
                    Your e-mail<br>
                    <input type="text" name="cf_email"><br>
                    Message<br>
                    <textarea name="cf_message" rows="4" cols="50" placeholder="Type your message here"></textarea><br>

                    <br>
                    What's it for?:
                    <input type="radio" value="m" name="cf_radio_button">Message for me
                    <input type="radio" value="t" name="cf_radio_button">Tech problem
                    <br>

                    Message urgency: 
                    <select size="1" name="cf_drop_down">
                        <option>Anytime</option>
                        <option>Soon</option>
                        <option>Immediately</option>
                    </select>
                    <br>    
                    <input class="contact_button" type="submit" value="Send">
                    <input class="contact_button" type="reset" value="Clear">
                </form>
            </div>
        </div>
        <footer>&#169; Birch Sztabnik 2015</footer>
    </body>
</html>
