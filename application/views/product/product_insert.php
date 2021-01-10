<section id="content">
    <section class="vbox">
        <section class="scrollable padder">

            <section class="panel panel-default">
                <header class="panel-heading font-bold" style="font-size: 23px; color:dimgray;">
                    เพิ่มข้อมูลสินค้า
                </header>
                <div class="panel-body">
                    <form class="form-horizontal" method="get">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">รหัสสินค้า</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control rounded">
                            </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">ชื่อสินค้า</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">ปริมาตร</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">ราคาสินค้า</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">รายบละเอียดสินค้าโดยย่อ</label>
                            <div class="col-sm-7">
                                <!-- <input type="text" class="form-control"> -->
                                <textarea class="form-control" rows="6" data-minwords="6" data-required="true" placeholder="Type your message" style="resize: none;"></textarea>
                            </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">ประเภทสินค้า</label>
                            <div class="col-sm-7">
                                <select name="account" class="form-control m-b">
                                    <option>ถุง</option>
                                    <option>ขวด</option>
                                </select>
                            </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">เลือกรูปสินค้า</label>
                            <div class="col-sm-5">
                                <input type="file" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s">
                            </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <div class="col-sm-5 col-sm-offset-4">
                                <button type="submit" class="btn btn-primary">Save changes</button>
                                &nbsp; &nbsp;
                                <button type="submit" class="btn btn-default" onclick="goBack()">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>

        </section>

    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>


<!-- Image -->

<section id="content">
    <section class="vbox">
        <section class="scrollable padder">

            <section class="panel panel-default">
                <header class="panel-heading font-bold" style="font-size: 23px; color:dimgray;">
                    เพิ่มข้อมูลสินค้า
                </header>
                <h2>พื้นที่แสดงรูปภาพ</h2>
            </section>
        </section>
    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>



<!-- JS back Previuos page -->
<script>
    function goBack() {
        window.history.back();
    }
</script>