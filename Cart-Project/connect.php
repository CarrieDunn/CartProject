<?php
try {
    $dbh = new PDO('mysql:host=127.0.0.1;dbname=shopping', 'root', 'root');

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
