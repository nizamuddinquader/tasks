<?php

session_start();


if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $budget = (float) $_POST['budget'];

    $_SESSION['name'] = $name;
    $_SESSION['budget'] = $budget;
}


if (isset($_POST['delete'])) {
    session_unset();
    session_destroy();
    header("Location: task3.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task 3 - Session and Exception Handling</title>
</head>
<body style="font-family: Arial; margin: 40px;">
    <h2>💰 Session and Exception Handling</h2>

  
    <form method="POST" action="">
        <label>Enter Your Name:</label>
        <input type="text" name="name" required>
        <br><br>

        <label>Enter Your Budget:</label>
        <input type="number" name="budget" required>
        <br><br>

        <button type="submit" name="submit">Save to Session</button>
        <button type="submit" name="delete">Delete Session</button>
    </form>

    <hr>

   
    <?php
    if (isset($_SESSION['name']) && isset($_SESSION['budget'])) {
        echo "<h3>Welcome, {$_SESSION['name']}! Your budget is {$_SESSION['budget']}.</h3>";
    }
    ?>

    <hr>

    <?php

    function recursiveSum($array)
    {
        if (empty($array)) return 0;
        return array_shift($array) + recursiveSum($array);
    }

    $numbers = [10, 20, 30, 40, 50];
    echo "<strong>Recursive Sum:</strong> " . recursiveSum($numbers) . "<br><br>";

   
    function applyDiscount($amount, $callback)
    {
        return $callback($amount);
    }

    $discountFunction = function ($price) {
        return $price * 0.9; 
    };

    $originalPrice = 1000;
    $discountedPrice = applyDiscount($originalPrice, $discountFunction);

    echo "<strong>Original Price:</strong> $originalPrice<br>";
    echo "<strong>After Discount (10% off):</strong> $discountedPrice<br><br>";

   
    function divide($a, $b)
    {
        try {
            if ($b == 0) {
                throw new Exception("Division by zero is not allowed!");
            }
            return $a / $b;
        } catch (Exception $e) {
            echo "<strong>Error:</strong> " . $e->getMessage() . "<br>";
        } finally {
            echo "<em>Division attempt completed.</em><br>";
        }
    }

    
    echo "<br><strong>Division Test:</strong><br>";
    echo "Result: " . divide(10, 2) . "<br>";   
    divide(10, 0); 
    ?>
</body>
</html>
