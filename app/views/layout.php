<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'PHP Starter' ?></title>
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body>
    <header>
        <h1>PHP Starter</h1>
    </header>
    <main>
        <?= $content ?>
    </main>
    <footer>
        <p>&copy; <?= date('Y') ?> PHP Starter Kit</p>
    </footer>
</body>
</html>
