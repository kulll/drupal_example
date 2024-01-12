<?php declare(strict_types = 1);

namespace Drupal\anwar\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Anwar routes.
 */
final class AnwarController extends ControllerBase {

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