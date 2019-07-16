<!DOCTYPE html>
<html>

<head>

<title>Array And Sorting</title>

</head>

<body>

    <?php
    echo "<h1>Indexed Array</h1>";
    $x = array(1,2,3,"red","Bg");
    $l = count($x);

    echo "Printing all the elements of an array by for loop<br>";
    for($i = 0 ;$i < $l ; $i++){
        echo $x[$i];
        echo "<br>";
    }

    echo "<hr />";
    echo "By foreach loop <br>";
    foreach($x as $r){
        echo "$r<br>";
    }
    echo "<hr />";

    echo "<h1>Associative Array</h1>";
    $t = array("Bg"=>"123","Plr"=>"3000","Reshuu"=>"2000");
    foreach($t as $p => $e){
        echo "key $p value $e<br>";
    }

    echo "<h1>Multidimensional Array </h1>";

    $mark = array(
        array("Bg",90,87),array("Reshma",100,99),array("Sam",50,60)
    );

    foreach($mark as $r){
        foreach($r as $q){
            echo "$q<br>";
        }
    }

    echo "<hr />";

    foreach ($mark as $a ) {
        var_dump($a);
    }

    echo "<hr />";

    echo "<h1>Sorting</h1>";
    sort($x);
    echo "By foreach loop <br>";
    foreach($x as $r){
        echo "$r<br>";
    }
    echo "<hr />";

    rsort($x);
    foreach($x as $r){
        echo "$r<br>";
    }
    echo "<hr />";

    echo "<h3>Sorting of associative array</h3>";
    ksort($t);
    foreach($t as $p => $e){
        echo "key $p value $e<br>";
    }
    echo "<hr />";
    asort($t);
    foreach($t as $p => $e){
        echo "key $p value $e<br>";
    }
    echo "<hr />";
    


    ?>

</body>
</html>