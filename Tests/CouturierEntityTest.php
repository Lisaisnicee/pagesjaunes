<?php

namespace Tests;

use App\Entity\Couturier;
use PHPUnit\Framework\TestCase;

class CouturierEntityTest extends TestCase
{
    public function testName()
    {
        $service = new Couturier();
        $this->assertEquals('Couturier', $service->getService());
    }

}