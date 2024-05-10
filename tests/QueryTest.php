<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Salsan\Tournaments;

final class QueryTest extends TestCase
{
    private $paramters = array(
        'per1' => '202403',
    );

    public function testInit(): object
    {
        $tournaments = new Tournaments\Query($this->paramters);
        $this->assertIsObject($tournaments);

        return $tournaments;
    }

    /**
     * @depends testInit
     */
    public function testGetNumber($tournaments): void
    {
        $tournamentsNumber = $tournaments->getNumber();
        $this->assertIsInt($tournamentsNumber);
        $this->assertEquals(142, $tournamentsNumber);
    }
}
