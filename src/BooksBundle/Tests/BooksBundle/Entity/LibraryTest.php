<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 07/08/17
 * Time: 17:03
 */

namespace BooksBundle\Tests\BooksBundle\Entity;


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LibraryTest extends WebTestCase
{
    public function testTitle()
    {
        $support = $this->getMockForAbstractClass('\BooksBundle\Entity\Library');
        $support->setTitle('Test');
        $this->assertNotNull($support->getTitle());
        $this->assertEquals('Test', $support->getTitle());
    }

    public function testAuthor()
    {
        $support = $this->getMockForAbstractClass('\BooksBundle\Entity\Library');
        $support->setAuthor('Jean');
        $this->assertNotNull($support->getAuthor());
        $this->assertEquals('Jean', $support->getAuthor());
    }
}