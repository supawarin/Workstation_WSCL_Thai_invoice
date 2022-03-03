<?php
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf([
	'default_font_size' => 16,
	'default_font' => 'sarabun'
]);


$nokhtml = '
<style>
body {
	font-family: sarabun;
	font-size: 16px;
	padding :0; margin: 0;
}
.row{
	clear:both;
	overflow:hidden;
}

.col1 ,col2 {
	float:left;
	width:50%;
}

h1, h2, h3, h4, h5, h6 {
padding: 0;
margin : 0;
}
.main_heading { 
	position: absolute; 
	color: #666666;
	overflow: visible; 
	left: 55; 
	top: 40; 
	padding-bottom: 10px; 
	font-family:sarabun; 
	font-size: 26px;
	margin: 0;
}
.floatleft{
	float:left;
}

.floatright{
	float:right;
}
table {
	font-family: sarabun;
	border-collapse: collapse;
	width: 100%;
  }
  
  td, th {
	border: 1px solid #87ceff;
	text-align: center;
	padding: 8px;
  }
 
  .items td.blanktotal {
    background-color: #FFFFFF;
    border: 0mm none #FFFFFF;
    border-top: 0.1mm solid #87ceff;
    border-right: 0.1mm solid #87ceff;
	text-align: left;
}
.items td.totals {
    text-align: right;
}

.title {
    text-align: center;
    background-color: #87ceff;
}
img {
    padding-right: 10px;
}
  </style>



<body>
<div class="logo">
<img src="worklogosmall2.png" width="180"  />
</div>
<h4 >บริษัท เวิร์คสเตชั่น โซลูชั่นส์ จำกัด : 617 หมู่ 10 ตำบลเมืองเดช อำเภอเดชอุดม,จังหวัดอุบลราชธานี,34160 , Tel: 063 306 5555,<br />เลขประจำตัวผู้เสียภาษี: 0345563001684 , Email: workstationsols@gmail.com</h4>

<hr style="color: #63b8ff;">

<br />
<br />

<htmlpagefooter name="myfooter">
<div style="border-top: 1px solid #333333; font-size: 9pt; text-align: center; padding-top: 1mm; ">
Page {PAGENO} of {nb}
</div>
</htmlpagefooter>

<sethtmlpageheader name="myheader" value="on" show-this-page="1" />
<sethtmlpagefooter name="myfooter" value="on" />

<div class="title">
<h2>ใบเสนอราคา / QUOTATION</h2>
</div>

<div class="row">
<div class="col1" style="padding: left 20px; border: 1px solid #63b8ff;">
<div class="name"><b>ชื่อลูกค้า : ....</b></div>
<div class="address"><b>ที่อยู่ลูกค้า :...</b></div>
<div class="tel"><b>Tel : 000 000 0000</b></div>
<div class="email"><b>Email : customer@gmail.com</b></div>
</div>

<div class="col2 floatright" style="padding: left 20px; border: 1px solid #63b8ff;">
<div class="quotationnumber"><b>เลขที่เอกสาร :0000</b> </div>
<div class="date"><b>วันที่เสนอราคา : 12/11/2021</b></div>
<div class="due date"><b>วันครบกำหนด : 19/11/2021</b></div>
<div class="vat"><b>เลขประจำตัวผู้เสียภาษี :1234567890</b></div>
</div>
</div>
<br />
<h4>ขอเสนอราคาและเงื่อนไขสำหรับท่านดังนี้</h4>

<table class="items">
<tr>
<th width="10%">ลำดับที่</th>
<th width="50%">รายการ / คำอธิบาย</th>
<th width="10%">หน่วย</th>
<th width="15%">ราคาต่อหน่วย</th>
<th width="15%">ราคารวม</th>
</tr>

<tr>
<td>1</td>
<td>ออกแบบเว็บไซต์ขนาดเล็ก-เว็บหน้าเดียว (ฟรีโฮสติ้งและโดเมนเนมปีแรก)</td>
<td>1</td>
<td>5,000 ฿</td>
<td>5,000 ฿</td>
</tr>

<tr>
<td class="blanktotal" colspan="3" rowspan="5" >

</td>

</tr>

<tr>
<td class="totals">ยอดรวมย่อย (excl. VAT):</td>
<td class="totals">5,000 ฿</td>
</tr>

<tr>
<td class="totals">ภาษีมูลค่าเพิ่ม 7,00%:</td>
<td class="totals">350 ฿</td>
</tr>

<tr>
<td class="totals" style="background-color: #87ceff;"><b>ยอดรวมสุทธิ:</b></td>
<td class="totals" style="background-color: #87ceff;"><b>5,350 ฿</b></td>
</tr>

</table>

<br />

<div class="row">
<div class="col1" style="padding: left 20px; border: 1px solid #63b8ff;">
<p><b>ข้อตกลงและเงื่อนไขการขอใบเสนอราคา : </b><br />งวดที่ 1.) ชำระ 50% ก่อนเริ่มดำเนินการ<br />งวดที่ 2.) ชำระ 50% หลังส่งมอบงาน/เว็บขึ้นใช้จริง<br />ดูแลหลังจากเว็บใช้จริงเป็นเวลา 3 เดือน</p>
</div>

<div class="col2 floatright" style="padding: left 20px; border: 1px solid #63b8ff;">
<p><u>ข้าพเจ้ารับรองว่าจะส่งมอบงานดังกล่าวข้างต้นภายในกำหนด</u><br />ผู้เสนอราคา : บริษัท เวิร์คสเตชั่น โซลูชั่นส์ จำกัด<br />ผู้สั่งซื้อ/ผู้รับข้อเสนอ :............................<br />หมายเหตุ : ราคานี้ตกลงตามเงื่อนไขภายใน 7 วัน</p>
</div>
</div>


<p><b><i>ข้อมูลการชำระเงิน :</i></b><br /> <img src="k.png" width="20"  />ธนาคารกสิกรไทย : บจก.เวิร์คสเตชั่น โซลูชั่นส์ <br />เลขที่บัญชี :073-1-81570-4<br />สาขาเดชอุดม</p>

<h4>* ยืนยันใบเสนอราคา : โอนเงินและส่งเมลล์ยืนยันที่ workstationsols@gmail.com</h4>
<br />
<div class="date">วันที่ : 12/11/2021</div>
<div class="time">เวลา : 09.00</div>

</body>';


//

$mpdf->WriteHTML($nokhtml . $termsHTML);


//

$mpdf->Output();


?>