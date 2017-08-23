<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 02/08/17
 * Time: 11:09
 */

namespace BooksBundle\Form\Type;


use BooksBundle\Enum\FormatBookEnum;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BookType extends LibraryType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder
            ->add('formatBook', ChoiceType::class, array(
                'choices' => FormatBookEnum::getAvailableTypes(),
                'choice_label' => function($choice) {
                    return FormatBookEnum::getTypeName($choice);
                }
            ));
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BooksBundle\Entity\Book'
        ));
    }
}