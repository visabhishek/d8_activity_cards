<?php

namespace Drupal\day8\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\d8cards\Utility\DescriptionTemplateTrait;



/**
 * Controller for description page.
 *
 * This class uses the DescriptionTemplateTrait to display text we put in the
 * templates/description.html.twig file.
 */
class Day8Controller extends ControllerBase {

  use DescriptionTemplateTrait;
  /**
   * {@inheritdoc}
   */
  public function getModuleName() {
    return 'day8';
  }
}
