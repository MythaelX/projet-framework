<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use BackOfficeBundle\lib\Test;

class DefaultController extends Controller
{
    /**
     * @Route("/",name="ip")
     */
    public function ip()
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        return $this->render('BackOfficeBundle:Default:index.html.twig',array('ip' => $ip));
    }
    
    /**
     * @Route("/test",name="test")
     */
    public function test()
    {
        $test = new Test;
        return $this->render('BackOfficeBundle:Default:index2.html.twig',array('test' => var_dump($test)));
    }
    
    /**
     * @Route("/test4",name="test4")
     */
    public function test4()
    {
        $test = new Test;
        return $this->render('BackOfficeBundle:Default:index3.html.twig',array('libelle' => $test->getLibelle(),'value' => $test->getValue(), 'nb' =>  $test->getNb()));
    }
    
    /**
     * @Route("/test5/libelle/{vallibel}/value/{valvalue}/nb/{valnb}",name="test5")
     */
    public function test5($vallibel,$valvalue,$valnb)
    {
        $tabtest;
        for($i=0;$i<10;$i++){
            $tabtest[$i]= new Test($vallibel,$valvalue,$valnb);
        }
        return $this->render('BackOfficeBundle:Default:index4.html.twig',array('tabTest' =>  $tabtest));
    }
    
    /**
     * @Route("/test6/libelle/{vallibel}/value/{valvalue}/nb/{valnb}",name="test6")
     */
    public function test6($vallibel,$valvalue,$valnb)
    {
        $tabtest;
        for($i=0;$i<10;$i++){
            $tabtest[$i]= new Test($vallibel,$valvalue,$valnb);
        }
        return $this->render('BackOfficeBundle:Default:index5.html.twig',array('tabTest' =>  $tabtest));
    }
    
}
