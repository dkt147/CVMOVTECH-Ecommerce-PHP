<?php
require('stripe-php-master/init.php');

$publishableKey="pk_test_51K05jEIJ01qv6TUJA7JwnBkyfNTUD7dBlnZMObfrzBkzwusKiRcUomGRg3XeCk00rKHS22PIUrWlb2AiG68SwVGu00xANHKw9M";

$secretKey="sk_test_51K05jEIJ01qv6TUJoZXvevbI6Pb3AdY8eQRrSFPkqcd5Sf9fpkjYLmYEXuYY4eX64ynFfY0Pdx5fXdzJTVKj2Ky200e1Z7I6y2";

\Stripe\Stripe::setApiKey($secretKey);
?>