<?PHP
include "../config.php";
class PanierC {

		function ajoutpanier($id){
			
			$id_p=1;
		$sql="UPDATE produit SET id_panier=$id_p WHERE ID_produit=$id";
		$db = config::getConnexion();
	

		try{

	 $req=$db->prepare($sql);

   $req->execute();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function supprimerpanier($id)
	{
		$id_p=0;
		$sql="UPDATE produit SET id_panier=$id_p WHERE ID_produit=$id";
		$db = config::getConnexion();
	

		try{

	 $req=$db->prepare($sql);

   $req->execute();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

	}
	function afficherpanier()
	{

$id=1;
		$sql="SELECT * from produit WHERE id_panier=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

	}
function supprimerproduit()
{
	
}


	}

?>