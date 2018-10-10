<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use BackOfficeBundle\Entity\internaute;
use Symfony\Component\HttpFoundation\Request;

class InternauteController extends Controller
{
    /**
     * @Route("/list",name="list")
     */
    public function list()
    {
        $data = $this->getDoctrine()->getRepository('BackOfficeBundle:internaute')->findAll();
        return $this->render('BackOfficeBundle:tp3:index.html.twig',array('data' =>  $data));
    }

    /**
     * @Route("/list/{id}",name="detail")
     */
    public function detail(Request $request,$id)
    {
        $data = $this->getDoctrine()->getRepository('BackOfficeBundle:internaute')->findById($id);
        $internaute = $data[0];
        $form = $this->createForm('BackOfficeBundle\Form\internauteType',$internaute);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form -> isValid()) {
            $em =$this->getDoctrine()->getManager();
            $em->persist($internaute);
            $em->flush($internaute);

            return $this->redirectToRoute('list');
        }
        return $this->render('BackOfficeBundle:tp3:detail.html.twig', array('internaute' => $internaute, 'form' => $form->createView(),));
    }

    /**
     * @Route("/internaute",name="internaute")
     */
    public function formulaire(Request $request)
    {
        $internaute = new internaute();
        $form = $this->createForm('BackOfficeBundle\Form\internauteType',$internaute);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form -> isValid()) {
            $em =$this->getDoctrine()->getManager();
            $em->persist($internaute);
            $em->flush($internaute);

            return $this->redirectToRoute('detail',array('id' => $internaute->getId()));
        }
        return $this->render('BackOfficeBundle:tp3:new.html.twig', array('internaute' => $internaute, 'form' => $form->createView(),));
    }

    /**
     * @Route("/list2",name="list2")
     */
    public function list2()
    {
        $em = $this->getDoctrine()->getManager();
        $data = $em->getRepository('BackOfficeBundle:internaute')->findAllActifOrderedByName();
        return $this->render('BackOfficeBundle:tp3:index.html.twig',array('data' =>  $data));
    }
}
