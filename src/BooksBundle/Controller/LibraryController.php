<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 02/08/17
 * Time: 10:29
 */

namespace BooksBundle\Controller;


use BooksBundle\Enum\SupportTypeEnum;
use BooksBundle\Form\Type\BookType;
use BooksBundle\Form\Type\ComicStripType;
use BooksBundle\Form\Type\EbookType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LibraryController extends Controller
{
    public function indexAction()
    {
        return $this->render('BooksBundle:front:index.html.twig');
    }

    public function addAction(Request $request)
    {
        $typeName = SupportTypeEnum::$typeName;
        $types = [
            $typeName[SupportTypeEnum::TYPE_BOOK] => BookType::class,
            $typeName[SupportTypeEnum::TYPE_EBOOK] => EbookType::class,
            $typeName[SupportTypeEnum::TYPE_COMIC_STRIP] => ComicStripType::class
        ];

        $forms =[];
        foreach ($types as $type) {
            $forms[] = $this->createForm($type);
        }

        if ($request->isMethod('POST')) {
            foreach ($forms as $form) {
                $form->handleRequest($request);

                if (!$form->isSubmitted()) continue;

                if ($form->isValid()) {

                    break;
                }
            }
        }

        $views = [];
        foreach ($forms as $form) {
            $views[] = $form->createView();
        }
        return $this->render('@Books/front/add.html.twig', array(
            'forms' => $views,
            'types' => $types
        ));
    }
}