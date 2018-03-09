<?php 
//require __DIR__ . '/vendor/autoload.php';
//use Automattic\WooCommerce\Client;
//require_once 'class-wc-api-client.php'; //https://github.com/helpforfitness/WooCommerce-REST-API-Client-Library-v2

require_once( 'lib/woocommerce-api.php' );

$consumer_key = 'ck_2a286fc6a839e560760216a681961319c90c7b1d'; 
$consumer_secret = 'cs_87cc8ce63216224d5475a8e445cfe050840d4d86'; 
$store_url = 'http://insilla.vooforce.com/';

$wc_api = new WC_API_Client(
        $store_url,
        $consumer_key,
        $consumer_secret
        );

// print_r($wc_api->get('orders')); 

$june2017_orders = $wc_api->get_orders( array( 'filter[created_at_min]' => '2017-06-01', 'filter[created_at_max]' => '2017-06-30' ) );

print_r( $june2017_orders );

?>
