<?php

namespace Controller;
use Model\model;
use View\view;

class Controller{
	private $model;
	private $view;

	public function __construct(){
		$this->model = new Model();
		$this->view = new View();
	}
	public function run(){
		$string = $this->model->getString();
		$this->view->render(['dados' =>$string,'nome=>']);
	}
}