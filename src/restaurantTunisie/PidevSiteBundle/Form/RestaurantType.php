<?php

namespace restaurantTunisie\PidevSiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RestaurantType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('adresse')
            ->add('numero')
            ->add('idRestaurateur')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'restaurantTunisie\PidevSiteBundle\Entity\Restaurant'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'restauranttunisie_pidevsitebundle_restaurant';
    }
}
