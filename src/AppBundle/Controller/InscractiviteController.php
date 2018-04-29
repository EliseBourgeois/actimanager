<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Activite;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Mapping as ORM;


class InscractiviteController extends Controller
{
    /**
     * @Route("/inscractivite/{id}", name="inscractivite")
     */
    public function indexAction(Request $request, $id )
    {
        $activite = $this->getDoctrine()
            -> getRepository('AppBundle:Activite')
            -> find($id);

        return $this->render('default/inscractivite.html.twig', array('activite' => $activite));
    }
}
