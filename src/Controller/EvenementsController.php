<?php
// src/Controller/PostsController.php

namespace App\Controller;

use App\Controller\AppController;

use Cake\ORM\TableRegistry;


class EvenementsController extends AppController
{
	public function index()
    {
        $evenements = $this->Evenements->find('all');
        $this->set(compact('evenements'));
    }

    public function admin()
    {
    	if ($this->request->getSession()->read('user') == null) {
            return $this->redirect('/posts/index');
        }
        $evenements = $this->Evenements->find('all');
        $this->set(compact('evenements'));
    }
    public function evenadd(){
    	if ($this->request->getSession()->read('user') == null) {
            return $this->redirect('/posts/index');
        }
    }

    public function addsubmit(){
    	if ($this->request->getSession()->read('user') == null) {
            return $this->redirect('/posts/index');
        }
        $elemTable = TableRegistry::get('Evenements');
        //cree une entité pour pouvoir l'ajouter dans la table
        $elem = $elemTable->newEntity();

        //bind les données
        
        $elem->datefin = $this->request->getData('end');
        $elem->datedebut = $this->request->getData('start');
        $elem->titre = $this->request->getData('titre');
        $elem->description = $this->request->getData('body');
        
        //enregistre l'entité dans la BDD
        $elemTable->save($elem);
        return $this->redirect('/evenements/admin');
    }

    public function delete($idEv){
    	if ($this->request->getSession()->read('user') == null) {
            return $this->redirect('/posts/index');
        }

        $elemTable = TableRegistry::get('Evenements');

        //sélectionne l'entité déjà existante
        $elem = $elemTable
            ->find()
            ->where(['id = :id'])
            ->bind(':id', $idEv)
            ->first();

        //supprime l'entité dans la BDD
        $elemTable->delete($elem);

        return $this->redirect('/evenements/admin');
    }

}