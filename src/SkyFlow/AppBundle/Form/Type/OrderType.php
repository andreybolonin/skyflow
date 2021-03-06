<?php

namespace SkyFlow\AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

class OrderType extends AbstractType
{

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        switch ($options['flow_step']) {
            case 1:
                $validValues = array(2, 4);
                $builder->add('sender', 'SenderType', array(
                    'data_class' => 'SkyFlow\AppBundle\Entity\Sender',
                ));
                break;
            case 2:
                $builder->add('recipient', 'RecipientType', array(
                    'data_class' => 'SkyFlow\AppBundle\Entity\Recipient',
                ));
                break;
            case 3:
                $builder->add('compliance', 'choice', array(
                    'choices' => array_combine(array(2, 4), array(2, 4)),
                ));
                break;
            case 4:
                $builder->add('shipment', 'ShipmentType', array(
                    'data_class' => 'SkyFlow\AppBundle\Entity\DeliveryOrder',
                ));
                break;
            case 5:
                $builder->add('positions', 'PositionsType', array(
                    'data_class' => 'SkyFlow\AppBundle\Entity\DeliveryOrder',
                ));
                break;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'order';
    }
}
