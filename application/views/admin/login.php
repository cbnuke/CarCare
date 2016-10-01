<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>CSI</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link rel="apple-touch-icon-precomposed" sizes="144x144"
              href="<?= img_url() . 'apple-touch-icon-144-precomposed.png' ?>">
        <link rel="shortcut icon" href="<?= img_url() . 'favicon.ico' ?>">
        <?= css('bootstrap.css') ?>
        <?= css('font-awesome.css') ?>
        <?= css('AdminLTE.css') ?>

        <style>
            html{
                height: 100%;
            }
            body {
                background-image: url("<?= img_url() . 'blur-background08.jpg' ?>");
                min-height: 100%;
            }
        </style>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div class="form-box" id="login-box">
            <div class="header bg-blue-gradient">ระบบสารสนเทศ ศพฐ.๔<br> CSI Management System </div>
            <?= $form_action ?>
            <div class="body bg-gray">
                <div class="form-group">
                   ชื่อผู้ใช้ / User Name <?= $form_input['user'] ?>
                </div>
                <div class="form-group">
                  รหัสผ่าน / Password  <?= $form_input['pass'] ?>
                </div>
            </div>
            <?php if (isset($login_fail) && $login_fail == TRUE) { ?>
                <div class="callout callout-danger" style="margin: 0px;">
                    <h5 style="margin: 0px; color: #B94A48;">ผิดพลาด! Username หรือ Password ไม่ถูกต้อง</h5>
                </div>
            <?php } ?>
            <?php if (isset($login_request) && $login_request == TRUE) { ?>
                <div class="callout callout-info" style="margin: 0px;">
                    <h5 style="margin: 0px; color: #3A87AD;">แนะนำ! กรุณากรองข้อมูลให้ครบถ้วน</h5>
                </div>
            <?php } ?>
            <div class="footer">
                <button type="submit" class="btn bg-blue btn-block">เข้าระบบ / Sign in</button>
            </div>
            <?= form_close() ?>
        </div>



        <?= js('jquery.js') ?>
        <?= js('bootstrap.js') ?>
    </body>
</html>