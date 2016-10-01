<!-- header logo: style can be found in header.less -->
<header class="header">
    <a href="index.html" class="logo">
        <!-- Add the class icon to your logo image or logo icon to add the margining 
        ระบบ DNA {elapsed_time}
        -->
        ระบบคาร์แคร์
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>

        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <!-- Notifications: style can be found in dropdown.less -->
                <!-- Tasks: style can be found in dropdown.less -->
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-user"></i>
                        <span><?= $name ?> <i class="caret"></i></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header bg-light-blue">
                            <?= img($picture, array('class' => 'img-circle', 'alt' => 'User Image')) ?>
                            <p>
                                <?= $name ?>
                                <small><?= $position ?></small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <?= anchor('setting/user_info', '<i class="fa fa-user"></i> ข้อมูลส่วนตัว', array('class' => 'btn btn-default btn-flat')) ?>
                            </div>
                            <div class="pull-right">
                                <?= anchor('logout', '<i class="fa fa-sign-out"></i> ออกระบบ', array('class' => 'btn btn-danger btn-flat')) ?>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>

<?php if (isset($debug) && $debug != NULL) { ?>
    <div class="wrapper row-offcanvas row-offcanvas-left" style="height: auto; min-height: 0px !important;">
        <aside class="right-side">
            <section class="content">
                <div class="row">
                    <pre>
                        <?php print_r($debug) ?>
                    </pre>
                </div>
            </section>
        </aside>
    </div>
<?php } ?>

<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li <?= ($page == 'C1_home') ? 'class="active"' : '' ?>>
                    <?= anchor('home', '<i class="fa fa-home fa-fw"></i> <span>เพิ่มบริการ</span>') ?>
                </li>
                <li class="treeview <?= ($page == 'setting') ? 'active' : '' ?>">
                    <a href="#">
                        <i class="fa fa-cogs"></i>
                        <span>จัดการข้อมูล</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">

                        <li <?= ($subpage == 'user_info') ? 'class="active"' : '' ?>><?= anchor('setting/user_info', '<i class="fa fa-angle-double-right"></i> ข้อมูลส่วนตัว') ?></li>
                        <li <?= ($subpage == 'user_info') ? 'class="active"' : '' ?>><?= anchor('setting/user_info', '<i class="fa fa-angle-double-right"></i> ข้อมูลสินค้า') ?></li>
                        <li <?= ($subpage == 'user_info') ? 'class="active"' : '' ?>><?= anchor('setting/user_info', '<i class="fa fa-angle-double-right"></i> ข้อมูลบริการ') ?></li>
                        
                    </ul>
                </li>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
    <script>
//        $(function () {
//            var count_cron = 1;
//            var count_noti = 1;
//            var count_task = 1;
//            setInterval(function () {
//                if (count_cron > 0) {
//                    //Ajax cron
//                    count_cron--;
//                    $.ajax({
//                        url: "<?= base_url('cron') ?>",
//                        type: "POST",
//                    }).success(function (result) {
//                        count_cron++;
//                    });
//                }
//
//                if (count_noti > 0) {
//                    //Ajax notification
//                    count_noti--;
//                    $.ajax({
//                        url: "<?= base_url('api/notifications') ?>",
//                        type: "POST",
//                    }).success(function (result) {
//                        count_noti++;
//                        $("#notification_num").empty();
//                        $("#notifications_content").empty();
//                        var obj = jQuery.parseJSON(result);
//                        $.each(obj, function (key, val) {
//                            if (key == "num") {
//                                $("#notification_num").append(val);
//                            } else if (key == "content") {
//                                $("#notifications_content").append(val);
//                            }
//                        });
//                    });
//                }
//
//                if (count_task > 0) {
//                    //Ajax task
//                    count_task--;
//                    $.ajax({
//                        url: "<?= base_url('api/task') ?>",
//                        type: "POST",
//                    }).success(function (result) {
//                        count_task++;
//                        $("#task_num").empty();
//                        $("#task_content").empty();
//                        var obj = jQuery.parseJSON(result);
//                        $.each(obj, function (key, val) {
//                            if (key == "num") {
//                                $("#task_num").append(val);
//                            } else if (key == "content") {
//                                $("#task_content").append(val);
//                            }
//                        });
//                    });
//                }
//            }, 5000); // call every sec(1000=1sec)
//            $("#boxAlert").delay(2500).fadeOut('slow');
//        });
    </script>
    <div id="test" style="display:none;"></div>
    <?php if ($alert != NULL) { ?>
        <div id="boxAlert" class="row-offcanvas row-offcanvas-left" style="min-height: 0px !important;position: absolute; z-index: 1000;">
            <aside style="margin-left: 300px;background-color:none !important;">
                <div class="row">
                    <?php if ($alert['alert_mode'] == 'danger') { ?>
                        <div class="alert alert-danger alert-dismissable" style="margin: 30px;">
                            <i class="fa fa-ban"></i>
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                            <b></b> <?= $alert['alert_message'] ?>
                        </div>
                    <?php } ?>
                    <?php if ($alert['alert_mode'] == 'success') { ?>
                        <div class="alert alert-warning alert-dismissable" style="margin: 30px;">
                            <i class="fa fa-check"></i>
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                            <b></b> <?= $alert['alert_message'] ?>                            
                        </div>
                    <?php } ?>
                    <?php if ($alert['alert_mode'] == 'info') { ?>
                        <div class="alert alert-info alert-dismissable" style="margin: 30px;">
                            <i class="fa fa-info"></i>
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <b></b> <?= $alert['alert_message'] ?>
                        </div>
                    <?php } ?>
                </div>
            </aside>
        </div>
    <?php } ?>