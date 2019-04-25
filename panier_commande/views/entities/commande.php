<?PHP
class Commande{

	private $etat;
	private $date_com;
	private $date_dispo;
	private $total;

	function __construct($date_com,$total){

		$this->etat=0;
		$this->date_com=$date_com;
				$this->total=$total;
	}
	


	function getdate_com(){
		return $this->date_com;
	}
		function gettotal(){
		return $this->total;
	}

	function getdate_dispo(){
		return $this->date_dispo;
	}

	function setdate_com($date_com){
		$this->date_com=$date_com;
	}
}

?>