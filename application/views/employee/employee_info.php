<style>
th {
    text-align: center;
}
td {
    text-align: center;
}
</style>
<section id="content">
    <section class="vbox">
        <section class="scrollable padder">
            <section class="panel panel-default">
                <header class="panel-heading font-bold" style="font-size: 23px; color:dimgray;">
                    ข้อมูลพนักงาน
                </header>
                <div class="row wrapper text-right">
                    <div class="col-sm-12 m-b-xs">
                        <a href="<?php echo site_url('employee/employee_addinfo') ?>" class="btn btn-s-lg btn-success btn-rounded">เพิ่มข้อมูลพนักงาน</a>
                    </div>
                </div>


                <div class="table-responsive" style="margin-bottom: 0px;">
                    <table class="table table-striped b-t b-light table-bordered">
                        <div>
                            <tr>
                                <th>#</th>
                                <th>ชื่อ - สกุล</th>
                                <th>เพศ</th>
                                <th>วันเดือนปีเกิด</th>
                                <th>ที่อยู่</th>
                                <th>เบอร์โทรศัพท์</th>
                                <th>อีเมล</th>
                                <th>ศูนย์กระจาย</th>
                                <th style="text-align: center;">จัดการ</th>
                            </tr>
                        </div>
                        <?php $i = 1 ?>
                        <tbody>
                        <?php foreach ($employee_list as $employee_list) { ?>
                                <tr>
                                    <td><?php echo $i ?></td>
                                    <td><?php echo $employee_list['employee_name'] ?></td>
                                    <td><?php 
                                        if($employee_list['employee_sex'] == 1){
                                            echo "ชาย";
                                        }
                                        elseif($employee_list['employee_sex'] == 2){
                                            echo "หญิง";
                                        }
                                        else{
                                            echo"ไม่มีข้อมูล";
                                        }
                                    ?></td>
                                    <td><?php echo $employee_list['employee_birthdate'] ?></td>
                                    <td><?php echo $employee_list['employee_address'] ?></td>
                                    <td><?php echo $employee_list['employee_tel'] ?></td>
                                    <td><?php echo $employee_list['employee_email'] ?></td>
                                    <td><?php echo $employee_list['hub_name'] ?></td>
                                    <td style="text-align: center;">
                                        <a href="<?php echo site_url('employee/employee_manage/') . $employee_list['employee_id'] ?>" class="btn btn-sm btn-icon btn-info btn-rounded" title="แก้ไขข้อมูล"><i class="fa fa-pencil"></i></a>
                                    </td>
                                </tr>
                                <?php $i++ ?>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
                <footer class="panel-footer">
                    <!-- <div class="row">
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
                    </div> -->
                </footer>
            </section>
        </section>
    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>