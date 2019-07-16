<!DOCTYPE html>
<html>

<head>
	<title> PHP Variables </title>
<head>

<body>
    <?php
    $x = 5 ; // Global scope variable
    function print1() {
        echo "$x <br>";
    }
    print1();

    echo "out side the fuunction $x <br>";

    function print2() {
        $y = 90;
        echo "Local scope variable $y <br>";
    }
    print2();

    echo "Out side the function <br>";
    echo "Local scope variable $y <hr />";

    function print3() {
        global $x;
        echo "$x <br>";
        $x += 3;
    }
    print3();
    echo "after the call of function the value of x in globally = $x <br>";

    function print4() {
        echo $GLOBALS["x"];
    }
    print4();
    ?>
</body>

</html>