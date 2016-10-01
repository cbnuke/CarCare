<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= $pagetitle['big'] ?>
            <small><?= $pagetitle['small'] ?></small>
        </h1>
        <ol class="breadcrumb">
            <?php
            if ($breadcrumb != NULL && count($breadcrumb) > 0) {
                foreach ($breadcrumb as $row) {
                    echo '<li>';
                    echo anchor($row['link'], (($row['icon'] != NULL) ? '<i class="' . $row['icon'] . '"></i> ' : '') . $row['text']);
                    echo '</li>';
                }
            }
            ?>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-3">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <p>พงส.แจ้งเหตุ</p>
                        <h3>
Investigator
                        </h3>  
                    </div>
                    <div class="icon">
                        <i class="fa fa-bullhorn"></i>
                    </div>
                    <p class="small-box-footer">&nbsp;</p>
                </div>
            </div><!-- ./col -->
            <div class="col-md-3">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <p>ศูนย์รับแจ้งเหตุ</p>
                        <h3>
Center
                        </h3>
                        
                    </div>
                    <div class="icon">
                        <i class="fa fa-pencil fa-fw"></i>
                    </div>
                    <p class="small-box-footer">&nbsp;</p>
                </div>
            </div><!-- ./col -->
            <div class="col-md-3">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <p>ผู้ตรวจสถานที่เกิดเหตุ</p>
                        <h3>
Inspector
                        </h3>

                    </div>
                    <div class="icon">
                        <i class="fa fa-check-circle"></i>
                    </div>
                    <p class="small-box-footer">&nbsp;</p>
                </div>
            </div><!-- ./col -->
            <div class="col-md-3">
                <!-- small box -->
                <div class="small-box bg-yellow-gradient">
                    <div class="inner">
                        <p>ศูนย์ควบคุมสั่งการ</p>
                        <h3>
Control
                        </h3>

                    </div>
                    <div class="icon">
                        <i class="fa fa-spinner fa-spin"></i>
                    </div>
                    <p class="small-box-footer">&nbsp;</p>
                </div>
            </div><!-- ./col -->

        </div>

        <div class="row">
            <div class="col-md-3">
                <!-- Default box -->
                <div class="box box-solid box-info">
                    <div class="box-header">
                        <h3 class="box-title">รายการ</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <ol>
                        </ol>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->

            <div class="col-md-3">
                <!-- Info box -->
                <div class="box box-solid box-danger">
                    <div class="box-header">
                        <h3 class="box-title">รายการ</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-danger btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <ol>
                        </ol>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
            
            <div class="col-md-3">
                <!-- Primary box -->
                <div class="box box-solid box-success">
                    <div class="box-header">
                        <h3 class="box-title">รายการ</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <ol>
                        </ol>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-md-3">
                <!-- Primary box -->
                <div class="box box-solid box-warning">
                    <div class="box-header">
                        <h3 class="box-title">รายการ</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-warning btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <ol>
                        </ol>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->            
        </div>
    </section><!-- /.content -->
</aside><!-- /.right-side -->