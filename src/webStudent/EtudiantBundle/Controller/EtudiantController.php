<?php

namespace webStudent\EtudiantBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use webStudent\EtudiantBundle\Entity\Utilisateur;
use webStudent\EtudiantBundle\Entity\Niveau;
use webStudent\EtudiantBundle\Entity\Section;
use webStudent\EtudiantBundle\Entity\Promo;
use webStudent\EtudiantBundle\Entity\Enseignant;
use webStudent\EtudiantBundle\Entity\Etudiant;
use webStudent\StageBundle\Entity\Stage;
use webStudent\EtudiantBundle\Form\EtudiantType;
use webStudent\EtudiantBundle\Form\EtudiantModifType;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;

class EtudiantController extends Controller
{
   
    public function indexAction()
    {
        //return new Response("Salut tout le monde, lebes ?");
        $repository = $this->getDoctrine()->getManager()->getRepository('webStudentEtudiantBundle:PeriodeStage');
        $listePeriodeStage = $repository->findPeriodesAVenir();
		//$listePeriodeStage = $repository->findAll();		
		return $this->render('webStudentEtudiantBundle:Etudiant:index.html.twig', array('listePeriodeStage' => $listePeriodeStage));	
    }

	public function etudiantConsulterAction ($id)
	{
		$repository = $this->getDoctrine()->getManager()->getRepository('webStudentEtudiantBundle:Etudiant');
		$etudiant = $repository->find($id);
		$stages=$etudiant->getStages();
		
	if ($stages instanceof \Doctrine\Common\Collections\Collection) 
	{
		echo "This will always be true!";
		//var_dump ($stages);
	}
 
          /*foreach ($stages->toArray() as $stage)
           {
            echo $stage->getLibelle();
           }*/
		
		
		/*foreach($stages as $stage)
		{
			echo $stage->getLibelle();
		}*/
		
		//$etudiant = $this->getDoctrine()->getManager()->find('webStudentEtudiantBundle:Etudiant', $id);
		//return $this->render('webStudentEtudiantBundle:Etudiant:etudiantConsulter.html.twig', array('etudiantNom' => $etudiant->getNom()));
		return $this->render('webStudentEtudiantBundle:Etudiant:etudiantConsulter.html.twig', array('etudiant' => $etudiant));
	}
	public function etudiantAvecStagesConsulterAction ($id)
	{
		$repository = $this->getDoctrine()->getManager()->getRepository('webStudentEtudiantBundle:Etudiant');
		$etudiant = $repository->getAvecStages($id);
		//$stages=$etudiant->getStages();
		
	
	/*
          foreach ($stages->toArray() as $stage)
           {
            echo $stage->getLibelle();
           }
		
		
		foreach($stages as $stage)
		{
			echo $stage->getLibelle();
		}*/
		
		//$etudiant = $this->getDoctrine()->getManager()->find('webStudentEtudiantBundle:Etudiant', $id);
		//return $this->render('webStudentEtudiantBundle:Etudiant:etudiantConsulter.html.twig', array('etudiantNom' => $etudiant->getNom()));
		return $this->render('webStudentEtudiantBundle:Etudiant:etudiantConsulter.html.twig', array('etudiant' => $etudiant));
	}
		
	public function etudiantRechercherAction(Request $request)
	{
		/*param function Request $request*/
		
		$form = $this->createFormBuilder()
					
			->add('nom', 'text', array('required' => false))
			//->add('section', 'text', array('required' => false))
			//->add('promo', 'text', array('required' => false))
			->add('section', 'entity', array(
										'class'    => 'webStudentEtudiantBundle:Section',
										'property' => 'nom',
										'multiple' => false))
			->add('promo', 'entity', array(
										'class'    => 'webStudentEtudiantBundle:Promo',
										'property' => 'annee',
										'multiple' => false))
			->add('niveau', 'entity', array(
										'class'    => 'webStudentEtudiantBundle:Niveau',
										'property' => 'libelle',
										'multiple' => false))
						
			
			->getForm();

		$form->handleRequest($request);

		if ($form->isValid()) {
			// Les données sont un tableau avec les clés "nom", "idSection??", et "???"
			$data = $form->getData();
			$repository = $this->getDoctrine()->getManager()->getRepository('webStudentEtudiantBundle:Etudiant');
			//$listeEtudiant = $repository->findByNom($data['nom']);
			$listeEtudiant = $repository->rechercherEtudiant($data);
			return $this->render('webStudentEtudiantBundle:Etudiant:listeEtudiant.html.twig', array('listeEtudiant' => $listeEtudiant));
			
		}

    // ... affiche le formulaire
	return $this->render('webStudentEtudiantBundle:Etudiant:etudiantRechercher.html.twig', array(
		'form' => $form->createView(),
		));
	}
	
	
	/*public function etudiantListerOldAction()
	{
	 $request = $this->container->get('request');

    if($request->isXmlHttpRequest())
    {
        $nom = '';
        $nom = $request->request->get('nom');

        //$em = $this->container->get('doctrine')->getEntityManager();
		$repository = $this->getDoctrine()->getManager()->getRepository('webStudentEtudiantBundle:Etudiant');
        if($nom != '')
        {
           
			$listeEtudiant = $repository->findByNom('$nom'); 
        }
        else 
		{
           $listeEtudiant = $repository->findAll(); 
        }

     
      

       return $this->render('webStudentEtudiantBundle:Etudiant:etudiantLister.html.twig', array('listeEtudiant' => $listeEtudiant));
    }
    else {
        return $this->EtudiantRechercherAction();
    }
	}*/
	
	public function EtudiantAjouterAction()
	{	
		$etudiant = new Etudiant ();
		$form = $this->createForm(new EtudiantType, $etudiant);
	
		// On récupère la requête
		$request = $this->get('request');
   
		// On vérifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
			// On fait le lien Requête <-> Formulaire
			// À partir de maintenant, la variable $etudiant contient les valeurs entrées dans le formulaire par le visiteur
			$form->bind($request);
 
			// On vérifie que les valeurs entrées sont correctes
			if ($form->isValid()) {
				// On l'enregistre notre objet $article dans la base de données
				$em = $this->getDoctrine()->getManager();
				$em->persist($etudiant);
				$em->flush();
 
				// On redirige vers la page de visualisation de l'etudiant nouvellement créé
			return $this->render('webStudentEtudiantBundle:Etudiant:etudiantConsulter.html.twig', array('etudiant' => $etudiant));
			}
		}
		// À ce stade :
		// - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
		// - Soit la requête est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau
		return $this->render('webStudentEtudiantBundle:Etudiant:etudiantAjouter.html.twig', array(
		'form' => $form->createView(),
		));
		
		
		
		
		/* --------------------  PARTIE 1 AVaNT la CREATION DES FORMULAIRE pour creer des objets rapidement --------------
		
		$em = $this->getDoctrine()->getManager();
		
		// Je vais récupérer une section
		$repository = $em->getRepository('webStudentEtudiantBundle:Section');
		$section = $repository->find(1);
		// Ou null si aucune section n'a été trouvé avec l'id $id
		if($section === null)
		{
			throw $this->createNotFoundException('section[id='.$id.'] inexistant.');
		}
		
		// Je récupère une promo
		$repository = $em->getRepository('webStudentEtudiantBundle:Promo');
		$promo = $repository->find(1);
		// Ou null si aucune promo n'a été trouvé avec l'id $id
		if($promo === null)
		{
			throw $this->createNotFoundException('section[id='.$id.'] inexistant.');
		}
		
		// Je récupère un niveau
		$repository = $em->getRepository('webStudentEtudiantBundle:Niveau');
		$niveau = $repository->find(1);
		// Ou null si aucune niveau n'a été trouvé avec l'id $id
		if($niveau === null)
		{
			throw $this->createNotFoundException('section[id='.$id.'] inexistant.');
		}
		
		$etudiant = new Etudiant() ;
		$etudiant -> setNom('GRANGER');
		$etudiant -> setPrenom('Hermione');
		//$etudiant -> setDateNaissance('1990-05-20');
		$etudiant -> setAdrMail('hermione.granger@gmail.com');
		$etudiant -> setTelephone('06.12.22.32.42');
		$etudiant -> setLogin('hGranger');
		$etudiant -> setMdp('mdpGranger');
		$etudiant -> setStatut(1);
		$etudiant -> setSection($section);
		$etudiant -> setPromo ($promo);
		$etudiant -> setNiveau ($niveau);
		
			
		// On PERSISTE les entités pour Doctrine
		$em->persist($etudiant);
			
		 //On « flush » tout ce qui a été persisté avant
		$em->flush();
		
		return $this->render('webStudentEtudiantBundle:Etudiant:etudiantConsulter.html.twig', array('etudiant' => $etudiant));
		//return $this->render('webStudentEtudiantBundle:Etudiant:index.html.twig', array('name' => $etudiant->getNom()));
	
	------------------------------ FIN PARTIE 1 ----------------------------------------------------------------------------*/
	}
	
	
	public function EtudiantModifierAction($id)
	{	
		$repository = $this->getDoctrine()->getManager()->getRepository('webStudentEtudiantBundle:Etudiant');
		$etudiant = $repository->find($id);
		$form = $this->createForm(new EtudiantModifType, $etudiant);
	
		// On récupère la requête
		$request = $this->get('request');
   
		// On vérifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
			// On fait le lien Requête <-> Formulaire
			// À partir de maintenant, la variable $etudiant contient les valeurs entrées dans le formulaire par le visiteur
			$form->bind($request);
 
			// On vérifie que les valeurs entrées sont correctes
			if ($form->isValid()) {
				// On l'enregistre notre objet $article dans la base de données
				$em = $this->getDoctrine()->getManager();
				$em->persist($etudiant);
				$em->flush();
 
				// On redirige vers la page de visualisation de l'etudiant nouvellement créé
			return $this->render('webStudentEtudiantBundle:Etudiant:etudiantConsulter.html.twig', array('etudiant' => $etudiant));
			}
		}
		// À ce stade :
		// - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
		// - Soit la requête est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau
		return $this->render('webStudentEtudiantBundle:Etudiant:etudiantModifier.html.twig', array(
		'form' => $form->createView(),
		));
		
	
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	public function niveauConsulterAction ($niveau)
	{
		return $this->render('webStudentEtudiantBundle:Etudiant:niveauConsulter.html.twig', array('niveau' => $idNiveau));
		
	}
	
	public function niveauAjouterAction()
	{
		//$niveau1 = new Niveau();
		//$niveau1 -> setLibelle('première année') ;
		//$niveau2 = new Niveau();
		//$niveau2 -> setLibelle('deuxième année') ;
		$niveau3 = new Niveau();	
		$niveau3 -> setLibelle('troisième année') ;
		
		// Etape 1 : On récupère l'EntityManager
		$em = $this->getDoctrine()->getManager();
 
		// Etape 2 : On PERSISTE les entités
		$em->persist($niveau3);
			
		// Étape 3 : On « flush » tout ce qui a été persisté avant
		$em->flush();
    
		/*return $this->redirect( $this->generateUrl('Niveau_consulter', array('niveau' => $niveau3->getId(),
																				'libelle'=> $niveau3->getLibelle() )) );*/
																
		return $this->render('webStudentEtudiantBundle:Etudiant:niveauConsulter.html.twig', array('niveau' => $niveau3->getLibelle()));
	}
	
	
	
}
