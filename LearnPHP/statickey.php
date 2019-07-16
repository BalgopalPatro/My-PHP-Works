<!DOCTYPE html>
<html>

<head>

<title>Static Keyword</title>

</head>

<body>

    <?php
    
    function task() {
        static $x = 10;
        echo $x."<br>";
        $x++;
    }
    echo "<br>";
    task();
    echo "<br>";
    task();
    echo "<br>";
    task();
    echo "<br>";

    ?>

</body>

</html>