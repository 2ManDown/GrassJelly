<section id="content" class="col-md-12">
    <section class="hbox stretch">
        <section>
            <section class="vbox">
                <section class="scrollable padder">
                    <section class="panel panel-default">
                        <header class="panel-heading font-bold" style="font-size: 22px; color:dimgray;">
                            ออกใบส่งออกสินค้า
                        </header>
                        <form data-validate="parsley" action="#">
                            <div class="panel-body">
                                <div class="form-group pull-in clearfix">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>สินค้า</label>
                                        <select name="account" class="form-control m-b " required>
                                            <option value="" disabled selected>กรุณาเลือกสินค้า</option>
                                            <option>สินค้า 1</option>
                                            <option>สินค้า 2</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>ลอตส่งออกสินค้า</label>
                                        <input type="text" class="form-control" id="input-id-1" placeholder="ลอตส่งออก" required>
                                    </div>
                                </div>
                                <div class="form-group pull-in clearfix">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>ผู้รับสินค้า</label>
                                        <select name="account" class="form-control m-b " required>
                                            <option value="" disabled selected>กรุณาเลือกผู้รับสินค้า</option>
                                            <option>ร้าน 1</option>
                                            <option>ร้าน 2</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>จำนวนที่ส่งออก</label>
                                        <input type="email" class="form-control" placeholder="ป้อนจำนวนส่งออก" required>
                                    </div>
                                </div>
                                <div class="form-group pull-in clearfix">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>ชื่อสินค้า</label>
                                        <input type="text" class="form-control" id="input-id-1" placeholder="ชื่อสินค้า" required>
                                    </div>
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>ราคาต่อหน่วย</label>
                                        <div class="input-group m-b">
                                            <span class="input-group-addon">BTH</span>
                                            <input type="number" class="form-control">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group pull-in clearfix">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>วันที่ส่งออก</label>
                                        <input class="input-sm input-s datepicker-input form-control" size="16" type="text" value="29-12-2020" data-date-format="dd-mm-yyyy">
                                    </div>
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>ราคารวม</label>
                                        <input type="number" class="form-control" id="input-id-1" readonly>
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