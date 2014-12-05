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

	function admin_add($id = null){
		if($this->request->data){
			$this->loadModel('People');
			if($this->People->validates($this->request->data)){
				
				$this->People->save($this->request->data);
				$this->Session->setFlash('Ajouter avec succès','success');
				$this->redirect('admin/people/index');

			} else {
				$this->Session->setFlash('L\'utilisateur existe déjà','error');
			}

		} 
		else {
			//$this->Session->setFlash('Merci de corriger vos informations','error');
		}
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