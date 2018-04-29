<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Activite;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Mapping as ORM;



class InfoactiviteController extends Controller
{
    /**
     * @Route("/activite/{id}", name="activiteid")
     */
    public function indexAction(Request $request, $id )
    {
        $description_activite = $this->getDoctrine()
            -> getRepository('AppBundle:Activite')
            -> find($id);

        return $this->render('default/infoactivite.html.twig', array('description_activite' => $description_activite));
    }
}
