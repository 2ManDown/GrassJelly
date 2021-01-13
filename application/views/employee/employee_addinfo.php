<section id="content" class="col-md-8">
    <section class="vbox">
        <section class="scrollable padder">

            <section class="panel panel-default">
                <header class="panel-heading font-bold" style="font-size: 23px; color:dimgray;">
                    เพิ่มข้อมูลพนักงาน
                </header>
                <div class="panel-body">
                    <form class="form-horizontal" method="get">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">รหัสบัตรประชานชน</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control rounded">
                            </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">ชื่อ - สกุล</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">เพศ</label>
                            <div class="col-sm-7">
                                <select name="account" class="form-control m-b">
                                    <option>ชาย</option>
                                    <option>หญิง</option>
                                </select>
                            </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">วันเดือนปีเกิด</label>
                            <div class="col-sm-7">
                                <input class="input-sm input-s datepicker-input form-control" size="16" type="text" value="29-12-2020" data-date-format="dd-mm-yyyy">
                            </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">อายุ</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control ">
                            </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">ที่อยู่</label>
                            <div class="col-sm-7">
                                <!-- <input type="text" class="form-control"> -->
                                <textarea class="form-control" rows="6" data-minwords="6" data-required="true" placeholder="Type your message" style="resize: none;"></textarea>
                            </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">เบอร์โทรศัพท์</label>
                            <div class="col-sm-7">
                                <input type="text" data-type="phone" class="form-control" placeholder="xxx-xxx-xxxx">
                            </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">อีเมล</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" data-type="email" data-required="true" placeholder="อีเมล">
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