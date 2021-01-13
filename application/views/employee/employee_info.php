<section id="content">
    <section class="vbox">
        <section class="scrollable padder">
            <section class="panel panel-default">
                <header class="panel-heading font-bold" style="font-size: 23px; color:dimgray;">
                    ข้อมูลพนักงาน
                </header>
                <div class="row wrapper">
                    <div class="col-sm-5 m-b-xs" style="position: ralative; top: 18px; margin-bottom: 40px;">
                        <a href="<?php echo site_url('employee/employee_addinfo') ?>" class="btn btn-s-lg btn-success btn-rounded">เพิ่มข้อมูลพนักงาน</a>
                    </div>
                    <div class="col-sm-4 m-b-xs" style="margin-top: 20px">
                        <!-- <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-sm btn-default active">
                                <input type="radio" name="options" id="option1"> รายวัน
                            </label>
                            <label class="btn btn-sm btn-default">
                                <input type="radio" name="options" id="option2"> รายสัปดาห์
                            </label>
                            <label class="btn btn-sm btn-default">
                                <input type="radio" name="options" id="option2"> รายเดือน
                            </label>
                        </div> -->
                    </div>
                    <div class="col-sm-3" style="margin-top: 20px">
                        <div class="input-group">
                            <input type="text" class="input-sm form-control" placeholder="Search">
                            <span class="input-group-btn">
                                <button class="btn btn-sm btn-default" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="table-responsive" style="margin-bottom: 0px;">
                    <table class="table table-striped b-t b-light table-bordered">
                        <div>
                            <tr>
                                <th>รหัสบัตรประชานชน</th>
                                <th>ชื่อ - สกุล</th>
                                <th>เพศ</th>
                                <th>วันเดือนปีเกิด</th>
                                <th>อายุ</th>
                                <th>ที่อยู่</th>
                                <th>เบอร์โทรศัพท์</th>
                                <th>อีเมล</th>
                            </tr>
                        </div>
                        <tbody>
                            <tr>
                                <td><a href="<?php echo site_url('employee/employee_manage')?>">1234567891234</a></td>
                                <td><a href="<?php echo site_url('employee/employee_manage')?>">สมชาย สมประกอบ</a></td>
                                <td><a href="<?php echo site_url('employee/employee_manage')?>">ชาย</a></td>
                                <td><a href="<?php echo site_url('employee/employee_manage')?>">11/11/1999</a></td>
                                <td><a href="<?php echo site_url('employee/employee_manage')?>">21</a></td>
                                <td><a href="<?php echo site_url('employee/employee_manage')?>">55/55 ขอนแก่น 40000</a></td>
                                <td><a href="<?php echo site_url('employee/employee_manage')?>">0235236526</a></td>
                                <td><a href="<?php echo site_url('employee/employee_manage')?>">sdfdgfh@gmail.com</a></td>

                            </tr>


                        </tbody>
                    </table>
                </div>
                <footer class="panel-footer">
                    <div class="row">
                        <div class="col-sm-7 text-right text-center-xs">
                            <ul class="pagination pagination-sm m-t-none m-b-none">
                                <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </footer>
            </section>
        </section>
    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>