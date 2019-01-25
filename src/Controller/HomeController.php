<?php
// src/Controller/PostsController.php

namespace App\Controller;

use App\Controller\AppController;


class HomeController extends AppController
{
	public function index() //index devrait renvoyer que les trois premières de posts (changer la requête)
    {
        /*$posts = $this->Posts->find('all', array('limit' => 3));
        $this->set(compact('posts'));*/
    }
}