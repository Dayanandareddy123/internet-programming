<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Online Shop</title>
</head>
<body>
    <h1>Welcome to Online Shop</h1>

    <form action="login_process.php" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
    
    <?php
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div>";
            echo "<h2>" . $row["name"] . "</h2>";
            echo "<p>" . $row["description"] . "</p>";
            echo "<p>Price: $" . $row["price"] . "</p>";
            echo "<button>Add to Cart</button>";
            echo "</div>";
        }
    } else {
        echo "No products found";
    }
    $conn->close();
    ?>
</body>
</html>
