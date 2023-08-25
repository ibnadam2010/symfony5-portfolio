<?php

namespace App\Tests;
use App\Entity\Commentaire;
use PHPUnit\Framework\TestCase;

class CommentaireUnitTest extends TestCase
{
    public function testCommentaireCreate(){
        $commentaire = new Commentaire();
        $commentaire->setContenu("Peinture fait maison");
        $this->assertEquals("Peinture fait maison", $commentaire->getContenu());

    }
}
