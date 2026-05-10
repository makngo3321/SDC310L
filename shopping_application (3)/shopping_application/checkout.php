<html>
<head>
<title>Checkout Page</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Checkout here</h1>

    <?php
        $conn = mysqli_connect("localhost", "root", "", "makngo3321sdc");
        $result = mysqli_query($conn, "SELECT * FROM orders");
        $grandTotal = 0;

        while($row = mysqli_fetch_assoc($result)) {
            if (strlen($row['ProductName']) > 0)
                echo "<h3>Product: " . $row['ProductName'] . "</h3>";
            if (strlen($row['ProductQuan']) > 0)
                echo "<h3>Quantity: " . $row['ProductQuan'] . "</h3>";
            if (strlen($row['ProductCost']) > 0)
                echo "<h3>Price: $" . $row['ProductCost'] . "</h3>";
            if (strlen($row['ProductsTotal']) > 0)
                echo "<h3>Total: $" . $row['ProductsTotal'] . "</h3>";
            echo "<hr>";
            $grandTotal += $row['ProductsTotal'];
        }

        echo "<h2>Grand Total: $" . $grandTotal . "</h2>";
        echo "<br>";
        echo "<form method='POST'>";
        echo "<input type='submit' name='place_order' value='Place this order!'>";
        echo "</form>";
        
        if (isset($_POST['place_order'])) {
            $clear = mysqli_query($conn, "DELETE FROM orders");
            echo "<h3>Thanks for placing your order! It'll be there soon.</h3>";
            echo "<a href='view/conn_status.php'>Let's continue shopping.</a>";
        }
    ?>
</body>
</html>