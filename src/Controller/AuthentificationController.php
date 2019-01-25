<?php
// src/Controller/PostsController.php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;


class AuthentificationController extends AppController
{
	public function index() //retourne la vue du login
	{
		$this->render();
	}
	public function login() //test du login
	{
		//récup un util par rapport à l'email dans la bd
		$user = TableRegistry::get('users')->find()->where(['username = :login'])->bind(':login', $this->request->getData('login'))->first(); //name de l'input == login
		// si on y arrive, cet util existe, && si le password correspond
		if (isset($user) && password_verify($this->request->getData('password'), $user->password)) {
			//création d'un varaible de session
			$this->request->session()->write('user', $user);
			//redirection
			return $this->redirect('/posts/index');
		}
		else {
			$this->set('messageErreur', true);
			return $this->render('index');
		}
	}

	public function logout(){ //logout si login
		$this->request->session()->destroy();

		$this->render('index');
	}
}