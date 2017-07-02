<!doctype html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        header {
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
<header>
    <ul>
        <?php foreach ($names as $name) : ?>
            <li><?= $name; ?></li>
        <?php endforeach; ?>
    </ul>
</header>

</body>
</html>