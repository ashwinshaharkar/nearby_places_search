<?php

namespace Drupal\nearby_places_search\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class NearbyPlacesSearchController.
 *
 * @package Drupal\nearby_places_search\Controller
 */
class NearbyPlacesSearchController extends ControllerBase {
  /**
   * Nearbyplacessearch.
   *
   * @return string
   *   Return Hello string.
   */
  public function nearbyPlacesSearch($name) {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: nearbyPlacesSearch with parameter(s): $name'),
    ];
  }

}
