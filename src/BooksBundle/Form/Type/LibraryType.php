<?php

namespace BooksBundle\Form\Type;

use BooksBundle\Enum\FormatBookEnum;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LibraryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, array(
                'label' => 'Titre'
            ))
            ->add('author', TextType::class, array(
                'label' => 'Auteur'
            ))
            ->add('cycle', TextType::class, array(
                'label' => 'Cycle',
                'required' => false
            ))
            ->add('resume', TextareaType::class, array(
                'label' => 'Résumé',
                'required' => false
            ))
            /*->add('type', ChoiceType::class, array(
                'choices' => FormatBookEnum::getAvailableTypes(),
                'choices_as_values' => true,
                'choice_label' => function($choice) {
                    return FormatBookEnum::getTypeName($choice);
                }
            ))*/
            ->add('editor', TextType::class, array(
                'label' => 'Editeur',
                'required' => false
            ))
            ->add('detention', ChoiceType::class, array(
                'label' => 'Détention',
                'choices' => array(
                    'Oui' => '1',
                    'Non' => '0'
                )
            ))
            ->add('isbn10', IntegerType::class, array(
                'label' => 'Isbn 10'
            ))
            ->add('isbn13', IntegerType::class, array(
                'label' => 'Isbn 13'
            ))
            ->add('publishedDate', DateType::class, array(
                'label' => 'Date de publication',
                'format' => "yyyy-MM-dd"
            ))
            ->add('pageCount', IntegerType::class, array(
                'label' => 'Nombre de pages'
            ))
            ->add('language', TextType::class, array(
                'label' => 'Langue'
            ))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BooksBundle\Entity\Library'
        ));
    }

    public function getBlockPrefix()
    {
        return 'add_library';
    }
}