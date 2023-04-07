<?php

namespace App\Controller;

use App\Services\HomeService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PhotoController extends AbstractController
{
    #[Route('/photo', name: 'app_photo')]
    public function index(HomeService $homeService): Response
    {
        $photos = $homeService->GetPhotos(); 
        $photo_nbr = count($photos);

        return $this->render('photo/photo.html.twig', [
            'title' => 'Album photo',
            'photos' => $photos,
            'nbr' => $photo_nbr,
        ]);
    }
}
