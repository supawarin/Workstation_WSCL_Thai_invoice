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

.col1, .col2, .col3, .col4, .col5, .col6{
	float:left;
	width:40%
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
	border: 1px solid #f5f5f5;
	text-align: center;
	padding: 8px;
  }
 
  .items td.blanktotal {
    background-color: #FFFFFF;
    border: 0mm none #FFFFFF;
    border-top: 0.1mm solid #FFFFFF;
    border-right: 0.1mm solid #FFFFFF;
	text-align: left;
}
.items td.totals {
    text-align: right;
}
  </style>



<body>

<div class="row">
<div class="col1">
<img src="worklogosmall2.png" width="240"  />

<h4 >บริษัท เวิร์คสเตชั่น โซลูชั่นส์ จำกัด <br />617 หมู่ 10 ตำบลเมืองเดช อำเภอเดชอุดม,จังหวัดอุบลราชธานี,34160<br />Tel: 063 306 5555,<br />เลขประจำตัวผู้เสียภาษี: 0345563001684<br />Email: workstationsols@gmail.com</h4>

</div>

<div class="col2 floatright">
<h1>ใบเสนอราคา / Quotation</h1>
<hr>
<div class="quotation"><b>เลขที่เอกสาร : ws-0001</b> </div>
<div class="date"><b>วันที่ออกเอกสาร : 01/11/2021</b> </div>
<div class="due date"><b>วันครบกำหนด : 15/11/2021</b> </div>


</div>
</div>


<htmlpagefooter name="myfooter">
<div style="border-top: 1px solid #333333; font-size: 9pt; text-align: center; padding-top: 1mm; ">
Page {PAGENO} of {nb}
</div>
</htmlpagefooter>

<sethtmlpageheader name="myheader" value="on" show-this-page="1" />
<sethtmlpagefooter name="myfooter" value="on" />

<div class="row" style="background-color: #f5f5f5;">
<div class="col1" style="padding: 15px;">
<div class="job"><b>ชื่อลูกค้า :.. </b></div>
<div class="vat"><b>ที่อยู่ลูกค้า :..</b></div>
<div class="tel"><b>Tel: 000 000 0000</b></div>
</div>

<div class="col2 floatright" style="padding: 15px;">
<div class="job"><b>ชื่องาน : ออกแบบเว็บไซต์ขนาดเล็ก</b></div>
<div class="vat"><b>เลขประจำตัวผู้เสียภาษี :12345678 </b></div>
<div class="email"><b>Email: customers@gmail.com</b></div>
</div>
</div>
<hr>

<h3>บริษัท เวิร์คสเตชั่น โซลูชั่นส์ จำกัด ขอเสนอราคางาน ดังต่อไปนี้</h3>




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
<td class="blanktotal" colspan="3" rowspan="6" >
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
<td class="totals" style="background-color: #f5f5f5;"><b>ยอดรวมสุทธิ:</b></td>
<td class="totals" style="background-color: #f5f5f5;"><b>5,350 ฿</b></td>
</tr>

</table>

<div class="row">
<div class="col1">
<p><b><i>หมายเหตุ :</i> </b><br /> . ยืนยันราคาภายใน 15 วัน นับจากวันเสนอราคา<br /> . ดูแลหลังจากเว็บใช้จริงเป็นเวลา 3 เดือน </p>

<p><b><i> เงื่อนไขการชำระเงิน:</i> </b><br />.งวดที่ 1.) ชำระ 50% ก่อนเริ่มดำเนินการ<br />
.งวดที่ 2.) ชำระ 50% หลังส่งมอบงาน/เว็บขึ้นใช้จริง</p>
</div>

<div class="col2 floatright">
<p><b><i>ข้อมูลการชำระเงิน :</i></b><br /> <img src="k.png" width="20"  />ธนาคารกสิกรไทย : บจก.เวิร์คสเตชั่น โซลูชั่นส์ <br />เลขที่บัญชี :073-1-81570-4<br />.สาขาเดชอุดม</p>
</div>
</div>


<br />


<div class="row">
<div class="col1">

</div>
<div class="col2 floatright">
<h3>ลงชื่อ_________________________ผู้เสนอราคา<br />บริษัท เวิร์คสเตชั่น โซลูชั่นส์ จำกัด<br />   วันที่ 01 / 11/ 2021</h3>
</div>
</div>
<br />
<h5>* ยืนยันใบเสนอราคา : โอนเงินและส่งเมลล์ยืนยันที่ workstationsols@gmail.com</h5>

<div class="date">Date : 01/11/2021</div>
<div class="time">Time : 20.00</div>
</body>';


//

$mpdf->WriteHTML($nokhtml . $termsHTML);


//

$mpdf->Output();


?>