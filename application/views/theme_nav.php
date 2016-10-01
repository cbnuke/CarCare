<!-- header logo: style can be found in header.less -->
<header class="header">
    <a href="index.html" class="logo">
        <!-- Add the class icon to your logo image or logo icon to add the margining 
        ระบบ DNA {elapsed_time}
        -->
        ระบบสารสนเทศ ศพฐ.๔
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
                    <?= anchor('C1_home', '<i class="fa fa-home fa-fw"></i> <span>หน้าหลัก</span>') ?>
                </li>
                <?php if (strpos($per_value, 'C1Noti') !== FALSE || $per_value == "ALL") { ?>
                    <li <?= ($page == 'C1_Notice') ? 'class="active"' : '' ?>>
                        <?= anchor('C1_Notice', '<i class="fa fa-bullhorn"></i> <span>พงส.แจ้งเหตุ</span>') ?>
                    </li>
                <?php } ?>
                <?php if (strpos($per_value, 'C1Assi') !== FALSE || $per_value == "ALL") { ?>
                    <li <?= ($page == 'C1_Assign') ? 'class="active"' : '' ?>>
                        <?= anchor('C1_Assign', '<i class="fa fa-pencil fa-fw"></i> <span>ศูนย์รับแจ้งเหตุ</span>') ?>
                    </li>
                <?php } ?>
                <?php if (strpos($per_value, 'C1CSI') !== FALSE || $per_value == "ALL") { ?>
                    <li <?= ($page == 'C1_CSI') ? 'class="active"' : '' ?>>
                        <?= anchor('C1_CSI', '<i class="fa fa-check-circle"></i> <span>ผู้ตรวจสถานที่เกิดเหตุ</span>') ?>
                    </li>
                <?php } ?>

                <?php if (strpos($per_value, 'known') !== FALSE || strpos($per_value, 'C2CoMM') !== FALSE || strpos($per_value, 'C2CoMP') !== FALSE || strpos($per_value, 'C2CoMT') !== FALSE || $per_value == "ALL") { ?>
                    <li class="treeview <?= ($page == 'C2_Command') ? 'active' : '' ?>">
                        <a href="#">
                            <i class="fa fa-spinner fa-spin"></i>
                            <span>ศูนย์ควบคุมสั่งการ</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <?php if (strpos($per_value, 'known') !== FALSE || $per_value == "ALL") { ?>
                                <li <?= ($subpage == 'known') ? 'class="active"' : '' ?>><?= anchor('systemdb/known', '<i class="fa fa-eye"></i> ติดตามงาน') ?></li>
                            <?php } ?>
                            <?php if (strpos($per_value, 'C2CoMM') !== FALSE || $per_value == "ALL") { ?>
                                <li <?= ($subpage == 'MapMarker') ? 'class="active"' : '' ?>><?= anchor('C2_Command/MapMarker', '<i class="fa fa-dot-circle-o"></i> แผนที่ - Marker') ?></li>
                            <?php } ?>
                            <?php if (strpos($per_value, 'C2CoMP') !== FALSE || $per_value == "ALL") { ?>
                                <li <?= ($subpage == 'MapPolygon') ? 'class="active"' : '' ?>><?= anchor('C2_Command/MapPolygon', '<i class="fa fa-dot-circle-o"></i> แผนที่ - Polygon') ?></li>
                            <?php } ?>
                            <?php if (strpos($per_value, 'C2CoMT') !== FALSE || $per_value == "ALL") { ?>
                                <li <?= ($subpage == 'MapTime') ? 'class="active"' : '' ?>><?= anchor('C2_Command/MapTime', '<i class="fa fa-pie-chart"></i> นาฬิกาอาชญากรรม') ?></li>
                            <?php } ?>
                        </ul>
                    </li>
                <?php } ?>
                <?php if (strpos($per_value, 'KN') !== FALSE || strpos($per_value, 'UN') !== FALSE || strpos($per_value, 'QU') !== FALSE || $per_value == "ALL") { ?>
    <!--                    <li class="treeview <?= ($page == '') ? 'active' : '' ?>">
                        <a href="#">
                            <i class="fa fa-spinner fa-spin"></i>
                            <span>หน่วยงานที่เกี่ยวข้อง</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                    <?php if (strpos($per_value, 'UN') !== FALSE || $per_value == "ALL") { ?>
                                            <li <?= ($subpage == 'unknown') ? 'class="active"' : '' ?>><?= anchor('', '<i class="fa fa-user"></i> หน่วยงานระดับ บช.') ?></li>
                    <?php } ?>
                    <?php if (strpos($per_value, 'UN') !== FALSE || $per_value == "ALL") { ?>
                                            <li <?= ($subpage == 'unknown') ? 'class="active"' : '' ?>><?= anchor('', '<i class="fa fa-user"></i> หน่วยงานระดับ บก.') ?></li>
                    <?php } ?>
                    <?php if (strpos($per_value, 'UN') !== FALSE || $per_value == "ALL") { ?>
                                            <li <?= ($subpage == 'unknown') ? 'class="active"' : '' ?>><?= anchor('', '<i class="fa fa-user"></i> หน่วยงานระดับ กก.') ?></li>
                    <?php } ?>
                        </ul>
                    </li>-->
                <?php } ?>

                <?php if (strpos($per_value, 'AS') !== FALSE || strpos($per_value, 'C1ScMa') !== FALSE || strpos($per_value, 'C2InCa') !== FALSE || strpos($per_value, 'C2InAm') !== FALSE || strpos($per_value, 'C2InPr') !== FALSE || strpos($per_value, 'C2InMa') !== FALSE || strpos($per_value, 'C2InPD') !== FALSE || strpos($per_value, 'C2InPT') !== FALSE || $per_value == "ALL") { ?>
                    <li class="treeview <?= ($page == 'C2_Information') ? 'active' : '' ?>">
                        <a href="#">
                            <i class="fa fa-archive"></i>
                            <span>ข้อมูลในระบบ</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <?php if (strpos($per_value, 'AS') !== FALSE || $per_value == "ALL") { ?>
                                <li <?= ($subpage == 'unknown') ? 'class="active"' : '' ?>><?= anchor('', '<i class="fa fa-user"></i> รายชื่อเจ้าหน้าที่ตำรวจ') ?></li>
                            <?php } ?>
                            <?php if (strpos($per_value, 'C1ScMa') !== FALSE || $per_value == "ALL") { ?>
                                <li <?= ($subpage == 'known') ? 'class="active"' : '' ?>><?= anchor('C1_Schedule/main', '<i class="fa fa-list-alt"></i> ตารางเวรตรวจที่เกิดเหตุ') ?></li>
                            <?php } ?>
                            <?php if (strpos($per_value, 'C2InCa') !== FALSE || $per_value == "ALL") { ?>
                                <li <?= ($subpage == 'CaseType') ? 'class="active"' : '' ?>><?= anchor('C2_Information/CaseType', '<i class="fa fa-user"></i> ประเภทคดี') ?></li>
                            <?php } ?>
                            <?php if (strpos($per_value, 'C2InAm') !== FALSE || $per_value == "ALL") { ?>
                                <li <?= ($subpage == 'Amphur') ? 'class="active"' : '' ?>><?= anchor('C2_Information/Amphur', '<i class="fa fa-user"></i> ข้อมูลอำเภอ') ?></li>
                            <?php } ?>
                            <?php if (strpos($per_value, 'C2InPr') !== FALSE || $per_value == "ALL") { ?>
                                <li <?= ($subpage == 'Province') ? 'class="active"' : '' ?>><?= anchor('C2_Information/Province', '<i class="fa fa-user"></i> ข้อมูลจังหวัด') ?></li>
                            <?php } ?>
                            <?php if (strpos($per_value, 'C2InMa') !== FALSE || $per_value == "ALL") { ?>
                                <li <?= ($subpage == 'MapSetting') ? 'class="active"' : '' ?>><?= anchor('C2_Information/MapSetting', '<i class="fa fa-user"></i> การแสดงผลหลัก') ?></li>
                            <?php } ?>
                            <?php if (strpos($per_value, 'C2InPD') !== FALSE || $per_value == "ALL") { ?>
                                <li <?= ($subpage == 'PlaceData') ? 'class="active"' : '' ?>><?= anchor('C2_Information/PlaceData', '<i class="fa fa-user"></i> ข้อมูลสถานที่') ?></li>
                            <?php } ?>
                            <?php if (strpos($per_value, 'C2InPT') !== FALSE || $per_value == "ALL") { ?>
                                <li <?= ($subpage == 'PlaceType') ? 'class="active"' : '' ?>><?= anchor('C2_Information/PlaceType', '<i class="fa fa-user"></i> ประเภทสถานที่') ?></li>
                            <?php } ?>
                        </ul>
                    </li>
                <?php } ?>
                <li class="treeview <?= ($page == 'setting') ? 'active' : '' ?>">
                    <a href="#">
                        <i class="fa fa-cogs"></i>
                        <span>ตั้งค่าระบบ</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">

                        <li <?= ($subpage == 'user_info') ? 'class="active"' : '' ?>><?= anchor('setting/user_info', '<i class="fa fa-angle-double-right"></i> ข้อมูลส่วนตัว') ?></li>

                        <?php if (strpos($per_value, 'SeUs') !== FALSE || $per_value == "ALL") { ?>
                            <li <?= ($subpage == 'user') ? 'class="active"' : '' ?>><?= anchor('setting/user', '<i class="fa fa-angle-double-right"></i> ผู้ใช้งาน') ?></li>
                        <?php } ?>
                        <?php if (strpos($per_value, 'SeUsPe') !== FALSE || $per_value == "ALL") { ?>
                            <li <?= ($subpage == 'user_permit') ? 'class="active"' : '' ?>><?= anchor('setting/user_permit', '<i class="fa fa-angle-double-right"></i> กำหนดสิทธิ') ?></li>
                        <?php } ?>
                        <?php if (strpos($per_value, 'SeIn') !== FALSE || $per_value == "ALL") { ?>
                            <li <?= ($subpage == 'init') ? 'class="active"' : '' ?>><?= anchor('setting/init', '<i class="fa fa-angle-double-right"></i> ตั้งค่าข้อมูลเริ่มต้น') ?></li>
                        <?php } ?>
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