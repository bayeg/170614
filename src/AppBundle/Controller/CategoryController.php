<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CategoryController extends Controller
{
    /**
     * @Route("/category", name="categoryList")
     */
    public function categoryListAction()
    {
                $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository("AppBundle:Category")
                ->findAll();
        return $this->render('AppBundle:Category:category_list.html.twig', [
            "categories" => $categories
        ]);
    }

    /**
     * @Route("/category/{id}", name="categoryDetail")
     */
    public function categoryDetailAction($id)
    {
                $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository("AppBundle:Category")
                ->find($id);
        return $this->render('AppBundle:Category:category_detail.html.twig', [
            "category" => $category
        ]);
    }

}
