<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

class ImportController extends AbstractController
{
    private SluggerInterface $slugger;

    public function __construct(SluggerInterface $slugger) {
        $this->slugger = $slugger;
    }

    #[Route('/import', name: 'app_import')]
    public function index(Request $request): Response
    {
        // phpinfo();
        $this->addFlash(
            'error',
            'Fichier vide'
        );
        $haveErreur = $request->request->get("erreur");
        return $this->render('import/import.html.twig', [
            'controller_name' => 'Importer une photo',
            "erreur" => $haveErreur, 
           
        ]);
    }
    
    #[Route('/import/importer', name: 'app_import_importer')]
    public function ajouterPhoto(Request $request): Response
    { 
        $file = $request->files->get("photo");


        if ($file==null){
        
            return $this->redirectToRoute("app_import", [
                // 'erreur' => 'Fichier vide',
            ]);
        }

        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = $this->slugger->slug($originalFilename);
        $fileName = $safeFilename.'-'.uniqid().'.'.$file->guessExtension();

        $file->move("../public/photos/", $fileName);

        // var_dump($request->files->get("photo")); 
        // var_dump($request->files->get("photo")->getClientOriginalName()); 
        // var_dump(pathinfo($request->files->get("photo")->getClientOriginalName(), PATHINFO_FILENAME)); 
        // die();
        /*permet d aller chercher une info ou un groupe d info sur l objet*/

        return $this->redirectToRoute("app_import", [
            'erreur' => 'Fichier vide',

        ]);
    }
}
