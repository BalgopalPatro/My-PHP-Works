<!DOCTYPE html>
<html>

<head>

<title>Echo Vs print And DataTypes</title>

</head>

<body>

    <?php
    
    echo "<h1>Hello Bg</h1>";
    echo "This is a sample line <br>";
    echo "This ","Line ","contains multiple ","parameters ","<hr \>" ;

    // Printing Variables

    $txt1 = "Hello Balgopal";
    $txt2 = "You are learning PHP ";
    $x = 50;
    $y = 30;
    echo "<h1>".$txt1."</h1>";
    echo $txt2."<br>";
    echo $x+$y."<hr \>";

    echo "<h1>Now Using print</h1><hr \>";

    print "<h1>Hello Bg</h1>";
    print "This is a sample line <br>";
    // print "This ","Line ","contains multiple ","parameters ","<hr \>" ;

    // Printing Variables

    $txt1 = "Hello Balgopal";
    $txt2 = "You are learning PHP ";
    $x = 50;
    $y = 30;
    print "<h1>".$txt1."</h1>";
    print $txt2."<br>";
    print $x+$y."<hr \>";

    var_dump($txt1);
    var_dump($x);
    
    $a = array(1,2,3,"Balgopal",true,9.20,'Papu',NULL);
    var_dump($a);
    ?>

</body>
</html>