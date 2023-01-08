<?php

namespace App\Entity\Abstract;

abstract class AbstractService
{
    protected string $service;
    protected string $name;
    protected bool $disponibilite;
    

    public function __construct()
    {
    
        $this->disponibilite = true;
        
    }

    public function getName(): ?string
    {
        return $this->name;
    }

   
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }

    public function getService() : string {
        return $this->service;
    }


    public function setDispo(bool $disponibilite) : self
    {
        $this->disponibilite = $disponibilite;
        return $this;
    }

    public function getDispo() : bool {
        return $this->disponibilite;
    }

    
}