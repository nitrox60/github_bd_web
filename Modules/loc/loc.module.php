<?php

	 class Loc extends Module{
	
		public function action_index()
		{
			$this->set_title("Module Location ");
			$mm=new MarqueManager(DB::get_instance());
			$liste=$mm->listing();
			$option[]='';
			foreach($liste as $m)
			{
				$option[]=$m->getNomMarque();
			}
				$f=new Form("?module=loc&action=valide","f_loc");
				$f->add_select("marque","marque","Marque",$option);
				$this->tpl->assign("f_loc",$f);
		
		
		}
		
		public function action_ajax()
		{
			if($this->req->name)
			{
			$db=DB::get_instance();
				$mm= new MarqueManager($db);
				$modm= new ModeleManager($db);
				$mq=$mm->getByName($this->req->name);
				if($mq)
				{
					$listeMod=$modm->listing($mq->getIdMarque());
					
					foreach($listeMod as $mod)
					{
						$tab[]=$mod->getNomModele();
					}
					echo json_encode($tab);
					exit;
				}
				else Site::redirect('loc','index');
			
			}
			else Site::redirect('index');
		
		}
		
		public function action_ajaxmod()
		{
			if($this->req->name)
			{
				$db=DB::get_instance();
				$mm= new ModeleManager($db);
				$vm= new VoitureManager($db);
				$lm= new LocationManager($db);
				$mod=$mm->getByName($this->req->name);
				if($mod)
				{
					$listecar=$vm->listing($mod->getIdModele());
					$i=0;
						if(!$listecar)$tab[$i]['disp']=false;
						foreach($listecar as $car)
						{
							if(!$lm->isAvailable($car->getIdVoiture()))$tab[$i]['disp']=true;//Test si dans la voiture parcouru est disponible.
					        else $tab[$i]['disp']=false;
							
							$tab[$i]['id']=$car->getIdVoiture();
							$tab[$i]['annee']=$car->getAnnee();
							$tab[$i]['km']=$car->getKm();
							$tab[$i]['description']=$car->getDescription();
							$i++;
						}
						echo json_encode($tab);
						exit;
				
				}
				else Site::redirect('loc');
			
			}
			else Site::redirect('loc');
		}
		
		public function action_rent()
		{
			if($this->session->ouverte())
			{
				if($this->req->id)
				{
					$f= new Form("?module=loc&action=valide&idmod=".$this->req->id,"form_rent");
					$f->add_dateAndTime("dateloc","dateloc", "Date location");
					$f->add_dateAndTime("daterendu","daterendu", "Date retour ");
					$f->add_hidden("id","id")->set_value($this->req->id);
					$f->add_submit("valider","valider")->set_value("Valider");
					$this->tpl->assign("f_rent",$f);
					$this->session->frent=$f;
					echo var_dump($_SERVER['HTTP_USER_AGENT']);
				}
			}else Site::redirect("Login");
			
			
		
		}
		
		public function action_valide()
		{
			$flag=false;
			if(($this->req->dateloc) AND($this->req->daterendu))
			{
				$locm=$this->req->datelocm;
				$loch=$this->req->dateloch;
				$rendum=$this->req->daterendum;
				$renduh=$this->req->daterenduh;
				
				//$this->site->ajouter_message($this->req->dateloc ."h ". $this->req->dateloch."_".$this->req->datelocm ."____".$this->req->daterendu ."h ". $this->req->daterenduh."_".$this->req->daterendum);
				if($this->req->dateloc>$this->req->daterendu)
				$this->site->ajouter_message("loc> rendu");
				else if($this->req->dateloc==$this->req->daterendu)
				{
					if($loch+6>$renduh) 
					{
						$this->site->ajouter_message("loc = rendu mais hloc>hrendu car durée minimal d'une location =6heure");
						$flag=true;
					}
					else if($loch==$renduh) 
					{
						$this->site->ajouter_message("Durée minimal d'une location = 6heures");
						$flag=true;
					}
				}
				//location pas encore completement au point
				
				if(!$flag) //Si la location est validé
				{
					$user=$this->session->user;
					$l['dateLoc']=$this->req->dateloc." ".$loch.":".$locm.":00";
					$l['dateRendu']=$this->req->daterendu." ".$renduh.":".$rendum.":00";
					$l['prixLoc']="75000"; //prix arbitraire temporaire
					$l['idVoiture']=$this->req->id;
					$l['idClient']=$user->getIdClient();
					$loc=new Location($l);
					$lm=new LocationManager(DB::get_instance());
					$lm->add($loc);
					$this->site->ajouter_message("Location enregistrée!");
					Site::redirect("index");
				}
				
			}else $this->site->ajouter_message("date loc ou date rendu non renseigné");
			Site::redirect("loc","rent&id=".$this->req->id);
		}
	
	}