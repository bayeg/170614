<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AuthorController extends Controller
{
    /**
     * @Route("/author", name="authorList")
     */
    public function authorListAction()
    {
        $em = $this->getDoctrine()->getManager();
        $authors = $em->getRepository("AppBundle:Author")
                ->findAll();
        return $this->render('AppBundle:Author:author_list.html.twig', [
            "authors" => $authors
        ]                
        );
    }

    /**
     * @Route("/author/{id}", name="authorDetail")
     */
    public function authorDetailAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $author = $em->getRepository("AppBundle:Author")
                ->find($id);
        return $this->render('AppBundle:Author:author_detail.html.twig', 
                [
                    "author" => $author
                ]
                );
    }

}
