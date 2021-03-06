<?php

namespace SkyFlow\AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

class ShipmentType extends AbstractType
{

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('measurements', 'text');
//            ->add('description', 'text')
//            ->add('weight', 'text')
//            ->add('packing', 'text')
//            ->add('qty', 'text')
//            ->add('measurements', 'text')
//            ->add('itemPrice', 'text')
//            ->add('value', 'text')
//            ->add('euTaricNo', 'text')
//            ->add('euCode', 'text');
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'shipment';
    }
}
