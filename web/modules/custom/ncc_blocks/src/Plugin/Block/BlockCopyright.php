<?php

namespace Drupal\ncc_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a blocks block.
 *
 * @Block(
 *   id = "ncc_blocks_copyright",
 *   admin_label = @Translation("Copyright"),
 *   category = @Translation("NCC Blocks")
 * )
 */
class BlockCopyright extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#theme' => 'ncc_copyright',
    ];
  }

}
