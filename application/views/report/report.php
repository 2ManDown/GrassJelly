<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <!--<title>ใบสั่งซื้อสินค้า</title>-->

    <!--<link href="https://www.isanstudio.net/manager/node_modules/print/css/sb-admin.css" rel="stylesheet">-->
    <link href="https://www.isanstudio.net/manager/node_modules/print/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://www.isanstudio.net/manager/node_modules/print/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://www.isanstudio.net/manager/node_modules/print/doc_css/bootstrap/css/bootstrap.min" rel="stylesheet">
    <link href="https://www.isanstudio.net/manager/node_modules/print/doc_css/css_doc/style.css" rel="stylesheet">

    <style media="print">
        .no-print {
            display: none;
        }
    </style>
    <style media="all">
        .table>tbody>tr>td {
            padding: 5px;
        }

        th,
        td {
            text-align: center;
        }

        .invoice {
            border: 1px solid #000 !important;
            font-size: 11px;
        }

        .invoice th {
            /*border-top: 0px !important;*/
            border-left: 1px solid #000 !important;
            border-right: 1px solid #000 !important;
            border-bottom: 1px solid #000 !important;
        }

        .invoice td {
            border-top: 0px !important;
            border-left: 1px solid #000 !important;
            border-right: 1px solid #000 !important;
            border-bottom: 0px !important;
        }

        span.empty {
            height: 15.5px;
            display: block;
        }
    </style>

<body>
    <page size="A4">
        <div class="row">
            <div class="col-sm-6"></div>
            <div class="col-sm-6" style="font-size:0.8em;">
                <?php foreach ($order as $order) { ?>
                    <strong style="margin-left:30%;">ใบเสร็จรับเงิน / ใบกำกับภาษี</strong><br>
                    <span style="margin-left:30%;"><strong>เลขที่ : </strong> <?php echo $order['order_code'] ?></span><br>
                    <span style="margin-left:30%;"><strong>วันที่ออก : </strong> <?php echo $order['order_date'] ?></span>

            </div>
        </div>

        <br>

        <div class="row">
            <div class="col-sm-6" style="font-size:0.8em;">
                <?php foreach ($fac as $fac) { ?>
                    <strong><?php echo $fac['fac_name'] ?></strong><br><?php echo $fac['fac_address'], ' ต.', $fac['fac_subdistrict'], ' อ.', $fac['fac_district'], ' จ.', $fac['fac_province'], ' ', $fac['fac_postcode']  ?><br>เบอร์ติดต่อ : <?php echo $fac['fac_tel'] ?>&nbsp; E-mail : <?php echo $fac['fac_email'] ?><br>เลขที่ผู้เสียภาษี : <?php echo $fac['fac_vatnumber'] ?>
                <?php } ?>
            </div>
            <div class="col-sm-6" style="font-size:0.8em;">
                <?php
                    $fetch = array('hub_id' => $order['hub_id']);
                    $query = $this->db->get_where('gj_hub', $fetch);
                    $hub = $query->result_array();
                    foreach ($hub as $hub) {
                ?>
                    <b>ข้อมูลลูกค้า : </b><?php echo $hub['hub_name'] ?><br>ที่ตั้ง <?php echo $hub['hub_address'] ?>
                    <br>เบอร์ติดต่อ : <?php echo $hub['hub_tel'], '&nbsp; Email : ', $hub['hub_email'] ?>
                    <!--                 <br>เลขที่ผู้เสียภาษี 0745559009443 ( สำนักงานใหญ่ ) -->
                <?php } ?>
            </div>
        </div>
        <hr>
        <table width="100%" border="1" cellspacing="0" style="font-size:0.8em;">
            <tr>
                <th class="text-center" width="40">ลำดับ</th>
                <th class="text-center">รหัสสินค้า</th>
                <th class="text-center">รายการสินค้า</th>
                <th class="text-center" width="80">ราคาต่อหน่วย</th>
                <th class="text-center" width="50">จำนวน</th>
                <th class="text-center" width="50">หน่วย</th>
                <th class="text-center" width="80">ราคารวม</th>
            </tr>

            <tr>
                <?php $i = 1; ?>
                <?php $this->db->select('product_code,order_detail_amount,order_detail_price');
                    $this->db->where('order_code', $order['order_code']);
                    $query = $this->db->get('gj_order_detail');
                    $order_code = $query->result_array();

                    foreach ($order_code as $code) {
                        $this->db->select('*');
                        $this->db->where('product_code', $code['product_code']);
                        $query = $this->db->get('gj_product');
                        $product = $query->result_array();
                        /* echo '<pre>';
                                                            print_r($product); */

                        foreach ($product as $product) { ?>
                        <th><?php echo $i; ?></th>
                        <td width="70"><?php echo $product['product_code'] ?></td>
                        <td><?php echo $product['product_name'] ?></td>
                        <td width="70"><?php echo $code['order_detail_price'] ?></td>
                        <td><?php echo $code['order_detail_amount'] ?></td>
                        <td><?php echo $product['product_unit'] ?></td>
                        <th><?php echo $code['order_detail_price'] * $code['order_detail_amount'] ?></th>

                        <?php $i++;   ?>
                    <?php } ?>
            </tr>

        <?php   } ?>

        </tr>
        <?php   $this->db->where('order_code', $order['order_code']);
                $this->db->select('order_detail_amount,order_detail_price');
                $query = $this->db->get('gj_order_detail');
                $product_stock = $query->result_array();
                $price = 0;
                foreach($product_stock as $product_stock){
                   $price += $product_stock['order_detail_price'] * $product_stock['order_detail_amount'];
                }
                ?>
        <tr>
            <th colspan="3" rowspan="5" valign="top" class="text-left" style="padding-left:1%;">Remark.</th>
            <th colspan="3" class="text-right" style="padding-right:1%;">รวมเป็นเงิน</th>
            <th class="text-right" style="padding-right:1%;" id="result"><?php echo $price  ?></th>
            
        </tr>
        
        <tr>
            <th colspan="3" class="text-right" style="padding-right:1%;">ภาษีมูลค่าเพิม 7%</th>
            <th class="text-right" style="padding-right:1%;"><?php echo $vat = $price *7/100 ?></th>
        </tr>
        <tr>
            <th colspan="3" class="text-right" style="padding-right:1%;">จำานวนเงินรวมทั้งสิ้น</th>
            <th class="text-right" style="padding-right:1%;"><?php echo $price + $vat  ?></th>
        </tr>
        <tr>
            <th colspan="3" class="text-right" style="padding-right:1%;">
                หักภาษี ณ ที่จ่าย 3%
            </th>
            <th class="text-right" style="padding-right:1%;"><?php  ?></th>
        </tr>
        <tr>
            <th colspan="3" class="text-right" style="padding-right:1%;">ยอดชำระทั้งหมด</th>
            <th class="text-right" style="padding-right:1%;"><?php  ?></th>
        </tr>
        </table>

    <?php } ?>
    <hr>
    <div class="row" style="font-size:0.8em;">
        <div class="col-sm-8"></div>
        <div class="col-sm-4">
            <div class="row text-center">
                <div class="col-sm-12">ผู้มีอำนาจลงนามของบริษัท</div>
                <p>&nbsp;</p>
                <div class="col-sm-12">…………….……..………………………..</div>
                <div class="col-sm-12">( &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; )</div>
                <div class="col-sm-12">กรรมการผู้จัดการ</div>
            </div>
        </div>
    </div>
    </page>
</body>

</html>
