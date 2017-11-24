<?php

namespace Drupal\drupalcamp_exemplos\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class IncorrectGetController.
 */
class IncorrectGetController extends ControllerBase {

  /**
   * Hello.
   *
   * @return string
   *   Return Hello string.
   */
  public function get() {
    $message = $_GET['message'];
    return [
      '#type' => 'markup',
      '#markup' => $this->t('A mensagem recebida é: #message', ['#message' => $message]),
    ];
  }
}
