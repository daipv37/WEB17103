<?php

$products = [];
$product_01 = [
    'product_name' => 'Iphone',
    'product_image' => 'https://cdn.tgdd.vn/Products/Images/42/230529/iphone-13-pro-max-sierra-blue-600x600.jpg',
    'product_price' => '10000000',
    'product_quantity' => '5'
];
$product_02 = [
    'product_name' => 'Samsung',
    'product_image' => 'https://cdn.tgdd.vn/Products/Images/42/226935/samsung-galaxy-z-fold-3-silver-1-600x600.jpg',
    'product_price' => '90000000',
    'product_quantity' => '4'
];
$product_03 = [
    'product_name' => 'Sony',
    'product_image' => 'https://cdn.tgdd.vn/Products/Images/42/256053/xiaomi-11-lite-5g-ne-trang-swarovski-1-660x600.jpg',
    'product_price' => '80000000',
    'product_quantity' => '3'
];
array_push($products, [
        $product_01,
        $product_02,
        $product_03
]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php foreach ($products as $value) : ?>

        <?php foreach ($value as $item) : ?>
            <div>
                <img src="<?php echo $item['product_image'] ?>">
                <h1><?php print_r($item['product_name']) ?></h1>
                <h2><?php print_r($item['product_price']) ?></h2>
                <h3><?php print_r($item['product_quantity']) ?></h3>
                <hr>
            </div>
        <?php endforeach; ?>
    <?php endforeach; ?>

</body>
</html>
