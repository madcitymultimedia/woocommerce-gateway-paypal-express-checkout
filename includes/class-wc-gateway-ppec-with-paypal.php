<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class WC_Gateway_PPEC_With_PayPal extends WC_Gateway_PPEC {
	public function __construct() {

		$this->id = 'ppec_paypal';

		parent::__construct();

		$settings = wc_gateway_ppec()->settings->loadSettings();

		$this->icon        = 'https://www.paypalobjects.com/webstatic/en_US/i/buttons/pp-acceptance-' . $settings->markSize . '.png';
		$this->enabled     = $settings->enabled ? 'yes' : 'no';
		$this->title       = __( 'PayPal', 'woocommerce-gateway-paypal-express-checkout' );
		$this->description = __( 'Pay via PayPal, you can pay with your credit card if you do not have a PayPal account.', 'woocommerce-gateway-paypal-express-checkout' );
	}
}
