<?php 
// Lien (contre les errors)
require_once('../config/config.php');?>
<!-- notion d'encapsulation -->
<?php
private $customer;
class order {
    public $status;
// ou private
    public $totalPrice;
// ou private
    public $productQty;
private->customer = $customerName;

    function __construct($customerName){
        $this->status = "en cours";
        $this->totalPrice = 0;
        $this->productQty = 0;
        $this->id = uniqid();
        $customer->customer = $customerName;
    }

   public function pay() {
    // pour modifié ma commande
    // commande en cours (status)
    // si productQty et totalPrice > (inférieur) à 0
        if ($this->totalPrice > 0) {
            $this->status = "payé";
        }
    }  

   public function cancel() {
        if ($this->totalPrice > 0) {
            $this->status = "annulé";
        }   
    } 
    
    public function addProduct() {
        // si le status est en cours
        $this->productQty = $this->productQty + 1;
        $this->totalPrice = $this->totalPrice + 10;
    }

    public function removeProduct() {
        if ($this->productQty > 0 && $this->totalPrice > 0){
            $this-> productQty = $this-> totalPrice -10;
            $this->productQty = $this->productQty - 1;
        }
        
    }

}
// quand je veux créer une nouvelle commande
// j'instancie (je créé un objet) la classe Order grâce au mot clé new
// Quand je créé un objet de type order avec le mot clé new
// la fonction constructor est automatiquement appelée
// permettant (si besoin) d'initialiser la commande avec des propriétés par défaut

// $order = new Order();
// $order->addProduct();
$customer 
$order = new order();
// pour vérifié si le panier est à zéro et annulé
$order->pay();
// $order->cancel();
// $order->addProduct();
// $order->removeProduct();
var_dump($order);



// var_dump($order);
// var_dump($order);

// $order->pay();
// $order->cancel();


// var_dump($order->pay());
// var_dump($order->cancel());

// var_dump($order);
// var_dump($order->status);


?>


<?php

class Order {
	private $status;

	private $totalPrice;

	private $productQty;

	private $id;

	private $customer;

	function __construct($customerName) {
		$this->status = "en cours";
		$this->totalPrice = 0;
		$this->productQty = 0;
		$this->id = uniqid();
		$this->customer = $customerName;

	}

	public function pay() {
		if ($this->status === "en cours" && 
			$this->productQty > 0 &&
			$this->totalPrice > 0
		) {
			$this->status = "payé";
		}
	}


	public function cancel() {
		if ($this->status === "en cours" && 
			$this->productQty > 0 &&
			$this->totalPrice > 0
		) {
			$this->status = "annulé";
			$this->productQty = 0;
			$this->totalPrice = 0;
		}
	}

	public function addProduct() {
		
		if ($this->status === "en cours") {
			$this->productQty = $this->productQty + 1;
			$this->totalPrice = $this->totalPrice + 10;
		}

	}

	public function removeProduct() {
		if ($this->status === "en cours" && $this->productQty > 0 && $this->totalPrice > 0) {
			$this->productQty = $this->productQty - 1;
			$this->totalPrice = $this->totalPrice - 10;
		}
	}

}


// quand je veux créer une nouvelle commande
// j'instancie (je créé un objet) la classe Order grâce au mot clé new
// Quand je créé un objet de type order avec le mot clé new
// la fonction constructor est automatiquement appelée
// permettant (si besoin) d'initialiser la commande avec des propriétés par défaut



$order = new Order("David Robert");
var_dump($order);

// $order2 = new Order();
// var_dump($order2);

--------------------------------------------------------------------
