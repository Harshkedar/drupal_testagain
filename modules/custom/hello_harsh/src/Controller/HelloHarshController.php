<?php

namespace Drupal\hello_harsh\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloHarshController extends ControllerBase {

  /**
   * Returns a simple page with 'Hello Harsh' text.
   */
  public function helloPage() {
    return [
      '#markup' => $this->t('Hello Harsh'),
    ];
  }
}
