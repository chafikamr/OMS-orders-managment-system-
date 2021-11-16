<?php
require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
    'https://storemox.com',
    'ck_97dc45a6dbaec9b99a8b13c2285c933cb37267bb',
    'cs_ad25d0cd6b7ae237ae47c13c60caa704a7190e73',
    [
        'wp_api' => true,
        'version' => 'wc/v3',
        'query_string_auth' => true // Force Basic Authentication as query string true and using under HTTPS,

    ]
);
?>

<?php $get_orders_list = $woocommerce->get('orders' , ['per_page'=>100]);?>
