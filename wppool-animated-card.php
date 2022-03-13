<?php
/**
 * Plugin Name:       Wppool Animated Card
 * Description:       The animated card widget takes your WooCommerce store to the next level by displaying your product info as a hover slider just by hovering cursor over the product image or the card.
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Md. Sahabuddin
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wppool-animated-card
 *
 * @package           create-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function create_block_wppool_animated_card_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'create_block_wppool_animated_card_block_init' );
