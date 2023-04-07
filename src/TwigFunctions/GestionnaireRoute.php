<?php

namespace App\TwigFunctions;


use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class GestionnaireRoute extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('routeGenerator', [$this, 'routeGenerator']),
        ];
    }

    public function routeGenerator(string $nomDeLaRoute, int $numeroDeBouton)
    {
        $cheminDeLaRoute = "";
        $texteDeLaRoute = "";
      
        if($nomDeLaRoute == "app_home" && $numeroDeBouton == 1){
            $cheminDeLaRoute = "app_import";
            $texteDeLaRoute = "Importer une photo";
        } else if($nomDeLaRoute == "app_home" && $numeroDeBouton == 2){
            $cheminDeLaRoute = "app_photo";
            $texteDeLaRoute = "Voir l'album photo";
        }
        else if($nomDeLaRoute == "app_photo" && $numeroDeBouton == 1){
            $cheminDeLaRoute = "app_home";
            $texteDeLaRoute = "Accueil";
        } else if($nomDeLaRoute == "app_photo" && $numeroDeBouton == 2){
            $cheminDeLaRoute = "app_import";
            $texteDeLaRoute = "Importer une photo";
        }
        else if($nomDeLaRoute == "app_import" && $numeroDeBouton == 1){
            $cheminDeLaRoute = "app_home";
            $texteDeLaRoute = "Accueil";
        } else if($nomDeLaRoute == "app_import" && $numeroDeBouton == 2){
            $cheminDeLaRoute = "app_photo";
            $texteDeLaRoute = "Voir l'album photo";
        } else {
            $cheminDeLaRoute = "#";
            $texteDeLaRoute = "Erreur";
        }
    
        return [
            "route" => $cheminDeLaRoute,
            "texte" => $texteDeLaRoute
        ];
    }
}