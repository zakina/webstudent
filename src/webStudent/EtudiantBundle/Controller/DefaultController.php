<?php

namespace webStudent\EtudiantBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
class DefaultController extends Controller
{
    public function indexAction()
    {
		return new Response("Salut tout le monde, lebes ?");
        //return $this->render('webStudentEtudiantBundle:Default:index.html.twig', array('name' => $name));
    }
}
