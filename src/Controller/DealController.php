<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DealController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('deal/index.html.twig');
    }
} 