<section id="content" class="col-md-12">
    <section class="vbox">
        <section class="scrollable padder">

            <section class="panel panel-default">
                <header class="panel-heading font-bold" style="font-size: 22px; color:dimgray;">
                    เพิ่มข้อมูลศูนย์กระจายสินค้า
                </header>
                <?php echo form_open('hub/hub_insert_db') ?>
                <div class="panel-body">
                    <div class="form-group pull-in clearfix">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-4">
                            <label>ชื่อ </label>
                            <input type="text" name="hub_name" class="form-control" id="input-id-1" placeholder="กรอกชื่อ" required>
                        </div>
                    </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary btn-s-xs">บันทึก</button>
                </div>
                </div>

                <?php echo form_close() ?>
            </section>
        </section>

    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>