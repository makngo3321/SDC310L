<html>
<head>
    <title>Makngo3321's Shopping Website</title>
</head>
<body>

    <h1>Shop below for your favorite items!</h1>

    <?php 
        $conn = mysqli_connect("localhost", "root", "", "makngo3321sdc");
        $result = mysqli_query($conn, "SELECT * FROM products");

        while($row = mysqli_fetch_assoc($result)) {
            if (strlen($row['ProductName']) > 0)
                echo "<h3>" . $row['ProductName'] . "</h3>";
            if (strlen($row['ProductDesc']) > 0)
                echo "<h3>Description: " . $row['ProductDesc'] . "</h3>";
            if (strlen($row['ProductCost']) > 0)
                echo "<h3>Price: $" . $row['ProductCost'] . "</h3>";
            if (strlen($row['ProductQuan']) > 0)
                echo "<h3>In stock: " . $row['ProductQuan'] . "</h3>";
            echo "<form method='POST' action='cart.php'>";
            echo "<h3>Quantity: <input type='number' name='quantity' value='1' min='1' max='" . $row['ProductQuan'] . "'></h3>";
            echo "<input type='hidden' name='ProductID' value='" . $row['ProductID'] . "'>";
            echo "<input type='submit' value='Add to Cart'>";
            echo "</form>";
            echo "<hr>";
        }
    ?>
</body>
</html>