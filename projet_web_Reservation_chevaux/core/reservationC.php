<?PHP 
include "../config.php";
class reservationC
{
	function ajouterReservation($reservation,$id)
	{
		$db = config::getConnexion();
		$d=0;
		$sql="insert into reservation (date,idC) values ( :date,$id)";
		$etat=1;
		$etatc=0;

		$liste=$db->query("SELECT * from cheval  WHERE idC=$id and etat=$etatc");

		foreach($liste as $row){
		
			$d=1;

		}




		try{
        $req=$db->prepare($sql);
 
		
		$date=$reservation->getDate();
	
echo "date=".$date;
		
		$req->bindValue(':date',$date);
	
		
            $req->execute();
            if ($d==1)
            {
            	        $req2=$db->prepare("UPDATE cheval SET  etat=$etat WHERE idC=$id and etat=$etatc");
            	        $req2->execute();
            }
            else
            {
            	echo "invalide";
            }

            
            echo "ajouter avec succsess";
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	function afficherReservations()
	{

		$sql="SElECT * From reservation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function modifierReservation($reservation,$id)
	{

		$sql="UPDATE reservation SET  date=:date WHERE idR=$id";
		$db = config::getConnexion();
try{	

       $req=$db->prepare($sql);
		$date=$reservation->getDate();

		$datas = array(':date'=>$date);
		$req->bindValue(':date',$date);
		
            $req->execute();
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
function recupererReservation($id){
		$sql="SELECT * FROM reservation where idR= $id";
		$db = config::getConnexion();
	
		try{

		$res = $db->query($sql);

		return $res;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function supprimerReservation($id,$idC){
		echo $idC;
		$sql="DELETE FROM reservation where idR= :id";
		$etat=0;
		$sql2="UPDATE cheval SET  etat=$etat WHERE idC=$idC";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
        $req2=$db->prepare($sql2);

		$req->bindValue(':id',$id);
		try{
			  $req2->execute();
			  $req->execute();
          
          
     
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	
}
?>