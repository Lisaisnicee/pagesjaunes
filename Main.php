<?php

use App\Entity\Plombier;
use App\Entity\Dentiste;
use App\Entity\Couturier;

use App\Controller\PlombierController;
use App\Controller\DentisteController;
use App\Controller\CouturierController;

require_once __DIR__ . '/vendor/autoload.php';

$plombier = (new Plombier())
          ->setName("Jerome");
$plombierController = new PlombierController($plombier);

$couturier = (new Couturier())
          ->setName("Eric")
          ->setDispo(false);
$couturierController = new CouturierController($couturier);

$dentiste = (new Dentiste())
          ->setName("Nora");
$dentisteController = new DentisteController($dentiste);


do
{
echo("\n");
echo("*********************************\n");
echo("* BIENVENU SUR LES PAGES JAUNES *\n");
echo("*********************************\n\n");


echo("1 - J'ai besoin d'un Plombier\n");
echo("2 - J'ai besoin d'un Couturier\n");
echo("3 - J'ai besoin d'un Dentiste\n");
echo("4 - Quitter les Pages Jaunes\n");

echo("\n");
$choix = (int)readline('Selectionnez le service qui vous interesse :');


switch($choix) {

    case '1': 

          echo("\n");
        $result=$plombierController->serviceValide($plombier);
        if ($result==true)
         {

            echo("\n");
            $plombierController->reparer($plombier->getName());
        }
    break;

    
    case '2': 
        echo("\n");
        $result =$couturierController->serviceValide($couturier);
        
        if ($result==true)
        {
            echo("\n");
            
            $couturierController->coudre($couturier->getName());
        }
    break;


    case '3': 
        echo("\n");

        $result=$dentisteController->serviceValide($dentiste);
        
        if ($result==true) {
            echo("\n");
            $dentisteController->detartrage($dentiste->getName());
        }

        case'4':
        break;
    

    }
    echo("\n");

}
while ($choix!=4);



