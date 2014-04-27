<?php require_once 'third_party/ti/ti.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>G3 | <?php startblock('title') ?><?php endblock() ?></title>
    <link rel="stylesheet" href="/web-php-project/static/css/bootstrap.min.css">
    <link rel="stylesheet" href="/web-php-project/static/css/app.css">
    <?php startblock('extra_css') ?>
    <?php endblock() ?>
</head>
<body>
    <header>
        <?php include 'common/header.php'; ?>
    </header>
    <div class='container'>
        <?php startblock('content') ?>
        <?php endblock() ?>
    </div>
    <footer>
        <?php include 'common/footer.php'; ?>
    </footer>
    <script src="/web-php-project/static/js/jquery.js"></script>    
    <script src="/web-php-project/static/js/bootstrap.min.js"></script>
    <script src="/web-php-project/static/js/app.js"></script>
    <?php startblock('extra_js') ?>
    <?php endblock() ?>
</body>
</html>