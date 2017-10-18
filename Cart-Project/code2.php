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


if(@$_POST['productID'])
{    $errorMessage = "";

    if(empty($_POST['cart-yes']))
    {
        $errorMessage = "<li>idk bro sorry</li>";
    }

    $stmt = $dbh->prepare("UPDATE products SET `cart-yes` = 1 WHERE id = :id");
    $result = $stmt->execute(array('id'=>$_POST['productID']));

}

$stmt = $dbh->prepare("SELECT * FROM products where `cart-yes` = 1 ORDER BY id ASC");
$stmt->execute(array('id' => $_GET['product']));
$results = $stmt->fetchAll();

echo "<pre>";
print_r($results);
echo "</pre>";



