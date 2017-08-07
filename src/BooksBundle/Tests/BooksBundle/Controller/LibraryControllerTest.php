<?php

namespace BooksBundle\Tests\BooksBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Created by PhpStorm.
 * User: david
 * Date: 07/08/17
 * Time: 15:05
 */
class LibraryControllerTest extends WebTestCase
{

    public function testIndexAction()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
        $this->assertEquals('BooksBundle\Controller\LibraryController::indexAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertTrue(200 == $client->getResponse()->getStatusCode());
        $this->assertTrue($crawler->filter('h2:contains("Bibliothèque")')->count() == 1);
    }


}