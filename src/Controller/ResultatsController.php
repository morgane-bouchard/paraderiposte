<?php
// src/Controller/PostsController.php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;


class ResultatsController extends AppController
{
	public function index() 
    {
        $resultats = $this->Resultats->find('all', array('limit' => 10));
        $this->set(compact('resultats'));
    }

    public function all()
    {
    	$resultats = $this->Resultats->find('all');
        $this->set(compact('resultats'));
    }

    public function admin()
    {
        if ($this->request->getSession()->read('user') == null) {
            return $this->redirect('/posts/index');
        }
        $resultats = $this->Resultats->find('all');
        $this->set(compact('resultats'));
    }

    public function resadd(){
        if ($this->request->getSession()->read('user') == null) {
            return $this->redirect('/posts/index');
        }
    }
    
    public function addsubmit(){ //faire les vérifications
        if ($this->request->getSession()->read('user') == null) {
            return $this->redirect('/posts/index');
        }

        $elemTable = TableRegistry::get('Resultats');
        //cree une entité pour pouvoir l'ajouter dans la table
        $elem = $elemTable->newEntity();

        //bind les données
        $elem->datedeb = $this->request->getData('datedeb');
        $elem->datefin = $this->request->getData('datefin');
        $elem->nom = $this->request->getData('nom');
        $elem->lieu = $this->request->getData('lieu');
        $elem->arme = $this->request->getData('arme');
        $elem->categorie = $this->request->getData('categorie');
        $elem->type = $this->request->getData('type');
        $elem->dateEngagement = $this->request->getData('dateEngagement');
        $elem->src = $this->request->getData('src');
        
        //enregistre l'entité dans la BDD
        $elemTable->save($elem);
         return $this->redirect('/resultats/admin');
    }

    public function modif($idRes)
    {
    	if ($this->request->getSession()->read('user') == null) {
            return $this->redirect('/posts/index');
        }

        $resultat = $this->Resultats->find()->where(["id = :id"])->bind(':id', $idRes)->first();
        $this->set(compact('resultat'));
    }

    public function modifsubmit() //à refaire
    {
    	if ($this->request->getSession()->read('user') == null) {
            return $this->redirect('/posts/index');
        }
        $elemTable = TableRegistry::get('Resultats');

        //sélectionne l'entité déjà existante
        $elem = $elemTable
            ->find()
            ->where(['id = :id'])
            ->bind(':id', $this->request->getData('id'))
            ->first();

        //bind les données
        $elem->datedeb = $this->request->getData('datedeb');
        $elem->datefin = $this->request->getData('datefin');
        $elem->nom = $this->request->getData('nom');
        $elem->lieu = $this->request->getData('lieu');
        $elem->arme = $this->request->getData('arme');
        $elem->categorie = $this->request->getData('categorie');
        $elem->type = $this->request->getData('type');
        $elem->dateEngagement = $this->request->getData('dateEngagement');
        $elem->src = $this->request->getData('src');

        //enregistre l'entité dans la BDD
        $elemTable->save($elem);
        return $this->redirect('/resultats/index');
    }

    public function delete($idRes){
        if ($this->request->getSession()->read('user') == null) {
            return $this->redirect('/posts/index');
        }

        $elemTable = TableRegistry::get('Resultats');

        //sélectionne l'entité déjà existante
        $elem = $elemTable
            ->find()
            ->where(['id = :id'])
            ->bind(':id', $idRes)
            ->first();

        //supprime l'entité dans la BDD
        $elemTable->delete($elem);

        return $this->redirect('/resultats/admin');
    }
}