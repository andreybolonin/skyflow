<?php

namespace SkyFlow\AppBundle\Form;

use SkyFlow\AppBundle\Form\Type\PositionsType;
use SkyFlow\AppBundle\Form\Type\RecipientType;
use SkyFlow\AppBundle\Form\Type\SenderType;
use SkyFlow\AppBundle\Form\Type\ShipmentType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class CreateOrderForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        switch ($options['flow_step']) {
            case 1:
                $builder->add('sender', new SenderType(), array(
                    'data_class' => 'SkyFlow\AppBundle\Entity\Customer',
                ));
                break;
            case 2:
                $builder->add('recipient', new RecipientType(), array(
                    'data_class' => 'SkyFlow\AppBundle\Entity\Customer',
                ));
                break;
            case 3:
                $builder->add('compliance', 'choice', array(
                    'choices' => array_combine(array(1, 0), array(1, 0)),
                ));
                break;
            case 4:
                $builder->add('shipment', new ShipmentType(), array(
                    'data_class' => 'SkyFlow\AppBundle\Entity\DeliveryOrder',
                ));
                break;
            case 5:
                $builder->add('positions', new PositionsType(), array(
                    'data_class' => 'SkyFlow\AppBundle\Entity\DeliveryOrder',
                ));
                break;
        }
    }

    public function getName()
    {
        return 'form';
    }
}