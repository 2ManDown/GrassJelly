<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <!-- <title>ใบเบิกออกวัตถุดิบ</title> -->

    <!--<link href="https://www.isanstudio.net/manager/node_modules/print/css/sb-admin.css" rel="stylesheet">-->
    <link href="https://www.isanstudio.net/manager/node_modules/print/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://www.isanstudio.net/manager/node_modules/print/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://www.isanstudio.net/manager/node_modules/print/doc_css/bootstrap/css/bootstrap.min" rel="stylesheet">
    <link href="https://www.isanstudio.net/manager/node_modules/print/doc_css/css_doc/style.css" rel="stylesheet">

    <style media="print">
        .no-print {
            display: none;
        }
        @page{
        margin: 0;
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
                    <strong style="margin-left:60%;">ใบเบิกออกวัตถุดิบ</strong><br>
                    <span style="margin-left:60%;"><strong>เลขที่ : </strong> <?php echo $order['order_material_code'] ?></span><br>
                    <span style="margin-left:60%;"><strong>วันที่ออก : </strong> <?php echo $order['order_material_date'] ?></span>

            </div>
        </div>


        <div class="row">
            <div class="col-sm-6" style="font-size:0.8em;">
                <?php foreach ($fac as $fac) { ?>
                    <strong><?php echo $fac['fac_name'] ?></strong><br><?php echo $fac['fac_address'], ' ต.', $fac['fac_subdistrict'], ' อ.', $fac['fac_district'], ' จ.', $fac['fac_province'], ' ', $fac['fac_postcode']  ?><br>เบอร์ติดต่อ : <?php echo $fac['fac_tel'] ?>&nbsp; E-mail : <?php echo $fac['fac_email'] ?><br>เลขที่ผู้เสียภาษี : <?php echo $fac['fac_vatnumber'] ?>
                <?php } ?>
            </div>
            
        </div>
        <hr>
        <table width="100%" border="1" cellspacing="0" style="font-size:0.8em;">
            <tr>
                <th class="text-center" width="40">ลำดับ</th>
                <th class="text-center">รหัสวัตถุดิบ</th>
                <th class="text-center">รายการวัตถุดิบ</th>
                
                <!-- <th class="text-center" width="50">จำนวน</th> -->
                <th class="text-center" width="50">หน่วย</th>
                <th class="text-center" width="80">จำนวน</th>
            </tr>

            <tr>
                <?php $i = 1; ?>
                <?php $this->db->select('material_code,order_detailmaterial_amount');
                    $this->db->where('order_material_code', $order['order_material_code']);
                    $query = $this->db->get('gj_order_detailmaterial');
                    $order_code = $query->result_array();

                    foreach ($order_code as $code) {
                        $this->db->select('*');
                        $this->db->where('material_code', $code['material_code']);
                        $query = $this->db->get('gj_material');
                        $material = $query->result_array();
                        /* echo '<pre>';
                            print_r($product); */

                        foreach ($material as $material) { ?>
                        <th><?php echo $i; ?></th>
                        <td width="70"><?php echo $material['material_code'] ?></td>
                        <td><?php echo $material['material_name'] ?></td>
                        
                        <!-- <td><?php// echo $code['order_detailmaterial_amount'] ?></td> -->
                        <td><?php echo $material['material_unit'] ?></td>
                        <th><?php echo $code['order_detailmaterial_amount'] ?></th>

                        <?php $i++;   ?>
                    <?php } ?>
            </tr>

        <?php   } ?>

        </tr>
        
        <?php   $this->db->where('order_material_code', $order['order_material_code']);
                $this->db->select('order_detailmaterial_amount');
                $query = $this->db->get('gj_order_detailmaterial');
                $material_stock = $query->result_array();
                $amount = 0;
                foreach($material_stock as $material_stock){
                   $amount += $material_stock['order_detailmaterial_amount'];
                }
                ?>
        
            <th colspan="4" rowspan="5" valign="top" class="text-center" style="padding-left:1%;">จำนวนรวมทั้งหมด</th>
            <th colspan="1" class="text-center" style="padding-right:1%;" id="result"><?php echo $amount ?></th>
        
        
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
