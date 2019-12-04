<html>
<head>
    <title>PHP Practices</title>
</head>

<body>
    <h1>Loopings</h1>

    <?php
        $numbers = array(4, 8, 10, 12);

        $index = 0;
        while ($index < count($numbers)) {
            echo "$numbers[$index] ";
            $index++;
        }
        echo "<br />";
        for ($i = 0; $i < count($numbers); $i++) {
            echo "$numbers[$i] ";
        }
        echo "<br />";
    ?>

    <hr />

    <h1>SImple Calculator</h1>

    <form action="index.php" method ="POST">
        First Num: <input type="number" step="0.001" name="first-num">
        Operation: <input type="text" name="op">
        Second Num: <input type="number" step="0.001" name="second-num">
        <input type="submit" value="Calculate">
    </form> <br />

    <?PHP
        error_reporting(E_ERROR | E_PARSE);
        $num1 = $_POST["first-num"];
        $num2 = $_POST["second-num"];
        $op = $_POST["op"];

        $result = 0.0;

        if ($op == "+") {
            $result = $num1 + $num2;
        } elseif ($op == "-") {
            $result = $num1 - $num2;
        } elseif ($op == "*") {
            $result = $num1 * $num2;
        } elseif ($op == "/") {
            if ($num2 == 0) {
                echo "Can not devide by 0 <br />";
            } else {
                $result = $num1 / $num2;
            }
        } else {
            echo "Invalid Operation <br />";
        }

        echo "Result: " .$result ."<br />";
    ?>
    <hr />

    <h1>Conditional Statements</h1>

    <?PHP
        $rich = true;
        $tall = false;

        if ($rich && $tall) {
            echo "You are rich and tall";
        } elseif ($rich && !$tall) {
            echo "You are short adn rich";
        } elseif (!$rich && $tall) {
            echo "You are tall but poor";
        } else {
            echo "You are poor and tall";
        }

        function getMaxOf3($num1, $num2, $num3) {
            if ($num1 >= $num2 && $num1 >= $num3) {
                return $num1;
            } elseif ($num2 >= $num1 && $num2 >= $num3) {
                return $num2;
            } else {
                return $num3;
            }
        }

        echo "<br /> ";
        echo getMaxOf3(300, 420, 340);
    ?>

    <hr />

    <h1>Simple Functions</h1>

    <?php
    function cube($num) {
        return $num * $num * $num;
    }
    echo cube(4);
    ?>

    <hr />

    <h1>Associative Array Grades</h1>
    <form action="index.php" method="POST">
        Student name: <input type="text" name="student_name">
        <br />
        <input type="submit" value="Submit">
    </form> <br />

    <?php
    $grades = array(
        "An" => "A++",
        "Nam" => "A+",
        "Dat" => "B-"
    );
    echo "Grade: " .$grades[$_POST["student_name"]] ."<br />";
    ?>

    <hr />

    <h1>Storing Form Data in Arrays</h1>
    <form action="index.php" method="POST">
        Name: <input type="text" name="brand-1"> <br />
        Value: <input type="number" name="value-1"> <br />
        Name: <input type="text" name="brand-2"> <br />
        Value: <input type="number" name="value-2"> <br />
        Name: <input type="text" name="brand-3"> <br />
        Value: <input type="number" name="value-3"> <br />
        <input type="submit" value="Submit">
    </form> <br />

    <?php
    // Choose which types of errors to report
    error_reporting(E_ERROR | E_PARSE);

    $carPrices = array(
        $_POST["brand-1"] => $_POST["value-1"], 
        $_POST["brand-2"] => $_POST["value-2"], 
        $_POST["brand-3"] => $_POST["value-3"]);

    foreach ($carPrices as $x_key => $x_value) {
        echo "Car: " .$x_key ." costs " .$x_value .". <br>";
    }
    ?>

    <hr />

    <h1>Checkboxes Form Handling with Array</h1>
    <form action="index.php" method="POST">
        Action Games: <input type="checkbox" name="genres[]" value="action">
        <br />
        RPG Games: <input type="checkbox" name="genres[]" value="rpg">
        <br />
        Puzzle Games: <input type="checkbox" name="genres[]" value="puzzle">
        <br />
        <input type="submit" value="Submit">
    </form> <br />

    <?php
    // Store Checked Boxes values into Array Elements
    $gameGenres = $_POST["genres"];
    foreach ($gameGenres as $genre) {
        echo $genre ." <br />";
    }
    ?>

    <hr />
</body>
</html>