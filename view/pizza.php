<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// De type "Class" 

class Pizza {
    private $price;
    private $status;
    private $size;
    private $base;
    private $ingredient1;
    private $ingredient2;
    private $ingredient3;
    private $orderedAt;

// fonction construction

    function __construct($size, $base, $ingredient1, $ingredient2, $ingredient3){
        $this -> status = "en cours de commande";
        $this -> size = $size;
        $this -> base = $base;
        $this -> ingredient1 = $ingredient1;
        $this -> ingredient2 = $ingredient2;
        $this -> ingredient3 = $ingredient3;
        $this -> orderedAt = new DateTime('NOW');

        // Prix de la taille pizza

        if($size ==='s'){
            $this -> price = 8;
        }

        if($size === 'm'){
            $this -> price = 10;
        }
        
        if($size === 'l'){
            $this -> price = 12;
        }
        
        if($size === 'xl'){
            $this -> price = 14;
        }
    }

    // fonction "this" (payé la pizza, si une commande est passée, payée ou livrée)

    public function pay(){
        if($this -> status === "en cours de commande"){
            $this -> status = "payé";
        }
    }

    public function getIngredient1() {
        return $this->ingredient1;
    }

    public function getIngredient2() {
        return $this->ingredient2;
    }

    public function getIngredient3() {
        return $this->ingredient3;
    }

    public function getIngredients() {
        return [$this->ingredient1, $this->ingredient2, $this->ingredient3];
    }
    // fonction pour livrer la pizza, si une commande est payée

    public function ship(){
        if($this -> status === "payé"){
            $this -> status = "livré";
        }
    }
}
// instance de class/on encapsule
$pizza = new Pizza('xl', 'tomate', 'jambon', 'poivrons', 'piments');
$pizza -> pay();
$pizza -> ship();


echo $pizza->getIngredient1();
echo $pizza->getIngredient2();
echo $pizza->getIngredient3();