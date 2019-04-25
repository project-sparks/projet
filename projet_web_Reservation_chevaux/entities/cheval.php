<?PHP 

class cheval 
{
	private $nom ; 
	private $age ; 
	private $type ; 
	private $etat ; 
	private $sexe ; 
	private $image ; 


	function __construct($nom,$age,$type,$etat,$sexe,$image)
	{
		$this->nom=$nom;
		$this->age=$age;
		$this->type=$type;
		$this->etat=0;
		$this->sexe=$sexe;
		$this->image=$image;
	}

		function getNom()
	{
		return $this->nom;
	}
		function getAge()
	{
		return $this->age;
	}

		function getType()
	{
		return $this->type;
	}
		function getEtat()
	{
		return $this->etat;
	}
		function getSexe()
	{
		return $this->sexe;
	}
		function getImage()
	{
		return $this->image;
	}
	function setNom($nom)
	{
		$this->nom=$nom;
	}
		function setAge($age)
	{
		$this->age=$age;
	}
		function setType($type)
	{
		$this->type=$type;
	}
		function setEtat($etat)
	{
		$this->etat=$etat;
	}
		function setSexe($sexe)
	{
		$this->sexe=$sexe;
	}


}





?>