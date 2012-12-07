<?php
class ex1 extends Module{

	public function action_index(){
			//ce module ne fait rien de particulier		
			
					$table=array(array('N'=>'1','M'=>'2','O'=>'3'),array('N'=>'4','M'=>'5','O'=>'6'));
			$this->tpl->assign('table',$table);
			echo "<p>ex1 tente d'utiliser ECHO pour afficher quelque chose, par exemple le contenu d'un tableau pour vérification</p>";
			echo $this->site->debug($table);
	}

	public function action_index2(){
			//ce module ne fait rien de particulier		
			echo "index2";
	}

	
	
}	
?>