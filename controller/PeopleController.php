<?php 
class PeopleController extends Controller{
	

	function index(){
		$perPage = 200; 
		$this->loadModel('People');
		$condition = array('online'=>'1'); 
		$d['people'] = $this->People->find(array(
			'fields'     => 'Nom, Prénom, Age, Date, Pays, Sexe, Ville, Commentaire',
			'condition'  => $condition,
			'limit'      => ($perPage*($this->request->page-1)).','.$perPage
			));
		$d['total'] = $this->People->findCount($condition); 
		$d['page'] = ceil($d['total'] / $perPage);
		$this->set($d);
	}


	function search_people(){
		$this->loadModel('People');
		if($this->request->data){
			$data = $this->request->data;
			$condition = array('Nom'=> $data->nom, 'Prénom' => $data->prenom);
			$d['people'] = $this->People->find(array(
				'conditions'     => $condition
				));
			$this->set($d);
		} else {
			$this->Session->setFlash('Merci de corriger vos informations','error');
			$this->redirect('people/index');
		}
	}
	function admin_search(){
		$this->loadModel('People');
		if($this->request->data){
			$data = $this->request->data;
			$condition = array('Nom'=> $data->nom, 'Prénom' => $data->prenom);
			$d['people'] = $this->People->find(array(
				'conditions'     => $condition
				));
			$this->set($d);
		} else {
			$this->Session->setFlash('Merci de corriger vos informations','error');
			$this->redirect('admin/people/index');
		}
	}


	/**
	* Liste les différents articles
	**/
	function admin_index(){
		$perPage = 200;
		$this->loadModel('People');
		$condition = array('online'=>'1'); 
		$d['people'] = $this->People->find(array(
			'fields'     => 'id, Nom, Prénom, Age, Date, Pays, Sexe, Ville, Commentaire',
			'condition'  => $condition,
			'limit'      => ($perPage*($this->request->page-1)).','.$perPage
			));
		$d['total'] = $this->People->findCount($condition); 
		$d['page'] = ceil($d['total'] / $perPage);
		$this->set($d);
	}

	/**
	* Permet de supprimer un article
	**/
	function admin_delete($id){
		$this->loadModel('People');
		$this->People->delete($id);
		$this->Session->setFlash('Le contenu a bien été supprimé'); 
		$this->redirect('admin/people/index'); 
	}

}