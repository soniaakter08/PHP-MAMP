<!DOCTYPE html>
<html>

<head>
    <title>PHP Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: white;
        }

        .calculator {
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            background-color: rgb(130, 123, 123);
            color: white;

        }

        input[type="number"],
        select {
            padding: 10px;
            width: 100px;
            margin: 10px;
            font-size: 16px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background: #4CAF50;
            color: white;
            border: none;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }

        input[type="submit"]:hover {
            background: #45a049;
        }

        h3 {
            margin-top: 20px;
            color: white;
        }
    </style>
</head>

<body>
    <div class="calculator">
        <h2>PHP Calculator</h2>
        <form method="post">
            <input type="number" name="num1" step="any" required>
            <select name="operator">
                <option value="+">+</option>
                <option value="-">−</option>
                <option value="*">×</option>
                <option value="/">÷</option>
            </select>
            <input type="number" name="num2" step="any" required>
            <br>
            <input type="submit" name="calculate" value="Calculate">
        </form>

        <?php
        if (isset($_POST['calculate'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operator = $_POST['operator'];

            switch ($operator) {
                case '+':
                    $result = $num1 + $num2;
                    break;
                case '-':
                    $result = $num1 - $num2;
                    break;
                case '*':
                    $result = $num1 * $num2;
                    break;
                case '/':
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        $result = "Cannot divide by zero!";
                    }
                    break;
                default:
                    $result = "Invalid operation.";
            }

            echo "<h3>Result: $result</h3>";
        }
        ?>
    </div>
</body>

</html>