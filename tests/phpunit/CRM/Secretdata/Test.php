<?php

use Civi\Test;
use CRM_Secretdata_ExtensionUtil as E;
use Civi\Test\HeadlessInterface;
use Civi\Test\HookInterface;
use Civi\Test\TransactionalInterface;
use Civi\Test\CiviEnvBuilder;
use PHPUnit\Framework\TestCase;

/**
 * Test the initial setup of our Database with the upgrader
 *
 * Tips:
 *  - With HookInterface, you may implement CiviCRM hooks directly in the test
 * class. Simply create corresponding functions (e.g. "hook_civicrm_post(...)"
 * or similar).
 *  - With TransactionalInterface, any data changes made by setUp() or
 * test****() functions will rollback automatically -- as long as you don't
 * manipulate schema or truncate tables. If this test needs to manipulate
 * schema or truncate tables, then either: a. Do all that using setupHeadless()
 * and Civi\Test. b. Disable TransactionalInterface, and handle all
 * setup/teardown yourself.
 *
 * @group headless
 */
class CRM_Upgrader_Test extends TestCase implements HeadlessInterface, TransactionalInterface {

  /**
   * Setup used when HeadlessInterface is implemented.
   *
   * Civi\Test has many helpers, like install(), uninstall(), sql(), and
   * sqlFile().
   *
   * @link https://github.com/civicrm/org.civicrm.testapalooza/blob/master/civi-test.md
   *
   * @return \Civi\Test\CiviEnvBuilder
   *
   * @throws \CRM_Extension_Exception_ParseException
   */
  public function setUpHeadless(): CiviEnvBuilder {
    return Test::headless()
      ->installMe(__DIR__)
      ->apply();
  }

  public function setUp(): void {
    parent::setUp();
    $this->upgrader = CRM_Secretdata_Upgrader_Base::instance();

  }

  /*
  public function tearDown():void {
    parent::tearDown();
  }*/


  public function testIsThereOurTable(): void {

    $this->upgrader->onInstall();
    $this->assertEquals(TRUE, CRM_Core_DAO::checkTableExists('civicrm_secretdata'));
    $result = CRM_Core_DAO::executeQuery('DESCRIBE civicrm_secretdata;');
    $expected = ["id","contact_id"];
    for ($i = 0; $i <= 9; $i++) {
      $expected[] = "name" . $i;
      $expected[] = "content" . $i;
    }
    foreach ($expected as $field) {
      $result->fetch();
      $this->assertEquals($field, $result->Field);
    }
  }

  public function testPermissionsAvailable(): void {
    $this->upgrader->onInstall();

    // extract permission from API4 and test if our permissions exists
    $permissions = \Civi\Api4\Permission::get()->execute();
    $permarray = [];
    foreach ($permissions as $permission) {
      $permarray[] = $permission['name'];
    }
    $this->assertContains('access secret data', $permarray, "Permission not available.");

  }
}
