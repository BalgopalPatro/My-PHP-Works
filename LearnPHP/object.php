<!DOCTYPE html>
<html>

<head>

<title>Echo Vs print And DataTypes</title>

</head>

<body>

    <?php
    class Person {
        public $name;
        public $age;

        public function __construct ($name,$age){
            $this->name = $name;
            $this->age = $age;
        }

        public function me ()
        {
            echo "I am ",$this->name," of age ",$this->age,"<br>";
        }
    }

    $person1 = new Person("N Balgopal Patra",20);
    $person1->me();
    echo str_repeat("Papu ",10);
    
    ?>

</body>
</html>