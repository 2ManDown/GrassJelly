<section id="content" class="col-md-12">
    <section class="vbox">
        <section class="scrollable padder">

            <section class="panel panel-default">
                <header class="panel-heading font-bold" style="font-size: 22px; color:dimgray;">
                    เพิ่มข้อมูลพนักงาน
                </header>
                <form data-validate="parsley" action="#">
                    <section class="panel panel-default">
                        <div class="panel-body">
                            <div class="form-group pull-in clearfix">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>รหัสบัตรประชานชน</label>

                                    <input type="text" class="form-control ">

                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>อายุ</label>
                                    <input type="text" class="form-control ">
                                </div>
                            </div>
                            <div class="form-group pull-in clearfix">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>ชื่อ - สกุล</label>
                                    <input type="text" class="form-control" id="input-id-1">
                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>เบอร์โทรศัพท์</label>
                                    <input type="text" data-type="phone" class="form-control" placeholder="xxx-xxx-xxxx">
                                </div>
                            </div>
                            <div class="form-group pull-in clearfix">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>เพศ</label>
                                    <select name="account" class="form-control m-b">
                                        <option value="" disabled selected>กรุณาเลือกเพศ</option>
                                        <option>ชาย</option>
                                        <option>หญิง</option>
                                    </select>
                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>อีเมล</label>
                                    <input type="text" class="form-control" data-type="email" data-required="true" placeholder="อีเมล">
                                </div>
                            </div>
                            <div class="form-group pull-in clearfix">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>วันเดือนปีเกิด</label>
                                    <input class="input-sm input-s datepicker-input form-control" size="16" type="text" value="29-12-2020" data-date-format="dd-mm-yyyy">
                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">

                                    <label>ที่อยู่</label>
                                    <textarea class="form-control" rows="6" data-minwords="6" data-required="true" placeholder="กรุณากรอกที่อยู่" style="resize: none;"></textarea>
                                </div>
                            </div>
                            <footer class="panel-footer text-right bg-light lter">
                                <button type="submit" class="btn btn-primary btn-s-xs">บันทึก</button>
                            </footer>
                        </div>
                    </section>
                </form>
            </section>

        </section>

    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>