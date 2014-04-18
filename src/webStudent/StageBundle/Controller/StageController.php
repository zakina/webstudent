<?php

namespace webStudent\StageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use webStudent\EtudiantBundle\Entity\Etudiant;
use webStudent\StageBundle\Entity\Stage;

class StageController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('webStudentStageBundle:Default:index.html.twig', array('name' => $name));
    }
	
	public function stageAjouterAction()
	{	
		$em = $this->getDoctrine()->getManager();
		
		$repository = $em->getRepository('webStudentEtudiantBundle:Etudiant');
		$etudiant = $repository->find(1);	
		if($etudiant === null)
		{
			throw $this->createNotFoundException('etudiant[id='.$id.'] inexistant.');
		}	
		$stage1 = new Stage ();
		$stage1->setLibelle('stage 1 de Harry');
		$stage1->setEvaluation(2);
		$stage1->setEtudiant($etudiant);
			
		$stage2 = new Stage ();
		$stage2->setLibelle('stage 2 de Harry');
		$stage2->setEvaluation(3);
		$stage2->setEtudiant($etudiant);
		
		$etudiant->addStage($stage1);
		$etudiant->addStage($stage2);
		$em->persist($stage1);
		$em->persist($stage2);
		$em->persist($etudiant);
		$em->flush();
		
		//var_dump($etudiant);
		
				
		return $this->render('webStudentEtudiantBundle:Etudiant:etudiantConsulter.html.twig', array('etudiant' => $etudiant));
		//return $this->render('webStudentEtudiantBundle:Etudiant:index.html.twig', array('name' => $etudiant->getNom()));
		
	}
	
}
