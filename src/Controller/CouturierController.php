<?php

namespace App\Controller;
use App\Entity\Couturier;
use App\Interface\ServiceInterface;
use App\Entity\Abstract\AbstractService;


final class CouturierController extends AbstractService implements ServiceInterface
{

    private $couturier;
    public function __construct(Couturier $couturier)
    {
        $this->couturier = $couturier;
    }

    public function coudre(string $name) {
        return print_r("$name coudra votre ourlet.");
    }

    public function serviceValide(AbstractService $service)
    {
        if($service->getDispo() ==false) {
               print_r("/!\ Ce service est indisponible.");
               return false;
        }
        else if ($service->getDispo() ==false) 
        print_r("Votre demande de service a été validée");
        return true;
             
    }
}