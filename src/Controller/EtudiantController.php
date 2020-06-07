<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EtudiantController extends AbstractController{ 
 
	private $data = array();
			
	public function __construct() {
	
		$etudiants[1]=array("id"=>1,"Nom"=>"Moujtahid","Prenom"=>"Moujidd", "Note"=>18);
		$etudiants[2]=array("id"=>2,"Nom"=>"Kaddouri","Prenom"=>"Kaddour", "Note"=>13);
		$etudiants[3]=array("id"=>3,"Nom"=>"Omari","Prenom"=>"Omar", "Note"=>14);
		$etudiants[4]=array("id"=>4,"Nom"=>"Jallouli","Prenom"=>"Jalloul", "Note"=>16);
		$etudiants[5]=array("id"=>5,"Nom"=>"Kaslani","Prenom"=>"Kasoul", "Note"=>3.5);
		$etudiants[6]=array("id"=>6,"Nom"=>"Masrouri","Prenom"=>"Sara", "Note"=>12);
		$etudiants[7]=array("id"=>7,"Nom"=>"Slimani","Prenom"=>"Salma", "Note"=>9.5);
		
		$this->data = $etudiants;		
	
	}
 
	
	
	/**
	 *@Route("/etudiant/liste",name="route_etudiant_liste")
	 */	
	public function liste() {
		
		$data = $this->data;
		return $this->render("Etudiant\liste.html.twig",["etudiants"=>$data]);
	}
	
	/**
	 *@Route("/etudiant/detail/{id}",name="route_etudiant_detail")
	 */	
	public function detail($id) {
	
		return $this->render("Etudiant\detail.html.twig",["etudiant"=>$this->data[$id]]);	
	}
	
	/**
	 *@Route("/etudiant/ajouter",name="route_etudiant_ajouter")
	 */	
	public function ajouter() {	
	
		return $this->render("Etudiant/formAjout.html.twig");	
	}
	
	/**
	 *@Route("/etudiant/modifier/{id}",name="route_etudiant_modifier")
	 */	
	public function modifier($id) {
	 
		
		$this->addFlash("info","L'étudiant $id a été modifié avec succès");
		return $this->redirectToRoute("route_etudiant_detail",["id"=>$id]);
	}
	
	/**
	 *@Route("/etudiant/supprimer/{id}",name="route_etudiant_supprimer")
	 */	
	public function supprimer($id) {
	
		 
		$this->addFlash("info","L'étudiant $id a été supprimé avec succès");
		return $this->redirectToRoute("route_etudiant_liste");	
	}
	
	
	
}
