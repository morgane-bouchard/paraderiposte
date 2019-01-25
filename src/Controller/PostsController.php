<?php
// src/Controller/PostsController.php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;


class PostsController extends AppController
{
	public function index() //index devrait renvoyer que les trois premières de posts (changer la requête)
    {
        $posts = $this->Posts->find('all', array('limit' => 3));
        $this->set(compact('posts'));
    }

    public function all()
    {
    	$posts = $this->Posts->find('all');
        $this->set(compact('posts'));
    }

    public function admin()
    {
        if ($this->request->getSession()->read('user') == null) {
            return $this->redirect('/posts/index');
        }
        $posts = $this->Posts->find('all');
        $this->set(compact('posts'));
    }

    public function postadd(){
        if ($this->request->getSession()->read('user') == null) {
            return $this->redirect('/posts/index');
        }
    }
    
    public function addsubmit(){ //faire les vérifications
        if ($this->request->getSession()->read('user') == null) {
            return $this->redirect('/posts/index');
        }

        $elemTable = TableRegistry::get('Posts');
        //cree une entité pour pouvoir l'ajouter dans la table
        $elem = $elemTable->newEntity();

        //bind les données
        $elem->title = $this->request->getData('titre');
        $elem->body = $this->request->getData('body');
        
        //enregistre l'entité dans la BDD
        $elemTable->save($elem);
         return $this->redirect('/posts/admin');
    }

    public function delete($idPost){
        if ($this->request->getSession()->read('user') == null) {
            return $this->redirect('/posts/index');
        }

        $elemTable = TableRegistry::get('Posts');

        //sélectionne l'entité déjà existante
        $elem = $elemTable
            ->find()
            ->where(['id = :id'])
            ->bind(':id', $idPost)
            ->first();

        //supprime l'entité dans la BDD
        $elemTable->delete($elem);

        return $this->redirect('/posts/admin');
    }
}