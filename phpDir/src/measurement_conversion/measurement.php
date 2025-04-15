<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Measurement Converter</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: rgb(150, 153, 157);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .converter {
            background: white;
            padding: 40px 30px;
            border-radius: 15px;
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
            width: 400px;
            text-align: center;
            transition: 0.3s;
        }

        .converter:hover {
            transform: scale(1.02);
        }

        h2 {
            margin-bottom: 25px;
            color: black;
        }

        .section {
            margin-bottom: 20px;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 6px;
            color: #555;
            font-weight: 500;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px 15px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 8px;
            outline: none;
            transition: border-color 0.2s;
        }


        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: rgb(88, 102, 120);
            color: white;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        input[type="submit"]:hover {
            background-color: rgb(17, 30, 45);
        }

        .result {
            margin-top: 25px;
            background-color: rgb(222, 223, 222);
            padding: 15px;
            border-radius: 10px;
            color: black;
            font-size: 15px;
            line-height: 1.6;
            text-align: left;

        }

        .result strong {
            display: block;
            margin-bottom: 5px;
            color: black;
        }
    </style>
</head>

<body>
    <div class="converter">
        <h2>Measurement Converter</h2>
        <form method="post">
            <div class="section">
                <label for="temp">Temperature (°C):</label>
                <input type="number" name="temp">
            </div>

            <div class="section">
                <label for="speed">Speed (km/h):</label>
                <input type="number" name="speed">
            </div>

            <div class="section">
                <label for="mass">Mass (kg or g):</label>
                <input type="number" name="mass">
            </div>

            <input type="submit" name="convert" value="Convert">
        </form>

        <?php
        if (isset($_POST['convert'])) {
            echo "<div class='result'>";

            // Temperature
            if ($_POST['temp'] !== "") {
                $c = $_POST['temp'];
                $f = $c * 9 / 5 + 32;
                $k = $c + 273.15;
                echo "<strong>Temperature:</strong>";
                echo "$c °C = $f °F<br>";
                echo "$c °C = $k K<br><br>";
            }

            // Speed
            if ($_POST['speed'] !== "") {
                $kmh = $_POST['speed'];
                $ms = $kmh / 3.6;
                $knots = $kmh * 0.539957;
                echo "<strong>Speed:</strong>";
                echo "$kmh km/h = " . round($ms, 2) . " m/s<br>";
                echo "$kmh km/h = " . round($knots, 2) . " knots<br><br>";
            }

            // Mass
            if ($_POST['mass'] !== "") {
                $mass = $_POST['mass'];
                echo "<strong>Mass:</strong>";
                echo "$mass kg = " . ($mass * 1000) . " grams<br>";
                echo "$mass g = " . ($mass / 1000) . " kilograms<br>";
            }

            echo "</div>";
        }
        ?>
    </div>
</body>

</html>