<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 04/08/17
 * Time: 10:20
 */

namespace BooksBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ResearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ean', TextType::class, array(
                'label' => 'Ean'
            ));
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(

        ));
    }

    public function getBlockPrefix()
    {
        return 'research_action';
    }
}