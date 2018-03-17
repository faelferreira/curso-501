<?php

namespace Lib\ViewModel;

class ViewModel{

	private $header = BASEDIR'app/view/layout/header.php';
	private $footer = BASEDIR'app/view/layout/header.php';

	public function render($view,$data = null){
		$container = 'view/'. $view;
		$this->loadPage($container,$date);

	}
	private function loadPage(string $container.$data){
		if(is_array($data)){
			estract($data);
		}
		include $this-.header;
		include $container;
		include $this->footer;
	}
}
