<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?= $title ?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link rel="apple-touch-icon-precomposed" sizes="144x144"
              href="<?= img_url() . 'apple-touch-icon-144-precomposed.png' ?>">
        <link rel="shortcut icon" href="<?= img_url() . 'favicon.ico' ?>">
        <?= css('bootstrap.css') ?>
        <?= css('jquery-ui.css') ?>
        <?= css('jquery-ui.theme.css') ?>
        <?= css('font-awesome.css') ?>
        <?= css('pace.css') ?>


        <?= css('fullcalendar/fullcalendar.css') ?>
        <?= css('fullcalendar/fullcalendar.print.css', 'print') ?>
        <?= css('colorpicker/bootstrap-colorpicker.min.css') ?>

        <!-- Ionicons -->
        <!--<link href="//code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet" type="text/css" />-->
        <!-- Morris chart -->
        <?= ''; //css('morris/morris.css') ?>
        <!-- jvectormap -->
        <?= css('jvectormap/jquery-jvectormap-1.2.2.css') ?>
        <!-- Date Picker -->
        <?= ''; //css('datepicker/datepicker3.css') ?>
        <!-- Daterange picker -->
        <?= css('daterangepicker/daterangepicker-bs3.css') ?>
        <!-- bootstrap wysihtml5 - text editor -->
        <?= css('bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>
        <!-- DATA TABLES -->
        <?= css('datatables/dataTables.bootstrap.css') ?>
        <!-- Theme style -->
        <?= css('AdminLTE.css') ?>
        <!-- Fancybox style -->
        <?= css('jquery.fancybox.css') ?>
        <!-- Fancybox helper -->
        <?= css('jquery.fancybox-buttons.css') ?>
        <?= css('jquery.fancybox-thumbs.css') ?>
        <!-- bootstrap-timepicker -->
        <?= css('bootstrap-timepicker.min.css') ?>

        <!-- jQuery Typeahead -->
        <?= css('jquery.typeahead.css') ?>
        <!-- Easy UI -->
        <?= css('easyui.css') ?>

        <!-- Animate css -->
        <?= css('animate.css') ?>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <?= js('jquery.js') ?>
        <?= js('bootstrap.js') ?>
        <?= js('pace.min.js') ?>
        <?= js('jquery.fancybox.pack.js') ?>
        <?= js('jquery.fancybox-buttons.js') ?>
        <?= js('jquery.fancybox-media.js') ?>
        <?= js('jquery.fancybox-thumbs.js') ?>
        <?= js('jquery.typeahead.js') ?>
        <?= js('bootstrap-timepicker.min.js') ?>
        <?= js('colorpicker/bootstrap-colorpicker.min.js') ?>
        <?= js('fullcalendar/moment.min.js') ?>
        <?= js('fullcalendar/fullcalendar.min.js') ?>


        <style type="text/css">
            #map{
                width: 100%;
                min-height: 450px;
                height: 100%;
            }
            #map img {
                max-width: none;
            }
            #map label { 
                width: auto; display:inline; 
            }
            .bootstrap-timepicker-widget.dropdown-menu {
                z-index: 2000!important;
            }

        </style>
        <script>
            $(function () {
                Pace.on('done', function () {
                    $('.right-side').fadeIn(200);
                });
            });
        </script>
        <style type="text/css">
            .form-group{margin-bottom:2px}
            .form-control{padding:2px 6px; height: 28px}
            label {
                font-size: 12px;
            }
        </style>
        <style type="text/css">
            .form-control-label {
                width: 100%;
                height: 28px;
                padding: 2px 6px;
                font-size: 14px;
                line-height: 1.42857143;
                color: #555;
                background-color: #fff;
                background-image: none;
                text-align: center;
                vertical-align: middle;
            }
            .height-box {
                /*display: none;*/
                width: 100%;
                height: 90px;
                padding: 2px 6px;
            }
            .height-label {
                /*display: none;*/
                width: 100%;
                height: 28px;
                padding: 2px 6px;
            }
            .form-control-box {
                width: 100%;
                height: 28px;
                padding: 2px 6px;
                font-size: 14px;
                line-height: 1.42857143;
                color: #fff;
                background-color: #DDD;
                background-image: none;
                text-align: center;
                vertical-align: middle;
                border: 1px solid #DDD;
            }

        </style>

    </head>
    <body class="skin-blue fixed">