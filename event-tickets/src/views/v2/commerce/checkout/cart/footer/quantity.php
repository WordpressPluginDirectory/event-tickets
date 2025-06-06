<?php
/**
 * Tickets Commerce: Checkout Cart Footer Quantity
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/tickets/v2/commerce/checkout/cart/footer/quantity.php
 *
 * See more documentation about our views templating system.
 *
 * @link    https://evnt.is/1amp Help article for RSVP & Ticket template files.
 *
 * @since 5.1.9
 * @since 5.21.0 Updated logic to only count ticket items for quantity.
 *
 * @version 5.21.0
 *
 * @var Tribe__Template $this            [Global] Template object.
 * @var Module          $provider        [Global] The tickets provider instance.
 * @var string          $provider_id     [Global] The tickets provider class name.
 * @var array[]         $items           [Global] List of Items on the cart to be checked out.
 * @var array[]         $gateways        [Global] An array with the gateways.
 */

use TEC\Tickets\Commerce\Module;

// Ensure we are only counting ticket items in the quantity.
$items = array_filter(
	$items,
	function ( $item ) {
		return 'ticket' === ( $item['type'] ?? 'ticket' );
	}
);

// Calculate the total quantity of ticket items, ensuring that we cast the quantity to an integer.
$quantity = array_reduce(
	$items,
	static fn( $carry, $item ) => $carry + (int) ( $item['quantity'] ?? 0 ),
	0
);

?>
<div class="tribe-tickets__commerce-checkout-cart-footer-quantity">
	<?php
	echo wp_kses_post(
		sprintf(
			// Translators: %1$s: Opening span for "Quantity:" string; %2$s: Closing span for "Quantity:" string; %3$s: Opening span for the quantity; %4$s: The quantity; %5$s: Closing span for the quantity.
			__( '%1$sQuantity: %2$s%3$s%4$s%5$s', 'event-tickets' ),
			'<span class="tribe-tickets__commerce-checkout-cart-footer-quantity-label">',
			'</span>',
			'<span class="tribe-tickets__commerce-checkout-cart-footer-quantity-number">',
			abs( $quantity ),
			'</span>'
		)
	);
	?>
</div>
