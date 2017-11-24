<?php

namespace Drupal\drupalcamp_exemplos\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class UserInfoController.
 */
class UserInfoController extends ControllerBase {

  /**
   * View.
   *
   * @return string
   *   Return Hello string.
   */
  public function view() {
    // Vamos fazer uma coisa boba, como mostrar o nome do usuario 1.
    $account = \Drupal\user\Entity\User::load(1);
    $name = $account->get('name')->value;
    return [
      '#type' => 'markup',
      '#markup' => $this->t('O nome do administrador é #name', ['#name' => $name]);
    ];
  }

}
