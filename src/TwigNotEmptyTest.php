<?php

/**
 * @file
 * Contains \Drupal\twig_not_empty\TwigNotEmptyTest.
 */

namespace Drupal\twig_not_empty;

use Drupal\Core\Render\Element;

/**
 * Class TwigNotEmptyTest
 *
 * @package Drupal\twig_not_empty
 */
class TwigNotEmptyTest {

  /**
   * Checks if a variable is not empty.
   *
   * <pre>
   * {% if foo is notEmpty %}
   *     {# ... #}
   * {% endif %}
   * </pre>
   *
   * @param mixed $value A variable
   *
   * @return bool true if the value is not empty, false otherwise
   */
  public static function notEmpty($value) {
    // Simply check for field items for now.
    return is_array($value) ? count(Element::children($value)) : !empty($value);
  }
}
