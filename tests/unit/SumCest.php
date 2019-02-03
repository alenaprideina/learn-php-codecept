<?php

include __DIR__ . '/../../sum.php';

class SumCest
{
    public function _before(UnitTester $I)
    {
    }

    public function _after(UnitTester $I) {

    }

    // tests
    public function tryToTest(UnitTester $I)
    {
        $I->assertEquals(4, sum(2, 2));
    }
}
