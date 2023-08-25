<?php

namespace App\Tests;
use App\Entity\User;
use PHPUnit\Framework\TestCase;
 
class UserTest extends TestCase{

    public function testUserCreate(){
        $user = new User(); // Create User object.
        $user->setNom("Name");
         
        $this->assertEquals("Name", $user->getNom());
        }

    public function testIsTrue(){

        $user = new User();
        $user->setNom("Bertin")
            ->setPrenom("Alice")
            ->setEmail("as.toto@gmail.com");
        $this->assertTrue($user->getNom()==="Bertin");
        }



}