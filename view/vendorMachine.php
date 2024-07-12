



<?php

class vendorMachine {

    private $snacks;

    private $cashAmount;
    private $hours;
    private $isOn;
    private $DateTime;

    function __construct() {
            $this->snacks = 20;
            // de base je lui dis que ma machine à zéro €
            $this->cashAmount = 0;
            // de base je lui dis que j'ai éteint la machine
            $this->isOn = false;
            [
            
            [
                "name" => "Snickers",
                "price" => 1,
                "quantity" => 5
            ],
            [
                "name" => "Mars",
                "price" => 1.5,
                "quantity" => 5
            ],
            [
                "name" => "Twix",
                "price" => 2,
                "quantity" => 5
            ],
            [
                "name" => "Bounty",
                "price" => 2.5,
                "quantity" => 5
            ]
        ];

        $this->cashAmount = 0;
    }

    function turnOn() {
        // allume la machine 
        $this->isOn = true;
    }

    function turnOff() {
        // éteint la machine
        if (new DateTime('H') >= 18) {
            $this->isOn == false;
        }  
    }

    public function buySnack($snackName) {
        foreach ($this->snacks as $snack) {
            if($snack['name'] === $snackName)
        }
    //     // si la machine est allumée

    //     // si le snack est présent dans la liste
    //     // et que la quantité est suffisante
    //     // on enlève une quantité pour ce snack
    //     // et on ajoute au cashAmount le montant du snack

    }

    public function shootWithFoot() {

    //     // si la machine est allumée

    //     // fais tomber un snack au hasard
    //     // et fait tomber un montant de cash au hasard
    //     //donc decremente le snack et le cashAmount
    }
}
-------------------------------------------------------------------------------------------------------------
<?php


class VendorMachine {

	private $snacks;

	private $cashAmount;

	private $isOn;


	function __construct() {
		$this->snacks = [
            [
                "name" => "Snickers",
                "price" => 1,
                "quantity" => 5
            ],
            [
                "name" => "Mars",
                "price" => 1.5,
                "quantity" => 5
            ],
            [
                "name" => "Twix",
                "price" => 2,
                "quantity" => 5
            ],
            [
                "name" => "Bounty",
                "price" => 2.5,
                "quantity" => 5
            ]
        ];

		$this->isOn = false;
		$this->cashAmount = 0;
	}


	public function turnOn() {
		$this->isOn = true;
	}

	public function turnOff() {

		$dateNow = new DateTime();
		$hourNow = (int)$dateNow->format('H');

		if ($hourNow > 14) {
			$this->isOn = false;
		}
	}


	public function buySnack($snackName) {
		if ($this->isOn) {
			foreach ($this->snacks as $key => $snack) {
				if ($snack['name'] === $snackName && $snack['quantity'] > 0) {
					$this->snacks[$key]['quantity'] = $this->snacks[$key]['quantity'] - 1;
				
					$this->cashAmount = $this->cashAmount + $snack['price']; 
				}
			}
		}
	}

	public function shootWithFoot() {

		$randomSnack = $this->findAvailableSnack();
		$randomSnack['quantity'] -= 1;
		
		$randomCashAmountNotRounded = rand(0, $this->cashAmount * 100) / 100;
		$randomCashAmount = round($randomCashAmountNotRounded, 2);

		$this->cashAmount = round($this->cashAmount - $randomCashAmount, 2);
	}


	private function findAvailableSnack() {

		$randomSnackIndex = random_int(0, count($this->snacks) - 1);

		if ($this->snacks[$randomSnackIndex]['quantity'] > 0) {
			return $this->snacks[$randomSnackIndex];
		} else {
			return $this->findAvailableSnack();
		}
	}


}

$vendorMachine = new VendorMachine();
$vendorMachine->turnOn();
$vendorMachine->buySnack('Mars');
$vendorMachine->shootWithFoot();
// var_dump($vendorMachine);