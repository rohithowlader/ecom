<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>e-Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="app.js"></script>
    </head>

    <body>
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>
        <div id="content">
            <div class="container decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-sm-9 col-md-9 .col-lg-3">
                        <h1 style="font-size: 5rem"">Live Support</h1>
                        <p style="font-size: 2rem">Whether you are running Wix, WordPress, Magento, Joomla, Shopify or any other platform, the live chat can be used with any Content Management System (CMS). Integration can be done by inserting a code snippet directly into your HTML code or through a plugin installation. It’s easy. You don’t need to be tech savvy to get Provide Support up and running on your website.</p>
                    </div>
                    <div class="col-sm-3 col-md-3 .col-lg-3">
                        <img src="img/contact.jpg" alt="">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel" >
                            <div class="panel-heading">
                                <h1 style="font-size: 5rem">CONTACT US</h1>
                            </div>
                            <div class="panel-body">
                                <form role="form" action="contact_script.php" method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="Name" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control"  placeholder="Email" name="e-mail" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea rows="4" cols="50" class="form-control"  placeholder="Mesage" name="message" required></textarea>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-secondary"> Submit </button><br><br>
                                </form><br/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h1 style="font-size: 5rem"">Company Information:</h1>
                        <p style="font-size: 2rem"> 266/3, Netaji Sanga Club,<br> 20, James Long Sarani,<br> Behala Chowrasta,<br> beside Barisha,<br> Kolkata,<br> West Bengal 700008<br>Phn.: +91-123-000000</p>
                        <p style="font-size: 2.2rem">Follw us Facebook and Twitter</p>
                    </div>
                </div>
            </div>
        </div>
            
        <?php include("includes/footer.php"); ?>
    </body>

</html>
