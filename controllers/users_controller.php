<?php
class UsersController extends AppController {

	function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow( array('api_me') );
	}

	function api_me(){
		return json_encode(array('r'));
	}

	function login(){
		if ( $this->Auth->user() && $this->Auth->login() ) {
			//track login here
			$this->redirect( $this->Auth->loginRedirect );
		}
		if ( $this->Auth->user() && empty($this->data) ){
			$this->redirect( $this->Auth->loginRedirect );
		}
	}

	function logout(){
		$this->redirect( $this->Auth->logout() );
	}

}
