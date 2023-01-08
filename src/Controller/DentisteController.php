<?php

namespace App\Controller;
use App\Entity\Dentiste;
use App\Interface\ServiceInterface;
use App\Entity\Abstract\AbstractService;

final class DentisteController extends AbstractService implements ServiceInterface
{

    private $dentiste;
    public function __construct(Dentiste $dentiste)
    {
        $this->dentiste = $dentiste;
    }

    public function detartrage(string $name) {
        return print_r("$name se chargera de votre detartage.");
    }
    
    
    public function serviceValide(AbstractService $service)
    {
        if($service->getDispo() == false) {
               print_r("/!\ Ce service est indisponible.");
               return false;
        }
        else print_r("Votre demande de service a été validée");
        return true;
    }
}