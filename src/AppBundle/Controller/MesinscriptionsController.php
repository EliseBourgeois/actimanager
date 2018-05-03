<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Activite;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Inscractivite;


class MesinscriptionsController extends Controller
{
    /**
     * @Route("/mesinscriptions", name="Mes inscriptions")
     */
    public function indexAction(Request $request )
    {
        $liste = $this->getDoctrine()
            -> getRepository('AppBundle:Inscractivite')
            -> findAll();
        $liste_activites = $this->getDoctrine()
            ->getRepository('AppBundle:Activite')
            ->findAll();
        $liste_inscriptions  = $this->get('knp_paginator')->paginate(
            $liste,
            $request->query->get('page', 1)/*le numéro de la page à afficher*/,
            10/*nbre d'éléments par page*/
        );
        return $this->render('default/mesinscriptions.html.twig', array('liste_inscriptions' => $liste_inscriptions,'liste_activites'=>$liste_activites));
    }
}
