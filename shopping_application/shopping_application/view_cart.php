<html>
<head>
<title>Viewing your cart</title>
</head>

<body>

    <h1>Items currently in your cart</h1>

    <?php
        $conn = mysqli_connect("localhost", "root", "", "makngo3321sdc");
        $result = mysqli_query($conn, "SELECT * FROM orders");

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
            echo "<a href='checkout.php'>Proceed to Checkout</a>";
        }
    ?>

    <a href="index.php">Continue Shopping</a>
    

</body>
</html>