<section id="content">
    <section class="hbox stretch">
        <section>
            <section class="vbox">
                <section class="scrollable padder">



                    <section class="panel panel-default">
                        <header class="panel-heading font-bold" style="font-size:  18px;">
                            เพิ่มข้อมูลการผลิตสินค้า
                        </header>
                        <div class="panel-body">
                            <form class="form-horizontal" method="get">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">ลอตการผลิตสินค้า</label>
                                    <div class="col-sm-7">
                                        <input type="number" class="form-control rounded">

                                    </div>
                                </div>

                                <div class="line line-dashed b-b line-lg pull-in"></div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">สินค้าที่ผลิต</label>
                                    <div class="col-sm-7">
                                        <select name="account" class="form-control m-b">
                                            <option>สินค้า 1</option>
                                            <option>สินค้า 2</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="line line-dashed b-b line-lg pull-in"></div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="input-id-1">ชื่อสินค้า</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="input-id-1" readonly>
                                    </div>
                                </div>

                                <div class="line line-dashed b-b line-lg pull-in"></div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="input-id-1">ประเภทบรรจุภัณฑ์</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="input-id-1" readonly>
                                    </div>
                                </div>

                                <div class="line line-dashed b-b line-lg pull-in"></div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">วันที่ผลิต</label>
                                    <div class="col-sm-7">
                                        <input class="input-sm input-s datepicker-input form-control" size="16" type="text" value="29-12-2020" data-date-format="dd-mm-yyyy">
                                    </div>
                                </div>

                                <div class="line line-dashed b-b line-lg pull-in"></div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="input-id-1">จำนวนที่ผลิต</label>
                                    <div class="col-sm-7">
                                        <input type="number" class="form-control" id="input-id-1">
                                    </div>
                                </div>

                                <div class="line line-dashed b-b line-lg pull-in"></div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">ราคาต่อหน่วย</label>
                                    <div class="col-sm-7">
                                        <div class="input-group m-b">
                                            <span class="input-group-addon">BTH</span>
                                            <input type="number" class="form-control">
                                            <span class="input-group-addon">.00</span>
                                        </div>

                                    </div>
                                </div>

                                <div class="line line-dashed b-b line-lg pull-in"></div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="input-id-1">ราคารวม</label>
                                    <div class="col-sm-7">
                                        <input type="number" class="form-control" id="input-id-1" readonly>
                                    </div>
                                </div>

                                <div class="line line-dashed b-b line-lg pull-in"></div>
                                <div class="form-group">
                                    <div class="col-sm-6 col-sm-offset-5">
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                        &nbsp; &nbsp;
                                        <button type="submit" class="btn btn-default" onclick="goBack()">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </section>
            </section>
            <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
        </section>
    </section>
</section>