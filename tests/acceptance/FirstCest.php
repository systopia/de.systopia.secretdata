<?php

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function frontpageWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Access Denied');
    }

    public function loginPageWorks(AcceptanceTester $I)
    {
      $I->amOnPage('/user');
      $I->see('Log in');
      $I->fillField('name', 'admin');
      $I->fillField('pass', 'n^(+mm4LQbM]<LhK;^5{Zuj|Gp6yzshf');
      $I->click('op');
      $I->see('CiviCRM');
      $I->amOnPage('/civicrm');
      $I->retrySee('Jump in and chat with the community');
    }


    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}
