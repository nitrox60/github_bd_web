<?php
	class ClientManager{
	
		private $_db; //instance de PDO
		
		public function __construct($db)
        {
            $this->setDb($db);
        }
		
		public function add(Client $clt){
		
			if($clt->getAddable())
			{
				$q = $this->_db->prepare("INSERT INTO client SET  nom=:nom, prenom=:prenom, rue=:rue, codePostal=:cp, ville=:ville, vip=:vip, dateInscription=:dateIns,  mail=:mail, mdp=:mdp");
				
				$q->execute(array(":nom" => $clt->getNom(),
									":prenom" => $clt->getPrenom(),
									":rue" => $clt->getRue(),
									":cp" => $clt->getCodePostal(),
									":ville" => $clt->getVille(),
									":vip" => $clt->getVip(),
									":dateIns" => $clt->getDateInscription(),
									":mail" => $clt->getMail(),
									":mdp" => $clt->getMdp()								
				));
				echo "add";
			}
			else echo "conditions non validées. voir trigger_error";
		}
	
		public function setDb($db){
			$this->_db=$db;
		
		}
		
		public function listing(){
		
			$q=$this->_db->query("SELECT * FROM client");
			while($rep=$q->fetch(PDO::FETCH_ASSOC))
			{
				echo "$rep[idClient] -- $rep[nom] -- $rep[prenom] -- $rep[rue] -- $rep[codePostal] -- $rep[ville] <br /> $rep[vip] -- $rep[dateInscription] -- -- $rep[mail] -- $rep[mdp]<br /><br />";
			}
		
		}
		
		 public function delete(Client $clt)
		  {
			$req=$this->_db->prepare("DELETE FROM client WHERE idClient=:id");
			$req->execute(array(":id" => $clt->getIdClient()));
		  }

		  public function get($id)
		  {
			if(is_int($id))
			{
				$req=$this->_db->prepare("SELECT * FROM client WHERE idClient=:id");
				$req->execute(array(":id"=>$id));
				$rep=$req->fetch(PDO::FETCH_ASSOC);
				if($rep)return new Client($rep);
				else return null;
			}
			else return null;
		  }
		  
		  public function connexion($log, $mdp)
		  {
			$mdpCrypt=md5($mdp);
			
			$req=$this->_db->prepare("SELECT * FROM client WHERE mail=:log AND mdp=:mdp");
			$req->execute(array(":log" => $log,
								":mdp" => $mdpCrypt)
								);
				$rep=$req->fetch(PDO::FETCH_ASSOC);
			if($rep!=null)
			{
				
				return new Client($rep);
			}
			else return null;
		  
		  }
		  
		  public function chercherParMail($mail)
		  {
			$req=$this->_db->prepare("SELECT * FROM client WHERE mail=:mail");
			$req->execute (array(":mail"=>$mail));
			$rep=$req->fetch(PDO::FETCH_ASSOC);
			if($rep) return true;
			else return false;
		  }

		
// A voir ce qu'un client peut modifier sur son compte ( mail, mdp rue etc)
		  // public function update(Client $clt)
		  // {
			// $req=$this->_db->prepare("UPDATE client SET  WHERE idClt=:id");
			// $req->execute(array("" => ,
								// ":id" => $com->getIdCom()));
		  // }
	
	
	
	}