<?php

namespace App\Interface;

use App\Entity\Abstract\AbstractService;

interface ServiceInterface
{
    public function serviceValide(AbstractService $service);
}