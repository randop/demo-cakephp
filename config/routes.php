<?php

	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
	Router::connect('/api/me', array('api'=>true,'controller' => 'users', 'action' => 'me'));
	
