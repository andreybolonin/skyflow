<?php

namespace Skywox\AppBundle\Form;

use Craue\FormFlowBundle\Form\FormFlow;
use Symfony\Component\Form\FormTypeInterface;

/**
 * Class CreateVehicleFlow
 * @package Skywox\AppBundle\Form
 */
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
//                'data_class' => ''
            ],
            [
                'label' => 'recipient',
                'form_type' => $this->formType,
            ],
            [
                'label' => 'compliance',
                'form_type' => $this->formType,
//                'skip' => function ($estimatedCurrentStepNumber, FormFlowInterface $flow) {
//                    return $estimatedCurrentStepNumber > 1 && !$flow->getFormData()->canHaveEngine();
//                },
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