<?php
/**
 * Change shop page ordering by date/recent product
 * 
 * NOTE: Wocoomerce will automatically sort/order shop page in alphabetical order
 * This functions change the order by recent product
*/

// This function sets the ordering arguments for products to be sorted by the most recent date.
function atl_shop_catalog_ordering_args() {

	// Set the default ordering to 'date ID', so the newest products appear first.
	$args['orderby'] = 'date ID';

	// If the ordering is set to 'date ID', set the order to DESC (descending) so that the newest products appear first.
	if( $args['orderby'] == 'date ID' )
		$args['order'] = 'DESC';

	return $args;
}

// This hook applies the custom ordering function to the WooCommerce catalog ordering args filter.
add_filter( 'woocommerce_get_catalog_ordering_args', 'atl_shop_catalog_ordering_args', 20, 1 );
?>
