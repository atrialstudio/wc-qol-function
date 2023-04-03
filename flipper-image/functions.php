<?php

/**
 * Add flipper image on woocommerce archive page
 * 
 * Note: change style of secondary image
*/
// Function add flipper image
function atl_product_image_flipper() {
    global $product;

    // Get the product gallery images
    $attachment_ids = $product->get_gallery_image_ids();

    // Check if there are any gallery images
    if ( $attachment_ids ) {

      // Get the thumbnail URL for the first image
      /**
       * Set thumbnail size
       * 
       * shop_thumbnail = 100x100
       * thumbnail = 150x150
       * medium = 300x300
       * shop_catalog = 324x (infinite)
       * shop_single = 416x (infinite)
       * medium_large = 768x (infinite)
       * large = 1024x1024
       * full = Original Size
       * 
      */
      $first_image = wp_get_attachment_image_src( $attachment_ids[0], 'full' );

      // Add the image flipper HTML
      echo '<img class="flipper-img" src="' . esc_attr( $first_image[0] ) . '"/>';

    }

}

// Hook add flipper image
add_action( 'woocommerce_before_shop_loop_item_title', 'atl_product_image_flipper', 15 );

?>
