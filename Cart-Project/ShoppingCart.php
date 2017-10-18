
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cart </title>
    <link href="https://assets.onestore.ms/cdnfiles/onestorerolling-1601-22000/shell/v3/scss/shell.min.css"
          rel="stylesheet" type="text/css" media="screen"/>
    <script type="text/javascript" src="Shopping%20cart.js"></script>
</head>
<body>
<?php
try {
    $dbh = new PDO('mysql:host=127.0.0.1;dbname=shopping', 'root', 'root');

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


?>

<!-- header -->
<div id="shell-header" class="shell-header shell-responsive" ms.pgarea="header">
    <!-- drop down menu and the shopping cart -->
    <div class="shell-header-wrapper">
        <div class="shell-header-top" data-bi-area="HeaderL0" data-bi-view="L0V1">
            <!-- All of the button and drop downs -->
            <div class="shell-header-nav-wrapper" ms.cmpgrp="nav" role="navigation">
                <!-- css maybe? -->
                <ul class="shell-header-nav" id="srv_shellHeaderNav" data-bi-area="L1"
                    data-bi-view="Hovermenus">
                    <li class="shell-header-user-mobile-container" style="right: 75px;">
                        <div id="shellmenu_6" class="shell-header-dropdown-label">
                            <a
                                    href="javascript:void(0)" role="menu" ms.title="Store"
                                    data-bi-name="Store" data-bi-slot="1" tabindex="20"
                                    style="font-family: monospace; font-size: 20px;">
                                <a href="index.php"> Pringles Me </a>
                            </a>
                        </div>
                    </li>
                    <li class="shell-header" data-navcontainer="shellmenu_5_NavContainer" style="right: 30px;">
                        <div id="shellmenu_5" class="shell-header-dropdown-label">
                            <a
                                    href="javascript:void(0)" role="menu" ms.title="Store"
                                    data-bi-name="Store" data-bi-slot="1" tabindex="20">
                                Shopping Cart
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="faketable">
<p style="margin-left: 20%">Product</p>
<p style="margin-left: 40%; margin-top: -2.5%">Quantity</p>
<p style="margin-left: 60%; margin-top: -2.6%">Price</p>
    <p style="margin-left: 70%; margin-top: 2.5%">Total</p>
    <p style="margin-left: 70%; margin-top: 2.5%">Tax</p>
    <p style="margin-left: 70%; margin-top: 2.5%">Total Price</p>

</div>



</body>
</html>
<!-- php session write through the session. You can also use a table for php. For java script use cookies. -->