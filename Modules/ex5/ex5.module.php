<?php


class ex5 extends Module{

	public function	action_index(){
		$this->set_title("module ex5");				
	}
	
	public function action_ajax(){
		echo json_encode(array("un","deux","trois"));
		exit;
	}
	
}
?>
