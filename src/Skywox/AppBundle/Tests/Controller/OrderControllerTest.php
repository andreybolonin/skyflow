<?php

namespace Skywox\AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class OrderControllerTest extends WebTestCase
{
    public function testIndex()
    {
        static::$kernel = static::createKernel();
        static::$kernel->boot();
        $container = static::$kernel->getContainer();

        $em = $container->get("doctrine.orm.entity_manager");

        $email = uniqid() . '@gmail.com';
        $password = uniqid();

        $client = static::createClient();
        $crawler = $client->request('GET', '/index');
        $form = $crawler->selectButton('Save')->form();

        $form->setValues(
            array(
                'form[formOfAddress]' => uniqid(),
                'form[company]' => uniqid(),
                'form[firstName]' => uniqid(),
                'form[familyName]' => uniqid(),
                'form[address]' => uniqid(),
                'form[customReg]' => uniqid(),
                'form[companyReg]' => uniqid(),
                'form[buildingNumber]' => uniqid(),
                'form[additionalInfo]' => uniqid(),
                'form[postCode]' => uniqid(),
                'form[city]' => uniqid(),
                'form[country]' => uniqid(),
                'form[email]' => $email,
                'form[telephone]' => uniqid(),
                'form[fax]' => uniqid(),
                'form[mobile]' => uniqid(),
            )
        );

        $client->submit($form);

        $user = $em->getRepository('AppBundle:Sender')->findOneByEmail($email);

        $this->assertEquals($email, $user->getEmail());
    }

}
