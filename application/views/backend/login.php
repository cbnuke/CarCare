<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CSI</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link rel="apple-touch-icon-precomposed" sizes="144x144"
              href="<?= img_url() . 'apple-touch-icon-144-precomposed.png' ?>">
        <link rel="shortcut icon" href="<?= img_url() . 'favicon.ico' ?>">
        <?= css('bootstrap.min.css') ?>
        <?= css('AdminLTE.min.css') ?>
        <?= css('animate.css') ?>        

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo animated bounce" style="margin-left: 80px;">
                <?= img('apple-touch-icon-144-precomposed.png', array('height' => '80', 'width' => '80', 'style' => 'position: absolute;margin-left: -90px;')) ?>
                ร้านบ้านคาร์แคร์<br> Ban Car Care
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">ตรวจสอบสิทธิ์การใช้งาน</p>

                <?= $form_action ?>
                <div class="form-group has-feedback">
                    <?= $form_input['user'] ?>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <?= $form_input['pass'] ?>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <?php if (isset($login_fail) && $login_fail == TRUE) { ?>
                        <div class="callout callout-danger animated shake">
                            <p>ผิดพลาด! Username หรือ Password ไม่ถูกต้อง</p>
                        </div>
                    <?php } ?>
                    <?php if (isset($login_request) && $login_request == TRUE) { ?>
                        <div class="callout callout-info animated shake">
                            <p>แนะนำ! กรุณากรองข้อมูลให้ครบถ้วน</p>
                        </div>
                    <?php } ?>
                    <!-- /.col -->
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">เข้าระบบ</button>
                    </div>
                    <!-- /.col -->
                </div>
                <?= form_close() ?>
                <!-- /.login-box-body -->
            </div>

            <?= js('jquery.min.js') ?>
            <?= js('bootstrap.min.js') ?>
    </body>
</html>
