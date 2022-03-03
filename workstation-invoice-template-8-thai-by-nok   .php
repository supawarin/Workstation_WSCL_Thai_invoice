<?php
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf([
	'default_font_size' => 12,
	'default_font' => 'sarabun'
]);

$nokhtml = '
<style>
body {
	font-family: sarabun;
	font-size: 14px;
	padding :0; margin: 0;
}

.col1, .col2, .col3, .col4, .col5, .col6{
	float:left;
	width:40%
}
h1, h2, h3, h4, h5, h6 {
padding-left: 20px;
margin : 0;
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
  
  
th ,td{
    border-top: 1px solid #eef2f7;
   
    text-align: center;
	padding: 8px;
  }
  img {
    padding: right 10px;
  }

  </style>

  <body>

  <htmlpagefooter name="myfooter">
  <div style="border-top: 1px solid #333333; font-size: 9pt; text-align: center; padding-top: 1mm; ">
  Page {PAGENO} of {nb}
  </div>
  </htmlpagefooter>
  
  <sethtmlpageheader name="myheader" value="on" show-this-page="1" />
  <sethtmlpagefooter name="myfooter" value="on" />
  
<div class="row">
<div class="col1">
<img src="iv.3.png" width="200" />
<br />
<br />
<div class="date"><h2>วันที่แจ้ง : 04/11/2021</h2></div>
<div class="due date"><h2>วันครบกำหนด : 18/11/2021</h2></div>
<hr style="color:#0066ff;">

<div class="container">
<h2>เรียกเก็บไปยัง :</h2>
<div class="name"><b>ชื่อลูกค้า :</b> ........</div>
<div class="address"><b>ที่อยู่ :</b> ........</div>
<div class="tel"><b>เบอร์โทร :</b> 000 000 0000</div>
<div class="email"><b>Email :</b> customer@gmail.com</div>



</div>

</div>

<div class="col2 floatright">

<img src="worklogosmall2.png" width="240" />
<p>บริษัท เวิร์คสเตชั่น โซลูชั่นส์ จำกัด <br />617 หมู่ 10 ตำบลเมืองเดช อำเภอเดชอุดม,จังหวัดอุบลราชธานี,34160<br />Tel: 063 306 5555,เลขประจำตัวผู้เสียภาษี: 0345563001684<br />Email: workstationsols@gmail.com</p>

<div class="invoice no"><h2>ใบแจ้งหนี้เลขที่ : 12345</h2></div>
<div class="project"><h2>บริการ : ออกแบบเว็บไซต์</h2></div>
</div>
</div>  
<hr style="color:#999999;">

<br />


<!-- INVOICE ITEMS HERE -->

<table class="items" >
<tr>
<td width="10%"><b>ลำดับที่</b></td>
<td width="50%"><b>คำอธิบาย/รายการ</b></td>
<td width="10%"><b>หน่วย</b></td>
<td width="15%"><b>ราคาต่อหน่วย</b></td>
<td width="15%" style="background-color: #eef2f7;"><b>จำนวนเงิน</b></td>
</tr>

<tr>
  <td>1</td>
  <td>ออกแบบเว็บไซต์</td>
  <td>1</td>
  <td>5,500 ฿</td>
  <td style="background-color: #eef2f7;">5,500 ฿</td>
</tr>
<tr>
  <td>2</td>
  <td>โดเมนเนม</td>
  <td>1</td>
  <td>350 ฿</td>
  <td style="background-color: #eef2f7;">350 ฿</td>
</tr>
<tr>
<td class="blanktotal" colspan="3" rowspan="6">

</td>
</tr>
<td class="totals">ยอดรวมย่อย (excl. VAT):</td>
<td class="totals" style="background-color: #eef2f7;">5,850 ฿</td>
</tr>
<tr>
<td class="totals">ภาษีมูลค่าเพิ่ม 7,00%:</td>
<td class="totals" style="background-color: #eef2f7;">410 ฿</td>
</tr>

<tr>
<td class="totals"><b>ยอดรวม:</b></td>
<td class="totals" style="background-color: #eef2f7;"><b> 6,260 ฿</b></td>
</tr>

</table>


<!-- END ITEMS HERE -->

<div class="row" style="background-color: #0066ff; color:#ffffff;">
<div class="col1">
<h1>ขอบคุณที่ร่วมธุรกิจกับเรา</h1>
</div>

<div class="col2 floatright">
<h1>ยอดรวมสุทธิ : 6,260 ฿</h1>
</div>
</div>
<hr style="color:#999999;">

<div class="row">
<div class="col1">
<p><b>หมายเหตุ :</b>  ข้าพเจ้าขอรับรองว่าการอ้างสิทธิ์นี้เป็นความจริงทุกประการ ถูกต้อง รองรับโดยเอกสารที่มีอยู่ และเป็นไปตามข้อกำหนดและเงื่อนไข กฎหมายและข้อบังคับที่ควบคุมการชำระเงินทั้งหมด</p>
</div>
<div class="col2 floatright">
<p><b>เงื่อนไขธุรกิจ :</b> โปรดทราบว่าเงื่อนไขการชำระเงินของเราสำหรับใบแจ้งหนี้นี้คือ NET 15 (ชำระภายใน 15 วัน) ดอกเบี้ยจะถูกเรียกเก็บจากใบแจ้งหนี้ทั้งหมดที่ไม่ได้ชำระตรงเวลา</p>
</div>
</div>

<h3>ชำระเงินออนไลน์ด้วยการโอนเงินมาที่:</h3>

<div class="row">
<div class="col1">

<table class="detail">
<tr style="background-color: #eef2f7;">
<td >ชื่อธนาคาร :</td>
<td ><img src="k.png" width="20"  />ธนาคารกสิกรไทย</td>
</tr>

<tr>
<td >ชื่อบัญชี :</td>
<td >บจก.เวิร์คสเตชั่น โซลูชั่นส์</td>
</tr>

<tr style="background-color: #eef2f7;">
<td>รหัสประเทศ :</td>
<td>THA</td>
</tr>

<tr>
<td>เลขที่บัญชี :</td>
<td>073-1-81570-4</td>
</tr>

<tr style="background-color: #eef2f7;">
<td>รหัสธนาคาร :</td>
<td>0366</td>
</tr>

</table>
</div>
</div>




<p><b>หมายเหตุ:</b> <br />ใบแจ้งหนี้นี้สร้างโดย Workstation CRM และระบบการออกใบแจ้งหนี้โดยอัตโนมัติ</p>

<div class="date">Date : 04/11/2021</div>
<div class="time">Time : 15.00 </div>
  </body>

';
//

$mpdf->WriteHTML($nokhtml . $termsHTML);


//

$mpdf->Output();


?>