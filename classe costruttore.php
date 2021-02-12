<!DOCTYPE html>
<html>
<body>
<?php
//Una classe è una “struttura” con al suo interno proprietà e metodi che condividono funzionalità e risorse, che rimangono in attesa di essere utilizzate tramite le istanze della classe stessa.
class Person {
    //proprietà
    private $name = "";
    //costruttore
    public function __construct($name)
    {
        //inizializzazione della proprietà $name
        $this->name = $name;
    }


    //metodi
    public function getName() {
        //$this rappresenta l'oggetto che sarà costruito a runtime
        return $this->name;
    }
}
//istanzia un nuovo oggetto della classe Person
$customer1 = new person("Giuseppe Rossi");
echo "Cliente: ".$customer1->getName()."<br>";
//istanzia un nuovo oggetto della classe Person
$customer2 = new person("Guglielmo Cancelli");
echo "Cliente: ".$customer2->getName()."<br>";


?>
 </body>
</html>