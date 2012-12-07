<?php
class ex3 extends Module{

	public function init(){}

	public function action_index(){

		$this->set_title("module ex3");		
		$f=new Form("?module=ex3&action=valide","form1");
		$f->add_text("log","log","Login");		
		$f->add_text("nom","nom","Nom");		
		$f->add_text("pnom","pnom","Prénom");		
		$f->add_text("mail","mail","M@il");		
		$f->add_password("pass1","pass1","Pass");		
		$f->add_password("pass2","pass2","retapez...");		
		$f->add_checkbox("chek1","ck1","Exemple Chk")->set_value("on");		
		$f->add_radio("rad1","r1","Exemple Rad")->set_value("on");		
		$f->add_radio("rad1","r2")->set_value("two");		
		$f->add_radio("rad1","r3")->set_value("tree");		
		$f->add_select("choix","choix","Exemple Liste",array("v1"=>"Un","v2"=>"Deux","v3"=>"Trois"))->set_value("Deux");		
		$f->add_submit("Valider","bntval")->set_value('Valider');		

		$this->tpl->assign("form",$f);	
		$this->session->form = $f;				
	}

	public function action_valide(){

		$this->set_title("ex3 -> valider");
		$err=false;
		//vérifier le remplissage des champs
		//...
	
		if($this->req->log == ''){
			$this->site->ajouter_message('contrôle form : remplir les champs (test sur le login dans cet exemple)');			
			$err=true;
		}
		if( Membre::chercherParLogin( $this->req->log) !== false){
			$this->site->ajouter_message('contrôle form : login existant');	
			$err=true;	
		 }
		
		if($err){	
			$form=$this->session->form;
			$form->populate();
			$this->tpl->assign("form",$form);
		}
		else{
			$m=new Membre($this->req->log,$this->req->nom,$this->req->pnom,$this->req->mail,$this->req->pass1);
			$m->enregistrer();
			$this->site->ajouter_message('L\'utilisateur est enregistré');			
			$this->site->redirect('index');
		}
			



	}




}
?>