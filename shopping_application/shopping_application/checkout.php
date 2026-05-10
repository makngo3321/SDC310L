<html>
<head>
<title>Checkout Page</title>
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
        echo "<input type='submit' value='Place this order!'>";
        echo "<br>";
        echo "<a href='index.php'>Continue Shopping</a>";
    ?>
</body>
</html>