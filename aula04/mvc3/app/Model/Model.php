<?php

namespace Model;

use DAO\usuariosDao;
use DAO\postsDao;

class Model{
	private $usuariosDao;
	private $postsDao;

	public function __construct(){
		$this->usuariosDao = new UsuariosDao();
		$this->postsDao =new PostsDao();
	}
	public function getUsuarios(){
		return $this->usuariosDAO->all();
	}
	public function getPosts(){
		return $this->postsDAO->all();
	}
}