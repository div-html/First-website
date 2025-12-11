<!DOCTYPE html>
<html>
<head>
    <title>PHP Variable Types, Operators, Decision & Loop Controls Demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body { font-family: Arial, sans-serif; background: #f0f0f0; padding: 30px; }
        .container { background: #fff; border-radius: 10px; box-shadow: 0 2px 8px #ccc; padding: 30px; max-width: 700px; margin: auto; }
        h1 { color: #326B77; }
        pre { background: #eee; padding: 10px; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>PHP Variable Types, Operators, Decision & Loop Controls Demo</h1>
        <div>
            <?php
            // Variable Types
            $intVar = 10;
            $floatVar = 3.14;
            $stringVar = "Hello, World!";
            $boolVar = true;
            $arrayVar = array(1, 2, 3);
            echo "<b>Variable Types:</b><br>";
            echo "Integer: $intVar<br>";
            echo "Float: $floatVar<br>";
            echo "String: $stringVar<br>";
            echo "Boolean: " . ($boolVar ? "true" : "false") . "<br>";
            echo "Array: [" . implode(", ", $arrayVar) . "]<br><br>";

            // Operators
            $sum = $intVar + $floatVar;
            $product = $intVar * $floatVar;
            $isEqual = ($intVar == 10);
            echo "<b>Operators:</b><br>";
            echo "Sum (int + float): $sum<br>";
            echo "Product (int * float): $product<br>";
            echo "Is intVar == 10? " . ($isEqual ? "Yes" : "No") . "<br><br>";

            // Decision Control
            echo "<b>Decision Control:</b><br>";
            if ($intVar > 5) {
                echo "intVar is greater than 5<br>";
            } else {
                echo "intVar is not greater than 5<br>";
            }

            // Loop Control
            echo "<br><b>Loop Control:</b><br>";
            echo "For loop (arrayVar): ";
            for ($i = 0; $i < count($arrayVar); $i++) {
                echo $arrayVar[$i] . " ";
            }
            echo "<br>While loop (countdown from 3): ";
            $count = 3;
            while ($count > 0) {
                echo $count . " ";
                $count--;
            }
            echo "<br>Do-while loop (up to 3): ";
            $count = 1;
            do {
                echo $count . " ";
                $count++;
            } while ($count <= 3);
            ?>
        </div>
    </div>
</body>
</html>
