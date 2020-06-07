<?php

namespace App\Controller; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IndexController extends AbstractController {
 
	public function accueil(){		
		 		
		return $this->render("Index\index.html.twig");		

	}
 
	



}