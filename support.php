<!DOCTYPE HTML>
<html>
    <head>
        <title>Slides & Negatives. Donation and share page</title>
        <meta charset="utf-8"/>
        <meta name = "description" content = "Donation and sharing page"/>
        <meta name = "author" content = "Birch">
        <link rel="stylesheet" type="text/css" href="css/defaults.css" media="screen"/>
        <link rel="icon" href="pictures/favicon.png"/>
    </head>
    <body>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        
        <a href="index.php" title="Return to the home page"><img src="pictures/logo.png" alt ='Slides & Negatives'/></a>
        <h1>About</h1>
        <br>
        <!--Column 1 Area-->
        <div id="column1">
            <?php require '../web/scripts/menu.php';?>
        </div>
        <!--Column 2 Area-->
        <div id="column2">
            <article>
                <h2 id ="article_header">Donate and Share</h2>
                <br>
                <div class="paragraph">
                    I hope you are enjoying the website. To help keep it running, any kind of donation helps to pay for server costs and photography supplies. There's a few options
                    below, so pick any! If you can't donate, click the other link to share it with friends!
                    <br>
                    <script src="http://coinwidget.com/widget/coin.js"></script>
                    <script>
                    CoinWidgetCom.go({
                            wallet_address: "1B76FM987QMnbARH8hgLj8BdyfQAMKetPD"
                            , currency: "bitcoin"
                            , counter: "count"
                            , alignment: "bl"
                            , qrcode: true
                            , auto_show: false
                            , lbl_button: "Donate"
                            , lbl_address: "My Bitcoin Address:"
                            , lbl_count: "awesome donaters!"
                            , lbl_amount: "BTC"
                    });
                    </script>
                    <br>
                    <br>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
                    ">
                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                    </form>
                    <br>
                    
                    <div class="fb-share-button" data-href="http://www.slidesandnegatives.com" data-layout="box_count"></div>
                </div>
            </article>
        </div>
        <br>
        <footer>&#169; Birch Sztabnik 2014</footer>
    </body>
</html>


