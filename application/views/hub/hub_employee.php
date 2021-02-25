<style>
    th,
    td {
        text-align: center;
    }
</style>

<section id="content" class="col-md-12">
    <section class="vbox">
        <section class="scrollable padder">


            <section class="panel panel-default">
                <header class="panel-heading font-bold" style="font-size: 23px; color:dimgray;">
                    รายชื่อพนักงาน
                </header>
                <div class="row wrapper">
                    <div class="col-sm-5 m-b-xs" style="position: ralative; top: 15px; margin-bottom: 20px;">

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
                                
                            </tr>
                        </div>
                        <tbody>
                            <?php $i = 1 ?>
                            <?php foreach ($hub_employee as $hub_employee) { ?>

                                <tr>
                                <td><?php echo $i ?></td>
                                    <td><?php echo $hub_employee['employee_name'] ?></td>
                                    <td><?php 
                                        if($hub_employee['employee_sex'] == 1){
                                            echo "ชาย";
                                        }
                                        elseif($hub_employee['employee_sex'] == 2){
                                            echo "หญิง";
                                        }
                                        else{
                                            echo"ไม่มีข้อมูล";
                                        }
                                    ?></td>
                                    <td><?php echo $hub_employee['employee_birthdate'] ?></td>
                                    <td><?php echo $hub_employee['employee_address'] ?></td>
                                    <td><?php echo $hub_employee['employee_tel'] ?></td>
                                    <td><?php echo $hub_employee['employee_email'] ?></td>
                                    
                                        
                                </tr>
                            <?php $i++;
                            } ?>

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