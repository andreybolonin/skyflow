<?php

namespace Skywox\AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class CustomerAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
//            ->add('formOfAddress')
//            ->add('buildingNumber')
//            ->add('company')
//            ->add('firstName')
//            ->add('familyName')
//            ->add('customReg')
//            ->add('companyReg')
//            ->add('address')
//            ->add('additionalInfo')
//            ->add('postCode')
//            ->add('city')
//            ->add('country')
//            ->add('email')
            ->add('type')
//            ->add('telephone')
//            ->add('fax')
//            ->add('mobile')
//            ->add('id')
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
            ->addIdentifier('id')
//            ->add('formOfAddress')
//            ->add('buildingNumber')
//            ->add('company')
            ->add('firstName')
//            ->add('familyName')
//            ->add('customReg')
//            ->add('companyReg')
//            ->add('address')
//            ->add('additionalInfo')
            ->add('postCode')
//            ->add('city')
            ->add('country')
            ->add('email')
            ->add('type')
//            ->add('telephone')
//            ->add('fax')
//            ->add('mobile')
            ->add('createdAt')
            ->add('updatedAt')
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
            ->add('formOfAddress')
            ->add('buildingNumber')
            ->add('company')
            ->add('firstName')
            ->add('familyName')
            ->add('customReg')
            ->add('companyReg')
            ->add('address')
            ->add('additionalInfo')
            ->add('postCode')
            ->add('city')
            ->add('country')
            ->add('email')
            ->add('type')
            ->add('telephone')
            ->add('fax')
            ->add('mobile')
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
            ->add('id')
            ->add('formOfAddress')
            ->add('buildingNumber')
            ->add('company')
            ->add('firstName')
            ->add('familyName')
            ->add('customReg')
            ->add('companyReg')
            ->add('address')
            ->add('additionalInfo')
            ->add('postCode')
            ->add('city')
            ->add('country')
            ->add('email')
            ->add('type')
            ->add('telephone')
            ->add('fax')
            ->add('mobile')
            ->add('createdAt')
            ->add('updatedAt')
        ;
    }
}
