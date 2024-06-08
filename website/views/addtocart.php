<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add to Cart - My Daraz</title>
    <link rel="stylesheet" href="../static/stylesheets/main.css">
</head>

<body>
    <header>
        <div class="logo">My Daraz</div>
        <nav>
            <a href="index.html">Home</a>
            <a href="cart.html">Cart (<span id="cart-count">0</span>)</a>
        </nav>
    </header>
    <main>

        <section id="addtocart">
            <div class="product">
                <?php
                require_once '../database/db.php';
                require_once '../models/addtocart.php';
                if (isset($_GET['id'])) {
                    $database = new Database;
                    $db = $database->getConnection();

                    $cart = new Cart($db);
                    $result = $cart->productId($_GET['id']);
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="product">';
                        echo '<img src="' . htmlspecialchars($row['image_url'], ENT_QUOTES, 'UTF-8') . '" alt="' . htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8') . '">';
                        echo '<div class="product-details">';
                        echo '<h2>' . htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8') . '</h2>';
                        echo '<p class="price">$' . htmlspecialchars($row['discounted_price'], ENT_QUOTES, 'UTF-8') . '</p>';
                        echo '<button class="add-to-cart-btn">Add to Cart</button>';
                        echo '</div>';
                        echo '</div>';
                    }
                }
                ?>
            </div>
        </section>

    </main>
    <script src="script.js"></script>
</body>

</html>