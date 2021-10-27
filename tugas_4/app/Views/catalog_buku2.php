<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $header_buku ?></title>
</head>

<body>

    <h1><?= $penerbit; ?></h1>
    <hr>
    <ul>
        <?php foreach ($judul_buku as $item) : ?>
            <li><?= $item ?></li>
        <?php endforeach; ?>
    </ul>

</body>

</html>