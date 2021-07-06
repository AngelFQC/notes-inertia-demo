<?php

namespace App\Controller;

use App\Entity\Note;
use App\Repository\NoteRepository;
use Rompetomp\InertiaBundle\Service\InertiaInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/note', options: ['expose' => true])]
class NoteController extends BaseController
{
    private NoteRepository $noteRepository;

    public function __construct(InertiaInterface $inertia, NoteRepository $noteRepository)
    {
        parent::__construct($inertia);

        $this->noteRepository = $noteRepository;
    }

    #[Route('/', name: 'note')]
    public function index(): Response
    {
        $notes = $this->noteRepository->findAll();

        return $this->inertia->render(
            'Note/Index.vue',
            [
                'notes' => $notes,
            ]
        );
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
