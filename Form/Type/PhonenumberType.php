<?php
namespace Cannibal\Bundle\AddressBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Cannibal\Bundle\AddressBundle\Entity\PhoneNumber;

/**
 * This type contains definitions for the calendar entity
 */
class PhonenumberType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('number', 'text', array('label'=>'Main number'))
            ->add('countryCode', 'text', array('label'=>'Country code'))
            ->add('type', 'choice', array('label'=>'type', 'choices'=>array(Phonenumber::TYPE_LANDLINE=> 'Landline', Phonenumber::TYPE_MOBILE=>'Mobile')));
    }

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'phonenumber';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        parent::setDefaultOptions($resolver);
        $resolver->setDefaults(array('data_class'=>'Cannibal\Bundle\AddressBundle\Entity\Phonenumber'));
    }
}
