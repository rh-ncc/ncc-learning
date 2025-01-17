<?php

namespace Drupal\ncc_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a blocks block.
 *
 * @Block(
 *   id = "ncc_blocks_logo",
 *   admin_label = @Translation("logo"),
 *   category = @Translation("NCC Blocks")
 * )
 */
class BlockLogo extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#theme' => 'ncc_logo',
    ];
  }

}
