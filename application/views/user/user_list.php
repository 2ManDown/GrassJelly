<section id="content" class="col-md-12">
    <section class="vbox">
        <section class="scrollable padder">


            <section class="panel panel-default">
                <header class="panel-heading font-bold" style="font-size: 23px; color:dimgray;">
                    รายชื่อผู้มีสิทธิ์เข้าใช้งานระบบ
                </header>
                <div class="row wrapper">
                
                    <div class="col-sm-3" >
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
                                <th>#</th>
                                <th>ชื่อผู้ใช้</th>
                                <th>ชื่อ - สกุล</th>
                                <th>อีเมล</th>
                                <th>เบอร์โทรศัพท์</th>
                                <th>สิทธิ์การเข้าใช้งาน</th>
                                <th style="text-align: center;">จัดการข้อมูล</th>
                            </tr>
                        </div>
                        <tbody>
                            <?php foreach ($user_data as $user_data) { ?>

                                <tr>
                                    <td><a href="<?php //echo site_url('') . $user_data[''] ?>"><?php echo $user_data['user_id'] ?></a></td>
                                    <td><a href="<?php //echo site_url('') . $user_data[''] ?>"><?php echo $user_data['user_username'] ?></a></td>
                                    <td><a href="<?php //echo site_url('') . $user_data[''] ?>"><?php echo $user_data['user_name'] ?></a></td>
                                    <td><a href="<?php //echo site_url('') . $user_data[''] ?>"><?php echo $user_data['user_email'] ?></a></td>
                                    <td><a href="<?php //echo site_url('') . $user_data[''] ?>"><?php echo $user_data['user_tel'] ?></a></td>
                                    <td><a href="<?php //echo site_url('') . $user_data[''] ?>"><?php echo $user_data['user_status'] ?></a></td>
                                    <td style="text-align: center;">
                                        <a href="<?php //echo site_url('') . $user_data['productbalance_id'] ?>" class="btn btn-sm btn-icon btn-info btn-rounded" title="จัดการข้อมูลผู้ใช้"><i class="fa fa-pencil-square-o" style="font-size: 15px;"></i></a>
                                        <a href="<?php //echo site_url('') . $user_data['productbalance_id'] ?>" class="btn btn-sm btn-icon btn-danger btn-rounded" title="ลบข้อมูลผู้ใช้"><i class="fa fa-times-circle" style="font-size: 15px;"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>

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