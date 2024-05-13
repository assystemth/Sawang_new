<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-7">
            <h4>แก้ไขข้อมูลบุคลากร</h4>
            <form action=" <?php echo site_url('p_treasury_backend/edit_p_treasury/' . $rsedit->p_treasury_id); ?> " method="post" class="form-horizontal" enctype="multipart/form-data">
                <br>
                <div class="form-group row">
                    <div class="col-sm-2 control-label">ชื่อ</div>
                    <div class="col-sm-5">
                        <input type="text" name="p_treasury_name" class="form-control" value="<?= $rsedit->p_treasury_name; ?>">
                        <span class="fr">กรุณากรอกคำนำหน้า<?= form_error('p_treasury_name'); ?></span>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <div class="col-sm-2 control-label">ตำแหน่ง</div>
                    <div class="col-sm-10">
                        <input type="text" name="p_treasury_rank" class="form-control" value="<?= $rsedit->p_treasury_rank; ?>">
                        <span class="fr"><?= form_error('p_treasury_rank'); ?></span>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <div class="col-sm-2 control-label">เบอร์มือถือ</div>
                    <div class="col-sm-4">
                        <input type="text" pattern="\d{9,10}" title="กรุณากรอกเบอร์มือถือเป็นตัวเลข 9 หรือ 10 ตัว" name="p_treasury_phone" class="form-control" value="<?= $rsedit->p_treasury_phone; ?>">
                        <span class="fr"><?= form_error('p_treasury_phone'); ?></span>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <div class="col-sm-2 control-label">ไฟล์รูป</div>
                    <div class="col-sm-6">
                        ภาพเก่า <br>
                        <?php if (!empty($rsedit->p_treasury_img)) : ?>
                            <img src="<?= base_url('docs/img/' . $rsedit->p_treasury_img); ?>" width="180px" height="220px">
                        <?php else : ?>
                            <img src="<?= base_url('docs/ex_personnel.png'); ?>" width="180px" height="220px">
                        <?php endif; ?>
                        <br>
                        เลือกใหม่
                        <br>
                        <input type="file" name="p_treasury_img" class="form-control" accept="image/*">
                    </div>
                </div>
                <br>
                <div class="col-sm-10">
                    <input type="hidden" name="p_treasury_id" value="<?= $rsedit->p_treasury_id; ?>">
                    <span class="fr"><?= form_error('p_treasury_id'); ?></span>
                    <div class="form-group row">
                        <div class="col-sm-2 control-label"></div>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
                            <a class="btn btn-danger" href="<?php echo site_url('p_treasury_backend'); ?>">ยกเลิก</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a class="btn btn-info" href="#" role="button" onclick="confirmDelete('<?= $rsedit->p_treasury_id; ?>');">ลบข้อมูล</a>
                            <script>
                                function confirmDelete(p_treasury_id) {
                                    Swal.fire({
                                        title: 'กดเพื่อยืนยัน?',
                                        text: "คุณจะไม่สามรถกู้คืนได้อีก!",
                                        icon: 'warning',
                                        showCancelButton: true,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        confirmButtonText: 'ใช่, ต้องการลบ!',
                                        cancelButtonText: 'ยกเลิก' // เปลี่ยนข้อความปุ่ม Cancel เป็นภาษาไทย
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            window.location.href = "<?= site_url('p_treasury_backend/del_p_treasury/'); ?>" + p_treasury_id;
                                        }
                                    });
                                }
                            </script>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>