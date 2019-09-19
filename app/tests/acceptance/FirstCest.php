<?php

class FirstCest
{
    /**
     * Check the homepage if the text "Flexible Content Management System" can be found
     *
     * @param AcceptanceTester $I
     */
    public function frontpageWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Flexible Content Management System');
    }

    /**
     * Check the TYPO3 backend login test
     * @param AcceptanceTester $I
     */
    public function backendloginpageWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/typo3/');
        $I->see('Login');
    }
}
