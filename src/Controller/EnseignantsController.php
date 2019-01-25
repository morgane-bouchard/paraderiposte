<?php
// src/Controller/PostsController.php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;


class EnseignantsController extends AppController
{

    public function enseignant(){
        $enseignants = $this->Enseignants->find('all');
        $this->set(compact('enseignants'));
    }

    public function admin(){
    	if ($this->request->getSession()->read('user') == null) {
            return $this->redirect('/posts/index');
        }
        $enseignants = $this->Enseignants->find('all');
        $this->set(compact('enseignants'));
    }

    public function modif($idEns)
    {
    	if ($this->request->getSession()->read('user') == null) {
            return $this->redirect('/posts/index');
        }
        $enseignant = $this->Enseignants->find()->where(["id = :id"])->bind(':id', $idEns)->first();
        $this->set(compact('enseignant'));
    }

    public function modifsubmit($idEns) //à refaire
    {
    	if ($this->request->getSession()->read('user') == null) {
            return $this->redirect('/posts/index');
        }
        $elemTable = TableRegistry::get('Enseignants');

        $elem = $this->Enseignants->find()->where(["id = :id"])->bind(':id', $idEns)->first();

        //bind les données
        $elem->adresse = $this->request->getData('adresse');
        $elem->mail = $this->request->getData('mail');
        $elem->tel = $this->request->getData('tel');
        $elem->president = $this->request->getData('president');
        $elem->secretaire = $this->request->getData('secretaire');
        $elem->tresorier = $this->request->getData('tresorier');

        //enregistre l'entité dans la BDD
        $elemTable->save($elem);
        return $this->redirect('/Enseignants/admin');
    }
}