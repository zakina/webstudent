<?php

namespace webSudent\StageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('webSudentStageBundle:Default:index.html.twig', array('name' => $name));
    }
}
