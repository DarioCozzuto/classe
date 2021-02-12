<!DOCTYPE html>
<html>
<body>
<?php

class MyClass {


// proprietà
public $a = 10;
public $b = 20;
// costruttore
public function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;


        // connessione al database interno
        connect_to_my_db($this->a, $this->b);
}
// distruttore
public function __destruct() {
        // operazioni di clean up...
        // chiusura del database e rilascio delle risorse
        free_my_db();
}
// metodi
public function sayHello() {
        echo "Hello! " . $this->a . " " . $this->b;
}
}
// creazione delle istanze
$myClass_1 = new MyClass("username", "password");
?>
 </body>
</html>