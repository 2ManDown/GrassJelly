<section id="content" class="col-md-12">
    <section class="hbox stretch">
        <section>
            <section class="vbox">
                <section class="scrollable padder">

                    <section class="panel panel-default">
                        <header class="panel-heading font-bold" style="font-size: 22px; color:dimgray;">
                            ออกใบเบิกวัตถุดิบ
                        </header>
                        <form data-validate="parsley" action="#">
                            <div class="panel-body">
                                <div class="form-group pull-in clearfix">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>วัตถุดิบ</label>
                                        <select name="account" class="form-control m-b ">
                                            <option value="" disabled selected>กรุณาเลือกวัตถุดิบ</option>
                                            <option value="">วัตถุดิบ 1</option>
                                            <option value="">วัตถุดิบ 2</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>จำนวนคงเหลือ</label>
                                        <input type="text" class="form-control" id="input-id-1" placeholder="จำนวนคงเหลือ" readonly>
                                    </div>
                                </div>
                                <div class="form-group pull-in clearfix">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>ชื่อวัตถุดิบ</label>
                                        <input type="text" class="form-control" id="input-id-1" placeholder="ชื่อวัตถุดิบ" readonly>
                                    </div>
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>ปริมาตร</label>
                                        <input type="text" class="form-control" id="input-id-1" placeholder="ปริมาตร" readonly>
                                    </div>
                                </div>

                                <div class="form-group pull-in clearfix">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>จำนวนที่เบิก</label>
                                        <input type="number" class="form-control" id="input-id-1" placeholder="จำนวนที่เบิก">
                                    </div>
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>วันหมดอายุ</label>
                                        <input type="text" class="form-control" id="input-id-1" placeholder="วันหมดอายุ" readonly>
                                    </div>
                                </div>
                                <div class="form-group pull-in clearfix">
                                    <div class="col-sm-6"></div>
                                    <div class="col-sm-4">
                                        <label>วันที่เบิก</label>
                                        <input class="input-sm input-s datepicker-input form-control" size="16" type="text" value="29-12-2020" data-date-format="dd-mm-yyyy">
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