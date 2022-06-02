<?php

namespace App\Tests;

use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;

/**
 * CalculatorTest class
 */
class CalculatorTest extends ApiTestCase
{

    /**
     * @return void
     */
    public function testAddition(): void
    {
        $response = static::createClient()->request('GET', '/api-calculator/addition/1/2');

        $this->assertResponseIsSuccessful();
        $this->assertJsonContains(['result' => 3]);
    }

    /**
     * @return void
     */
    public function testSubtraction(): void
    {
        $response = static::createClient()->request('GET', '/api-calculator/subtraction/1/2');

        $this->assertResponseIsSuccessful();
        $this->assertJsonContains(['result' => -1]);
    }

    /**
     * @return void
     */
    public function testMultiplication(): void
    {
        $response = static::createClient()->request('GET', '/api-calculator/multiplication/1/2');

        $this->assertResponseIsSuccessful();
        $this->assertJsonContains(['result' => 2]);
    }

    /**
     * @return void
     */
    public function testDivision(): void
    {
        $response = static::createClient()->request('GET', '/api-calculator/division/1/2');

        $this->assertResponseIsSuccessful();
        $this->assertJsonContains(['result' => 0.5]);
    }

    /**
     * @return void
     */
    public function testDivisionByZero(): void
    {
        $response = static::createClient()->request('GET', '/api-calculator/division/1/0');

        $this->assertResponseIsSuccessful();
        $this->assertJsonContains(['result' => 1]);
    }
}
