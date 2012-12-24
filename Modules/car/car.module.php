<?php

	class car extends Module{
		//Servira pour afficher nos voitures avec les photo
		public function action_index()
		{
			$this->set_title("Module Nos voitures");
			$mm=new MarqueManager(DB::get_instance());
			$liste=$mm->listing();
			$option[]='';
			foreach($liste as $m)
			{
				$option[]=$m->getNomMarque();
			}
			$f=new Form("?module=car&action=valide","f_car");
			$f->add_select("marque","marque","Marque",$option);
			$this->tpl->assign("f_car",$f);
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
				else Site::redirect('car','index');
			
			}
			else Site::redirect('index');
		}
		
		public function action_ajaxph()
		{
			if($this->req->name)
			{
				$db=DB::get_instance();
				$modm= new ModeleManager($db);
				$imgm= new ImageManager($db);
				$mod=$modm->getByName($this->req->name);
				if($mod)
				{
					$listeImg=$imgm->listing($mod->getIdModele());
					foreach ($listeImg as $img)
					{
						$res[]=$img->getIdImage();
					}
					echo json_encode($res);
					exit;
				}
				else Site::redirect('loc','index');
			}
			else Site::redirect('index');
		}
	}
?>