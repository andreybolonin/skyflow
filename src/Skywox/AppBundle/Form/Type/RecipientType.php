<?php

namespace Skywox\AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

class RecipientType extends AbstractType
{

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('formOfAddress', 'text')
            ->add('company', 'text')
            ->add('firstName', 'text')
            ->add('familyName', 'text')
            ->add('address', 'text')
            ->add('customReg', 'text')
            ->add('companyReg', 'text')
            ->add('buildingNumber', 'text')
            ->add('additionalInfo', 'text')
            ->add('postCode', 'text')
            ->add('city', 'text')
            ->add('country', 'text')
            ->add('email', 'text')
            ->add('telephone', 'text')
            ->add('fax', 'text')
            ->add('mobile', 'text');
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'recipient';
    }
}
