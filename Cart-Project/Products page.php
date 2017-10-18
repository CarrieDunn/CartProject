<?php
try {
    $dbh = new PDO('mysql:host=127.0.0.1;dbname=shopping', 'root', 'root');

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
<!--
<?php
session_start();
if (isset($_GET['item1'])) {
    $_SESSION['checkout']++;
    header("location: index.php");
    $_SESSION['total']+= 800;
}
if (isset($_GET['item2'])) {
    $_SESSION['checkout']++;
    header("location: index.php");
    $_SESSION['total']+= 500;
}
if (isset($_GET['item3'])) {
    $_SESSION['checkout']++;
    header("location: index.php");
    $_SESSION['total']+= 100;
}
if (isset($_GET['item4'])) {
    $_SESSION['checkout']++;
    header("location: index.php");
    $_SESSION['total']+= 800;
}
if (isset($_GET['item5'])) {
    $_SESSION['checkout']++;
    header("location: index.php");
    $_SESSION['total']+= 300;
}
if (isset($_GET['item6'])) {
    $_SESSION['checkout']++;
    header("location index.php");
    $_SESSION['total']+= 5;
}
if (isset($_GET['item7'])) {
    $_SESSION['checkout']++;
    header("location: index.php");
    $_SESSION['total']+= 300;
}
if (isset($_GET['item8'])) {
    $_SESSION['checkout']++;
    header("location: index.php");
    $_SESSION['total']+= 5;
}
if (isset($_GET['item9'])) {
    $_SESSION['checkout']++;
    header("location: index.php");
    $_SESSION['total']+= 50;
}
?>
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product page</title>
    <link href="https://assets.onestore.ms/cdnfiles/onestorerolling-1601-22000/shell/v3/scss/shell.min.css"
          rel="stylesheet" type="text/css" media="screen"/>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>
<body>
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
                                    Product Page
                                </a>
                            </div>
                        </li>
                        <!--
                        <li>
                            <a href="">
                                In Cart:
                                <?php
                                echo $_SESSION['checkout']
                                ?>
                            </a>
                        </li>
                        -->
                </ul>
            </div>
            </div>
        </div>
    </div>

<div id="products">
    <table style="margin-left: 25px;">
        <tr style="height: 400px; width: auto;">

            <td style="width: 1000px;">
                <div id="body" style="height: 400px; width: 1200px;margin-top: 1.5%">
                    <div id="des" style="height: 300px; width: 800px; float: right; margin-top: 1%">
                        <h1 style="text-align: center; text-decoration: underline;">Cheddar Cheese</h1>
                        <br>
                        <br>
                        <p style="margin-left: 2%; font-size: medium; text-align: left;">You know what's better than 1 can of pringles?
                            50 cans of your favorite type of pringles!
                            These Cheddar cheese flavored goodness are at a stealing rate of 1 dollar a can.
                            Normally a can of pringles goes for 1.57 a can.
                            While now, not only can you order these in bulk.
                            You can get it for a great price and shipped right to your home!</p>
                    </div>
                    <div id="pictho" style=" height: 350px; width: 400px; padding-top: 3%">
                        <img  style="width: 400px; margin-top: -9%;"
                              src="http://heavenlylollies.com.au/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/p/r/prngchdchs-b1-01.jpg">
                    </div>
                    <p style="margin-left: 35%; font-size: 50px; margin-top: -3%;">$50 </p>
                    <div id="button" style="height: 200px; width: 500px; margin-top: -6.5%; margin-left: 73% ">
                        <form action="ShoppingCart.php">
                            <input type="submit" class="btn btn-default btn-lg btn-block" style="background-color: orange; height: 75px; width: 300px;" value ="Add To Cart">
                        </form>
                    </div>
                </div>
            </td>
        </tr>

        <tr style="height: 400px; width: auto;">

            <td style="width: 1000px;">
                <div id="body" style="height: 400px; width: 1200px; margin-top: 1.5%; background-color: #333333; color: white;">
                    <div id="des" style=" height: 300px; width: 800px; float: right; margin-top: 1%">
                        <h1 style="text-align: center; text-decoration: underline;">Pizza</h1>
                        <br>
                        <br>
                        <p style="margin-left: 2%; font-size: medium; text-align: left;">You know what's better than 1 can of pringles?
                            50 cans of your favorite type of pringles!
                            These Pizza flavored goodness are at a stealing rate of 1 dollar a can.
                            Normally a can of pringles goes for 1.57 a can.
                            While now, not only can you order these in bulk.
                            You can get it for a great price and shipped right to your home!</p>
                    </div>
                    <div id="pictho" style=" height: 350px; width: 400px; padding-top: 3%">
                        <img style="width: 400px;margin-top: -9%;" src="http://images.huffingtonpost.com/2014-04-18-p4.jpg">
                    </div>
                    <p style="margin-left: 35%; font-size: 50px; margin-top: -3%;">$50 </p>
                    <div id="button" style="height: 200px; width: 500px; margin-top: -6.5%; margin-left: 73% ">
                        <form action="ShoppingCart.php">
                            <input type="submit" class="btn btn-default btn-lg btn-block" style="background-color: orange; height: 75px; width: 300px;" value ="Add To Cart">
                        </form>
                    </div>
                </div>
            </td>
        </tr>

        <tr style="height: 400px; width: auto;">

            <td style="width: 1000px;">
                <div id="body" style="height: 400px; width: 1200px; margin-top: 1.5%">
                    <div id="des" style=" height: 300px; width: 800px; float: right; margin-top: 1%">
                        <h1 style="text-align: center; text-decoration: underline;">Ranch</h1>
                        <br>
                        <br>
                        <p style="margin-left: 2%; font-size: medium; text-align: left;">You know what's better than 1 can of pringles?
                            50 cans of your favorite type of pringles!
                            These Ranch flavored goodness are at a stealing rate of 1 dollar a can.
                            Normally a can of pringles goes for 1.57 a can.
                            While now, not only can you order these in bulk.
                            You can get it for a great price and shipped right to your home!</p>
                    </div>
                    <div id="pictho" style="height: 350px; width: 400px; padding-top: 3%">
                        <img style="width: 400px; margin-top: -9%;"
                             src="http://heavenlylollies.com.au/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/p/r/prngrnch-b1-01.jpg">
                    </div>
                    <p style="margin-left: 35%; font-size: 50px; margin-top: -3%;">$50 </p>
                    <div id="button" style="height: 200px; width: 500px; margin-top: -6.5%; margin-left: 73% ">
                        <form action="ShoppingCart.php">
                            <input type="submit" class="btn btn-default btn-lg btn-block" style="background-color: orange; height: 75px; width: 300px;" value ="Add To Cart">
                        </form>
                    </div>
                </div>
            </td>
        </tr>


        <tr style="height: 400px; width: auto;">

            <td style="width: 1000px;">
                <div id="body" style="height: 400px; width: 1200px;  margin-top: 1.5%; background-color: #333333; color: white;">
                    <div id="des" style=" height: 300px; width: 800px; float: right; margin-top: 1%">
                        <h1 style="text-align: center; text-decoration: underline;">Salted Seaweed</h1>
                        <br>
                        <br>
                        <p style="margin-left: 2%; font-size: medium; text-align: left;">You know what's better than 1 can of pringles?
                            35 cans of your favorite type of pringles!
                            These Salted Seaweed flavored goodness are at a stealing rate of 1 dollar a can.
                            Normally a can of pringles goes for 1.57 a can.
                            While now, not only can you order these in bulk.
                            You can get it for a great price and shipped right to your home!</p>
                    </div>
                    <div id="pictho" style=" height: 350px; width: 400px; padding-top: 3%">
                        <img style="width: 400px; margin-top: -9%;"
                             src="http://cdn4.list25.com/wp-content/uploads/2014/10/andnowjakarta.blogspot.com-weed.jpg">
                    </div>
                    <p style="margin-left: 35%; font-size: 50px; margin-top: -3%;">$35 </p>
                    <div id="button" style="height: 200px; width: 500px; margin-top: -6.5%; margin-left: 73% ">
                        <form action="ShoppingCart.php">
                            <input type="submit" class="btn btn-default btn-lg btn-block" style="background-color: orange; height: 75px; width: 300px;" value ="Add To Cart">
                        </form>
                    </div>
                </div>
            </td>
        </tr>

        <tr style="height: 400px; width: auto;">

            <td style="width: 1000px;">
                <div id="body" style="height: 400px; width: 1200px;  margin-top: 1.5%">
                    <div id="des" style=" height: 300px; width: 800px; float: right; margin-top: 1%">
                        <h1 style="text-align: center; text-decoration: underline;">Zesty Southwest Cheese</h1>
                        <br>
                        <br>
                        <p style="margin-left: 2%; font-size: medium; text-align: left;">You know what's better than 1 can of pringles?
                            35 cans of your favorite type of pringles!
                            These Zesty Southwest Cheese flavored goodness are at a stealing rate of 1 dollar a can.
                            Normally a can of pringles goes for 1.57 a can.
                            While now, not only can you order these in bulk.
                            You can get it for a great price and shipped right to your home!</p>
                    </div>
                    <div id="pictho" style=" height: 350px; width: 400px; padding-top: 3%">
                        <img style="width: 400px;margin-top: -9%; "
                             src="http://farm3.static.flickr.com/2899/14123303413_a45e6880cf.jpg">
                    </div>
                    <p style="margin-left: 35%; font-size: 50px; margin-top: -3%;">$35 </p>
                    <div id="button" style="height: 200px; width: 500px; margin-top: -6.5%; margin-left: 73% ">
                        <form action="ShoppingCart.php">
                            <input type="submit" class="btn btn-default btn-lg btn-block" style="background-color: orange; height: 75px; width: 300px;" value ="Add To Cart">
                        </form>
                    </div>
                </div>
            </td>
        </tr>

        <tr style="height: 400px; width: auto;">

            <td style="width: 1000px;">
                <div id="body" style="height: 400px; width: 1200px; margin-top: 1.5%; background-color: #333333; color: white;">
                    <div id="des" style=" height: 300px; width: 800px; float: right; margin-top: 1%">
                        <h1 style="text-align: center; text-decoration: underline;">Lightly Salted</h1>
                        <br>
                        <br>
                        <p style="margin-left: 2%; font-size: medium; text-align: left;">You know what's better than 1 can of pringles?
                            35 cans of your favorite type of pringles!
                            These Lightly Salted flavored goodness are at a stealing rate of 1 dollar a can.
                            Normally a can of pringles goes for 1.57 a can.
                            While now, not only can you order these in bulk.
                            You can get it for a great price and shipped right to your home!</p>
                    </div>
                    <div id="pictho" style=" height: 350px; width: 400px; padding-top: 3%">
                        <img style="width: 400px; margin-top: -9%;"
                             src="http://s.ecrater.com/stores/333649/5378632585048_333649n.jpg">
                    </div>
                    <p style=" margin-left: 35%; font-size: 50px; margin-top: -3%;">$35 </p>
                    <div id="button" style="height: 200px; width: 500px; margin-top: -6.5%; margin-left: 73% ">
                        <form action="ShoppingCart.php">
                            <input type="submit" class="btn btn-default btn-lg btn-block" style="background-color: orange; height: 75px; width: 300px;" value ="Add To Cart">
                        </form>
                    </div>
                </div>
            </td>
        </tr>

        <tr style="height: 400px; width: auto;">

            <td style="width: 1000px;">
                <div id="body" style="height: 400px; width: 1200px;  margin-top: 1.5%">
                    <div id="des" style=" height: 300px; width: 800px; float: right; margin-top: 1%">
                        <h1 style="text-align: center; text-decoration: underline;">Jalapeno</h1>
                        <br>
                        <br>
                        <p style="margin-left: 2%; font-size: medium; text-align: left;">You know what's better than 1 can of pringles?
                            20 cans of your favorite type of pringles!
                            These Jalapeno flavored goodness are at a stealing rate of 1 dollar a can.
                            Normally a can of pringles goes for 1.57 a can.
                            While now, not only can you order these in bulk.
                            You can get it for a great price and shipped right to your home!</p>
                    </div>
                    <div id="pictho" style=" height: 350px; width: 400px; padding-top: 3%">
                        <img style="width: 400px; margin-top: -9%;"
                             src="http://heavenlylollies.com.au/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/2/1/211_1.jpg">
                    </div>
                    <p style=" margin-left: 35%; font-size: 50px; margin-top: -3%;">$20 </p>
                    <div id="button" style="height: 200px; width: 500px; margin-top: -6.5%; margin-left: 73% ">
                        <form action="ShoppingCart.php">
                            <input type="submit" class="btn btn-default btn-lg btn-block" style="background-color: orange; height: 75px; width: 300px;" value ="Add To Cart">
                        </form>
                    </div>
                </div>
            </td>
        </tr>

        <tr style="height: 400px; width: auto;">

            <td style="width: 1000px;">
                <div id="body" style="height: 400px; width: 1200px;  margin-top: 1.5%; background-color: #333333; color: white;">
                    <div id="des" style=" height: 300px; width: 800px; float: right; margin-top: 1%">
                        <h1 style="text-align: center; text-decoration: underline;">French Onion Dip</h1>
                        <br>
                        <br>
                        <p style="margin-left: 2%; font-size: medium; text-align: left;">You know what's better than 1 can of pringles?
                            20 cans of your favorite type of pringles!
                            These French Onion Dip flavored goodness are at a stealing rate of 1 dollar a can.
                            Normally a can of pringles goes for 1.57 a can.
                            While now, not only can you order these in bulk.
                            You can get it for a great price and shipped right to your home!</p>
                    </div>
                    <div id="pictho" style=" height: 350px; width: 400px; padding-top: 3%">
                        <img style="width: 400px; margin-top: -9%;"
                             src="http://www.junkfoodguy.com/wp-content/uploads/2012/01/gametime10.png">
                    </div>
                    <p style="margin-left: 35%; font-size: 50px; margin-top: -3%;">$20 </p>
                    <div id="button" style="height: 200px; width: 500px; margin-top: -6.5%; margin-left: 73% ">
                        <form action="ShoppingCart.php">
                            <input type="submit" class="btn btn-default btn-lg btn-block" style="background-color: orange; height: 75px; width: 300px;" value ="Add To Cart">
                        </form>
                    </div>
                </div>
            </td>
        </tr>

        <tr style="height: 400px; width: auto;">

            <td style="width: 1000px;">
                <div id="body" style="height: 400px; width: 1200px; margin-top: 1.5%">
                    <div id="des" style=" height: 300px; width: 800px; float: right; margin-top: 1%">
                        <h1 style="text-align: center; text-decoration: underline;">Salt And Vinegar</h1>
                        <br>
                        <br>
                        <p style="margin-left: 2%; font-size: medium; text-align: left;">You know what's better than 1 can of pringles?
                            20 cans of your favorite type of pringles!
                            These Salt And Vinegar flavored goodness are at a stealing rate of 1 dollar a can.
                            Normally a can of pringles goes for 1.57 a can.
                            While now, not only can you order these in bulk.
                            You can get it for a great price and shipped right to your home!</p>
                    </div>
                    <div id="pictho" style=" height: 350px; width: 400px; padding-top: 3%">
                        <img style="width: 400px;margin-top: -9%;"
                             src="http://kitchener.ctvnews.ca/polopoly_fs/1.1488162.1381225600!/httpImage/image.jpg_gen/derivatives/landscape_620/image.jpg">
                    </div>
                    <p style=" margin-left: 35%; font-size: 50px; margin-top: -3%;">$20 </p>
                    <div id="button" style="height: 200px; width: 500px; margin-top: -6.5%; margin-left: 73% ">
                        <form action="ShoppingCart.php">
                            <input type="submit" class="btn btn-default btn-lg btn-block" style="background-color: orange; height: 75px; width: 300px;" value ="Add To Cart">
                        </form>
                    </div>
                </div>
            </td>
        </tr>
    </table>

</div>
</body>
</html>