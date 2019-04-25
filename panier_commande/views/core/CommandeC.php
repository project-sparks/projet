<?PHP
include "../config.php";
class CommandeC {


	function ajouterCommande($commande){
		$sql="insert into commande (date_com,etat,date_dispo,total) values (:Date_com,:etat,:date_dispo,:total)";
		$sql1="SELECT * From produit";

$id=1;
	
		
		$db = config::getConnexion();
		$liste=$db->query($sql1);
		foreach($liste as $row){

$quan=$row['QTE_produit']-1;
$idd=$row['ID_produit'];
$sql2="UPDATE produit SET QTE_produit=:QTE_produit WHERE id_panier=$id and ID_produit=$idd ";
$req2=$db->prepare($sql2);
			$req2->bindValue(':QTE_produit',$quan);
			    $req2->execute();
}

echo $quan;

		try{
        $req=$db->prepare($sql);
        
		

        $Date_com=$commande->getdate_com();
        $total = $commande->gettotal();
        $etat=0;
$date_dispo= date("Y/m/d", strtotime("$Date_com +1 week"));
		$req->bindValue(':Date_com',$Date_com);
		$req->bindValue(':total',$total);
				$req->bindValue(':date_dispo',$date_dispo);
		$req->bindValue(':etat',$etat);

            $req->execute();
        
           
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