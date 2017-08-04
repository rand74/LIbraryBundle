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
use BooksBundle\Form\Type\ResearchType;
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
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($form);
                    $em->flush();
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

    public function addSupportForEanAction(Request $request)
    {
        $form = $this->createForm(ResearchType::class);
        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()) {

            $ean = $form->getData()['ean'];
            $requestBook = 'https://www.googleapis.com/books/v1/volumes?q=' . $ean;
            $responseBook = file_get_contents($requestBook);
            $results = json_decode($responseBook, true);
            $this->get('session')->set('results', $results);
            return $this->redirectToRoute('books_results_saving');

        }
        return $this->render('@Books/front/saving.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function resultsSavingAction(Request $request)
    {
        $session = $request->getSession();
        if ($session->get('results') == null) {

        } else {
            $results = $session->get('results');
            if ($results['totalItems'] = 0) {

            } else {
                $volumeInfo = $results['items'][0]['volumeInfo'];
                $saleInfo = $results['items'][0]['saleInfo'];
                $accessInfo = $results['items'][0]['accessInfo'];
                return $this->render('@Books/front/resultSaving.html.twig', array(
                    'volumeInfo' => $volumeInfo,
                    'saleInfo' => $saleInfo,
                    'accessInfo' => $accessInfo
                    ));
            }
        }
        return $this->render('@Books/front/resultSaving.html.twig');
    }
}