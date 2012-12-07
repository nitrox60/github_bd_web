<?php

	class Voiture{
	
		private $_idImage;
		private $_idModele;
		
		public function __construct(array $donnees)
		{ 
			$this->_addable=true;
			$this->hydrate($donnees);
			
		}

		public function hydrate(array $donnees) {
		
			foreach ($donnees as $key => $value)
			{
				$method = 'set'.ucfirst($key);
				if (method_exists($this, $method))
				{
					$this->$method($value);
				}
			}
		}
		
		public function getIdImage(){ return $this->_idImage;}
		public function getIdmodele(){ return $this->_idModele;}
		
		public function setIdModele($modele){
			$modele=(int)$modele;
			$this->_idVoiture=$modele;
		}
		
		public function setIdImage($image){
			$image=(int)$image;
			$this->_idImage=$image;
		}
	}
?>