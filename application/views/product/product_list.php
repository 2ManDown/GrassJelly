
<section id="content" class="col-md-12">
  <section class="vbox">
    <section class="scrollable padder">
    <?php foreach ($product_list as $product_list) { ?>
        <div class="col-md-3" style="margin-top: 20px;">
          <a href="<?php echo site_url('product/product_detail/').$product_list['product_code']?>">
            <div class="profile-card-4 text-center"><img src="<?php echo base_url() ?>asset/images/g3.jpg" class="img img-responsive">
              <div class="profile-content">
                <div class="profile-name" style="font-size: 30px;"><?php echo $product_list['product_name'] ?>
                </div>
                <div class="profile-description"><?php echo $product_list['product_detail'] ?></div>
                <div class="row">
                  <div class="col-xs-4">
                    <div class="profile-overview">
                      <p>ปริมาตร</p>
                      <h4><?php echo $product_list['product_volume'] ?> </h4>
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div class="profile-overview">
                      <p>ราคา</p>
                      <h4><?php echo $product_list['product_price'] ?>. </h4>
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div class="profile-overview">
                      <p>หน่วยนับ</p>
                      <h4><?php echo $product_list['product_unit'] ?> </h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        
        
        <?php } ?>

      <div class="col-md-3" style="margin-top: 20px;">
        <a href="<?php echo site_url('product/product_insert') ?>">
          <div class="profile-content">
            <div class="profile-name" style="font-size: 15px;">เพิ่มข้อมูลสินค้า </div>
            <div class="profile-card-4 text-center"><img src="<?php echo base_url('asset/images/plus.png') ?>" style="width: auto;"> </div>
        </a>
      </div>

     

    </section>
  </section>
  <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>