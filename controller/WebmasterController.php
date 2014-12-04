<?php
class WebmasterController extends Controller{

	/* Page principale */
	function index(){
		$this->loadModel('Webmaster');	
	}

	function send() {
		if($this->request->data){
			$this->loadModel('Webmaster');
			if($this->Webmaster->validates($this->request->data)){
				$data=$this->request->data;

				//======Déclaration des variables
				$message_html = $data->message;
				$emetteur=$data->email;
				$name=$data->nom;
				$probleme=$data->probleme;

				$to = "adrien.gandarias@gmail.com";
				$sujet = $name." Probleme site Web ".$probleme;
				$header = "From: $emetteur \n";
				$header .= "Reply-To: $emetteur";

				$message = stripcslashes($message_html);
				$nom = stripcslashes($nom);
				if(mail($to, $sujet, $message, $header)) {
					unset($nom);
					unset($emetteur);
					unset($message); 
					$this->redirect('Webmaster/index');
				}
				else {
					echo "une erreur est survenue";
				}

			}else{
				$this->Session->setFlash('Merci de corriger vos informations','error');
				$this->redirect('Webmaster/index');
			}
		}
	}

}


?>

