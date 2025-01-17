<?php

declare(strict_types=1);

namespace Drupal\Tests\ncc_content_moderation\ExistingSite;

use Drupal\taxonomy\Entity\Vocabulary;
use weitzman\DrupalTestTraits\ExistingSiteBase;

/**
 * Test something
 */
class PermissionsTest extends ExistingSiteBase {

  /**
   * {@inheritdoc}
   */
  public function setUp(): void {
    parent::setUp();

    // Cause tests to fail if an error is sent to Drupal logs.
    $this->failOnLoggedErrors();
  }

  /**
  * An example test method; note that Drupal API's and Mink are available.
  *
  * @throws \Drupal\Core\Entity\EntityStorageException
  * @throws \Drupal\Core\Entity\EntityMalformedException
  * @throws \Behat\Mink\Exception\ExpectationException
  */
  public function testAnonUserCanAccessBinsAndRecyling() {
     $this->visit('/bins-and-recycling');
    $this->assertSession()->responseContains('Bins and recycling');
  }
}
