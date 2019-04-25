<?PHP 

class chevalC
{
	function ajouterCheval($cheval)
	{
		$sql="insert into cheval (nom,age,sexe,type,etat,image) values ( :nom,:age,:sexe,:type,:etat,:image)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

		$nom=$cheval->getNom();
		$age=$cheval->getAge();
		$sexe=$cheval->getSexe();
		$type=$cheval->getType();
		$etat=0;
		$image=$cheval->getImage();
		$req->bindValue(':nom',$nom);
		$req->bindValue(':age',$age);
		$req->bindValue(':sexe',$sexe);
		$req->bindValue(':image',$image);
		$req->bindValue(':type',$type);
		$req->bindValue(':etat',$etat);

		
            $req->execute();
            echo "ajouter avec succsess";
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherChevaux()
	{

		$sql="SElECT * From cheval";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
function afficherChevauxDispo()
	{

		$sql="SElECT * From cheval where etat=0";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function modifierCheval($cheval,$id)
	{
		echo "id = " .$id;
		$sql="UPDATE cheval SET  nom=:nom,sexe=:sexe,image=:image,type=:type,etat=:etat,age=:age WHERE idC=$id";
		$db = config::getConnexion();
try{	

      $req=$db->prepare($sql);
		$nom=$cheval->getNom();
		$age=$cheval->getAge();
		$sexe=$cheval->getSexe();
		$type=$cheval->getType();
		$etat=0;
		$image=$cheval->getImage();
		$datas = array(  ':nom'=>$nom,':age'=>$age,':image'=>$image,':sexe'=>$sexe,':type'=>$type,':etat'=>$etat);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':age',$age);
		$req->bindValue(':sexe',$sexe);
		$req->bindValue(':image',$image);
		$req->bindValue(':type',$type);
		$req->bindValue(':etat',$etat);
            $req->execute();
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
    
		
	}


		function recupererCheval($id){
		$sql="SELECT * FROM cheval where idC= $id";
		$db = config::getConnexion();
	
		try{

		$res = $db->query($sql);

		return $res;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

		function supprimerCheval($id){
		$sql="DELETE FROM cheval where idC= :id";
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