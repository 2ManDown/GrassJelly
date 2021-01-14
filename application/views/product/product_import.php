<section id="content" class="col-md-12">
    <section class="hbox stretch">
        <section>
            <section class="vbox">
                <section class="scrollable padder">
                    <section class="panel panel-default">
                        <header class="panel-heading font-bold" style="font-size: 22px; color:dimgray;">
                            นำเข้าสินค้า
                        </header>
                        <form data-validate="parsley" action="#">
                            <div class="panel-body">
                                <div class="form-group pull-in clearfix">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>รหัสสินค้า</label>
                                        <input type="text" class="form-control" placeholder="รหัสสินค้า" required>
                                    </div>
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>ชื่อสินค้า</label>
                                        <input type="text" class="form-control" placeholder="ชื่อสินค้า" required>
                                    </div>
                                </div>

                                <div class="form-group pull-in clearfix">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>ราคา</label>
                                        <div class="input-group m-b">
                                            <span class="input-group-addon">BTH</span>
                                            <input type="number" class="form-control">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>ปริมาตร</label>
                                        <input type="text" class="form-control" placeholder="ปริมาตร" required>
                                    </div>
                                </div>

                                <div class="form-group pull-in clearfix">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>ราคาต่อหน่วย</label>
                                        <input type="text" class="form-control" placeholder="ราคาต่อหน่วย" required>
                                    </div>
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>จำนวนนำเข้า</label>
                                        <input type="text" class="form-control" placeholder="ราคาต่อหน่วย" required>
                                    </div>

                                </div>

                                <div class="form-group pull-in clearfix">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>หน่วยนับ</label>
                                        <select name="account" class="form-control m-b ">
                                            <option value="" disabled selected>กรุณาเลือกหน่วยนับ</option>
                                            <option>ขวด</option>
                                            <option>ถุง</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>วันที่นำเข้า</label>
                                        <input class="input-sm input-s datepicker-input form-control" size="16" type="text" value="29-12-2020" data-date-format="dd-mm-yyyy">
                                    </div>

                                </div>

                                <div class="form-group pull-in clearfix">
                                    <div class="col-sm-6"></div>
                                    <div class="col-sm-4">
                                        <label>ราคารวม</label>
                                        <input type="text" class="form-control" placeholder="ราคารวม" required readonly>
                                    </div>
                                </div>

                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary btn-s-xs">บันทึก</button>
                                </div>
                            </div>
                    </section>
                    </form>
                </section>
            </section>
            <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
        </section>
    </section>
</section>