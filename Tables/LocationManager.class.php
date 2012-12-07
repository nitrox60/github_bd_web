<?php
	class LocationManager{
	
		private $_db; //instance de PDO
		
		public function __construct($db)
        {
            $this->setDb($db);
        }
		
		public function setDb($db){
			$this->_db=$db;
		
		}
		
		public function add(Location $loc){
		
			$q = $this->_db->prepare("INSERT INTO location SET dateLoc=:dateL, dateRendu=:dateR, prixLoc=:prixL, idVoiture=:idV, idClient=:idC ");
			if($loc->getAddable())
			{
				$q->execute(array(":dateL" => $loc->getDateLoc(),
									":dateR" => $loc->getDateRendu(),
									":prixL" => $loc->getPrixLoc(),
									":idV" => $loc->getIdVoiture(),
									":idC" => $loc->getIdClient()
				));
				echo "add";
			}
			else echo "Les conditions d'ajouts ne sont pas validées! Voir trigger_error";
			
		}
		
		public function isAvailable($id)
		{
			//$q=$this->_db->prepare("SELECT COUNT(location.idLoc) AS locUse, modele.qteStock  FROM modele,location WHERE location.idModele=modele.idModele AND idModele=:id GROUP BY idLoc");
			$q=$this->_db->prepare("SELECT * FROM location WHERE idVoiture=:id");
			$q->execute(array(":id" => $id));
			
			$res=$q->fetch();
			if($res)return res;
			else return null;
		
		}
	
		
		
		public function listing($id){
		
			$q=$this->_db->prepare("SELECT * FROM location WHERE idLocation=:id");
			$q->execute(array(":id"=> $id));
			while($rep=$q->fetch(PDO::FETCH_ASSOC))
			{
				$tab[]=new Location($rep);
			}
		return $tab;
		}
		
		 public function delete(Location $loc)
		  {
			$req=$this->_db->prepare("DELETE FROM location WHERE idLoc=:id");
			$req->execute(array(":id" => $loc->getIdLoc()));
		  }

		  public function get($id)
		  {
			if(is_int($id))
			{
				$req=$this->_db->prepare("SELECT * FROM location WHERE idLoc=:id");
				$req->execute(array(":id"=>$id));
				$rep=$req->fetch(PDO::FETCH_ASSOC);
				if($rep)return new Location($rep);
				else return null;
			}
			else return null;
		  }

		
// A voir ce qu'on peut updater sur la location
		  // public function update(Client $clt)
		  // {
			// $req=$this->_db->prepare("UPDATE client SET  WHERE idClt=:id");
			// $req->execute(array("" => ,
								// ":id" => $com->getIdCom()));
		  // }
	
	
	
	}