<?php

namespace Drupal\twig_not_empty\TwigExtension;

/**
 * A Twig extension that adds a notEmpty test.
 */
class TwigNotEmptyExtension extends \Twig_Extension {

  /**
   * @inheritdoc
   */
  public function getName() {
    return 'twig_not_empty';
  }

  /**
   * @inheritdoc
   */
  public function getTests() {
    return [
      new \Twig_SimpleTest('notEmpty', 'Drupal::service(\'twig_not_empty_test\')->notEmpty'),
    ];
  }

}
