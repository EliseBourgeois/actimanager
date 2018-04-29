<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Activite;
use AppBundle\Form\ActiviteType;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends Controller
{
    /**
     * @Route("/admin", name="admin")
     */
    public function indexAction(Request $request)
    {
        $activite = new Activite();

        $form = $this->createForm(ActiviteType::class, $activite);

        $form ->handleRequest($request);

        if($form->isSubmitted()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($activite);
            $em->flush();
            return new Response('Activité enregistrée');
        }
        $formView = $form->createView();
        return $this->render('default/admin.html.twig', array('form' => $formView));


    }
}
