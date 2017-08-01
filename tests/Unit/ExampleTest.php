<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestAno;

class ExampleTest extends TestCase
{
    //caso 1 - condicao ano <= 0 false
    public function testCase1()
    {
        $response = TestAno::bissexto(0);
        $this->assertFalse($response);
    }

    //caso 2 - condicao ano % 4 == 0 and ano % 100 != 0
    public function testCase2()
    {
        $response = TestAno::bissexto(1424);
        $this->assertTrue($response);
    }

    //caso 3 - condicao ano % 4 != 0
    public function testCase3()
    {
        $response = TestAno::bissexto(1750);
        $this->assertFalse($response);
    }

    //caso 4 - condicao ano % 100 == 0
    public function testCase4()
    {
        $response = TestAno::bissexto(2500);
        $this->assertFalse($response);
    }

    //caso 5 - condicao ano % 400 == 0
    public function testCase5()
    {
        $response = TestAno::bissexto(1600);
        $this->assertTrue($response);
    }

    //caso 6 - condicao ano % 400 != 0
    public function testCase6()
    {
        $response = TestAno::bissexto(1400);
        $this->assertFalse($response);
    }
}
