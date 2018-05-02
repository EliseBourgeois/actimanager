<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Inscractivite;
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
        $entityManager = $this->getDoctrine()->getManager();

        $inscription = new Inscractivite();
        $inscription->setIdUser($this->getUser()->getId());
        $inscription->setIdactivite($id);
        $inscription->setValide(false);

        $entityManager->persist($inscription);


        $entityManager->flush();
        return $this->render('default/inscractivite.html.twig');
    }
}
