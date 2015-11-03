<?php

namespace SkyFlow\AppBundle\Form;

use Craue\FormFlowBundle\Form\FormFlow;
use Symfony\Component\Form\FormTypeInterface;

/**
 * Class CreateVehicleFlow
 * @package SkyFlow\AppBundle\Form
 */
class CreateOrderFlow extends FormFlow
{

    /**
     * @var
     */
    protected $formType;

    /**
     * @var bool
     */
    protected $allowDynamicStepNavigation = true;

    /**
     * @param FormTypeInterface $formType
     */
    public function setFormType(FormTypeInterface $formType)
    {
        $this->formType = $formType;
    }

    /**
     * @return array
     */
    protected function loadStepsConfig()
    {
        return [
            [
                'label' => 'sender',
                'form_type' => $this->formType,
            ],
            [
                'label' => 'recipient',
                'form_type' => $this->formType,
            ],
            [
                'label' => 'compliance',
//                'form_type' => $this->formType,
            ],
            [
                'label' => 'shipment',
                'form_type' => $this->formType,
            ],
            [
                'label' => 'positions',
                'form_type' => $this->formType,
            ],
        ];
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'form';
    }
}