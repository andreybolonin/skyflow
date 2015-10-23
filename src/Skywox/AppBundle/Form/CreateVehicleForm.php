<?php
/**
 * Created by PhpStorm.
 * User: andreybolonin
 * Date: 10/23/15
 * Time: 6:01 PM
 */

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
//        switch ($options['flow_step']) {
//            case 1:
//                $validValues = array(2, 4);
//                $builder->add('numberOfWheels', 'choice', array(
//                    'choices' => array_combine($validValues, $validValues),
//                    'empty_value' => '',
//                ));
//                break;
//            case 2:
//                $builder->add('engine', 'form_type_vehicleEngine', array(
//                    'empty_value' => '',
//                ));
//                break;
//        }

        switch ($options['flow_step']) {
            case 1:
                $validValues = array(2, 4);
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
                    'choices' => array_combine(array(2, 4), array(2, 4)),
//                    'data_class' => 'Skywox\AppBundle\Entity\Recipient',
                ));
                break;
            case 4:
                $builder->add('compliance', new ShipmentType(), array(
                    'data_class' => 'Skywox\AppBundle\Entity\DeliveryOrder',
                ));
                break;
            case 5:
                $builder->add('compliance', new PositionsType(), array(
                    'data_class' => 'Skywox\AppBundle\Entity\DeliveryOrder',
                ));
                break;
        }
    }

    public function getName()
    {
        return 'createVehicle';
    }
}