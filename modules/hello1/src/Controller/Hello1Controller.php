<?php declare(strict_types = 1);

namespace Drupal\hello1\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Hello1 routes.
 */
final class Hello1Controller extends ControllerBase {

  /**
   * Builds the response.
   */
  public function __invoke(): array {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
