<?php

class FirstCest
{
    public function frontpageWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Flexible Content Management System');
    }
    public function backendloginpageWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/typo3/');
        $I->see('Login');
    }
}
