<?php

namespace App\Controller;
use App\Entity\Plombier;
use App\Interface\ServiceInterface;
use App\Entity\Abstract\AbstractService;



 class PlombierController extends AbstractService implements ServiceInterface
{

    private $plombier;
    public function __construct(Plombier $plombier)
    {
        $this->plombier = $plombier;
    }

    public function reparer(string $name) {
        return print_r("$name reparera votre fuite.");
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