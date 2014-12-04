<?php 
class UsersController extends Controller{

    // -----------------------------------
    // Méthodes de connexion / déconnexion
    // -----------------------------------
    
	/**
	 * Login
	 **/
	function login(){
		if($this->request->data){
			$data = $this->request->data;
			$data->password = sha1($data->password);
			$this->loadModel('User');
			$user = $this->User->findFirst(array(
					'conditions' => array('login' => $data->login,'password' => $data->password
					)));
			if(!empty($user)){
				$this->Session->write('User',$user);
			}
			else{
				$this->Session->setFlash('Mauvais identifiants, veuillez recommencer');
			}
			$this->request->data->password = '';
		}
		if($this->Session->isLogged()){
			if($this->Session->user('role') == 'admin'){
				$this->redirect('cockpit');
			}else{
				$this->redirect('');
			}
		}
	}

	/**
	 * Logout
	 **/
	function logout(){
		unset($_SESSION['User']);
		$this->Session->setFlash('Vous êtes maintenant déconnecté');
		$this->redirect('');
	}

	// ----------------------------------
	// Méthodes CRUD sur les utilisateurs
	// ----------------------------------
	
	/**
	 * Liste les utilisateurs useless
	 **/
	function index(){
		$this->loadModel('User');
		$condition = array('type'=>'User');
		$d['users'] = $this->User->find(array(
				'fields'     => 'id,login,email,role',
		        'order' 	 => 'id ASC'
		));
		$this->set($d);
	}
/**
	 * Liste les utilisateurs dans le background
	 **/

	function admin_index(){
		$this->loadModel('User');
		$condition = array('type'=>'User');
		$d['users'] = $this->User->find(array(
				'fields'     => 'id,login,email,role',
		        'order' 	 => 'id ASC'
		));
		$this->set($d);
	}

	/**
	 * Création d'un nouvel utilisateur
	 */
	function user_create($id = null){
			
		if($this->request->data){
			$this->loadModel('User');
			if($this->User->validates($this->request->data)){
					
				$data = $this->request->data;
				$data->password = sha1($data->password);
				
				$user = $this->User->findFirst(array(
						'conditions' => array('login' => $data->login
						)));
					
				if(empty($user)){
					$this->request->data->role = 'membre';
					
					$this->User->save($this->request->data);
					$this->Session->setFlash('L\'utilisateur','success');
					$this->redirect('users/index');

				} else {
					$this->Session->setFlash('L\'utilisateur existe déjà','error');
				}
					
			} 
			else {
				$this->Session->setFlash('Merci de corriger vos informations','error');
			}
		}
	}
	
	/**
	 * Permet de supprimer un utilisateur en base de données
	 **/
	function user_delete($id){
		$this->loadModel('User');
		$this->User->delete($id);
		$this->Session->setFlash('L\'utilisateur a bien été supprimé');
		$this->redirect('cockpit/users/index');
   }
}