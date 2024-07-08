<?php



namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    //https://127.0.0.1:8000/recette/ghada-1
    #[Route("/recette/{slug}-{id}",
     name: "recipe.show",
     
     requirements:['id'=>'\d+','slug'=>'[a-z0-9-]+'])]

    public function index(Request $request,string $slug ,int $id): Response
    {
        
       
 dd($slug , $id);
    }
}
