<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CRUDController extends AbstractController
{
    #[Route('index', name: 'movies')]
    public function index(): Response
    {
        return $this->render('crud/index.html.twig', [
            'controller_name' => 'CRUDController',
        ]);
    }

    #[Route('create', name: 'create')]
    public function createAction(): Response
    {
        return $this->render('crud/create.html.twig', [
        ]);
    }
    
    #[Route('/edit/{id}', name: 'edit-movie')]
    public function editAction(): Response
    {
        
        return $this->render('movies/edit.html.twig');
    }
    
    #[Route('/details/{id}', name: 'details')]
    public function detailsAction(): Response
    {
        
        return $this->render('movies/details.html.twig');
    }
    
    #[Route('/delete/{id}', name: 'edit-movie')]
    public function deleteAction(): Response
    {
        
        return $this->render('movies/delete.html.twig');
    }
}
