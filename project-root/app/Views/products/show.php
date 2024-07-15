<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>
    <div>
        <h1>This is single products page: <?= $name ?></h1>

        <?php foreach ($product_list as $product) : ?>
            <div>
                <?= $product ?>
            </div>

        <?php endforeach; ?>
    </div>
</body>

</html>