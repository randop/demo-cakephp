<?php
class PostsController extends AppController {
	
	function beforeFilter(){

	}
	
	function index(){
		
	}
	
	function create(){
		if( !empty($this->data) ){
			$this->Post->create();
			$this->Post->save($this->data);
			$this->Session->setFlash('Post created.');
			$this->redirect(array('action'=>'create'));
		}
	}
	
}