<section id="content">
    <section class="vbox">
        <section class="scrollable bg-white">
            <div class="wrapper-lg bg-light">
                <div class="hbox">
                    <aside class="aside-md">
                    
                        <div class="text-center">
                            <img src="<?php echo base_url() ?>asset/images/a2.png" alt="..." class="img-circle m-b">
                            <h3 class="font-bold m-b-none m-t-none"><?php echo $this->session->userdata("name")?></h3>
                        </div>
                    </aside>
                    <aside>
                        <p><i class="fa fa-lg fa-circle-o text-primary m-r-sm"></i><strong><?php echo $this->session->userdata("status")?></strong></p>
                        <hr>
                        <ul class="nav nav-pills nav-stacked aside-lg">
                            <li type="number" class="bg-light dk"><a href="#"><i class="i i-phone m-r-sm"></i><?php echo $this->session->userdata("tel")?></a></li>
                            <li type="email" class="bg-light dk"><a href="#"><i class="i i-mail m-r-sm"></i><?php echo $this->session->userdata("email")?></a></li>
                            <li class="bg-light dk"><a href="#"><i class="i i-chat m-r-sm"></i><?php echo $this->session->userdata("tel") ?></a></li>
                        </ul>
                    </aside>
                </div>
            </div>
            <ul class="nav nav-tabs m-b-n-xxs bg-light">
                <li class="active">
                    <a href="#edit" data-toggle="tab">แก้ไขโปรไฟล์</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane wrapper-lg active" id="edit">
                <?php echo form_open('user/user_update_db','class="form-horizontal"') ?>
                   <!--  <form class="form-horizontal" method="get"> -->
                   <input type="hidden" name="user_id" value="<?php echo $this->session->userdata("id")?>" >
                        <div class="form-group">
                            <label class="col-sm-1 control-label" >ชื่อ:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="user_name" value="<?php echo $this->session->userdata("name")  ?>" placeholder="ชื่อ" required>
                            </div>

                            <label class="col-sm-1 control-label" for="input-id-1">อีเมล:</label>
                            <div class="col-sm-4">
                                <input type="email" class="form-control" id="email" name="user_email" value="<?php echo $this->session->userdata("email")  ?>" placeholder="อีเมล" required>
                            </div>
                        </div>

                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-1 control-label">Password:</label>
                            <div class="col-sm-4">
                                <input type="password" class="form-control" name="user_password" value="<?php echo $this->session->userdata("password")  ?>" placeholder="Password" required>
                            </div>

                            <label class="col-sm-1 control-label" for="input-id-1">เบอร์โทรศัพท์:</label>
                            <div class="col-sm-4">
                                <input type="tel" class="form-control" id="tel" name="user_tel" value="<?php echo $this->session->userdata("tel")  ?>" placeholder="เบอร์โทรศัพท์" required >
                            </div>
                        </div>
                        
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-1 control-label">Password Again:</label>
                            <div class="col-sm-4">
                                <input type="password" class="form-control" name="user_passagain" value="<?php echo $this->session->userdata("password")  ?>" placeholder="Password Again" required>
                            </div>
                        </div>


                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <div class="col-sm-offset-5 col-sm-5">
                                <button type="submit" class="btn btn-sm btn-primary" style="width: 10rem;">อัปเดต</button>
                            </div>
                        </div>
                    <!-- </form> -->
                    <?php form_close() ?>
                </div>
            </div>
        </section>
    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>