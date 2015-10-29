<?php

namespace Skywox\AppBundle\Form;

use Skywox\AppBundle\Form\Type\PoaType;
use Skywox\AppBundle\Form\Type\PositionsType;
use Skywox\AppBundle\Form\Type\PostType;
use Skywox\AppBundle\Form\Type\RecipientType;
use Skywox\AppBundle\Form\Type\SenderType;
use Skywox\AppBundle\Form\Type\ShipmentType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ConfirmOrderForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        switch ($options['flow_step']) {
            case 1:
                $builder->add('post', new PostType(), array(
                    'data_class' => 'Skywox\AppBundle\Entity\Recipient',
                ));
                break;
            case 2:
                $builder->add('terms', 'checkbox', array(
//                    'data_class' => 'Skywox\AppBundle\Entity\Recipient',
                ));
                break;
            case 3:
                $builder->add('recipient', new RecipientType(), array(
                    'data_class' => 'Skywox\AppBundle\Entity\Recipient',
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
            case 6:
                $builder->add('poa', new PoaType(), array(
                    'data_class' => 'Skywox\AppBundle\Entity\Document',
                ));
                break;
            case 7:
                $builder->add('validate', 'checkbox', array(
//                    'data_class' => 'Skywox\AppBundle\Entity\DeliveryOrder',
                ));
                break;
            case 8:
                $builder->add('confirmation', 'checkbox', array(
//                    'data_class' => 'Skywox\AppBundle\Entity\DeliveryOrder',
                ));
                break;
        }
    }

    public function getName()
    {
        return 'form';
    }
}