<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Activite;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Mapping as ORM;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request, Activite $activite=null )
    {
        $liste = $this->getDoctrine()
            -> getRepository('AppBundle:Activite')
            -> findAll($activite);
        $liste_activite  = $this->get('knp_paginator')->paginate(
            $liste,
            $request->query->get('page', 1)/*le numéro de la page à afficher*/,
            10/*nbre d'éléments par page*/
        );
        return $this->render('default/index.html.twig', array('liste_activite' => $liste_activite));
    }
}
