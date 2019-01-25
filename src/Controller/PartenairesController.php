<?php
// src/Controller/PostsController.php

namespace App\Controller;

use App\Controller\AppController;


class PartenairesController extends AppController
{
	public function index()
    {
        $partenaires = $this->Partenaires->find('all');
        $this->set(compact('partenaires'));
    }
}