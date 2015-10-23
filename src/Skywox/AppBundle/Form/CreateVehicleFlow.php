<?php

namespace Skywox\AppBundle\Form;

use Craue\FormFlowBundle\Form\FormFlow;
use Craue\FormFlowBundle\Form\FormFlowInterface;
use Skywox\AppBundle\Entity\DeliveryOrder;
use Skywox\AppBundle\Entity\Recipient;
use Skywox\AppBundle\Entity\Sender;
use Skywox\AppBundle\Form\Type\OrderType;
use Skywox\AppBundle\Form\Type\PositionsType;
use Skywox\AppBundle\Form\Type\RecipientType;
use Skywox\AppBundle\Form\Type\SenderType;
use Skywox\AppBundle\Form\Type\ShipmentType;
use Symfony\Component\Form\FormTypeInterface;

class CreateVehicleFlow extends FormFlow
{

    /**
     * @var
     */
    protected $formType;

    /**
     * @var bool
     */
    protected $allowDynamicStepNavigation = true;

    public function setFormType(FormTypeInterface $formType)
    {
        $this->formType = $formType;
    }

    protected function loadStepsConfig()
    {
        return array(
            array(
                'label' => 'sender',
                'form_type' => $this->formType,
//                'data_class' => ''
            ),
            array(
                'label' => 'recipient',
                'form_type' => $this->formType,
            ),
//            array(
//                'label' => 'compliance',
//                'type' => new OrderType(),
////                'skip' => function ($estimatedCurrentStepNumber, FormFlowInterface $flow) {
////                    return $estimatedCurrentStepNumber > 1 && !$flow->getFormData()->canHaveEngine();
////                },
//            ),
//            array(
//                'label' => 'shipment',
//                'type' => new ShipmentType(),
//            ),
//            array(
//                'label' => 'positions',
//                'type' => new PositionsType(),
//            ),
            array(
                'label' => 'confirmation',
            ),
        );
    }

    public function getName()
    {
        return 'createVehicle';
    }
}