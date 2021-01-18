<section id="content" class="col-md-12">
    <section class="vbox">
        <section class="scrollable padder">

            <section class="panel panel-default">
                <header class="panel-heading font-bold" style="font-size: 23px; color:dimgray;">
                    เพิ่มข้อมูลร้านค้า
                </header>
                <div class="panel-body">
                    <form class="form-horizontal" method="get">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">รหัสร้านค้า</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control " placeholder="กรอกรหัสร้านค้า" required>
                            </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">ชื่อร้านค้า</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" placeholder="กรอกชื่อร้านค้า" required>
                            </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">ที่อยู่</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" placeholder="กรอกที่อยู่" required>
                            </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">เบอร์โทรศัพท์</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" placeholder="กรอกเบอร์โทรศัพท์" required>
                            </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">รายละเอียดสินค้าโดยย่อ</label>
                            <div class="col-sm-7">
                                <!-- <input type="text" class="form-control"> -->
                                <textarea class="form-control" rows="6" data-minwords="6" data-required="true" placeholder="กรอกรายละเอียดโดยย่อ" required style="resize: none;"></textarea>
                            </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">เลือกรูปร้านค้า</label>
                            <div class="col-sm-6">
                                <input type="file" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s" required>
                            </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-5">
                                <button type="submit" class="btn btn-primary">เพิ่มข้อมูลร้านค้า</button>
                                &nbsp; &nbsp;
                                <button type="submit" class="btn btn-default" onclick="goBack()">ยกเลิก</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>

        </section>

    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>