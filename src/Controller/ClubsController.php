<?php
// src/Controller/PostsController.php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;


class ClubsController extends AppController
{
	public function betton()
    {
        $club = $this->Clubs->find()->where(["id = :id"])->bind(':id', 2)->first();;
        $this->set(compact('club'));
    }
    public function stgregoire(){
        $club = $this->Clubs->find()->where(["id = :id"])->bind(':id', 3)->first();;
        $this->set(compact('club'));
    }
    public function chevaigne(){
        $club = $this->Clubs->find()->where(["id = :id"])->bind(':id', 1)->first();;
        $this->set(compact('club'));
    }

    public function admin(){
    	if ($this->request->getSession()->read('user') == null) {
            return $this->redirect('/posts/index');
        }
        $clubs = $this->Clubs->find('all');
        $this->set(compact('clubs'));
    }

    public function modif($idClub)
    {
    	if ($this->request->getSession()->read('user') == null) {
            return $this->redirect('/posts/index');
        }
        $club = $this->Clubs->find()->where(["id = :id"])->bind(':id', $idClub)->first();
        $this->set(compact('club'));
    }

    public function modifsubmit($idClub) 
    {
    	if ($this->request->getSession()->read('user') == null) {
            return $this->redirect('/posts/index');
        }
        $elemTable = TableRegistry::get('Clubs');

        //sélectionne l'entité déjà existante
        /*$elem = $elemTable
       	    ->find()
            ->where(['id = :id'])
            ->bind(':id', $idClub)
            ->first();*/

        $elem = $this->Clubs->find()->where(["id = :id"])->bind(':id', $idClub)->first();

        //bind les données
        $elem->adresse = $this->request->getData('adresse');
        $elem->mail = $this->request->getData('mail');
        $elem->tel = $this->request->getData('tel');
        $elem->president = $this->request->getData('president');
        $elem->secretaire = $this->request->getData('secretaire');
        $elem->tresorier = $this->request->getData('tresorier');

        //enregistre l'entité dans la BDD
        $elemTable->save($elem);
        return $this->redirect('/clubs/admin');
    }
}