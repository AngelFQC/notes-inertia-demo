<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends BaseController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->inertia->render('Index');
    }
}
