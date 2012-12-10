<?php

	class Inscription extends Module{
	/* Modalités de validations stockées dans des constantes de classes -> Acces avec self::NOM_CONST ou nomClasse::NOM_CONST*/
	 const NAME_LENGTH=20;
	 const NUM_REG="/[0-9]/";
	 const EMPTY_REG="/[a-zA-Z]?/";
	 const STREET_LENGTH=50;
	 const STREET_REG="/^[0-9]{1,4}/";
	 const CP_REG='#^[0-9]{1}+[0-9]{4}$#';
	 const CITY_LENGTH=30;
	 const MIN_MDP=8;
	 const MAX_MDP=18;
	 
	 
		public function action_index()
		{
			$this->set_title("Module Inscription");	
			if(isset($this->session->formIns))
			{
				$f=$this->session->formIns;
					$f->populate();
					
			}
			else
			{
				$f=new Form("?module=inscription&action=valide","f_ins");	//Creation du formulaire
				$f->add_text("nom","nom","Nom");
				$f->add_text("prenom","prenom","Prénom");
				$f->add_text("rue","rue","Rue");
				$f->add_text("cp","cp","Code postal");
				$f->add_text("ville","ville","Ville");
				$f->add_text("mail","mail","Mail");
				$f->add_password("mdp","mdp","Mot de passe");
				$f->add_password("mdp2","mdp2","Confirmation");
				$f->add_submit("Valider","valIns")->set_value("Valider");
								
			}
			$this->session->formIns=$f ;
			$this->tpl->assign("f_ins",$f);
			
			
		}
		
		public function action_valide()
		{
			// $errors=array();
			if($this->req->nom == "")	$errors[]="Le nom n'est pas rempli";
			else if(!preg_match(self::EMPTY_REG,$this->req->nom))	$errors[]="Le nom est mal renseigné";
			if(strlen($this->req->nom)>=self::NAME_LENGTH)	$errors[]="La taille du nom doit être inférieur à ".self::NAME_LENGTH." caractères";
			if(preg_match(self::NUM_REG,$this->req->nom))	$errors[]="Le nom ne doit pas contenir de chiffre";
			
			
			
			if($this->req->prenom == "")	$errors[]="Le prenom n'est pas rempli";
			else if(!preg_match(self::EMPTY_REG,$this->req->prenom))	$errors[]="Le prénom est mal renseigné";
			if(strlen($this->req->prenom)>=self::NAME_LENGTH)	$errors[]="La taille du prénom doit être inférieur à ".self::NAME_LENGTH." caractères";
			if(preg_match(self::NUM_REG,$this->req->prenom))	$errors[]="Le prénom ne doit pas contenir de chiffre";
			
			
			if(strlen($this->req->rue)>=self::STREET_LENGTH)		$errors[]="La taille de la rue doit être inférieur à ".self::STREET_LENGTH." caractères";
			
			if(!preg_match(self::STREET_REG,$this->req->rue))	$errors[]="Le format du champs rue est: Numéro de rue(nombres) nom de la rue(caractères)";
			
			
			if( (!preg_match(self::CP_REG,$this->req->cp)) OR($this->req->cp=="00000"))	$errors[]="Format du code postal incorrect. Contien 5 chiffres de 01000 à 99999";
			
			$cm= new ClientManager(DB::get_instance());
			if( $cm->chercherParMail( $this->req->mail))	$errors[]="Mail existant";	
			if(!(filter_var($this->req->mail,FILTER_VALIDATE_EMAIL))) $errors[]="Le mail n'est pas conforme";
			
			if(strlen($this->req->mdp)<self::MIN_MDP) $errors[]="Le mot de passe est trop petit";
			else if(strlen($this->req->mdp)>self::MAX_MDP) $errors[]="Le mot de passe est trop grand";
			
			if($this->req->mdp!=$this->req->mdp2) $errors[]="La confirmation ne correspond pas au mot de passe";
			
			
			
			if(isset($errors[0])){
				
				// $this->tpl->assign("tab_errors",$errors);
				$f=$this->session->formIns;
				
					$f->populate();
					$this->session->formIns=$f;
				// $f->populate();
				// $this->tpl->assign("f_ins",$f);
				
				foreach($errors as $err)
				{
					$this->site->ajouter_message("-".$err);
				}
				
					
				
				Site::redirect("inscription");
				 
			}
			else
			{
				$clt['nom']=$this->req->nom;
				$clt['prenom']=$this->req->prenom;
				$clt['rue']=$this->req->rue;
				$clt['codePostal']=$this->req->cp;
				$clt['ville']=$this->req->ville;
				$clt['vip']=0;
				$clt['dateInscription']=date('Y-m-d',time()+7200);
				
				$clt['mail']=$this->req->mail;
				$clt['mdp']=$this->req->mdp;
				$client= new Client($clt);
				$cm->add($client); 
				$this->site->ajouter_message("inscription reussie!");
				Site::redirect("index");
			}
		}
	}