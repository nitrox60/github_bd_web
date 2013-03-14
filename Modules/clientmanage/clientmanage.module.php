<?php

	class Clientmanage extends Module{
	
	public function action_index()
	{
		if($this->session->ouverte())
		{
			$user=$this->session->session_ouverte();
			//echo var_dump($user);
			$this->tpl->assign("user",$user);
			$f=new Form("?module=clientmanage&action=valide","form");	//Creation du formulaire
			$f->add_text("Email","Email","Email")->set_value($user->getMail());
			$f->add_text("Mdp","Mdp","Mot de passe")->set_value($user->getMail());
		
		}
		else
		{
			$this->site->ajouter_message("Vous n'êtes pas connecté(e)");
			Site::redirect("index");
		
		}
	
	}
	
	
	}