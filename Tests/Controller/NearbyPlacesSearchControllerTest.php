<?php

namespace Drupal\nearby_places_search\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the nearby_places_search module.
 */
class NearbyPlacesSearchControllerTest extends WebTestBase {
  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "nearby_places_search NearbyPlacesSearchController's controller functionality",
      'description' => 'Test Unit for module nearby_places_search and controller NearbyPlacesSearchController.',
      'group' => 'Other',
    );
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests nearby_places_search functionality.
   */
  public function testNearbyPlacesSearchController() {
    // Check that the basic functions of module nearby_places_search.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via App Console.');
  }

}
