<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Amazon</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />  
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
   
    <header>
        <div class="navbar">
            <div class="nav-logo border">
                <div class="logo"></div>
            </div>
            
            <div class="nav-address border">
                <p class="add-first">Deliver to</p>
                <div class="add-icon">
                    <i class="fa-sharp fa-solid fa-location-dot"></i>
                    <p class="add-sec">India</p>
                </div>
            </div>

            <div class="nav-search">
                <select class="search-select">
                    <option>All</option>
                </select>
                <input  placeholder="Search Amazon" class="search-input">
                <div class="search-icons">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>
            <!-- <div class="cobinationofthree"> -->

            <div class="nav-signin border">
                <p><span>Hello, sign in</span></p>
                <p class="nac-sec">Account & Lists</p>
            </div>
    
            <div class="nav-return border">
                <p><span>Returns</span></p>
                <p class="nac-sec">& Orders</p>
            </div>

            <div class="nav-cart border">
                <i class="fa-solid fa-cart-shopping"></i>
                <p>cart</p>
            </div>
            <!-- </div> -->
        </div> 
            <div class="panel">
                <div class="panel-all">
                    <i class="fa-solid fa-bars"></i>
                    All
                </div>
                <div class="panel-ops">
                    <p>Today's Deals</p>
                    <p>Customer services</p>
                    <p>Registry</p>
                    <p>Gift Cards</p>
                    <p>Sell</p>
                </div>
                <div class="panel-deals">
                    Shop deals and Electronics
                </div>
            </div>
    </header>
    <div class="hero-section">
        <div class="hero-msg">
            <p>You are on amazon.com. You can also shop on Amazon India of products with fast local delivery.<a>click here to got to amazon.in</a></p>
        </div>

    </div>
    <div class="shop-section">
        <div class="box1 box">
            <div class="box-content">
                <h2>Cloths</h2>
            <div class="box-img" style="background-image: url('box1_image.jpg');"></div>
            <p>see more</p>
            </div>
        </div>
        <div class="box2 box">
            <div class="box-content">
                <h2>Health &Personal Care</h2>
            <div class="box-img" style="background-image: url('box2_image.jpg');"></div>
            <p>see more</p>
            </div>
        </div>
        <div class="box3 box">
            <div class="box-content">
                <h2>Furniture</h2>
            <div class="box-img" style="background-image: url('box3_image.jpg');"></div>
            <p>see more</p>
            </div>
        </div>
        <div class="box4 box">
            <div class="box-content">
                <h2>Electronics</h2>
            <div class="box-img" style="background-image: url('box4_image.jpg');"></div>
            <p>see more</p>
            </div>
        </div>
        <div class="box1 box">
            <div class="box-content">
                <h2>Beauty Picks</h2>
            <div class="box-img" style="background-image: url('box5_image.jpg');"></div>
            <p>see more</p>
            </div>
        </div>
        <div class="box2 box">
            <div class="box-content">
                <h2>Pet Care</h2>
            <div class="box-img" style="background-image: url('box6_image.jpg');"></div>
            <p>see more</p>
            </div>
        </div>
        <div class="box3 box"> 
            <div class="box-content">
                <h2>new arrival in Toys</h2>
            <div class="box-img" style="background-image: url('box7_image.jpg');"></div>
            <p>see more</p>
            </div>
        </div>
        <div class="box4 box">
            <div class="box-content">
                <h2>Discover fashion trends</h2>
            <div class="box-img" style="background-image: url('box8_image.jpg');"></div>
            <p>see more</p>
            </div>
        </div>
    </div>
    <footer>
        <div class="foot-panel1">
            Back to top
        </div>
        
        <div class="foot-panel2">
            <ul>
                <p>Get to know</p>
                <a>Careers</a>
                <a>Blog</a>
                <a>About Amazon</a>
                <a>Investor Relations</a>
                <a>Amazon Devices</a>
                <a>amazon Science</a>
            </ul>
            <ul>
                <p>Get to know</p>
                <a>Careers</a>
                <a>Blog</a>
                <a>About Amazon</a>
                <a>Investor Relations</a>
                <a>Amazon Devices</a>
                <a>amazon Science</a>
            </ul>
            <ul>
                <p>Get to know</p>
                <a>Careers</a>
                <a>Blog</a>
                <a>About Amazon</a>
                <a>Investor Relations</a>
                <a>Amazon Devices</a>
                <a>amazon Science</a>
            </ul>
            <ul>
                <p>Get to know</p>
                <a>Careers</a>
                <a>Blog</a>
                <a>About Amazon</a>
                <a>Investor Relations</a>
                <a>Amazon Devices</a>
                <a>amazon Science</a>
            </ul>

        </div>
        <div class="foot-panel3">
            <div class="logo"></div>

        </div>
        <div class="foot-panel4">
            <div class="pages">
                <a>Condition of use</a>
                <a>privacy notice</a>
                <a>your ads privacy choices</a>
            </div>
            <div class="copyright">
                1996-2023, Amazon.com Inc. or its affiliates            
            </div>
        </div>
    </footer>

</body>
</html>