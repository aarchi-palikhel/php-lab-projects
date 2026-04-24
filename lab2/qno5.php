<!DOCTYPE html>
<html>
<head>
    <title>qno5</title>
    <style>
        table {
            width: 30%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>

<h2>Ordered Bill</h2>

<?php
// Item details
$items = [
    ["name" => "Hamburger", "quantity" => 2, "rate" => 150.99],
    ["name" => "Sandwich", "quantity" => 2, "rate" => 100.95]
];

// Service charge and discount rates
$service_charge_rate = 0.10; // 10%
$discount_rate = 0.07; // 7%

// Function to calculate the total for an item
function calculate_total($quantity, $rate) {
    return $quantity * $rate;
}

// Calculate totals for each item
foreach ($items as $index => $item) {
    $items[$index]['total'] = calculate_total($item['quantity'], $item['rate']);
}

// Calculate the subtotal
$subtotal = array_sum(array_column($items, 'total'));

// Calculate service charge
$service_charge = $subtotal * $service_charge_rate;

// Calculate discount
$discount = ($subtotal + $service_charge) * $discount_rate;

// Calculate grand total
$grand_total = $subtotal + $service_charge - $discount;
?>

<table>
    <tr>
        <th>Item</th>
        <th>Quantity</th>
        <th>Rate</th>
        <th>Total</th>
    </tr>
    <?php foreach ($items as $item): ?>
    <tr>
        <td><?php echo $item['name']; ?></td>
        <td><?php echo $item['quantity']; ?></td>
        <td><?php echo number_format($item['rate'], 2); ?></td>
        <td><?php echo number_format($item['total'], 2); ?></td>
    </tr>
    <?php endforeach; ?>
    <tr>
        <td >Service Charge</td>
        <td>&nbsp;</td>
        <td>10%</td>
        <td><?php echo number_format($service_charge, 2); ?></td>
    </tr>
    <tr>
        <td>Discount</td>
        <td>&nbsp;</td>
        <td>7%</td>
        <td><?php echo number_format($discount, 2); ?></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
        <td><strong>Grand Total</strong></td>
        <td><strong><?php echo number_format($grand_total, 2); ?></strong></td>
    </tr>
</table>

</body>
</html>
