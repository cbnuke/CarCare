<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <i class="fa fa-th-list"></i>
                    <h3 class="box-title">รายการโปรโมชั่น</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="table_customer" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>โปรโมชั่นที่</th>
                                <th>รูปภาพ</th>
                                <th>ชื่อ</th>
                                <th>รายละเอียด</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($list_promotion as $row) {
                                $pre_data = '';
                                foreach ($row as $key => $value) {
                                    $pre_data .= " data-{$key}='{$value}'";
                                }
                                ?>
                                <tr>
                                    <td style="vertical-align: middle;"><?= $row['Promotion_ID'] ?></td>
                                    <td>
                                        <?= img($row['Promotion_Picture'], array('class' => 'img-responsive img-thumbnail', 'style' => 'max-height: 90px;float:left;')) ?>
                                    </td>
                                    <td>
                                        <p><?= $row['Promotion_Title'] ?></p>
                                    </td>
                                    <td>
                                        <p><?= $row['Promotion_Detail'] ?></p>
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
                        <i class="fa fa-bullhorn"></i>
                        <h3 class="box-title">เพิ่มโปรโมชั่น</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="form-group">
                            <label>ชื่อโปรโมชั่น</label>
                            <input type="text" name="Promotion_Title" class="form-control" placeholder="กรอก ชื่อโปรโมชั่น">
                        </div>
                        <div class="form-group">
                            <label>รายละเอียด</label>
                            <textarea id="addraddtxt" class="textarea" name="Promotion_Detail" placeholder="กรอก รายละเอียด" style="width: 100%; height: 80px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </div>
                        <div class="form-group">
                            <label>รูปภาพ</label>
                            <input type="file" name="Promotion_Picture">
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
                        <h3 class="box-title">แก้ไขโปรโมชั่น</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="form-group">
                            <label>ชื่อโปรโมชั่น</label>
                            <input type="text" name="Promotion_Title" class="form-control" placeholder="กรอก ชื่อโปรโมชั่น">
                        </div>
                        <div class="form-group">
                            <label>รายละเอียด</label>
                            <textarea id="addredittxt" class="textarea" name="Promotion_Detail" placeholder="กรอก รายละเอียด" style="width: 100%; height: 80px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </div>
                        <div class="form-group">
                            <label>รูปภาพ</label>
                            <input type="file" name="Promotion_Picture">
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <input type="hidden" name="Promotion_ID">
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
                if (previous_id == $(this).data("promotion_id")) {
                    bf.slideUp(300, function () {
                        box.addClass("collapsed-box");
                    });
                }
            } else {
                bf.slideDown(300, function () {
                    box.removeClass("collapsed-box");
                });
                previous_id = $(this).data("promotion_id");
            }
            //Set form value
            box.find('[name="Promotion_ID"]').val($(this).data('promotion_id'));
            box.find('[name="Promotion_Title"]').val($(this).data('promotion_title'));
            $('iframe').contents().find('.wysihtml5-editor').html($(this).data('promotion_detail'));
        });
    });
</script>