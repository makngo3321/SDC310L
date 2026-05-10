<html>
<head>
    <title>Your shopping cart</title>
</head>

<body>
    <h1>Shopping Cart - Complete your order now!</h1>

    <?php
        $conn = mysqli_connect("localhost", "root", "", "makngo3321sdc");
        
        $ProductID = $_POST['ProductID'];
        $quantity = $_POST['quantity'];
        $result = mysqli_query($conn, "SELECT * FROM products WHERE ProductID = '$ProductID'");
        $row = mysqli_fetch_assoc($result);

        $ProductName = $row['ProductName'];
        $ProductCost = $row['ProductCost'];
        $ProductsTotal = $quantity * $ProductCost;
        $sql = "INSERT INTO orders (ProductID, ProductName, ProductQuan, ProductCost, ProductsTotal)
                VALUES ($ProductID,'$ProductName', $quantity, $ProductCost, $ProductsTotal)";

        if (mysqli_query($conn, $sql)) {
            echo "<h3>$ProductName is now added to your cart.</h3>";
            echo "<h3>Your Quantity: $quantity</h3>";
            echo "<h3>Cost: $ProductCost</h3>";
            echo "<h3>Total: $ProductsTotal</h3>";
            echo "<br>";
            echo "<a href='index.php'>Click here to continue shopping</a>";
            echo "<br>";
            echo "<a href='view_cart.php'>View Cart</a>";
        } 
        else {
            echo "<h3>An error has occured. Please try again</h3>";
        }
    ?>  
</body>
</html>