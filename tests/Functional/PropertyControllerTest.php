<?php

namespace App\Tests\Functional;

use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class PropertyControllerTest extends WebTestCase
{
    const VALID_PROPERTY_ID = 88047;
    const INVALID_PROPERTY_ID = 3913791273891;
    /**
     * @var KernelBrowser
     */
    private $client;

    protected function setUp()
    {
        parent::setUp();
        $this->client = static::createClient();
    }

    public function testGetPropertiesController()
    {
        $this->client->request('GET', '/properties');
        $response = $this->client->getResponse();
        $this->assertEquals(Response::HTTP_OK, $response->getStatusCode());

        $this->assertTrue(true);
    }

    public function testGetPropertyByIdControllerValid()
    {
        $this->client->request('GET', '/properties/' . self::VALID_PROPERTY_ID);
        $response = $this->client->getResponse();
        $this->assertEquals(Response::HTTP_OK, $response->getStatusCode());

        $this->assertTrue(true);
    }

    public function testGetPropertyByIdControllerInvalid()
    {
        $this->client->request('GET', '/properties/' . self::INVALID_PROPERTY_ID);
        $response = $this->client->getResponse();
        $this->assertEquals(Response::HTTP_FOUND, $response->getStatusCode());

        $this->assertTrue(true);
    }
}
