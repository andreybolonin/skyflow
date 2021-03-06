<?php

namespace SkyFlow\AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class DeliveryOrderAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('addresses')
            ->add('description')
            ->add('weight')
            ->add('packing')
            ->add('qty')
            ->add('measurements')
            ->add('itemPrice')
            ->add('value')
            ->add('euTaricNo')
            ->add('euCode')
            ->add('createdAt')
            ->add('updatedAt')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id', null, ['label' => 'OrderId'])
            ->add('createdAt', null, ['label' => 'Date'])
            ->add('Tracking Id')
            ->add('CBM')
            ->add('Sender Name')
            ->add('Recipient Name')
            ->add('DE')
            ->add('Status')
//            ->add('euTaricNo')
//            ->add('euCode')
//            ->add('createdAt')
//            ->add('updatedAt')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('id')
            ->add('addresses')
            ->add('description')
            ->add('weight')
            ->add('packing')
            ->add('qty')
            ->add('measurements')
            ->add('itemPrice')
            ->add('value')
            ->add('euTaricNo')
            ->add('euCode')
            ->add('createdAt')
            ->add('updatedAt')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('addresses')
            ->add('description')
            ->add('weight')
            ->add('packing')
            ->add('qty')
            ->add('measurements')
            ->add('itemPrice')
            ->add('value')
            ->add('euTaricNo')
            ->add('euCode')
            ->add('id')
            ->add('createdAt')
            ->add('updatedAt')
        ;
    }
}
