<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Salsan\Tournaments;

final class FormTest extends TestCase
{
    public function testInit(): object
    {
        $form = new Tournaments\Form();
        $this->assertIsObject($form);

        return $form;
    }

    /**
     * @depends testInit
     */

    public function testGetTournamentsType($form): void
    {
        $type= $form->getTournamentsType();
        $this->assertIsArray($type);
        $this->assertGreaterThanOrEqual(1, count($type));
    }

    /**
     * @depends testInit
     */

    public function TestGetTournamentsCompleted($form): void
    {
        $isCompleted = $form->getTournamentsCompleted();
        $this->assertIsArray($isCompleted);
        $this->assertGreaterThanOrEqual(1, count($isCompleted));
    }

    // /**
    //  * @depends testInit
    //  */

    // public function testGetSex($form): void
    // {
    //     $gender = $form->getGender();
    //     $this->assertIsArray($gender);
    //     $this->assertGreaterThanOrEqual(2, count($gender));
    // }

    // /**
    //  * @depends testInit
    //  */

    // public function testGetTournamentStatus($form): void
    // {
    //     $status = $form->getTournamentStatus();
    //     $this->assertIsArray($status);
    //     $this->assertGreaterThanOrEqual(2, count($status));
    // }

    // /**
    //  * @depends testInit
    //  */

    // public function testGetTrancheFideStatus($form): void
    // {
    //     $status = $form->getTrancheFideStatus();
    //     $this->assertIsArray($status);
    //     $this->assertGreaterThanOrEqual(2, count($status));
    // }

    // /**
    //  * @depends testInit
    //  */
    // public function testIsNationalNormStatus($form): void
    // {
    //     $status = $form->isNationalNormStatus();
    //     $this->assertIsArray($status);
    //     $this->assertGreaterThanOrEqual(1, count($status));
    //     $this->assertTrue(in_array('Solo giocatori CON norme di Maestro FSI', $status));
    // }

    // /**
    //  * @depends testInit
    //  */
    // public function testGetProvincesFirst($form): void
    // {
    //     $provinces = $form->getProvincesFirst();
    //     $this->assertIsArray($provinces);
    //     $this->assertGreaterThanOrEqual(10, count($provinces));
    //     $this->assertTrue(in_array('Estero', $provinces));
    // }

    // /**
    //  * @depends testInit
    //  */
    // public function testGetProvincesSecond($form): void
    // {
    //     $provinces = $form->getProvincesSecond();
    //     $this->assertIsArray($provinces);
    //     $this->assertGreaterThanOrEqual(10, count($provinces));
    //     $this->assertTrue(in_array('Catania', $provinces));
    // }

    // /**
    //  *  @depends testInit
    //  */
    // public function testGetProvincesThird($form): void
    // {
    //     $provinces = $form->getProvincesThird();
    //     $this->assertIsArray($provinces);
    //     $this->assertGreaterThanOrEqual(10, count($provinces));
    //     $this->assertTrue(in_array('Agrigento', $provinces));
    // }

    // /**
    //  *  @depends testInit
    //  */
    // public function testGetRegionsFirst($form): void
    // {
    //     $regions = $form->getRegionsFirst();
    //     $this->assertIsArray($regions);
    //     $this->assertGreaterThanOrEqual(10, count($regions));
    //     $this->assertTrue(in_array('Sicilia', $regions));
    // }

    // /**
    //  *  @depends testInit
    //  */
    // public function testGetRegionsSecond($form): void
    // {
    //     $regions = $form->getRegionsSecond();
    //     $this->assertIsArray($regions);
    //     $this->assertGreaterThanOrEqual(10, count($regions));
    //     $this->assertTrue(in_array('Lazio', $regions));
    // }

    // /**
    //  *  @depends testInit
    //  */
    // public function testGetRegionsThird($form): void
    // {
    //     $regions = $form->getRegionsThird();
    //     $this->assertIsArray($regions);
    //     $this->assertGreaterThanOrEqual(10, count($regions));
    //     $this->assertTrue(in_array('Piemonte', $regions));
    // }

    // /**
    //  * @depends testInit
    //  */
    // public function testGetOrderFirst($form): void
    // {
    //     $order = $form->getOrderFirst();
    //     $this->assertIsArray($order);
    //     $this->assertGreaterThanOrEqual(2, count($order));
    // }

    // /**
    //  * @depends testInit
    //  */
    // public function testGetOrderSecond($form): void
    // {
    //     $order = $form->getOrderSecond();
    //     $this->assertIsArray($order);
    //     $this->assertGreaterThanOrEqual(2, count($order));
    // }

    // /**
    //  * @depends testInit
    //  */
    // public function testGetOrderThird($form): void
    // {
    //     $order = $form->getOrderThird();
    //     $this->assertIsArray($order);
    //     $this->assertGreaterThanOrEqual(2, count($order));
    // }

    // /**
    //  * @depends testInit
    //  */
    // public function testDirectionFirst($form): void
    // {
    //     $direction = $form->getDirectionFirst();
    //     $this->assertIsArray($direction);
    //     $this->assertGreaterThanOrEqual(2, count($direction));
    // }

    // /**
    //  * @depends testInit
    //  */
    // public function testDirectionSecond($form): void{
    //     $direction = $form->getDirectionSecond();
    //     $this->assertIsArray($direction);
    //     $this->assertGreaterThanOrEqual(2, count($direction));
    // }

    // /**
    //  * @depends testInit
    // */
    // public function testDirectionThird($form): void{
    //     $direction = $form->getDirectionThird();
    //     $this->assertIsArray($direction);
    //     $this->assertGreaterThanOrEqual(2, count($direction));
    // }
}
