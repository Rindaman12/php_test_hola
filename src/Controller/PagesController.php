<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    /**
     * @IsGranted({"ROLE_ADMIN", "ROLE_PAGE_1"})
     * @Route("/page/1", name="page_1")
     */
    public function page1(): Response
    {
        return $this->render('pages/page_1.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }

    /**
     * @IsGranted({"ROLE_ADMIN", "ROLE_PAGE_2"})
     * @Route("/page/2", name="page_2")
     */

    public function page2(): Response
    {
        return $this->render('pages/page_2.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }
}
