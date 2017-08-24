<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 23/08/17
 * Time: 11:00
 */

namespace BooksBundle\Service;


use BooksBundle\Enum\SupportTypeEnum;
use BooksBundle\Form\Type\BookType;
use BooksBundle\Form\Type\ComicStripType;
use BooksBundle\Form\Type\EbookType;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;

class SupportFormBuilder
{
    protected $em;
    protected $twig;
    protected $form;
    protected $request;
    protected $controller;

    public function __construct(EntityManager $em, \Twig_Environment $twig, Form $form, Request $request, Controller $controller)
    {
        $this->em           = $em;
        $this->twig         = $twig;
        $this->form         = $form;
        $this->request      = $request;
        $this->controller   = $controller;
    }

    public function addFormSupport($page)
    {
        $typeName = SupportTypeEnum::$typeName;
        $types = [
            $typeName[SupportTypeEnum::TYPE_BOOK] => BookType::class,
            $typeName[SupportTypeEnum::TYPE_EBOOK] => EbookType::class,
            $typeName[SupportTypeEnum::TYPE_COMIC_STRIP] => ComicStripType::class
        ];

        $forms =[];
        foreach ($types as $type) {
            $forms[] = $this->controller->createForm($type);
        }

        if ($this->request->isMethod('POST')) {
            foreach ($forms as $form) {
                $form->handleRequest($this->request);

                if (!$form->isSubmitted()) continue;

                if ($form->isValid()) {
                    $this->em->persist($form);
                    $this->em->flush();
                    break;
                }
            }
        }

        $views = [];
        foreach ($forms as $form) {
            $views[] = $form->createView();
        }
        return $this->twig->render($page, array(
            'forms' => $views,
            'types' => $types
        ));
    }
}