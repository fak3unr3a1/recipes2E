<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the numbers from the form
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    
    // Calculate the sum
    $sum = $number1 + $number2;
    
    // Display the result
    echo "<h1>Sum Calculator</h1>";
    echo "<p>The sum of $number1 and $number2 is: $sum</p>";
    echo "<a href='index.html'>Calculate Another Sum</a>";
} else {
    echo "Invalid request method.";
}
?>
