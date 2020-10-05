<?php
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('mercadopago');
$log->pushHandler(new StreamHandler('var/logs/mercadopago.log', Logger::DEBUG));

// add records to the log
$log->debug('Llega success message from Mercado Pago');

$collection_id=$_GET['collection_id'];
$collection_status=$_GET['approved'];
$external_reference=$_GET['external_reference'];
$payment_type=$_GET['payment_type'] ;
$preference_id=$_GET['preference_id'];
$site_id=$_GET['SITE_ID'];
$processing_mode=$_GET['processing_mode'];
$merchant_account_id=$_GET['processing_mode'];
$response = [
    'collection_id' => $collection_id,
    'collection_status' => $collection_status,
    'external_reference' => $external_reference,
    'payment_type' => $payment_type,
    'preference_id' => $preference_id,
    'site_id' => $site_id,
    'processing_mode' => $processing_mode,
    'merchant_account_id' => $merchant_account_id

];
$log->debug('Respuesta '.json_encode($response));
