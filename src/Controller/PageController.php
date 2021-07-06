<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends BaseController
{
    #[Route('/dashboard', name: 'dashboard', options: ['expose' => true])]
    public function dashboard(): Response
    {
        return $this->inertia->render('Dashboard');
    }
}
