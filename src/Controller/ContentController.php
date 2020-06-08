<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ContentController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index()
    {
        return $this->render('main/index.html.twig');
    }

    /**
     * @Route("/projekt", name="projekt")
     */
    public function projekt()
    {
        return $this->render('main/projekt.html.twig');
    }

    /**
     * @Route("/kontakt", name="kontakt")
     */
    public function kontakt()
    {
        return $this->render('main/kontakt.html.twig');
    }

    /**
     * @Route("/o_mnie", name="o_mnie")
     */
    public function oMnie()
    {
        return $this->render('main/omnie.html.twig');
    }

    /**
     * @Route("/en", name="en_main")
     */
    public function en_index()
    {
        return $this->render('main/en_index.html.twig');
    }

    /**
     * @Route("/en/projekt", name="en_projekt")
     */
    public function en_projekt()
    {
        return $this->render('main/en_projekt.html.twig');
    }

    /**
     * @Route("/en/kontakt", name="en_kontakt")
     */
    public function en_kontakt()
    {
        return $this->render('main/en_kontakt.html.twig');
    }

    /**
     * @Route("/en/o_mnie", name="en_o_mnie")
     */
    public function en_oMnie()
    {
        return $this->render('main/en_omnie.html.twig');
    }



}
