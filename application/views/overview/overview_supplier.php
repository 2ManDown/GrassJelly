<style>
  th {
    text-align: center;
    font-size: 12px;
    position: sticky;
    top: -1px;
  }

  td {
    font-size: 12px;
  }

  .my-custom-scrollbar {
    position: relative;
    height: 200px;
    overflow: auto;
  }

  .table-wrapper-scroll-y {
    display: block;
  }
</style>

<section id="content">
  <section class="hbox stretch">
    <section>
      <section class="vbox">
        <section class="scrollable padder">
          <section class="row m-b-md">
            <div class="col-sm-6">
              <h3 class="m-b-xs text-black">Grass Jelly | ศูนย์กระจาย</h3>
              <small>Welcome back <i class="fa fa-map-marker fa-lg text-primary"></i> ศูนย์กระจาย</small>
            </div>
          </section>

          <div class="row">
            <div class="col-md-6">
              <section class="panel panel-default">
                <header class="panel-heading">
                  <h4><b>รายการสินค้าคงเหลือ</b></h4>
                </header>

                <div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar">
                  <table class="table table-striped b-t b-light">
                    <thead>
                      <tr>

                        <th>รหัสสินค้า</th>
                        <th>ชื่อสินค้า</th>
                        <th>รายละเอียดสินค้า</th>
                        <th>ขนาด</th>
                        <th>จำนวนคงเหลือ</th>

                      </tr>
                    </thead>
                    </thead>
                    <tbody>

                      <?php foreach ($product_productbalance as $product_productbalance) { ?>

                        <tr>
                          <td><?php echo $product_productbalance['product_code'] ?></td>
                          <td><?php echo $product_productbalance['product_name'] ?></td>
                          <td><?php echo $product_productbalance['product_detail'] ?></td>
                          <td><?php echo $product_productbalance['product_volume'] . " " . $product_productbalance['product_unit'] ?></td>

                          <?php
                          $this->db->where('product_code', $product_productbalance['product_code']);
                          $this->db->select_sum('product_stock_amount');
                          $query = $this->db->get('gj_product_stock');
                          $product_stock = $query->result_array();
                          $product = number_format($product_stock[0]['product_stock_amount']);
                          if ($product <= $product_productbalance['product_min']) { ?>
                            <td style="color: red; text-align: center;">
                            <?php } else { ?>
                            <td style="color: #3BD028; text-align: center;">
                            <?php } ?>
                            <b><?php echo $product ?></b>
                            </td>
                        </tr>
                      <?php } ?>

                    </tbody>
                  </table>
                </div>
                <footer class="panel-footer">
                  <div class="row">
                    <!-- <div class="col-sm-12 text-right text-center-xs">
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
            </div>





            <div class="col-md-6">

              <section class="panel panel-default">
                <header class="panel-heading">
                  <h4><b>รายการข้อมูลศูนย์กระจาย</b></h4>
                </header>

                <div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar">
                  <table class="table table-striped b-t b-light">
                    <thead>
                      <tr>

                        <th>ชื่อศูนย์กระจาย</th>
                        <th>ที่อยู่</th>
                        <th>เบอร์ติดต่อ</th>
                        <th>อีเมล</th>

                      </tr>
                    </thead>
                    </thead>
                    <tbody>

                      <?php foreach ($hub_list as $hub_list) { ?>

                        <tr>
                          <td><?php echo $hub_list['hub_name'] ?></td>
                          <td><?php echo $hub_list['hub_address'] ?></td>
                          <td><?php echo $hub_list['hub_tel'] ?></td>
                          <td><?php echo $hub_list['hub_email'] ?></td>
                        </tr>

                      <?php } ?>
                    </tbody>
                  </table>
                </div>


                <footer class="panel-footer"></footer>
              </section>
            </div>
          </div>


          <div class="row">
            <div class="col-md-12">

              <section class="panel panel-default">
                <header class="panel-heading">
                  <h4><b>ประวัติการนำเข้าและเบิกออก</b></h4>
                </header>

                <div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar">
                  <table class="table table-striped b-t b-light">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>รหัสสินค้า</th>
                        <th>ชื่อสินค้า</th>
                        <th>ปริมาตร</th>
                        <th>ราคา</th>
                        <th>วันที่</th>
                        <th>เวลา</th>
                        <th>จำนวน</th>
                        <th>สถานะ</th>
                      </tr>
                    </thead>
                    </thead>
                    <tbody>
                        <?php $i =1 ?>
                            <?php foreach ($product_history as $product_history) { ?>

                                <tr>
                                    <td style="text-align: center;"><?php echo $i ?></a></td>
                                    <td><?php echo $product_history['product_code'] ?></a></td>
                                    <td><?php echo $product_history['product_name'] ?></a></td>
                                    <td><?php echo $product_history['product_volume'] ?></a></td>
                                    <td style="text-align: center;"><?php echo $product_history['product_price'] ?></a></td>
                                    <td style="text-align: center;"><?php echo $product_history['product_stock_date'] ?></a></td>
                                    <td style="text-align: center;"><?php echo $product_history['product_stock_time'] ?></a></td>
                                    <td style="text-align: center;"><?php echo $product_history['product_stock_amount'] ?></a></td>
                                    <td><a href="" style="color: <?php echo $product_history['stock_status_color'] ?>;"><?php echo $product_history['stock_status_value'] ?></a></td>
                                </tr>
                                <?php $i++ ?>
                            <?php } ?>

                        </tbody>
                  </table>
                </div>

                <footer class="panel-footer"></footer>
              </section>
            </div>
          </div>


        </section>
      </section>
    </section>


  </section>
  <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>