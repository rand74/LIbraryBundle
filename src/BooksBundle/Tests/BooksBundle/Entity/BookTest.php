<?php

namespace BooksBundle\Tests\BooksBundle\Entity;

use BooksBundle\Entity\Book;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Created by PhpStorm.
 * User: david
 * Date: 07/08/17
 * Time: 17:00
 */
class BookTest extends WebTestCase
{
    private $book;

    protected function setUp()
    {
        $this->book = new Book();
    }


}