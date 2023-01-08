<?php

namespace App\Entity;
use App\Entity\Abstract\AbstractService;


class Dentiste extends AbstractService
{

    public function __construct()
    {
        parent::__construct();
        $this->service = "Dentiste";
    }

    
}