<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign In </title>
    <link href="https://assets.onestore.ms/cdnfiles/onestorerolling-1601-22000/shell/v3/scss/shell.min.css"
          rel="stylesheet" type="text/css" media="screen"/>
    <link href="signin.css" rel="stylesheet" type="text/css">
    <script src="signin.js" type="text/javascript"></script>
</head>
<body>
<?php
try {
    $dbh = new PDO('mysql:host=127.0.0.1;dbname=shopping', 'root', 'root');

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
if(@$_POST['formSubmit'] == "Submit")
{
    $errorMessage = "";

    if(empty($_POST['username']))
    {
        $errorMessage = "<li>You forgot to enter your username.</li>";
    }
    if(empty($_POST['password']))
    {
        $errorMessage = "<li>You forgot to enter your last password.</li>";
    }


    $stmt = $dbh->prepare("INSERT INTO signin2 (username, password ) VALUES (?, ?)");

    $result = $stmt->execute(array($_POST['username'], $_POST['password']));

    if(!$result){
        print_r($stmt->errorInfo());
    }

    if(!empty($errorMessage))
    {
        echo("<p>There was an error with your form:</p>\n");
        echo("<ul>" . $errorMessage . "</ul>\n");
    }

}?>
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
    Sign In
</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div style="width: auto; height: 400px; margin-top: 4%;">
    <div id="form">
        <form method="post">

            <fieldset>
                <h2 class="fs-title">Sign In</h2>
                <input type="text" name="username" placeholder="Username or E-mail"/>
                <input type="password" name="password" placeholder="Password"/>
                <input type="submit" name="formSubmit" value="Submit" onclick="newPage()"/>
            </fieldset>

        </form>
    </div>
<div style="margin-top: 20%;">
    <p style="font-size: 50px; text-align: center; margin-left: 5%;">"Thank you for choosing us!"</p>
</div>
</div>


</body>
</html>