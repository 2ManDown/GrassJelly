<section id="content" class="col-md-12">
    <section class="vbox">
        <section class="scrollable padder">


            <section class="panel panel-default">
                <div class="col-sm-1"></div>
                <header class="panel-heading font-bold col-sm-5" style="font-size: 22px; color:dimgray;">
                    ข้อมูลโรงงาน
                </header>
                <header class="panel-heading font-bold" style="font-size: 22px; color:dimgray;">
                    ข้อมูลที่ตั้งโรงงาน
                </header>

                <form data-validate="parsley" action="#">
                    <?php foreach ($fac_list as $fac_list) { ?>
                        <div class="panel-body">
                            <div class="form-group pull-in clearfix">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>ชื่อบริษัท</label>
                                    <input type="text" class="form-control " placeholder="กรอกชื่อบริษัท" required>
                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>ที่อยู่บริษัท</label>
                                    <input type="text" <?php echo $product_list['product_volume'] ?> class="form-control " placeholder="กรอกที่อยู่บริษัท" required>
                                </div>
                            </div>
                            <div class="form-group pull-in clearfix">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>สาขา</label>
                                    <input type="text" class="form-control" placeholder="กรอกสาขา" required>
                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>ตำบล/แขวง</label>
                                    <input type="text" class="form-control" placeholder="กรอกตำบล" required>
                                </div>
                            </div>
                            <div class="form-group pull-in clearfix">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>เลขที่ผู้เสียภาษี</label>
                                    <input type="text" class="form-control" placeholder="เลขที่ผู้เสียภาษี" required>
                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>อำเภอ</label>
                                    <input type="text" class="form-control" placeholder="กรอกอำเภอ" required>
                                </div>
                            </div>
                            <div class="form-group pull-in clearfix">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>เบอร์ติดต่อ</label>
                                    <input type="number" class="form-control" placeholder="กรอกเบอร์ตืดต่อ" required>
                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>จังหวัด</label>
                                    <input type="text" class="form-control" placeholder="กรอกจังหวัด" required>
                                </div>
                            </div>

                            <div class="form-group pull-in clearfix">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>อีเมล</label>
                                    <input type="text" class="form-control" placeholder="กรอกอีเมล" required>
                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>รหัสไปรษณีย์</label>
                                    <input type="number" class="form-control" placeholder="กรอกรหัสไปรษณีย์" required>
                                </div>
                            </div>
                            <div class="text-right"><button type="submit" class="btn btn-primary btn-s-xs">บันทึก</button></div>
                        </div>
                    <?php } ?>
                </form>
            </section>

        </section>
    </section>
</section>