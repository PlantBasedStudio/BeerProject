<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use function Symfony\Component\String\u; //nouveau ça ! C'est pour importer le composant de Symfony "The String Component"

class testController extends AbstractController
{
	#[Route('/')]
	public function homepage() : Response 
	{
		return $this->render('test/test.html.twig', [
				'variable1' => 'valeur au choix'
		]);
	}

	#[Route('/shop')]
	public function showShop() : Response 
	{
		return new Response('Welcome to the Shop !');
	}

	#[Route('/shop/{slug}')] 
	public function showShopCategory(string $slug) : Response 
	{
		$cat = u(str_replace('-', ' ',$slug))->title(true);
		
		return new Response('Category:' . $cat);
	}

    #[Route('/contact')] 
    public function showContact() : Response 
    {
        $form = [
            'Nom',
            'Prénom',
            'Adresse',
            'email'
        ];
        dump($form);
        return $this->render('contact/contact.html.twig', [
                'title' => 'Contact',
                'form' => $form
        ]);
    }
    
}