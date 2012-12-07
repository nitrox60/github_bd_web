<?php
	class ImageManager{
	
		private $_db; //instance de PDO
		
		public function __construct($db)
        {
            $this->setDb($db);
        }
		
		public function setDb($db){
			$this->_db=$db;
		}
		
		public function add(Image $image){
		
			$q = $this->_db->prepare("INSERT INTO voiture SET idModele=:idModele");
			if($car->getAddable()){
            $q->execute(array(":idModele" => $image->getIdModele()));
			echo "add";
			}
			else echo "Les conditions d'ajouts ne sont pas validées! Voir trigger_error";
		}
		
		public function listing(){
		
			$q=$this->_db->query("SELECT * FROM image");
			while($rep=$q->fetch(PDO::FETCH_ASSOC))
			{
				echo "$- $rep[idImage]  --  $rep[idModele] <br />";
			}
		}
		
		public function get($id){
			if(is_int($id))
			{
				$req=$this->_db->prepare("SELECT * FROM image WHERE idImage=:id");
				$req->execute(array(":id"=>$id));
				$rep=$req->fetch(PDO::FETCH_ASSOC);
				if($rep) return new Image($rep);
				else return null;
			}
			else return null;
		 }
		 
		 public function delete(Voiture $car){
			$req=$this->_db->prepare("DELETE FROM image WHERE idImage=:id");
			$req->execute(array(":id" => $car->getIdImage()));
		}
	}
?>