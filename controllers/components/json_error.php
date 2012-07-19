<?php
class JsonErrorComponent extends Object {

	private $_code;
	private $_message;
	private $_type;

	function getError(){
		return array(
			'error'=>array(
				'code'=>$this->_code,
				'message'=>$this->_message,
				'type'=>$this->_type
			)
		);
	}

	function raise( $message='', $code=0, $type='unknown' ){
		$this->_code=$code;
		$this->_message=$message;
		$this->_type=$type;
		return $this->getError();
	}

}
