<?PHP 

class reservation 
{
	

	private $date; 




	function __construct($date)
	{
		
		
		$this->date=$date;
	
	}




		function getDate()
	{
		return $this->date;
	}


		function setDate($date)
	{
		$this->date=$date;
	}


}
?>