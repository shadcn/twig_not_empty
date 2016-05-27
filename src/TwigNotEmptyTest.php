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
    // Check for invalid array.
    if (!is_array($value)) {
      return false;
    }

    // If #access is provided use that.
    if (isset($value['#access'])) {
      return $value['#access'];
    }

    // Simply check for field items for now.
    return count($value) ? count(Element::children($value)) : !empty($value);
  }
}
