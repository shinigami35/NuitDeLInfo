<?php
class ContactController extends Controller{

	/* Page principale */
	function index(){
		$this->loadModel('Contact');	
	}

	function send() {
		if($this->request->data){
			$this->loadModel('Contact');
			if($this->Contact->validates($this->request->data)){
				$data=$this->request->data;

				//======Déclaration des variables
				$message_html = $data->message;
				$emetteur=$data->email;
				$name=$data->nom;

				$to = "123456789@yopmail.fr";
				$sujet = $name." Contact Evasionparadisiaque";
				$header = "From: $emetteur \n";
				$header .= "Reply-To: $emetteur";

				$message = stripcslashes($message_html);
				$nom = stripcslashes($nom);
				if(mail($to, $sujet, $message, $header)) {
					unset($nom);
					unset($emetteur);
					unset($message); 
					$this->redirect('contact/index');
				}else {
					echo "une erreur est survenue";
				}
			}else{
				$this->Session->setFlash('Merci de corriger vos informations','error');
				$this->redirect('contact/index');
			}
		}
	}
}



?>

