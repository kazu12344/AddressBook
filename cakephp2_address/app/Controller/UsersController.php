<?php
/**
* userdate register controller
*/
class UsersController extends AppController
{
	public $uses = array('User');
	
	public function index()
	{
		$users = $this->User->find('all');
		$this->set('users', $users);
	}

	/**
	 * add new user
	 */
	public function addNewUser()
	{
		if ($this->request->is('post')) {
			$data = array(
				'name' => $this->request->data['User']['name'],
				'mail1' => $this->request->data['User']['mail1'],
			);
			
			if (!$this->User->save($data)) {
				return $this->render("addNewUser");
			}
			
			$this->redirect(array(
				'controller' => 'users',
				'action'	 => 'index'
			));
		}
	}
}

