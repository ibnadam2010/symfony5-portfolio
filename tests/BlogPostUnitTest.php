<?php

namespace App\Tests;
use App\Entity\Blogpost;
use PHPUnit\Framework\TestCase;

class BlogPostUnitTest extends TestCase
{
    public function testBlogpostCreate(){
        $blogpost = new Blogpost();
        $blogpost->setContenu("Peinture fait maison");
        $this->assertEquals("Peinture fait maison", $blogpost->getContenu());

    }
}
