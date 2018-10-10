<?php

namespace FontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/mesage/{msg}")
     */
    public function indexAction($msg)
    {
        
        return $this->render('FontOfficeBundle:Default:index.html.twig', array('msg' => $msg));
    }
    
    /**
     * @Route("/test1/{num}")
     */
    public function indexActionN($num)
    {
        if(is_numeric($num)){
            return $this->render('FontOfficeBundle:Default:index.html.twig', array('msg' => $num));
        } else{
            $num="Erreur";
            return $this->render('FontOfficeBundle:Default:index.html.twig', array('msg' => $num));
        }
    }
    /**
     * @Route("/test2/{text}")
     */
    public function indexActionT($text)
    {
            $text="ok";
            return $this->render('FontOfficeBundle:Default:index.html.twig', array('msg' => $text));
    }
}
