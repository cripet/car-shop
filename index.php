<!DOCTYPE html>
<?php
include 'functions/functions.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Online Shop</title>
    <link href="styles/style.css" rel="stylesheet" media="all">
</head>
<body>

<!--Main Container starts here-->
<div class="main_wrapper">

    <!--Header starts here-->
    <div class="header_wrapper">
        <img id="logo" src="images/logo.jpg" width="150px" height="100px" >
        <img id="banner"  src="images/banner.jpg" width="850px" height="100px">
    </div>
    <!--Header ends here-->

    <!--Navigation bar starts here-->
    <div class="menubar">
        <ul id="menu">
           <li><a href="#">Home</a> </li>
            <li><a href="#">All products</a> </li>
            <li><a href="#">My account</a> </li>
            <li><a href="#">Sign Up</a> </li>
            <li><a href="#">Shopping card</a> </li>
            <li><a href="#">Contact us</a> </li>
        </ul>

        <div id="form">
            <form method="get" action="results.php" enctype="multipart/form-data">
                <input type="text" name="user_query" placeholder="Search a Product">
                <input type="submit" name="search" value="Search">
            </form>
        </div>
         </div>
    <!--Navigation bar ends here-->

    <!--Content wrapper starts here-->
    <div class="content_wrapper">
        <div id="sidebar">
            <div id="sidebar_title">Categories</div>
            <ul id="cats">

                <?php getCats();?>

            </ul>

            <div id="sidebar_title">Brands</div>
            <ul id="cats">
                <?php getBrands();?>
            </ul>



        </div>
        <div id="content_area">This is content area!</div>
    </div>
    <!--Content wrapper ends here-->

    <div id="footer"><h2>&copy; 2015 eCommerce Shop</h2>
    </div>

</div>
<!--Main Container ends here-->

</body>
</html>