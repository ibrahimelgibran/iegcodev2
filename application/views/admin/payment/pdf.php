<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Transaction</title>
    <style>
        body {
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin: 20px;
            background-color: #f7f7f7;
            color: #333;
        }
        h2 {
            text-align: center;
            color: #444;
            margin-bottom: 10px;
        }
        hr {
            border: 1px solid #ddd;
            margin-bottom: 20px;
        }
        .content {
            margin: 0 auto;
            max-width: 1200px;
        }
        .section {
            margin-bottom: 20px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .section h3 {
            margin-top: 0;
            margin-bottom: 10px;
            font-size: 1.25em;
            color: #444;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }
        .details div {
            margin-bottom: 10px;
        }
        .details b {
            font-weight: 500;
            color: #555;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        table, th, td {
            border: 1px solid #e0e0e0;
        }
        th, td {
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #f5f5f5;
            color: #333;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .total-row {
            font-weight: bold;
            background-color: #f0f0f0;
        }
        .button-group {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-bottom: 20px;
        }
        .btn {
            padding: 10px 20px;
            text-decoration: none;
            color: #fff;
            border-radius: 4px;
            text-align: center;
            display: inline-block;
        }
        .btn-primary {
            background-color: #007bff;
        }
        .btn-danger {
            background-color: #dc3545;
        }
    </style>
</head>
<body>
<div class="content" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
    <div class="section">
        <h3>Transaction Details</h3>
        <div class="details" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
            <div><b>Order ID:</b> <a href="" class="underline decoration-dotted">#<?= $invoice->order_id ?></a></div>
            <div><b>Payment Method:</b> Direct Bank Transfer</div>
            <div><b>Purchase Date:</b> <?= $invoice->transaction_time ?></div>
            <div><b>Transaction Status:</b> 
                <?php if ($invoice->status == "0"){ ?>
                    <span class="bg-warning/20 text-warning rounded px-2">Pending</span> 
                <?php } else if ($invoice->status == "1"){ ?>
                    <span class="bg-success/20 text-success rounded px-2" style="background-color:greenyellow">Paid</span>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="section" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
        <h3>Buyer Details</h3>
        <div class="details" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
            <div><b>Customer Name:</b> <a href="" class="underline decoration-dotted"><?= $invoice->name ?></a></div>
            <div><b>Phone Number:</b> <?= $invoice->mobile_phone ?></div>
        </div>
    </div>

    <div class="section">
        <h3>Shipping Information</h3>
        <div class="details">
            <div><b>Courier:</b> <?= $invoice->ekspedisi ?></div>
            <div><b>Tracking Order:</b> <?= $invoice->tracking_id ?></div>
            <div><b>Address:</b> <?= $invoice->alamat ?>, <?= $invoice->city ?>.</div>
            <div><b>Notes:</b> <?= $invoice->notes ?></div>
        </div>
    </div>

    <div class="section">
        <h3>Order Details</h3>
        <table>
            <tr>
                <th>Product Item</th>
                <th class="text-right">Unit Price</th>
                <th class="text-right">Qty</th>
                <th class="text-right">Sub Total</th>
            </tr>
            <?php 
            $total = 0;
            foreach ($pesanan as $row) :
                $subtotal = $row->jumlah * $row->harga; 
                $total += $subtotal; 
            ?>
            <tr>
                <td class="text-left"><?= htmlspecialchars($row->nama_brg, ENT_QUOTES, 'UTF-8') ?></td>
                <td class="text-right">Rp. <?= number_format($row->harga, 0, ',', '.') ?></td>
                <td class="text-right"><?= number_format($row->jumlah, 0, ',', '.') ?></td>
                <td class="text-right">Rp. <?= number_format($subtotal, 0, ',', '.') ?></td>
            </tr>
            <?php endforeach; ?>
            <tr class="total-row">
                <td colspan="3" align="right"><b>Total</b></td>
                <td align="right"><b>Rp. <?= number_format($total, 0, ',', '.') ?></b></td>
            </tr>
        </table>
    </div>
</div>

</body>
</html>
