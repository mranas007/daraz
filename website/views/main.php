<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->

    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- local links -->
    <link rel="icon" href="../static/Assets/images/png/tablogo.ico">
    <link rel="stylesheet" href="../static/stylesheets/main.css">
    <title>Daraz</title>
</head>

<body>
    <!-- navbar -->
    <?php require 'partials/navbar.php'; ?>
    <!-- =============================================================== main  -->
    <main>

        <!---------------------------------------------------------- fourth-section -->
        <section id="fourth-section">
            <p class="h4">Just For You</p>

            <?php
            require('../database/db.php');
            require('../models/product.model.php');

            $database = new Database();
            $db = $database->getConnection();

            $product = new Product($db);
            $stmt = $product->read();

            if ($stmt && $stmt->num_rows > 0) {
                $rowCounter = 0;
                $cardCounter = 0;
                while ($row = $stmt->fetch_assoc()) {
                    if ($cardCounter < 18) {
                        if ($rowCounter % 6 == 0) {
                            if ($rowCounter > 0) {
                                echo '</div>';
                                $rowCounter = 0;
                            }
                            echo '<div class="row">';
                        }

                        echo '<div class="col">';
                        echo '    <div>';
                        echo '        <img src="' . htmlspecialchars($row['image_url']) . '" alt="Product Image">';
                        echo '    </div>';
                        echo '    <div>';
                        echo '        <h6>' .  htmlspecialchars($row['name']) . '</h6>';
                        echo '        <p>' . htmlspecialchars($row['description']) . '</p>';
                        echo '        <p>$' . htmlspecialchars($row['discounted_price']) . '</p>';
                        echo '        <p><s>$' . htmlspecialchars($row['original_price']) . '</s></p>';
                        echo '    </div>';
                        echo '</div>';
                        $rowCounter++;
                        $cardCounter++;
                    }
                }
            } else {
                echo "<h1>Product aren't Available.</h1>";
            }
            ?>

            </div>
        </section>
    </main>

    <!-- Site footer -->
    <?php require 'partials/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>