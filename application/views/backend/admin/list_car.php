<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <i class="fa fa-th-list"></i>
                    <h3 class="box-title">รายการรถ</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="table_customer" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>รหัสประชาชน</th>
                                <th>ชื่อ - นามสกุล</th>
                                <th>ที่อยู่</th>
                                <th>ข้อมูลเข้าระบบ</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($list_car as $row) {
                                $pre_data = '';
                                foreach ($row as $key => $value) {
                                    $pre_data .= " data-{$key}='{$value}'";
                                }
                                ?>
                                <tr>
                                    <td style="vertical-align: middle;"><?= $row['Customer_IDcard'] ?></td>
                                    <td style="vertical-align: middle;">
                                        <p>
                                            <?= $row['Customer_Firstname'] . ' ' . $row['Customer_Lastname'] ?><br>
                                            <strong>แต้มสะสม</strong> <small class="label label-info"><?= $row['Customer_RewardPoint'] ?></small>
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            <?= $row['Customer_Address'] ?><br>
                                            <strong>อีเมล</strong> <?= $row['Customer_Email'] ?><br>
                                            <strong>เบอร์โทรศัพท์</strong> <?= $row['Customer_Telephone'] ?>
                                        </p>
                                    </td>
                                    <td>
                                        <?= img($row['Customer_Picture'], array('class' => 'img-responsive img-thumbnail', 'style' => 'max-height: 90px;float:left;')) ?>
                                        <p>
                                            <strong>Username</strong><br> <?= $row['Customer_Username'] ?><br>
                                            <strong>รหัสลับสำหรับรับรถ</strong> <?= $row['Customer_SecretCode'] ?>
                                        </p>
                                    </td>
                                    <td class="text-center">
                                        <button class="btn btn-warning" data-toggle="editbtn" <?= $pre_data ?>><i class="fa fa-edit"></i></button>
                                        <button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-md-4">
            <!-- Add form -->
            <form>
                <div class="box box-success collapsed-box">
                    <div class="box-header with-border">
                        <i class="fa fa-address-book"></i>
                        <h3 class="box-title">เพิ่มรถ</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="form-group">
                            <label>ลูกค้า</label>
                            <select class="form-control select2" name="Customer_Username" style="width: 100%;">
                                <?php foreach ($list_customer as $row) { ?>
                                    <option value="<?= $row['Customer_Username'] ?>"><?= $row['Customer_Firstname'] . ' ' . $row['Customer_Lastname'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>ป้ายทะเบียน</label>
                            <input type="text" name="Car_LicensePlate" class="form-control" placeholder="กรอก ป้ายทะเบียน">
                        </div>
                        <div class="form-group">
                            <label>ยี่ห้อ</label>
                            <input type="text" name="Car_Brand" class="form-control" placeholder="กรอก ยี่ห้อ">
                        </div>
                        <div class="form-group">
                            <label>รุ่น</label>
                            <input type="text" name="Car_Generation" class="form-control" placeholder="กรอก รุ่น">
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus-circle"></i> เพิ่ม</button>
                        <button type="reset" class="btn btn-danger pull-right"><i class="fa fa-refresh"></i> ยกเลิก</button>
                    </div>
                </div>
            </form>
            <!-- /.End add form -->

            <!-- Edit form -->
            <form>
                <div id="editForm" class="box box-success collapsed-box">
                    <div class="box-header with-border">
                        <i class="fa fa-edit"></i>
                        <h3 class="box-title">แก้ไขรถ</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="form-group">
                            <label>ป้ายทะเบียน</label>
                            <input type="text" name="Car_LicensePlate" class="form-control" placeholder="กรอก ป้ายทะเบียน">
                        </div>
                        <div class="form-group">
                            <label>ยี่ห้อ</label>
                            <input type="text" name="Car_Brand" class="form-control" placeholder="กรอก ยี่ห้อ">
                        </div>
                        <div class="form-group">
                            <label>รุ่น</label>
                            <input type="text" name="Car_Generation" class="form-control" placeholder="กรอก รุ่น">
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> บันทึก</button>
                        <button type="button" class="btn btn-danger pull-right" data-widget="collapse"><i class="fa fa-refresh"></i> ยกเลิก</button>
                    </div>
                </div>
            </form>
            <!-- /.End edit form -->
        </div>
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
<div class="modal fade modal-danger" id="deleteModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Danger Modal</h4>
            </div>
            <div class="modal-body">
                <p>One fine body…</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<script>
    $(function () {
        $(".select2").select2();
        var addraddtxt = $("#addraddtxt").wysihtml5({
            toolbar: {
                "font-styles": true, //Font styling, e.g. h1, h2, etc. Default true
                "emphasis": true, //Italics, bold, etc. Default true
                "lists": true, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
                "html": false, //Button which allows you to edit the generated HTML. Default false
                "link": false, //Button to insert a link. Default true
                "image": false, //Button to insert an image. Default true,
                "color": false, //Button to change color of font  
                "blockquote": false, //Blockquote  
                "size": "sm" //default: none, other options are xs, sm, lg
            }
        });
        var addredittxt = $("#addredittxt").wysihtml5({
            toolbar: {
                "font-styles": true, //Font styling, e.g. h1, h2, etc. Default true
                "emphasis": true, //Italics, bold, etc. Default true
                "lists": true, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
                "html": false, //Button which allows you to edit the generated HTML. Default false
                "link": false, //Button to insert a link. Default true
                "image": false, //Button to insert an image. Default true,
                "color": false, //Button to change color of font  
                "blockquote": false, //Blockquote  
                "size": "sm" //default: none, other options are xs, sm, lg
            }
        });
        $("#table_customer").DataTable();

        var previous_username;
        $('button[data-toggle="editbtn"]').click(function () {
            console.log('in');
            var box = $('#editForm');
            var bf = box.find(".box-body, .box-footer");
            if (!box.hasClass("collapsed-box")) {
                if (previous_username == $(this).data("customer_username")) {
                    bf.slideUp(300, function () {
                        box.addClass("collapsed-box");
                    });
                }
            } else {
                bf.slideDown(300, function () {
                    box.removeClass("collapsed-box");
                });
                previous_username = $(this).data("customer_username");
            }
            //Set form value
            box.find('[name="Customer_IDcard"]').val($(this).data('customer_idcard'));
            box.find('[name="Customer_Firstname"]').val($(this).data('customer_firstname'));
            box.find('[name="Customer_Lastname"]').val($(this).data('customer_lastname'));
            $('iframe').contents().find('.wysihtml5-editor').html($(this).data('customer_address'));
            box.find('[name="Customer_Telephone"]').val($(this).data('customer_telephone'));
            box.find('[name="Customer_Email"]').val($(this).data('customer_email'));
        });
    });
</script>