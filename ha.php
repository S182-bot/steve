<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $operation = $_POST['operation'];

    

    // Perform calculation based on operation selected
    switch($operation) {
        case "add":
            $result = $a + $b;
            break;
        case "subtract":
            $result = $a - $b;
            break;
        case "multiply":
            $result = $a * $b;
            break;
        case "divide":
            if($b != 0) {
                $result = $a / $b;
            } else {
                $result = "Error: Division by zero!";
            }
            break;
        default:
            $result = "Invalid operation!";
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
<?php
// Get the current page name
$current_page = basename($_SERVER['PHP_SELF']);
?>


    <style>
        /* Basic navbar styling */
        body {
            font-family: Arial, sans-serif;
        }
        nav {
            background-color: #333;
            overflow: hidden;
        }
        nav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        nav a:hover {
            background-color: #ddd;
            color: black;
        }
        .active {
            background-color: #4CAF50; /* Active link color */
        }
    </style>
</head>
<body>

    <nav>
        <a href="home.html" class="<?= $current_page == 'home.php' ? 'active' : '' ?>">Home</a>
        <a href="about.php" class="<?= $current_page == 'about.php' ? 'active' : '' ?>">About</a>
        <a href="hi.html" class="<?= $current_page == 'services.php' ? 'active' : '' ?>">Gwapa</a>
        <a href="contact.php" class="<?= $current_page == 'contact.php' ? 'active' : '' ?>">Contact</a>
    </nav>

  

    <!-- Content of the page can go here -->
    <h1>Simple Calculator</h1>
    <form method="POST">
        <label for="num1">Number 1:</label>
        <input type="number" name="num1" required><br><br>
        <label for="num2">Number 2:</label>
        <input type="number" name="num2" required><br><br>

        <label for="operation">Select Operation:</label>
        <select name="operation">
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
        </select><br><br>

        <input type="submit" value="Calculate">
    </form>

    <?php
    if (isset($result)) {
        echo "<h2>Result: $result</h2>";
    }
    ?>



</body>
</html>
