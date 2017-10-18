<?php

/*** mysql hostname ***/
$hostname = '127.0.0.1';

/*** mysql username ***/
$username = 'root';

/*** mysql password ***/
$password = 'root';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=shopping-cart", $username, $password);
} catch (PDOException $e) {
}


/**
 * Check for add to cart
 */
if(@$_POST['productID'])
{    $errorMessage = "";

    if(empty($_POST['cart-yes']))
    {
        $errorMessage = "<li>idk bro sorry</li>";
    }

    $stmt = $dbh->prepare("UPDATE products SET `cart-yes` = 1 WHERE id = :id");
    $result = $stmt->execute(array('id'=>$_POST['productID']));

    header('Location: http://localhost:8080/shopping-cart/#cart');

}

/**
 * Grab cart contents
 */
$stmt = $dbh->prepare("SELECT * FROM products where `cart-yes` = 1 ORDER BY id ASC");
$stmt->execute();
$cartContents = $stmt->fetchAll();


$stmt = $dbh->prepare("SELECT * FROM products where id = 6 ORDER BY id ASC");
$stmt->execute(array('id' => $_GET['product']));
$results = $stmt->fetchAll();

if(@$_POST['addToCart'] == "Submit")
{    $errorMessage = "";

    if(empty($_POST['cart-yes']))
    {
        $errorMessage = "<li>idk bro sorry</li>";
    }

    $stmt = $dbh->prepare("INSERT INTO products (cart-yes) VALUES ('1')");


}



?>

    <!DOCTYPE html>
    <html>
<head>
    <link rel="stylesheet" href="stylesheet.css" type="text/css">
    <link rel="shortcut icon" href="https://cdn3.iconfinder.com/data/icons/nautical-icons/512/Sail_Boat-256.png">
    <!-- fonts -->
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Vollkorn:400,400italic' rel='stylesheet' type='text/css'>
    <!-- End Fonts -->
    <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
    <script src="jQuery.js"></script>
    <script rel="script" src="scripts.js" type="text/javascript"></script>
    <title>
        Boats and Rows
    </title>
</head>
<body>
<div id="container">
    <div id="nav" style="text-align: center">
        <div id="brand">
            <div id="logo">

            </div>
            <div id="title">
                <h1>
                    Boats and Rows
                </h1>
            </div>
        </div>

        <div id="nav-list">
            <ul style="padding-left: 0">
                <li>
                    <a id="home-nav">
                        Home
                    </a>
                </li>
                <li>
                    <a id="products-nav">
                        Products
                    </a>
                </li>
                <li>
                    <a id="contact-nav">
                        Contact
                    </a>
                </li>
                <li>
                    <a id="cart-nav">
                        Cart
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div id="main-home">
        <div id="home-top">
            <h1 id="greeting">
                Boats for the common man
            </h1>
            <h2 id="greeting-2">
                Buy new and used boats
            </h2>
        </div>
    </div>


    <div id="products">
        <div id="product-title">
            <h1 id="product-greeting">Products</h1>
        </div>
        <div id="product-table-div">
            <table id="product-table">
                <tr>
                    <?php

                    $stmt = $dbh->prepare("SELECT * FROM products ORDER BY id ASC");
                    $stmt->execute(array('id' => $_GET['product']));
                    $results = $stmt->fetchAll();


                    if (count($results) > 0) {
                        foreach ($results as $key=>$product) {

                            $productname = $product['name'];
                            $productprice = $product['price'];
                            $productimg = $product['pic-file'];
                            $productid = $product['id'];

                            if($key % 3 == 0){
                                echo "</tr><tr>";
                            }

                            echo "<td>
                                                    <img src=" . $productimg . " class='prods'>
                                                        <h4 class='prods-list'>$productname</h4>
                                                        <p class='prods-list'>$productprice</p>
                                                        <form method='post' action=''>
                                                        <input type='hidden' name='productID' value='$productid'/>
                                                        <input type='submit' name='addToCart' value='Add to Cart'/>
                                                        </form>
                                                </td>";
                        }
                    }

                    ?>
                </tr>
            </table>
        </div>
    </div>
    </form>


    <div id="cart">
        <div id="cart-top">
            <h1 id="greeting">
                Cart
            </h1>
        </div>
        <div id="cart-table-wrapper">
            <table id="cart-table" class="cart-table">
                <thead>
                <tr class="cart-table">
                    <th width="50px" class="cart-table"></th> <!-- number of items, auto incriment -->
                    <th width="300px" class="cart-table">Product Name</th>
                    <th width="150px" class="cart-table"></th> <!-- img Thumbnail -->
                    <th width="200px" class="cart-table">Price</th>
                </tr>
                </thead>
                <?php


                if (count($cartContents) > 0) {
                    foreach ($cartContents as $product) {
                        $cartname = $product['name'];
                        $cartpic = $product['pic-file'];
                        $cartprice = $product['price'];
                        $productid = $product['id'];

                        echo "<tr><td id='td-cart'>$productid</td><td id='name-cart'>$cartname</td><td><img src=" . $cartpic . " class='cart-pics'></td><td>$cartprice</td></tr>";
                    }
                }


                ?>
            </table>
        </div>
    </div>

</div>

<script>
    if(window.location.href.match(/#cart/)){
        $('#cart-nav')[0].click();
        console.log("asdfghjkl;");
    }
</script>

</body>
    </html><?php
/**
 * Created by PhpStorm.
 * User: session2
 * Date: 3/3/16
 * Time: 4:52 PM
 */