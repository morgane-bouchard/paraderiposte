<?php
// src/Controller/PostsController.php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;


class LicenciesController extends AppController
{
	public function index() 
    {
    	if ($this->request->getSession()->read('user') == null) {
            return $this->redirect('/posts/index');
        }
        $licencies = $this->Licencies->find('all', array('limit' => 3));
        $this->set(compact('licencies'));
    }

    public function all()
    {
    	if ($this->request->getSession()->read('user') == null) {
            return $this->redirect('/posts/index');
        }
    	$licencies = $this->Licencies->find('all');
        $this->set(compact('licencies'));
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

        $elemTable = TableRegistry::get('Licencies');
        //cree une entité pour pouvoir l'ajouter dans la table
        $elem = $elemTable->newEntity();

        //bind les données
        $elem->club = $this->request->getData('club');
        $elem->nom = $this->request->getData('nom');
        $elem->prenom = $this->request->getData('prenom');
        $elem->dateN = $this->request->getData('dateN');
        $elem->age = $this->request->getData('age');
        $elem->categorie = $this->request->getData('categorie');
        $elem->adresse = $this->request->getData('adresse');
        $elem->codeCP = $this->request->getData('codeP');
        $elem->ville = $this->request->getData('ville');
        $elem->telFixe = $this->request->getData('telFixe');
        $elem->telPort = $this->request->getData('telPortable');
        $elem->mail = $this->request->getData('mail');
        $elem->cours1 = $this->request->getData('cours1');
        $elem->cours2 = $this->request->getData('cours2');
        
        //enregistre l'entité dans la BDD
        $elemTable->save($elem);
         return $this->redirect('/posts/admin');
    }

    public function modif($idLic)
    {
    	if ($this->request->getSession()->read('user') == null) {
            return $this->redirect('/posts/index');
        }

        $licencie = $this->Licencies->find()->where(["id = :id"])->bind(':id', $idLic)->first();
        $this->set(compact('licencie'));
    }

    public function modifsubmit($idLic) //à refaire
    {
    	if ($this->request->getSession()->read('user') == null) {
            return $this->redirect('/posts/index');
        }
        $elemTable = TableRegistry::get('Licencies');

        //sélectionne l'entité déjà existante
        $elem = $elemTable
            ->find()
            ->where(['id = :id'])
            ->bind(':id', $this->request->getData('id'))
            ->first();

        //bind les données
        $elem->club = $this->request->getData('club');
        $elem->nom = $this->request->getData('nom');
        $elem->prenom = $this->request->getData('prenom');
        $elem->dateN = $this->request->getData('dateN');
        $elem->age = $this->request->getData('age');
        $elem->categorie = $this->request->getData('categorie');
        $elem->adresse = $this->request->getData('adresse');
        $elem->codeCP = $this->request->getData('codeP');
        $elem->ville = $this->request->getData('ville');
        $elem->telFixe = $this->request->getData('telFixe');
        $elem->telPortable = $this->request->getData('telPortable');
        $elem->mail = $this->request->getData('mail');
        $elem->cours1 = $this->request->getData('cours1');
        $elem->cours2 = $this->request->getData('cours2');

        //enregistre l'entité dans la BDD
        $elemTable->save($elem);
        return $this->redirect('/licencies/index');
    }

    public function delete($idLic){
        if ($this->request->getSession()->read('user') == null) {
            return $this->redirect('/posts/index');
        }

        $elemTable = TableRegistry::get('Licencies');

        //sélectionne l'entité déjà existante
        $elem = $elemTable
            ->find()
            ->where(['id = :id'])
            ->bind(':id', $idLic)
            ->first();

        //supprime l'entité dans la BDD
        $elemTable->delete($elem);

        return $this->redirect('/posts/admin');
    }
}