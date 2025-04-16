<!DOCTYPE html>
<html>

<head>
    <title>PHP Calculator</title>
    <style>
        body {
            background-color: rgb(237, 229, 229);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
        }

        .calculator {
            background-color: rgb(74, 71, 71);
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 0 15px rgba(0, 255, 100, 0.5);
            width: 300px;
        }

        .display {
            background-color: black;
            color: #00FF66;
            font-size: 2em;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            text-align: right;
            overflow: hidden;
        }

        .buttons {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
        }

        .buttons input {
            padding: 20px;
            font-size: 1.2em;
            border: none;
            border-radius: 12px;
            background-color: #2c2c2c;
            color: white;
            cursor: pointer;
            transition: background 0.3s;
        }

        .buttons input:hover {
            background-color: #3f3f3f;
        }

        .buttons input.equal {
            background-color: #00c853;
            color: white;
        }

        .buttons input.clear {
            background-color: #d32f2f;
            color: white;
        }
    </style>
</head>

<body>

    <?php
    $expression = '';
    $display = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['btn'])) {
            $btn = $_POST['btn'];

            if ($btn == 'C') {
                $expression = '';
            } elseif ($btn == '=') {
                $expression = $_POST['expression'] ?? '';
                // Allow only safe math characters
                if (preg_match('/^[\d\+\-\*\/\.\(\)\s]+$/', $expression)) {
                    try {
                        eval("\$display = $expression;");
                    } catch (Throwable $e) {
                        $display = "Error";
                    }
                } else {
                    $display = "Invalid input";
                }
            } else {
                $expression = $_POST['expression'] ?? '';
                $expression .= $btn;
            }
        }
    }
    ?>

    <div class="calculator">
        <form method="post">
            <div class="display"><?= htmlspecialchars($display ?: ($expression ?? '0')) ?></div>
            <input type="hidden" name="expression" value="<?= htmlspecialchars($expression ?? '') ?>">
            <div class="buttons">
                <input type="submit" name="btn" value="7">
                <input type="submit" name="btn" value="8">
                <input type="submit" name="btn" value="9">
                <input type="submit" name="btn" value="/" class="operator">

                <input type="submit" name="btn" value="4">
                <input type="submit" name="btn" value="5">
                <input type="submit" name="btn" value="6">
                <input type="submit" name="btn" value="*" class="operator">

                <input type="submit" name="btn" value="1">
                <input type="submit" name="btn" value="2">
                <input type="submit" name="btn" value="3">
                <input type="submit" name="btn" value="-" class="operator">

                <input type="submit" name="btn" value="0">
                <input type="submit" name="btn" value="." class="operator">
                <input type="submit" name="btn" value="=" class="equal">
                <input type="submit" name="btn" value="+" class="operator">

                <input type="submit" name="btn" value="C" class="clear" style="grid-column: span 4;">
            </div>
        </form>
    </div>

</body>

</html>