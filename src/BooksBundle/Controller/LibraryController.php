<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 02/08/17
 * Time: 10:29
 */

namespace BooksBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LibraryController extends Controller
{
    public function indexAction()
    {
        return $this->render('BooksBundle:front:index.html.twig');
    }

    public function addAction()
    {
        return $this->render('@Books/front/add.html.twig');
    }
}