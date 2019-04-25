<?PHP
class coach{
	private $id_coach;
	private $nom;
	private $prenom;
	private $mail;


	function __construct($id_coach,$nom,$prenom,$mail){
		$this->id_coach=$id_coach;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->mail=$mail;


	}
	function getid_coach(){
		return $this->id_coach;
	}	
	function getnom(){
		return $this->nom;
	}
	function getprenom(){
		return $this->prenom;
	}
	function getmail(){
		return $this->mail;
	}



	function setnom($nom){
		$this->nom=$nom;
	}
	function setprenom($prenom){
		$this->prenom=$prenom;
	}
	function setmail($mail){
		$this->mail=$mail;
	}

}

?>