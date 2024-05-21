<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum Calculator</title>
</head>
<body>
    <h1>Sum Calculator</h1>
    <form action="calculate_sum.php" method="POST">
        <label for="number1">Number 1:</label>
        <input type="number" id="number1" name="number1" required><br><br>
        
        <label for="number2">Number 2:</label>
        <input type="number" id="number2" name="number2" required><br><br>
        
        <input type="submit" value="Calculate Sum">
    </form>
</body>
</html>
