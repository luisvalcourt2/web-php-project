<?php require_once 'ti.php' ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php startblock('title') ?><?php endblock() ?></title>
    <link rel="stylesheet" href="../static/css/bootstrap.min.css">
    <link rel="stylesheet" href="../static/css/app.css">
    <?php startblock('extra_css') ?>
    <?php endblock() ?>
</head>
<body>
    <header>
        <?php require('common/header.php') ?>
    </header>
    <div id='content'>
        <?php startblock('content') ?>
        <?php endblock() ?>
    </div>
    <footer>
            <?php require('common/footer.php') ?>
    </footer>
    <script src="../static/js/jquery.js"></script>    
    <script src="../static/js/bootstrap.min.js"></script>
    <?php startblock('extra_js') ?>
    <?php endblock() ?>
</body>
</html>