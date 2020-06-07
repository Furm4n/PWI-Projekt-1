<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ContentController extends AbstractController
{
    /**
     * @Route("/projekt", name="projekt")
     */
    public function projekt()
    {
        return $this->render('main/index.html.twig');
    }

    /**
     * @Route("/kontakt", name="kontakt")
     */
    public function kontakt()
    {
        return $this->render('main/index.html.twig');
    }

    /**
     * @Route("/o_mnie", name="o_mnie")
     */
    public function oMnie()
    {
        return $this->render('main/index.html.twig');
    }



}
