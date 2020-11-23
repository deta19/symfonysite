<?php
// src/Controller/HomeController.php
namespace App\Controller;

 use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    
    public function index(): Response
    {
         return $this->render('home/index.html.twig', [
             'controller_name' => 'HomeController',
         ]);

       
    }
    
    public function task(): Response
    {
         return $this->render('home/task.html.twig', [
             'controller_name' => 'HomeController',
         ]);

       
    }
    
    public function tasks(): Response
    {
         return $this->render('home/tasks.html.twig', [
             'controller_name' => 'HomeController',
         ]);

       
    }
}
