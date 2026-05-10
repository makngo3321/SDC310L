<?php
    require_once('../Controller/connect_controller.php');
?>
<html>
    <head>
        <title>Project SDC310L - Makngo3321</title>
        <link rel="stylesheet" href="../style.css">
    </head>

    <body>
        <?php 
            require_once('../controller/connect_controller.php');
        ?>

        <h1><?php echo get_conn_info(); ?></h1>

        <h1>Products</h1>

        <?php
             while($row = mysqli_fetch_assoc($products)) {
                if (strlen($row['ProductName']) > 0)
                        echo "<h3>" . $row['ProductName'] . "</h3>";
                if (strlen($row['ProductDesc']) > 0)
                        echo "<h3>Description: " . $row['ProductDesc'] . "</h3>";
                if (strlen($row['ProductCost']) > 0)
                        echo "<h3>Price: $" . $row['ProductCost'] . "</h3>";
                if (strlen($row['ProductQuan']) > 0)
                echo "<h3>In stock: " . $row['ProductQuan'] . "</h3>";
                echo "<form method='POST' action='../cart.php'>";
                echo "<h3>Quantity: <input type='number' name='quantity' value='1' min='1' max='" . $row['ProductQuan'] . "'></h3>";
                echo "<input type='hidden' name='ProductID' value='" . $row['ProductID'] . "'>";
                echo "<input type='submit' value='Add to Cart'>";
                echo "</form>";
                echo "<hr>";
        }
        ?>
    </body>
</html>