<?php
	class AdmClient extends Module{
		
		
	/* Modalités de validations stockées dans des constantes de classes -> Acces avec self::NOM_CONST ou nomClasse::NOM_CONST*/
	 const NAME_LENGTH=20;
	 const NUM_REG="/[0-9]*/";
	 const EMPTY_REG="/[a-zA-Z]?/";
	 const STREET_LENGTH=50;
	 const STREET_REG="/^[0-9]{1,4} [a-zA-Z]+/";//Minimum accepté par le regex : un chiffre(espace)une lettre
	 const CP_REG1='#^[0-9]{5}$#';
	 const CP_REG2='#^0{2}[0-9]{3}$#';
	 const CITY_LENGTH=30;
	 const MIN_MDP=8;
	 const MAX_MDP=18;
	 
		public function action_index()
		{
			$cm=new ClientManager(DB::get_instance());
			$liste=$cm->listing();
			$this->tpl->assign("liste",$liste);
			$this->set_title("Module Admin");
		}

		public function action_delete()
		{
			$cm=new ClientManager(DB::get_instance());
			$clt=$cm->get($this->req->id);
			$this->site->ajouter_message("ok");
			$cm->delete($clt);
			$this->site->ajouter_message($clt->getMail()." supprimé!");
			Site::redirect("admClient");
		}
		//nom=:nom, prenom=:prenom, rue=:rue, codePostal=:cp, ville=:ville, vip=:vip, dateInscription=:dateIns
		public function action_ajax()
		{
		$err=false;
		
			if(($this->req->id) AND ($this->req->what))
			{
				$what=$this->req->what;
				if( ($what=="nom") OR ($what=="prenom") OR ($what=="rue") OR ($what=="codepostal") OR ($what=="ville") OR ($what=="vip") OR ($what=="mail"))
				{
					$new= $this->req->mod;
					if($what=="vip") 
					{
						if(($new!=0)AND($new!=1)) $err=true;
					}
					else if($what=="nom")
					{
						if($this->req->mod == "")	$err=true;
						else if(!preg_match(self::EMPTY_REG,$this->req->mod))	$err=true;
						if(strlen($this->req->mod)>=self::NAME_LENGTH)	$err=true;
						if(preg_match(self::NUM_REG,$this->req->mod))	$err=true;
					}
					else if($what=="prenom")
					{
						
					}
					else if($what=="rue")
					{
						
					}
					else if($what=="codepostal")
					{
						
					}
					else if($what=="ville")
					{
						
					}
					else if($what=="mail")
					{
						
					}
					
					if(!$err)
					{
						$cm=new ClientManager(DB::get_instance());
						$clt=$cm->get($this->req->id);
						if($clt)
						{
							$method = 'set'.ucfirst($what);
				
							// if (method_exists($this, $method))
							// {
								$clt->$method($new);
								$cm->update($clt);
							// }
							echo json_encode("ok");
							exit;
							
						}
						else exit;
					}
					else
					{
						echo json_encode("err");
						exit;
					}
				} else exit;
			}
			else exit;
		}
	}
?>