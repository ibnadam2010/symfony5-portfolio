<?php

namespace App\Tests;
use App\Entity\Peinture;
use PHPUnit\Framework\TestCase;

class PeintureUnitTest extends TestCase
{
    public function testPeintureCreate(){
        $peinture = new Peinture();
        $peinture->setNom("Peinture");
        $this->assertEquals("Peinture", $peinture->getNom());

    }
}
