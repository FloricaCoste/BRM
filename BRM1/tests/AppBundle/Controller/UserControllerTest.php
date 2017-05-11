<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class userControllerTest extends WebTestCase
{

    public function testCompleteScenario()
    {
        // Create a new client to browse the application
        $client = static::createClient();

        // Create a new entry in the database
        $crawler = $client->request('GET', '/user/');
        $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for GET /user/");
        $crawler = $client->click($crawler->selectLink('Create')->link());

        // Fill in the form and submit it
        $form = $crawler->selectButton('Create')->form(array(
                    'appbundle_user[username]'  => 'Test',
                    'appbundle_user[password]'  => 'Password',
                    'appbundle_user[eMail]'  => 'Email',
                    'appbundle_user[isActive]'  => '1',
                    'appbundle_user[roles]'  => 'ROLE_USER'
         ));

        $client->submit($form);
        $crawler = $client->followRedirect();

        // Edit the entity
        $crawler = $client->click($crawler->selectLink('edit')->link());
        $form = $crawler->selectButton('Update')->form(array(
            'appbundle_user[username]'  => 'Test1',
            'appbundle_user[password]'  => 'Password1',
            'appbundle_user[eMail]'  => 'Email1',
            'appbundle_user[isActive]'  => '1',
            'appbundle_user[roles]'  => 'ROLE_USER'
        ));

        $client->submit($form);
        $crawler = $client->followRedirect();

        // Check the element contains an attribute with value equals "Foo"
        $this->assertGreaterThan(0, $crawler->filter('[username="Test"]')->count(), 'Missing element [value="Foo"]');

        // Delete the entity
        $client->submit($crawler->selectButton('Delete')->form());
        $crawler = $client->followRedirect();

        // Check the entity has been delete on the list
        $this->assertNotRegExp('/Test1/', $client->getResponse()->getContent());
    }


}
