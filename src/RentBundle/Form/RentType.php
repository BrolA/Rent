<?php

namespace RentBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RentType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('car')
            ->add('client')
            ->add('dataWypozyczenia', 'datetime')
            ->add('dataOddania', 'datetime')
            ->add('kwotaOdKlienta')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'RentBundle\Entity\Rent'
        ));
    }
}
