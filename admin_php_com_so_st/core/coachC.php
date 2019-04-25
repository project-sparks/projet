<?PHP
include "../config.php";
class coachC {
function affichercoachs ($cours){
		echo "nom: ".$cours->getnom()."<br>";
		echo "prenom: ".$cours->getprenom()."<br>";
		echo "adresse mail: ".$cours->getmail()."<br>";


	}

	function ajoutercoach($coach){
		$sql="insert into coach (nom,prenom,mail) values (:nom,:prenom,:mail)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom=$cours->getnom();
        $prenom=$cours->getprenom();
        $mail=$cours->getmail();


		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':mail',$mail);


		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function affichercoach(){
		//$sql="SElECT * From competition e inner join formationphp.competition a on e.cin= a.cin";
		$sql="SElECT * From coach";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimercoach($id_coach){
		$sql="DELETE FROM coach where id_coach= :id_coach";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_coach',$id_coach);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifiercoach($coach,$id_coach){
		$sql="UPDATE coach SET id_coach=:id_coache, nom=:nom,prenom=:prenom, mail=:mail WHERE id_coach=:id_coach";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);

		$id_coache=$cours->getid_coach();
        $nom=$cours->getnom();
        $pernom=$cours->getprenom();
        $mail=$cours->getmail();


		$datas = array(':id_coache'=>$id_coach, ':nom'=>$nom, ':prenom'=>$prenom, ':mail'=>$mail);

		$req->bindValue(':id_coache',$id_coach);
		$req->bindValue(':id_coach',$id_coach);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':mail',$mail);


		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}

	function recuperercoach($id_coach){

		$sql="SELECT * from coach where id_coach=$id_coach";
		$db = config::getConnexion();

		try{
			echo "please";
		$liste=$db->query($sql);
		return $liste;

		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	/*
	function rechercherListecompetitions($nom){
		$sql="SELECT * from competition where nom=$nom";
		$db = config::getConnexion();
		$req=$db->prepare($sql);
		try{

		$res=$db->query($sql);
		return $res;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
*/
}

?>