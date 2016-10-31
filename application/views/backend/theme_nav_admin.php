<!-- header logo: style can be found in header.less -->
<header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><?= img('apple-touch-icon-144-precomposed.png', array('height' => '50', 'width' => '50', 'class' => 'icon')) ?></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>ร้าน</b>บ้านคาร์แคร์</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?= img($picture, array('class' => 'user-image', 'alt' => 'User Image')) ?>
                        <span class="hidden-xs"><?= $name ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <?= img($picture, array('class' => 'img-circle', 'alt' => 'User Image')) ?>
                            <p>
                                <?= $name ?> - <?= ($role == 'admin') ? 'เจ้าหน้าที่' : 'ลูกค้า' ?>
                                <small><?= $email ?></small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <?= anchor('backend/', 'ข้อมูลส่วนตัว', array('class' => 'btn btn-default btn-fla')) ?>
                            </div>
                            <div class="pull-right">
                                <?= anchor('backend/logout', 'ออกระบบ', array('class' => 'btn btn-default btn-fla')) ?>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>

<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <?= img($picture, array('class' => 'img-circle', 'alt' => 'User Image')) ?>
            </div>
            <div class="pull-left info">
                <p><?= $name ?></p>
                <small><?= ($role == 'admin') ? 'เจ้าหน้าที่' : 'ลูกค้า' ?></small>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">เมนูหลัก</li>
            <li <?= ($page == 'home') ? 'class="active"' : '' ?>>
                <a href="<?= base_url('backend/home') ?>">
                    <i class="fa fa-home"></i> <span>หน้าหลัก</span>
                </a>
            </li>
            <li <?= ($page == 'customer') ? 'class="active"' : '' ?>>
                <a href="<?= base_url('backend/customer') ?>">
                    <i class="fa fa-cart-plus"></i> <span>ใช้บริการ</span>
                </a>
            </li>
            <li <?= ($page == 'customer') ? 'class="active"' : '' ?>>
                <a href="<?= base_url('backend/customer') ?>">
                    <i class="fa fa-users"></i> <span>ลูกค้า</span>
                </a>
            </li>
            <li <?= ($page == 'promotion') ? 'class="active"' : '' ?>>
                <a href="<?= base_url('backend/promotion') ?>">
                    <i class="fa fa-bullhorn"></i> <span>โปรโมชั่น</span>
                </a>
            </li>
            <li <?= ($page == 'service') ? 'class="active"' : '' ?>>
                <a href="<?= base_url('backend/service') ?>">
                    <i class="fa fa-book"></i> <span>บริการ</span>
                </a>
            </li>
            <li <?= ($page == 'admin') ? 'class="active"' : '' ?>>
                <a href="<?= base_url('backend/admin') ?>">
                    <i class="fa fa-user-secret"></i> <span>เจ้าหน้าที่</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<?php if (isset($debug) && $debug != NULL) { ?>
    <div class="wrapper">
        <section class="content-header">
            <div class="row" style="padding-left: 50px;">
                <pre>
                    <?php print_r($debug) ?>
                </pre>
            </div>
        </section>
    </div>
<?php } ?>

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

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= $breadcrumb['pagetitle']['big'] ?>
            <small><?= $breadcrumb['pagetitle']['small'] ?></small>
        </h1>
        <ol class="breadcrumb">
            <?php
            $temp = array_keys($breadcrumb['breadcrumb']);
            $last_key = end($temp);
            foreach ($breadcrumb['breadcrumb'] as $key => $row) {
                if ($key == $last_key) {
                    echo '<li class="active">' . $row['text'] . '</li>';
                } else {
                    $str = '';
                    if (!empty($row['icon'])) {
                        $str = '<i class="' . $row['icon'] . '"></i> ' . $row['text'];
                    } else {
                        $str = $row['text'];
                    }
                    if (!empty($row['link'])) {
                        echo '<li>' . anchor($row['link'], $str) . '</li>';
                    } else {
                        echo '<li>' . $str . '</li>';
                    }
                }
            }
            ?>
        </ol>
    </section>