<section id="content">
    <section class="vbox">
        <section class="scrollable bg-white">
            <div class="wrapper-lg bg-light">
                <div class="hbox">
                    <aside class="aside-md">
                        <div class="text-center">
                            <img src="<?php echo base_url() ?>asset/images/a2.png" alt="..." class="img-circle m-b">
                            <h3 class="font-bold m-b-none m-t-none">John Smith</h3>
                        </div>
                    </aside>
                    <aside>
                        <p><i class="fa fa-lg fa-circle-o text-primary m-r-sm"></i><strong>Admin</strong></p>
                        <hr>
                        <ul class="nav nav-pills nav-stacked aside-lg">
                            <li class="bg-light dk"><a href="#"><i class="i i-phone m-r-sm"></i> 086-4519290</a></li>
                            <li class="bg-light dk"><a href="#"><i class="i i-mail m-r-sm"></i> Panuwat@gmail.com</a></li>
                            <li class="bg-light dk"><a href="#"><i class="i i-chat m-r-sm"></i> 086-4519290</a></li>
                        </ul>
                    </aside>
                </div>
            </div>
            <ul class="nav nav-tabs m-b-n-xxs bg-light">
                <li class="active">
                    <a href="#edit" data-toggle="tab">Edit profile</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane wrapper-lg active" id="edit">
                    <form class="form-horizontal" method="get">
                        <div class="form-group">
                            <label class="col-sm-1 control-label">ชื่อ:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control">
                            </div>

                            <label class="col-sm-1 control-label" for="input-id-1">อีเมล:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="input-id-1" value="JohnSmith@gmail.com">
                            </div>
                        </div>

                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-1 control-label">Password:</label>
                            <div class="col-sm-4">
                                <input type="password" class="form-control">
                            </div>

                            <label class="col-sm-1 control-label" for="input-id-1">เบอร์โทรศัพท์:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="input-id-1" placeholder="xxx-xxxxxxxx">
                            </div>
                        </div>
                        
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-1 control-label">Password Again:</label>
                            <div class="col-sm-4">
                                <input type="password" class="form-control">
                            </div>
                        </div>


                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <div class="col-sm-offset-5 col-sm-5">
                                <button type="submit" class="btn btn-sm btn-primary" style="width: 10rem;">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>