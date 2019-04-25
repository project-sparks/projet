<?PHP
include "../config.php";
class CommandeC {


	function ajouterCommande($commande){
		$sql="insert into commande (date_com,etat,date_dispo) values (:Date_com,:etat,:date_dispo)";
		$sql1="SELECT * From produit";

$id=1;
	
		$sql2="UPDATE produit SET QTE_produit=:QTE_produit WHERE id_panier=$id";
		$db = config::getConnexion();
		$liste=$db->query($sql1);
		foreach($liste as $row){

$quan=$row['QTE_produit']-1;
}

echo $quan;

		try{
        $req=$db->prepare($sql);
        $req2=$db->prepare($sql2);
		

        $Date_com=$commande->getdate_com();
        $etat=0;
$date_dispo= date("Y/m/d", strtotime("$Date_com +1 week"));
		$req->bindValue(':Date_com',$Date_com);
				$req->bindValue(':date_dispo',$date_dispo);
		$req->bindValue(':etat',$etat);
			$req2->bindValue(':QTE_produit',$quan);
            $req->execute();
            $req2->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function traiterCommande($id)
	{
		$sql="UPDATE commande SET etat=:etat WHERE id_com=$id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
$etat=1;
		$req->bindValue(':etat',$etat);
		try{
            $req->execute();
      
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function afficherCommandes(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From commande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


	function supprimerCommande($id){
		$sql="DELETE FROM commande where id_com= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
      
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>