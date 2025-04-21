<?php
class Test {

   /* public function __construct(){
        echo "constructor"."<br>";
    }*/
   

    public function show (){
        echo "Hello world";
    }

    public function grettings(){
        echo "good evening"."<br>";
    }

   

    /*public function __destruct(){
        echo "destructor"."<br>";
    }*/
}

$objectTest = new Test();

$objectTest-> show();
echo "<br>";
$objectTest-> grettings ();


class Parents{
    public function flat(){
        echo "2Bhk flat";
    }

    public function car(){
        echo "Ellion <br>";
    }

    protected function bankAccount(){
        echo"Account Details: 02345678-kbhn";
    }

    private function accessAccount(){
        $this-> bankAccount();
    }
}

class Child extends Parents{
    public function bike(){
        echo "Royel enfild <br>";
    }

    public function accessParentsAccount(){
        $this-> bankAccount ();
    }
}

$objectParents = new Parents();

$objectParents -> car();

$objectChild = new child ();

$objectChild-> bike();

$objectChild-> flat();
echo "<br>";
$objectChild-> accessParentsAccount();


?>