<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 02/08/17
 * Time: 15:04
 */

namespace BooksBundle\Form\Type;


use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EbookType extends LibraryType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder
            ->add('size')
            ->add('unitySize')
            ->add('file');
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BooksBundle\Entity\Ebook'
        ));
    }
}