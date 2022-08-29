<?php

require 'tests/secrets.php'; // TODO: should be better in a json file or something similar

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
      global $secret_password, $secret_user;

      print "pass: ".$secret_password.", user:".$secret_user;
      $I->amOnPage('/user');
      $I->see('Log in');
      $I->fillField('name', $secret_user);
      $I->fillField('pass', $secret_password);
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
