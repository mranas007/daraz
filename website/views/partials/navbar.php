<?php session_start();
if ($_SESSION['isloggedin'] !== true) {
   header("location: login.php");
   exit; 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <!-- ====================================================== header  -->
    <header>
        <section id="navbar">

            <div class="first-header-panel">
                <ul>
                    <li><a href="#">Become a Seller</a></li>
                    <li><a href="#">Daraz Affiliate Program</a></li>
                    <li><a href="#">Help & Support <i class="fa-solid fa-angle-right"></i></a>
                        <ul style="display: none;">
                            <li>Help Center</li>
                            <li>Chat with Us</li>
                            <li>Order</li>
                            <li>Shipping & Delivery</li>
                            <li>Payment</li>
                            <li>Returns & Refunds</li>
                            <li>Purchase Protection</li>
                        </ul>
                    </li>
                    <li><a href="#">Daraz Logistics Partner</a></li>
                </ul>
                <div><img src="../static/Assets/images/png/panel-png.png" /> <span>Save More on App</span></div>
            </div>

            <div class="second-header-panel">
                <nav>
                    <div id="brand-logo">
                        <img src="../static/Assets/images/png/navlogo.png" />
                    </div>

                    <div class="search-bar">
                        <input type="search" placeholder="Search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>

                    <div id="navuser">
                        <span style=""><a href="#"><?php //require '../../controllers/custmer.php';
                                                                while ($row = $name->fetch_assoc()) {
                                                                    echo $row['email'];
                                                                } ?></a></span>
                        <span class="user-hover"><i class="fa-solid fa-globe"></i> EN</span>
                        <span class="user-hover"><i class="fa-solid fa-cart-shopping"></i></span>
                    </div>
                </nav>
            </div>
        </section>
    </header>
</body>

</html>