<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?= $title ?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link rel="apple-touch-icon-precomposed" sizes="144x144"
              href="<?= img_url() . 'apple-touch-icon-144-precomposed.png' ?>">
        <link rel="shortcut icon" href="<?= img_url() . 'favicon.ico' ?>">
        <?= css('bootstrap.min.css') ?>
        <?= css('AdminLTE.min.css') ?>
        <?= css('skins/_all-skins.min.css') ?>
        <?= css('font-awesome.min.css') ?>
        <?= css('animate.css') ?>
        <?= css('../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>
        <?= css('../plugins/datatables/dataTables.bootstrap.css') ?>
        <?= css('../plugins/select2/select2.min.css') ?>
        <?= css('../plugins/morris/morris.css') ?>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <?= js('jquery.min.js') ?>
        <?= js('bootstrap.min.js') ?>
        <?= js('app.min.js') ?>
        <?= js('../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>
        <?= js('../plugins/datatables/jquery.dataTables.min.js') ?>
        <?= js('../plugins/datatables/dataTables.bootstrap.min.js') ?>
        <?= js('../plugins/select2/select2.full.min.js') ?>
        <?= js('../plugins/morris/raphael.min.js') ?>
        <?= js('../plugins/morris/morris.min.js') ?>

    </head>
    <body class="skin-blue sidebar-mini">
        <div class="wrapper">
