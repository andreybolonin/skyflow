<?php

namespace Skywox\AppBundle\Admin;

use Doctrine\ORM\EntityRepository;
use Skywox\AppBundle\Entity\Customer;
use Skywox\AppBundle\Entity\Sender;
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
            ->add('OrderId')
            ->add('trackingNumber')
            ->add('senderDetails', 'doctrine_orm_callback', ['callback' => array($this, 'getWithSenderFilter')])
            ->add('recipientDetails', 'doctrine_orm_callback', ['callback' => array($this, 'getWithRecipientFilter')])
            ->add('invoiceNumber')
            ->add('date', 'doctrine_orm_datetime_range')
            ->add('type', null, ['label' => 'Account type'], 'choice', [
                'choices' => [
                    Customer::TYPE_SENDER => 'Sender',
                    Customer::TYPE_RECIPIENT => 'Recipient',
                    Customer::TYPE_APPLICANT => 'Applicant'
                ]
            ])
        ;
    }

    /**
     * Name, address, postcode or email
     *
     * @param $queryBuilder
     * @param $alias
     * @param $field
     * @param $value
     * @return bool|void
     */
    public function getWithSenderFilter($queryBuilder, $alias, $field, $value)
    {
        if (!$value['value']) {
            return;
        }

        $queryBuilder->orWhere($alias . '.firstName = :value');
        $queryBuilder->orWhere($alias . '.address = :value');
        $queryBuilder->orWhere($alias . '.postCode = :value');
        $queryBuilder->orWhere($alias . '.email = :value');
        $queryBuilder->andWhere($alias . '.type = :type');

        $queryBuilder->setParameter('value', $value['value']);
        $queryBuilder->setParameter('type', Customer::TYPE_SENDER);

        return true;
    }

    /**
     * Name, address, postcode or email
     *
     * @param $queryBuilder
     * @param $alias
     * @param $field
     * @param $value
     * @return bool|void
     */
    public function getWithRecipientFilter($queryBuilder, $alias, $field, $value)
    {
        if (!$value['value']) {
            return;
        }

        $queryBuilder->orWhere($alias . '.firstName = :value');
        $queryBuilder->orWhere($alias . '.address = :value');
        $queryBuilder->orWhere($alias . '.postCode = :value');
        $queryBuilder->orWhere($alias . '.email = :value');
        $queryBuilder->andWhere($alias . '.type = :type');

        $queryBuilder->setParameter('value', $value['value']);
        $queryBuilder->setParameter('type', Customer::TYPE_RECIPIENT);

        return true;
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
            ->add('trackingNumber')
//            ->add('invoice')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ));
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
            ->add('trackingNumber')
//            ->add('invoice')
            ->add('createdAt')
            ->add('updatedAt');
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
            ->add('trackingNumber')
//            ->add('invoice')
            ->add('createdAt')
            ->add('updatedAt');
    }
}
