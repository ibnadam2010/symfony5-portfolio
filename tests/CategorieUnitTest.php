<?php

namespace App\Tests;
use App\Entity\Categorie;
use PHPUnit\Framework\TestCase;

class CategorieTest extends TestCase{

    public function testCategorieCreate(){
        $categorie = new Categorie();
        $categorie->setNom("Peinture");
        $this->assertEquals("Peinture", $categorie->getNom());

    }
}