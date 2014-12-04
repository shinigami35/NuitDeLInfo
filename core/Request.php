<?php
class Request{
	

	public $url; 				// URL appellé par l'utilisateur
	public $page = 1; 			// pour la pagination 
	public $prefix = false; 	// Prefixage des urls /prefix/url
	public $data = false; 		// Données envoyé dans le formulaire

	public function __construct(){
		if(isset($_SERVER['PATH_INFO']) && strlen($_SERVER['PATH_INFO'])){
			$_SERVER['PATH_INFO'] = $_SERVER['PATH_INFO'];
		}
		elseif(isset($_SERVER['ORIG_PATH_INFO']) && $_SERVER['ORIG_PATH_INFO']) {

			if(isset($_SERVER['ORIG_SCRIPT_NAME']) && !strcmp($_SERVER['ORIG_PATH_INFO'], $_SERVER['ORIG_SCRIPT_NAME'])){
			}elseif(isset($_SERVER['SCRIPT_NAME']) && !strcmp($_SERVER['ORIG_PATH_INFO'], $_SERVER['SCRIPT_NAME'])){
			}else{
				$_SERVER['PATH_INFO'] = $_SERVER['ORIG_PATH_INFO'];
			}
		}
		$this->url = isset($_SERVER['PATH_INFO'])?$_SERVER['PATH_INFO']:'/';

		// Si on a une page dans l'url on la rentre dans $this->page
		if(isset($_GET['page'])){
			if(is_numeric($_GET['page'])){
				if($_GET['page'] > 0){
					$this->page = round($_GET['page']); 
				}
			}
		}
		// Si des données ont été postées ont les entre dans data
		if(!empty($_POST)){
			$this->data = new stdClass(); 
			foreach($_POST as $k=>$v){
				$this->data->$k=$v;
			}
		}
	}


}