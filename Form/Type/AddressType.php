<?php
namespace Cannibal\Bundle\AddressBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * This type contains definitions for the calendar entity
 */
class AddressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('designation', 'text', array('label'=>'Name/Flat Number'))
            ->add('street', 'text', array('label'=>'Street'))
            ->add('city', 'text', array('label'=>'City'))
            ->add('county', 'text', array('label'=>'County'))
            ->add('country', 'text', array('label'=>'Country', 'data'=>'England'))
            ->add('postCode', 'text', array('label'=>'Postcode'));
    }

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'address';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        parent::setDefaultOptions($resolver);
        $resolver->setDefaults(array('data_class'=>'Cannibal\Bundle\AddressBundle\Entity\Address'));
    }
}
