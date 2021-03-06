<?php

/**
 * @file
 * Contains \Drupal\taxonomy\VocabularyInterface.
 */

namespace Drupal\taxonomy;

use Drupal\Core\Config\Entity\ConfigEntityInterface;
use Drupal\Core\Config\Entity\ThirdPartySettingsInterface;

/**
 * Provides an interface defining a taxonomy vocabulary entity.
 */
interface VocabularyInterface extends ConfigEntityInterface, ThirdPartySettingsInterface {

  /**
   * Returns the vocabulary hierarchy.
   *
   * @return integer
   *   The vocabulary hierarchy.
   */
  public function getHierarchy();

  /**
   * Sets the vocabulary hierarchy.
   *
   * @param integer $hierarchy
   *   The hierarchy type of vocabulary.
   *   Possible values:
   *    - TAXONOMY_HIERARCHY_DISABLED: No parents.
   *    - TAXONOMY_HIERARCHY_SINGLE: Single parent.
   *    - TAXONOMY_HIERARCHY_MULTIPLE: Multiple parents.
   *
   * @return $this
   */
  public function setHierarchy($hierarchy);

  /**
   * Returns the vocabulary description.
   *
   * @return string
   *   The vocabulary description.
   */
  public function getDescription();
}
