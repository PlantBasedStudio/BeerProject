<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use function Symfony\Component\String\u;

class mainController extends AbstractController
{
	#[Route('/', name: 'app_home')]
	public function homepage() : Response 
	{
		return $this->render('home/home.html.twig', [
				'variable1' => 'valeur au choix'
		]);
	}

	#[Route('/Blog', name: 'app_blog')]
	public function blogpage() : Response 
	{
		return $this->render('blog/blog.html.twig', [
				'variable1' => 'valeur au choix'
		]);
	}

	#[Route('/Products', name: 'app_products')]
	public function productpage() : Response 
	{
		$beers = [
			'kastel' => [
			'name' => 'Kasteel Rubus',
			'desc' => 'Bonne bière fruitée',
			'img' => './kasteel.jpg'],
			'Straffe' => [
				'name' => 'Straffe Hendrik',
				'desc' => 'Bonne bière triple',
				'img' => './Straffe.jpg']

		];
		
		return $this->render('products/products.html.twig', [
				'css' => './bootstrap.css',
				'beers' => $beers
		]);
	}

	

	
}
    
