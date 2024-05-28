<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-7">
            <h4>เพิ่มข้อมูลแบนเนอร์/สไลด์</h4>
            <form action=" <?php echo site_url('text_run_esv_backend/add_text_run_esv'); ?> " method="post" class="form-horizontal" enctype="multipart/form-data">
                <br>
                <div class="form-group row">
                    <div class="col-sm-2 control-label">ชื่อ</div>
                    <div class="col-sm-6">
                        <input type="text" name="text_run_esv_name" required class="form-control">
                    </div>
                </div>
                <br>
                <!-- <div class="form-group row">
                    <div class="col-sm-2 control-label">link</div>
                    <div class="col-sm-6">
                        <input type="text" name="text_run_esv_link" class="form-control">
                    </div>
                </div>
                <br> -->
                <!-- <div class="form-group row">
                    <div class="col-sm-2 control-label">รูปหน้าปก</div>
                    <div class="col-sm-6">
                        <input type="file" name="text_run_esv_img" class="form-control" accept="image/*" required >
                    </div>
                </div>
                <br> -->
                <div class="form-group row">
                    <div class="col-sm-2 control-label"></div>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
                        <a class="btn btn-danger" href="<?php echo site_url('text_run_esv_backend'); ?>">ยกเลิก</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>