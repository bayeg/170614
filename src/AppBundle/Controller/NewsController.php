<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class NewsController extends Controller {

    /**
     * @Route("/", name="newsList")
     * @Route("/news", name="newsList")
     */
    public function newsListAction() {
        $em = $this->getDoctrine()->getManager();
        $news = $em->getRepository("AppBundle:News")
                ->findAll();
        return $this->render('AppBundle:News:news_list.html.twig', [
                    "news" => $news
        ]);
    }

    /**
     * @Route("/newsDetail/{id}", name="newsDetail")
     */
    public function newsDetailAction($id) {
        $em = $this->getDoctrine()->getManager();
        $new = $em->getRepository("AppBundle:News")
                ->find($id);
        return $this->render('AppBundle:News:news_detail.html.twig', [
                    "new" => $new
        ]);
    }

}
