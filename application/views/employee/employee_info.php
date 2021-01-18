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
                                <th>ที่อยู่</th>
                                <th>เบอร์โทรศัพท์</th>
                                <th>อีเมล</th>
                            </tr>
                        </div>
                        <?php foreach ($employee_list as $employee_list) { ?>
                            <tbody>
                                <tr>

                                    <td><a href="<?php echo site_url('employee/employee_manage/').$employee_list['employee_id'] ?>"><?php echo $employee_list['employee_id'] ?></a></td>
                                    <td><a href="<?php echo site_url('employee/employee_manage/').$employee_list['employee_id']  ?>"><?php echo $employee_list['employee_name'] ?></a></td>
                                    <td><a href="<?php echo site_url('employee/employee_manage/').$employee_list['employee_id']  ?>"><?php echo $employee_list['employee_sex'] ?></a></td>
                                    <td><a href="<?php echo site_url('employee/employee_manage/').$employee_list['employee_id']  ?>"><?php echo $employee_list['employee_birthdate'] ?></a></td>
                                    <td><a href="<?php echo site_url('employee/employee_manage/').$employee_list['employee_id']  ?>"><?php echo $employee_list['employee_address'] ?></a></td>
                                    <td><a href="<?php echo site_url('employee/employee_manage/').$employee_list['employee_id']  ?>"><?php echo $employee_list['employee_tel'] ?></a></td>
                                    <td><a href="<?php echo site_url('employee/employee_manage/').$employee_list['employee_id']  ?>"><?php echo $employee_list['employee_email'] ?></a></td>

                                </tr>
                            </tbody>
                        <?php } ?>
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