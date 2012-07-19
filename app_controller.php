<?php
class AppController extends Controller {
	
	var $components = array('Auth','JsonError','Session','RequestHandler');
	
	var $helpers = array('Form','Html','Session');
	
	function beforeFilter(){
		if ( $this->params['prefix']=='api' ){
			self::setJsonHeader();
		}
		$this->Auth->loginRedirect='/';
		$this->Auth->autoRedirect=false;
	}

	function setJsonHeader(){
		$this->autoRender=false;
		header('Content-Type: application/json');
	}
	
}
