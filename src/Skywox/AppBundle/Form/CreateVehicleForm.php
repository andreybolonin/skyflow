<?php

namespace Skywox\AppBundle\Form;

use Skywox\AppBundle\Form\Type\PositionsType;
use Skywox\AppBundle\Form\Type\RecipientType;
use Skywox\AppBundle\Form\Type\SenderType;
use Skywox\AppBundle\Form\Type\ShipmentType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class CreateVehicleForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        switch ($options['flow_step']) {
            case 1:
//                $validValues = array(2, 4);
                $builder->add('sender', new SenderType(), array(
                    'data_class' => 'Skywox\AppBundle\Entity\Sender',
                ));
                break;
            case 2:
                $builder->add('recipient', new RecipientType(), array(
                    'data_class' => 'Skywox\AppBundle\Entity\Recipient',
                ));
                break;
            case 3:
                $builder->add('compliance', 'choice', array(
                    'choices' => array_combine(array(1, 0), array(1, 0)),
//                    'data_class' => 'Skywox\AppBundle\Entity\Recipient',
                ));
                break;
            case 4:
                $builder->add('shipment', new ShipmentType(), array(
                    'data_class' => 'Skywox\AppBundle\Entity\DeliveryOrder',
                ));
                break;
            case 5:
                $builder->add('positions', new PositionsType(), array(
                    'data_class' => 'Skywox\AppBundle\Entity\DeliveryOrder',
                ));
                break;
        }
    }

    public function getName()
    {
        return 'form';
    }
}