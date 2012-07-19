<?php
class SnippetsController extends AppController {
	
	function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'Snippets');
	}
	
	function index(){
		$snippets = $this->Snippet->find('all');
		$this->set('snippets', $snippets);
			
		$this->loadModel('Category');
		$categories = $this->Category->find('list');
		$this->set('categories', $categories);
	}
	
	function add(){
		$this->autoRender=false;
		if ( !empty($this->data) ) {
			$this->Snippet->create();
			if ( $this->Snippet->save($this->data) ){
				return json_encode( array('result'=>$this->Snippet) );
			} else {
				return json_encode( array('error'=>'An error was encountered while storing the snippet.') );
			}
		}
		return json_encode('?');
	}
	
}