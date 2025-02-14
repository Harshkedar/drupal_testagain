<?php

namespace Drupal\hello_harsh\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\hello_harsh\Form\SignupForm;

class SignupController extends ControllerBase {
  public function signupForm() {
    $form = \Drupal::formBuilder()->getForm(SignupForm::class);
    return [
      '#markup' => '<h2>Signup Page</h2>',
      'form' => $form,
    ];
  }
}
