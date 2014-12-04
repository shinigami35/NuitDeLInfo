<?php
class GuestbookController extends Controller{

	/* Page principale */
	function index(){
		$this->loadModel('Guestbook');
		$condition = array('type'=>'Guestbook');
		$d['guestbooks'] = $this->Guestbook->find(array(
				'fields'     => 'id,titre,nom,message,date',
		        'order' 	 => 'id DESC'
		));
		$this->set($d);
	}

	function guestbook() {
		if($this->request->data){
			$this->loadModel('Guestbook');
			if($this->Guestbook->validates($this->request->data)){
				$data=$this->request->data;

				$this->Guestbook->save($this->request->data);
				$this->redirect('guestbook/index');
			}

			else{
				$this->Session->setFlash('Merci de corriger vos informations','error');
				$this->redirect('guestbook/guestbook');
			}
		}
	}
}
?>