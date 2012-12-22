<?php
	class CommentaireManager{
	
		private $_db; //instance de PDO
		
		public function __construct($db)
        {
            $this->setDb($db);
        }
		
		public function add(Commentaire $comm){
			if($comm->getAddable())
			{
				$q = $this->_db->prepare("INSERT INTO commentaire SET  dateCom=NOW(), contenu=:contenu, note=:note , idVoiture=:car, idClient=:auteur");
				
				$q->bindValue(':car', $comm->getIdVoiture());
				$q->bindValue(':auteur', $comm->getIdClient());
				$q->bindValue(':contenu', $comm->getContenu());
				$q->bindValue(':note', $comm->getNote(), PDO::PARAM_INT);
			
				
				$q->execute();
				echo "add";
			}
			else echo " conditions non valides. voir trigger_error";
		}
	
		public function setDb($db){
			$this->_db=$db;
		
		}
		
		public function listing(){
		
			$q=$this->_db->query("SELECT * FROM commentaire");//inclure clause where specifique a chaque voiture
			while($rep=$q->fetch(PDO::FETCH_ASSOC))
			{
				//Recuperer le nom du client avec l'id
				echo "$rep[idClient]<br />  $rep[note]<br />$rep[contenu]<br /><br /><br />";
			}
		
		}
		
		 public function delete(Commentaire $com)
		  {
			$req=$this->_db->prepare("DELETE FROM commentaire WHERE idCom=:id");
			$req->execute(array(":id" => $com->getIdCom()));
		  }

		  public function get($id)
		  {
			if(is_int($id))
			{
				$req=$this->_db->prepare("SELECT * FROM commentaire WHERE idCom=:id");
				$req->execute(array(":id"=>$id));
				$rep=$req->fetch(PDO::FETCH_ASSOC);
				if($rep)return new Commentaire($rep);
				else return null;
			}
			else return null;
		  }

		

		  public function update(Commentaire $com)
		  {
			$req=$this->_db->prepare("UPDATE commentaire SET contenu=:newContenu WHERE idCom=:id");
			$req->execute(array(":newContenu" => $com->getContenu(),
								":id" => $com->getIdCom()));
		  }
	}