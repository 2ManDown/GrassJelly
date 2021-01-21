<section id="content" class="col-md-12">
    <section class="vbox">
        <section class="scrollable padder" style="margin: 0px; padding: 0px;">
            <section class="panel panel-default">

                <header class="panel-heading font-bold" style="font-size: 22px; color:dimgray">
                    รายการการเบิกใช้วัตถุดิบ
                </header>
                <div class="row wrapper">
                    <div class="col-sm-5 m-b-xs" style="position: ralative; top: 18px; margin-bottom: 40px;">
                        <!-- <a href="<?php echo site_url('metarial/metarial_reavel') ?>" class="btn btn-s-lg btn-success btn-rounded">เบิกใช้วัตถุดิบ</a> -->
                    </div>
                    <div class="col-sm-4 m-b-xs" style="margin-top: 20px">
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-sm btn-default active">
                                <input type="radio" name="options" id="option1"> รายวัน
                            </label>
                            <label class="btn btn-sm btn-default">
                                <input type="radio" name="options" id="option2"> รายสัปดาห์
                            </label>
                            <label class="btn btn-sm btn-default">
                                <input type="radio" name="options" id="option2"> รายเดือน
                            </label>
                        </div>
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

                <div class="table-responsive">
                    <table class="table table-striped b-t b-light table-bordered">
                        <div>
                            <tr>
                                <th>เลขคำสั่งเบิก</th>
                                <th>รหัสวัตถถุดิบ</th>
                                <th>ชื่อวัตถุดิบ</th>
                                <th>จำนวนที่เบิก</th>
                                <th>วันที่เบิก</th>
                            
                            </tr>
                        </div>
                        <tbody>
                            <?php foreach ($metarial_reavlist as $metarial_reavlist) { ?>
                            <tr>
                                <td><?php echo $metarial_reavlist['reavelmetarial_id'] ?></td>
                                <td><?php echo $metarial_reavlist['metarial_code'] ?></td>
                                <td><?php echo $metarial_reavlist['metarial_name'] ?></td>
                                <td><?php echo $metarial_reavlist['reavelmetarial_amount'] ?></td>
                                <td><?php echo $metarial_reavlist['reavelmetarial_revdate'] ?></td>
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
            <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
        </section>
    </section>
</section>