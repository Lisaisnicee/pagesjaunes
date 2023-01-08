<?php

namespace App\Entity;
use App\Entity\Abstract\AbstractService;


class Couturier extends AbstractService
{

    public function __construct()
    {
        parent::__construct();
        $this->service = "Couturier";
    }

    
}