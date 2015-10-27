<?php

namespace Skywox\AppBundle\Tests\Controller;

use Skywox\AppBundle\Entity\DeliveryOrder;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Class OrderControllerTest
 * @package Skywox\AppBundle\Tests\Controller
 */
class OrderControllerTest extends WebTestCase
{
    /**
     *
     */
    public function testCreationNewOrder()
    {
        static::$kernel = static::createKernel();
        static::$kernel->boot();
        $container = static::$kernel->getContainer();

        $em = $container->get("doctrine.orm.entity_manager");

        $email = uniqid() . '@gmail.com';
        $password = uniqid();

        $client = static::createClient();

        $crawler = $client->request('GET', '/new_order');

        // Sender
        $form = $crawler->filter('body > form')->form();
        $form->setValues(
            [
                'form[sender][formOfAddress]' => uniqid(),
                'form[sender][company]' => uniqid(),
                'form[sender][firstName]' => uniqid(),
                'form[sender][familyName]' => uniqid(),
                'form[sender][address]' => uniqid(),
                'form[sender][customReg]' => uniqid(),
                'form[sender][companyReg]' => uniqid(),
                'form[sender][buildingNumber]' => uniqid(),
                'form[sender][additionalInfo]' => uniqid(),
                'form[sender][postCode]' => uniqid(),
                'form[sender][city]' => uniqid(),
                'form[sender][country]' => uniqid(),
                'form[sender][email]' => $email,
                'form[sender][telephone]' => uniqid(),
                'form[sender][fax]' => uniqid(),
                'form[sender][mobile]' => uniqid(),
            ]
        );
        $crawler = $client->submit($form);

        // Recipient
        $form = $crawler->filter('body > form')->form();
        $form->setValues(
            [
                'form[recipient][formOfAddress]' => uniqid(),
                'form[recipient][company]' => uniqid(),
                'form[recipient][firstName]' => uniqid(),
                'form[recipient][familyName]' => uniqid(),
                'form[recipient][address]' => uniqid(),
                'form[recipient][customReg]' => uniqid(),
                'form[recipient][companyReg]' => uniqid(),
                'form[recipient][buildingNumber]' => uniqid(),
                'form[recipient][additionalInfo]' => uniqid(),
                'form[recipient][postCode]' => uniqid(),
                'form[recipient][city]' => uniqid(),
                'form[recipient][country]' => uniqid(),
                'form[recipient][email]' => $email,
                'form[recipient][telephone]' => uniqid(),
                'form[recipient][fax]' => uniqid(),
                'form[recipient][mobile]' => uniqid(),
            ]
        );
        $crawler = $client->submit($form);

        // Compliance
        $form = $crawler->filter('body > form')->form();
        $crawler = $client->submit($form);

        // Shipment
        $form = $crawler->filter('body > form')->form();
        $form->setValues(['form[shipment][measurements]' => uniqid()]);
        $crawler = $client->submit($form);

        // Positions
        $form = $crawler->filter('body > form')->form();
        $form->setValues(
            [
                'form[positions][addresses]' => uniqid(),
                'form[positions][description]' => uniqid(),
                'form[positions][weight]' => uniqid(),
                'form[positions][packing]' => uniqid(),
                'form[positions][qty]' => uniqid(),
                'form[positions][itemPrice]' => uniqid(),
                'form[positions][value]' => uniqid(),
                'form[positions][euTaricNo]' => uniqid(),
                'form[positions][euCode]' => uniqid(),
            ]
        );
        $client->submit($form);

        $recipient = $em->getRepository('AppBundle:Recipient')->findOneByEmail($email);
        $sender = $em->getRepository('AppBundle:Sender')->findOneByEmail($email);
        $orders = $sender->getOrders();
        $deliveryOrder = $orders->first();

        $this->assertEquals($deliveryOrder instanceof DeliveryOrder, true);
        $this->assertEquals($email, $sender->getEmail());
        $this->assertEquals($email, $recipient->getEmail());
    }

}
