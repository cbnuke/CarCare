<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <i class="fa fa-th-list"></i>
                    <h3 class="box-title">รายการสินค้า</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="table_customer" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>สินค้าที่</th>
                                <th>รายละเอียด</th>
                                <th>คงเหลือ</th>
                                <th>สถานะ</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($list_product as $row) {
                                $pre_data = '';
                                foreach ($row as $key => $value) {
                                    $pre_data .= " data-{$key}='{$value}'";
                                }
                                ?>
                                <tr>
                                    <td style="vertical-align: middle;"><?= $row['Product_ID'] ?></td>
                                    <td>
                                        <p>
                                            <?= $row['Product_Name'] ?><br>
                                            <strong>ราคา</strong> <?= $row['Product_Price'] ?>
                                        </p>
                                    </td>
                                    <td>
                                        <p><?= $row['Product_Amout'] ?></p>
                                    </td>
                                    <td>
                                        <p><?= $row['Product_Status'] ?></p>
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
                        <i class="fa fa-tags"></i>
                        <h3 class="box-title">เพิ่มสินค้า</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="form-group">
                            <label>ชื่อสินค้า</label>
                            <input type="text" name="Product_Name" class="form-control" placeholder="กรอก ชื่อสินค้า">
                        </div>
                        <div class="form-group">
                            <label>ราคา</label>
                            <input type="number" name="Product_Price" class="form-control" placeholder="กรอก ราคา">
                        </div>
                        <div class="form-group">
                            <label>จำนวนคงเหลือ</label>
                            <input type="number" name="Product_Amout" class="form-control" placeholder="กรอก จำนวนคงเหลือ">
                        </div>
                        <div class="form-group">
                            <label>สถานะสินค้า</label>
                            <select class="form-control" name="Product_Status">
                                <option value="0">ไม่พร้อมขาย</option>
                                <option value="1">พร้อมขาย</option>
                            </select>
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
                        <h3 class="box-title">แก้ไขสินค้า</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="form-group">
                            <label>ชื่อสินค้า</label>
                            <input type="text" name="Product_Name" class="form-control" placeholder="กรอก ชื่อสินค้า">
                        </div>
                        <div class="form-group">
                            <label>ราคา</label>
                            <input type="number" name="Product_Price" class="form-control" placeholder="กรอก ราคา">
                        </div>
                        <div class="form-group">
                            <label>จำนวนคงเหลือ</label>
                            <input type="number" name="Product_Amout" class="form-control" placeholder="กรอก จำนวนคงเหลือ">
                        </div>
                        <div class="form-group">
                            <label>สถานะสินค้า</label>
                            <select class="form-control" name="Product_Status">
                                <option value="0">ไม่พร้อมขาย</option>
                                <option value="1">พร้อมขาย</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <input type="hidden" name="Product_ID">
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

        var previous_id;
        $('button[data-toggle="editbtn"]').click(function () {
            console.log('in');
            var box = $('#editForm');
            var bf = box.find(".box-body, .box-footer");
            if (!box.hasClass("collapsed-box")) {
                if (previous_id == $(this).data("product_id")) {
                    bf.slideUp(300, function () {
                        box.addClass("collapsed-box");
                    });
                }
            } else {
                bf.slideDown(300, function () {
                    box.removeClass("collapsed-box");
                });
                previous_id = $(this).data("product_id");
            }
            //Set form value
            box.find('[name="Product_ID"]').val($(this).data('product_id'));
            box.find('[name="Product_Name"]').val($(this).data('product_name'));
            box.find('[name="Product_Price"]').val($(this).data('product_price'));
            box.find('[name="Product_Amout"]').val($(this).data('product_amout'));
            box.find('[name="Product_Status"]').val($(this).data('product_status'));
        });
    });
</script>