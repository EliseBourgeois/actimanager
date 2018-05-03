<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Inscractivite;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Activite;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Mapping as ORM;


class ValideController extends Controller
{
    /**
     * @Route("/valide/{id}", name="valide")
     */
    public function indexAction(Request $request, $id )
    {
        $entityManager = $this->getDoctrine()->getManager();

        $inscription = $this->getDoctrine()
        ->getRepository('AppBundle:Inscractivite')->find($id);
        $inscription->setValide(true);


        $entityManager->flush();
        return $this->render('default/valide.html.twig');
    }
}
