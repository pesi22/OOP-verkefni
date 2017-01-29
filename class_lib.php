<?php 
//NOTE : Verkefnið er unnið með killirPHP OOP sýnidæmið í huga og er hugmyndin dreginn þaðan
//bý til class sem heitir animal 
class Animal {
	
	//bý til var sem tekur við nöfnum og slki þau svo
	var $name;	

	function __construct($persons_name) {
	
		$this->name = $persons_name;
	}
	
	
	public function get_name() {
		//out
		return $this->name;
	
	}

	
	
} 

// prófa mig áfram með inharitance og endurnota kóðan sem ég gerði hér að ofan
class dog extends Animal {

function __construct($puppy_name) {
	
		$this->name = $puppy_name;
	}
	
}

//tek inharitance örlítið lengra og prófa að nota ifsetningu
class fish extends Animal {

	//geri function sem gáir hvort dýrið sé ekki örugglega spenndýr
	protected function set_name($new_name) {
	
		if ($new_name == "Fiskur") {
			$this->name = "NOTE: Fiskur er ekki spendýr";
		}
		else {
		 $this->name = $new_name;
		}
		
	}
	
	function __construct($fish_name) {
	
		$this->set_name($fish_name);
	}
}
?>
