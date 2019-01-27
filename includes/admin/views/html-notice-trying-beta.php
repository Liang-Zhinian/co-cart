<?php
/**
 * Admin View: Trying Beta Notice.
 *
 * @since    2.0.0
 * @author   Sébastien Dumont
 * @category Admin
 * @package  CoCart/Admin/Views
 * @license  GPL-2.0+
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div class="notice notice-info cocart-notice">
	<div class="cocart-notice-inner">
		<div class="cocart-notice-icon">
			<img src="https://ps.w.org/cart-rest-api-for-woocommerce/assets/icon-256x256.jpg" alt="<?php echo esc_attr__( 'CoCart a WooCommerce API extension', 'cart-rest-api-for-woocommerce' ); ?>" />
		</div>

		<div class="cocart-notice-content">
			<h3><?php echo esc_html__( 'Thanks for trying out this beta!', 'cart-rest-api-for-woocommerce' ); ?></h3>
			<p><?php echo esc_html__( 'If you have any questions about the beta or if you have any feedback at all, let me know. Any little bit you\'re willing to share helps.', 'cart-rest-api-for-woocommerce' ); ?></p>
		</div>

		<div class="cocart-send-feedback">
			<?php printf( '<a href="%1$s" class="button button-primary cocart-feedback-button" aria-label="' . esc_html__( 'Give Feedback for CoCart', 'cart-rest-api-for-woocommerce' ) . '" target="_blank">%2$s</a>', esc_url( 'https://cocart.xyz/contact/' ), esc_html__( 'Give Feedback', 'cart-rest-api-for-woocommerce' ) ); ?>
			<a href="<?php echo esc_url( add_query_arg( 'hide_cocart_beta_notice', 'true' ) ); ?>" class="no-thanks" aria-label="<?php echo esc_html__( 'Hide this notice and ask me again for feedback in 7 days', 'cart-rest-api-for-woocommerce' ); ?>"><?php echo esc_html__( 'Ask me again in 7 days', 'cart-rest-api-for-woocommerce' ); ?></a>
		</div>
	</div>
</div>