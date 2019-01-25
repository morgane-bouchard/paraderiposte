<?php
// src/Controller/PostsController.php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;


class AdminController extends AppController
{
	public function initialize()
	{
		if ($this->request->getSession()->read('user') == null) {
			return $this->redirect('/posts/index');
		}
	}
	public function index()
	{
		
	}
    public function evenements()
    {
    	
    }
    public function resultats()
    {
    	
    }
    public function clubs()
    {
    	
    }
    public function enseignants()
    {
    	
    }
    public function licencies()
    {
    	
    }
}