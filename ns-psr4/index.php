<?php 

require_once './vendor/autoload.php';

use Ahihi\Keke\Order;

echo "<pre>";
$donHangA = new Order(
    'XXX855',
    '15/05/2024',
    'NGUYEN VAN A',
    [
        [
            'name' => 'Sản phẩm 1',
            'price' => 50000,
            'qty'   => 5
        ]
    ]
);

$donHangA->addProduct([
    'name' => 'Sản phẩm 2',
    'price' => 100000,
    'qty'   => 5
]);

print_r($donHangA);

echo "TOTAL PRICE: " . $donHangA->getTotalPrice() . PHP_EOL;

$donHangA->getOrderInfo();