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
			if($this->People->validates($this->request->data)){

				$this->People->save($this->request->data);
				$this->Session->setFlash('Le contenu a bien été modifié'); 
				$this->redirect('people/index'); 
			}else{
				$this->Session->setFlash('Merci de corriger vos informations','error'); 
			}
			
		}else{
			$this->request->data = $this->People->findFirst(array(
				'conditions' => array('id'=>$id)
				));
		}
		$this->set($d);
	}
	
	/**
	* Liste les différents articles
	**/
	function admin_index(){
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

	/**
	* Permet d'éditer un article
	**/
	function admin_edit($id = null){
		$this->loadModel('People'); 
		if($id === null){
			$people = $this->People->findFirst(array(
				'conditions' => array('online' => -1),
				));
			if(!empty($people)){
				$id = $people->id;
			}else{
				$this->People->save(array(
					'online' => -1,
					));
				$id = $this->People->id;
			} 
		}
		$d['id'] = $id; 
		if($this->request->data){
			if($this->People->validates($this->request->data)){
				$this->request->data->type = 'people';

				$this->People->save($this->request->data);
				$this->Session->setFlash('Le contenu a bien été modifié'); 
				$this->redirect('admin/pages/index'); 
			}else{
				$this->Session->setFlash('Merci de corriger vos informations','error'); 
			}
			
		}else{
			$this->request->data = $this->People->findFirst(array(
				'conditions' => array('id'=>$id)
				));
		}
		$this->set($d);
	}

	/**
	* Permet de supprimer un article
	**/
	function admin_delete($id){
		$this->loadModel('People');
		$this->People->delete($id);
		$this->Session->setFlash('Le contenu a bien été supprimé'); 
		$this->redirect('admin/pages/index'); 
	}

}