<!DOCTYPE html >
<html xmlns:mscom="http://schemas.microsoft.com/CMSvNext" xmlns:md="http://schemas.microsoft.com/mscom-data" lang="en"
      xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Shopping Cart</title>
    <!-- drop down script -->
    <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.2.min.js"></script>
    <link href="https://assets.onestore.ms/cdnfiles/onestorerolling-1601-22000/shell/v3/scss/shell.min.css"
          rel="stylesheet" type="text/css" media="screen"/>
    <link href="https://assets.onestore.ms/cdnfiles/onestorerolling-1601-22000/shell/common/respond-proxy.html"
          rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" type="text/css"
          href="https://c.s-microsoft.com/en-us/CMSStyles/style.csx?k=3c9ade18-bc6a-b6bd-84c3-fc69aaaa7520_899796fc-1ab6-ed87-096b-4f10b915033c_e8d8727e-02f3-1a80-54c3-f87750a8c4de_6e5b2ac7-688a-4a18-9695-a31e8139fa0f_b3dad3e4-0853-1041-fa46-2e9d6598a584_fc29d27f-7342-9cf3-c2b5-a04f30605f03_a66bb9d1-7095-dfc6-5a12-849441da475c_1b0ca1a3-6da9-0dbf-9932-198c9f68caeb_ef11258b-15d1-8dab-81d5-8d18bc3234bc_11339d5d-cf04-22ad-4987-06a506090313_176b8afa-bab9-e793-c91f-d22b5a134b6e_8031d0e3-4981-8dbc-2504-bbd5121027b7_3f0c3b77-e132-00a5-3afc-9a2f141e9eae_aebeacd9-6349-54aa-9608-cb67eadc2d17_0cdb912f-7479-061d-e4f3-bea46f10a753_343d1ae8-c6c4-87d3-af9d-4720b6ea8f34_a905814f-2c84-2cd4-839e-5634cc0cc383_190a3885-bf35-9fab-6806-86ce81df76f6_ce476de2-91bf-768d-12f6-b1345b17f832_e35b6b5f-66da-dedc-3f00-745165d9153a_469a8551-3011-f265-8b8f-5929dc69c497_231e982f-bc28-22b5-18b9-ebc1a95cda77_eb918fa6-140f-0f0a-930b-e1013c07604c_130bbc6f-56bb-c89f-2fed-aaf3523924f7_c2f71a82-22a3-f26a-5030-ff5ef0258ba5_d7abc8c8-2a33-0704-2de8-b74202e5ae88_71d939e5-c888-e6f8-6dd5-d6c41c34e298"/>
    <script type="text/javascript"
            src="https://assets.onestore.ms/cdnfiles/onestorerolling-1601-22000/shell/common/js/shell_ie8.js"></script>
    <script type="text/javascript" src="https://mem.gfx.ms/meversion?partner=retailstore&amp;market=en-US"></script>
    <script type="text/javascript"
            src="https://assets.onestore.ms/cdnfiles/onestorerolling-1601-22000/shell/generated/shellservice.v3.min.js"></script>
    <!-- picture slider -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <style>
        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {
            height: 350px;
            width: 500px;
            margin: auto;
        }
    </style>

</head>
<body class="mscom-nonjs mscom-hp-theme-layout">

<div class="row-fluid" data-view4="1" data-view3="1" data-view2="1" data-view1="1" data-cols="1">

    <div class="span bp0-col-1-1 bp2-col-1-1 bp3-col-1-1 bp1-col-1-1 sortable-control">

    </div>
</div>

<div class="row-fluid" data-view4="1" data-view3="1" data-view2="1" data-view1="1" data-cols="1">
    <div class="span bp0-col-1-1 bp1-col-1-1 bp2-col-1-1 bp3-col-1-1 mscom-fullwidth-view-1 sortable-control">
        <div id="13e5a8c3-a0b8-40be-9b01-3b2b55cfb6d2">


            <div>
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
                                                Pringles Me
                                            </a>
                                        </div>
                                    </li>
                                    <li class="shell-header" data-navcontainer="shellmenu_5_NavContainer" style="right: 30px;">
                                        <div id="shellmenu_5" class="shell-header-dropdown-label">
                                            <a
                                                    href="javascript:void(0)" role="menu" ms.title="Store"
                                                    data-bi-name="Store" data-bi-slot="1" tabindex="20">
                                                Home Page
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                        </div>
                    </div>
                </div>

                <div class="mscom-header-separator">

                </div>
            </div>
        <!-- picture slider -->
        <div id="picture"  >
            <br>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="https://41.media.tumblr.com/tumblr_m19gowsUY01qk2pdmo1_500.jpg" alt="Chania" width="100px" height="100px">
                    </div>

                    <div class="item">
                        <img src="http://40.media.tumblr.com/tumblr_lrql4mSayy1qzkfbpo1_500.jpg" alt="Chania" width="100px" height="100px">
                    </div>

                    <div class="item">
                        <img src="http://data.whicdn.com/images/62355971/original.jpg" alt="Chania" width="100px" height="100px" >
                    </div>

                    <div class="item">
                        <img src="https://41.media.tumblr.com/tumblr_m1f1vhdK6l1qbih6so1_500.jpg" width="100px" height="100px" >
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <br>
        <br>
        <div id="product link" style="width: auto; height: 500px;">
            <div id="header" style="height: 100px; width: auto;">
                <h1 style="text-align: center;">If you got the <b style="text-decoration: underline;">Munch</b>, We got your <b style="text-decoration: underline;">Bunch</b></h1>
            </div>

            <div id="signup" style="height: 400px; width: 400px;">
                <div id="pic" style="height: 300px; width: 300px; margin-left: 10% ">
                   <img src="http://41.media.tumblr.com/d482b145258d0c43e1cc2026670dee45/tumblr_ngfoycNBL11qzfzg5o3_1280.jpg" style="float: bottom; margin-top: 35%;">
                </div>
                <a href="Sign%20Up.php" style="margin-left: 25%; color: black; font-size: 17px;">NEED AN ACCOUNT?</a>

            </div>

           <div id="products" style="height: 400px; width: 400px; margin-left: 33%; margin-top: -31%;">
               <div id="pic22" style="height: 300px; width: 300px; margin-left: 10% ">
                   <img src="http://beyondblindfold.com/wp-content/uploads/2014/01/potato_chips-wide.jpg" style="margin-top: 45%">
               </div>
               <a href="Products%20page.php" style="margin-left: 13%; color: black; font-size: 17px;">WANT TO VIEW OUR PRODUCTS??</a>

           </div>

            <div id="log in" style="height: 400px; width: 400px; margin-left: 66%; margin-top: -31%">
                <div id="pic2" style="height: 300px; width: 300px; margin-left: 10% ">
                    <img src="http://www.tratel3asheq.com/up/uploads/14078300181.jpg" style="margin-top: 32%">
                </div>
                <a href="Sign%20In.php" style="margin-left: 22%; color: black; font-size: 17px;">HAVE AN ACCOUNT BRO?</a>

            </div>
        </div>
<div id="contact" style="height: 100px; width: auto; background-color: #333333;">
    <h3 style="text-align: center; text-decoration: underline;; color: white">Other</h3>
    <br>
<a href="Contact%20Info.php" style="margin-left: 10%; color: white;">Contact Us</a>
    <a href="Frequently%20Asked%20Questions.php" style="margin-left: 32%; color: white;">FAQ</a>
</div>
</body>
</html>