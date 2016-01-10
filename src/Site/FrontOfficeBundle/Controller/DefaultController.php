<?php

namespace Site\FrontOfficeBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Site\BackOfficeBundle\Entity\Category;
class DefaultController extends Controller
{
    /**
     * @Route("/home")
     */
    public function indexAction()
    {
        return $this->render('front/index.html.twig');
    }
    /**
     * @Route("/product")
     */
    public function listproductAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('SiteBackOfficeBundle:Category')->findAll();
        return $this->render('front/listproduct.html.twig',array('categories' => $categories));   
    }
    /**
     * @Route("/single/{slug}",name="single_product")
     */
    public function singleAction($slug)
    {
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('SiteBackOfficeBundle:Descriptionproduct')->myFind($slug);
        
        return $this->render('front/single.html.twig',array('product'=>$product));
    }
    
     public function ajouterAction($id)
    {
        $session = $this->getRequest()->getSession();
        if(! $session->has("panier")) 
            $session->set ("panier", array());
        $panier = $session->get("panier");
         
        if(array_key_exists($id, $panier)){
            if($this->getRequest()->query->get("qte") != NULL ) 
                $panier[$id] = $this->getRequest()->query->get("qte");
        } else {
              if($this->getRequest()->query->get("qte") != NULL )
                   $panier[$id] = $this->getRequest()->query->get("qte");
                   else 
                       $panier = $panier[$id];
        }
        $session->set('panier', $panier);
        return $this->redirect($this->generateUrl("single_product"));

    }
}
