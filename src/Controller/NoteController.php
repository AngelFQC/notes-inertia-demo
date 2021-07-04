<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/note')]
class NoteController extends BaseController
{
    #[Route('/', name: 'note')]
    public function index(): Response
    {
        return $this->inertia->render('Note/Index.vue');
    }

    #[Route('/create', name: 'note_create')]
    public function create()
    {

    }

    #[Route('/store', name: 'note_store')]
    public function store()
    {
        
    }

    #[Route('/show', name: 'note_show')]
    public function show()
    {

    }

    #[Route('/edit', name: 'note_edit')]
    public function edit()
    {

    }

    #[Route('/update', name: 'note_update')]
    public function update()
    {

    }

    #[Route('/destroy', name: 'note_destroy')]
    public function destroy()
    {

    }
}
