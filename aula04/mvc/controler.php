<?php
	include 'model.php';

	class Controller{
		private $model;
		public function __construct(){
			$this->$model = new Model();
		}

		public function run(){
			$string = this->model->getString();
		}
	}
	(new Controller())->run();