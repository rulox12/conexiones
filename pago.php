<?php
require 'vendor/autoload.php';
 
$epayco = new Epayco\Epayco(array(
    "apiKey" => "YOU_PUBLIC_API_KEY",
    "privateKey" => "YOU_PRIVATE_API_KEY",
    "lenguage" => "ES",
    "test" => true
));
 
$token = $epayco->token->create(array(
    "card[number]" => "4575623182290326",
    "card[exp_year]" => "2017",
    "card[exp_month]" => "07",
    "card[cvc]" => "123"
));
?>