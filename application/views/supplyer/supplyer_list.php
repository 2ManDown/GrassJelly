<section id="content" class="col-md-12">
    <section class="vbox">

        <section class="scrollable padder">
            <?php foreach ($supplyer_list as $supplyer_list) { ?>
                <a href="<?php echo site_url('supplyer/supplyer_detail/') . $supplyer_list['supplyer_code'] ?>">
                    <div class="col-md-3" style="margin-top: 20px;">
                        <div class="profile-card-4 text-center"><img src="<?php echo base_url() ?>asset/images/g4.jpg" class="img img-responsive">
                            <div class="profile-content">
                                <div class="profile-name" style="font-size: 30px;"><?php echo $supplyer_list['supplyer_name'] ?>
                                </div>
                                <div class="profile-description"><?php echo $supplyer_list['supplyer_detail'] ?></div>
                            </div>
                        </div>
                    </div>
                </a>
            <?php } ?>
            <div class="col-md-3" style="margin-top: 20px;">
                <a href="<?php echo site_url('supplyer/supplyer_insert') ?>">
                    <div class="profile-content">
                        <div class="profile-name" style="font-size: 15px;">เพิ่มข้อมูลร้านค้า </div>
                        <div class="profile-card-4 text-center"><img src="<?php echo base_url('asset/images/plus.png') ?>" style="width: auto;"> </div>
                </a>
            </div>
        </section>
    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>