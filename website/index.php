<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">

    <title>Docker | Igor Felipy</title>
</head>
<body>
    <?php 
        $result = file_get_contents("http://node-container:9001/products");
        $products = json_decode($result);
    ?> 
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Preço</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($products as $product): ?>
                    <td><?php echo $product->name; ?></td>
                    <td><?php echo $product->price; ?></td>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>