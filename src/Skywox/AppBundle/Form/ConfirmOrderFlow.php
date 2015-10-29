<?php

namespace Skywox\AppBundle\Form;

use Craue\FormFlowBundle\Form\FormFlow;
use Symfony\Component\Form\FormTypeInterface;

/**
 * Class CreateVehicleFlow
 * @package Skywox\AppBundle\Form
 */
class ConfirmOrderFlow extends FormFlow
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
                'label' => 'post',
                'form_type' => $this->formType,
            ],
            [
                'label' => 'terms',
                'form_type' => $this->formType,
            ],
            [
                'label' => 'recipient',
                'form_type' => $this->formType,
            ],
            [
                'label' => 'shipment',
                'form_type' => $this->formType,
            ],
            [
                'label' => 'positions',
                'form_type' => $this->formType,
            ],
            [
                'label' => 'poa',
                'form_type' => $this->formType,
            ],
            [
                'label' => 'validate',
                'form_type' => $this->formType,
            ],
            [
                'label' => 'confirmation',
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