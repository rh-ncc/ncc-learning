<?php

namespace Drupal\ncc_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a blocks block.
 *
 * @Block(
 *   id = "ncc_blocks_social",
 *   admin_label = @Translation("Social"),
 *   category = @Translation("NCC Blocks")
 * )
 */
class BlockSocial extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#theme' => 'ncc_social',
    ];
  }

}
