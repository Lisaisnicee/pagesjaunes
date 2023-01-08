<?php
namespace App\Tests;

use App\Entity\Couturier;
use PHPUnit\Framework\TestCase;
use App\Controller\CouturierController;
use App\Entity\Abstract\AbstractService;

class CouturierControllerTest extends TestCase{


    
    public function testDisponibilite() : void 
    {
       
        $couturier = new Couturier();
        $couturierController = New CouturierController($couturier);
        
        $this->assertTrue($couturierController->getDispo());
       
    }


}