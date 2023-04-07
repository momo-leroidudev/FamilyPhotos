<?php

namespace App\Services;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeService
{
    public function GetPhotos(): array
    {
        $repertoire = "photos/";

        if (!is_dir($repertoire)) {
            exit('Invalid diretory path');
        }

        $photos = [];
        foreach (scandir($repertoire) as $file) {
            if ($file !== '.' && $file !== '..') {
                $photos[] = $file;
            }
        }

        return $photos;
    }
}
