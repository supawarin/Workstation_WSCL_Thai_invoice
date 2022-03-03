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

.col1, .col2, .col3, .col4, {
	float:left;
	width:30%;
}
.col5 {
    width:60%;
}

h1, h2, h3, h4, h5, h6 {
padding: 0;
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
    border-bottom: 1px solid #f5f5f5;
    
    text-align: center;
	padding: 8px;
  }
  
  .items td.blanktotal {
    background-color: #FFFFFF;
    border: 0mm none #F21d55;
   
}
.items td.totals {
    background-color: #F5f5f5;
}

.detail {
    background-color: #f5f5f5;
}
  </style>

<body>

<div class="row">
<div class="col1">
<img src="worklogosmall2.png" width="240" />
</div>

<div class="col2 floatright">
<p><b>สำนักงาน :</b><br />บริษัท เวิร์คสเตชั่น โซลูชั่นส์ จำกัด <br />617 หมู่ 10 อำเภอเดชอุดม<br />จังหวัดอุบลราชธานี,34160</p>
</div>

<div class="col3 floatright">
<p><b>อีเมลล์ :</b><br />workstationsols@gmail.com<br /><b>เบอร์โทร:</b><br /> 063 306 5555</p>
</div>
</div>


<hr style="color:#ff0066">

<div class="row">
<div class="col1">
<img src="iv.4.png" width="200"  />
<br />
</div>

<div class="col2" style="text-align: right;">
<h1>โครงการ : </h1>
</div>

<div class="col3 floatright">
<div class="project"><h1>ออกแบบเว็บไซต์</h1></div>
</div>
</div>
<hr style="color:#ff0066">

  <htmlpagefooter name="myfooter">
<div style="border-top: 1px solid #333333; font-size: 9pt; text-align: center; padding-top: 1mm; ">
Page {PAGENO} of {nb}
</div>
</htmlpagefooter>

<sethtmlpageheader name="myheader" value="on" show-this-page="1" />
<sethtmlpagefooter name="myfooter" value="on" />

<div class="row">
<div class="col1" style="padding: left 15px; background-color: #f5f5f5;">
<h2>เรียกเก็บไปยัง :</h2>
<div class="name"><b>ชื่อ :</b> ลูกค้า/บริษัท ..... </div>
<div class="address"><b>ที่อยู่ :</b>  ไทย ,34160..... </div>
<div class="email"><b>Email : </b> customer@gmail.com</div>

</div>

<div class="col2" style="text-align: right;">
<h2>ใบแจ้งหนี้เลขที่ : </h2>
<h2>วันที่แจ้ง : </h2>
<h2>วันครบกำหนด : </h2>
<h2>จำนวนเงิน : </h2>
</div>

<div class="col3 floatright">
<div class="invoice no"><h2> 12345</h2></div>
<div class="date"><h2> 06/11/2021</h2></div>
<div class="due date"><h2> 20/11/2021</h2></div>
<div class="totals"><h2>6,260 บาท</h2></div>
</div>

</div>
<br />
<!-- INVOICE ITEMS HERE -->



<table class="items" >
<tr style="background-color: #de3163; color: #ffffff;">
<td width="10%"><b>ลำดับที่</b></td>
<td width="50%"><b>คำอธิบาย/รายการ</b></td>
<td width="10%"><b>หน่วย</b></td>
<td width="15%"><b>ราคาต่อหน่วย</b></td>
<td width="15%"><b>จำนวนเงิน</b></td>
</tr>
<tr>
  <td>1</td>
  <td>ออกแบบเว็บไซต์</td>
  <td>1</td>
  <td>5,500 ฿</td>
  <td>5,500 ฿</td>
</tr>
<tr>
  <td>2</td>
  <td>โดเมนเนม</td>
  <td>1</td>
  <td>350 ฿</td>
  <td>350 ฿</td>
</tr>

<tr>
<td class="blanktotal" colspan="3" rowspan="6">
<h2>ขอบคุณที่ร่วมธุรกิจกับเรา</h2>
</td>
</tr>

<tr>
<td class="totals">ยอดรวมย่อย (excl. VAT):</td>
<td class="totals" style="background-color: #f5f5f5;">5,850 ฿</td>
</tr>

<tr>
<td class="totals">ภาษีมูลค่าเพิ่ม 7,00%:</td>
<td class="totals" style="background-color: #f5f5f5;">410 ฿</td>
</tr>

<tr>
<td class="totals" style="background-color: #de3163;"><b>ยอดรวม:</b></td>
<td class="totals" style="background-color: #de3163;"><b> 6,260 ฿</b></td>
</tr>
</table>

<!-- END ITEMS HERE -->

';

$termsHTML = '
<div class="tenthmatrixlogo">
<ximg src="/Volumes/GoogleDrive/.shortcut-targets-by-id/1-9_ANNWeOpmVIwN01qqEiImCs6RH8tks/WorkstationSolsGoogleDrive/Shared_TenthMatrix_CRM_DEV/Tenthmatrixv18/TENTHMATRIX_CRM_DATA/php_components/mpdf60/examples/mysignature.png" width="150" />
</div>


<p><b>หมายเหตุ :</b>  ข้าพเจ้าขอรับรองว่าการอ้างสิทธิ์นี้เป็นความจริงทุกประการ ถูกต้อง รองรับโดยเอกสารที่มีอยู่ และเป็นไปตามข้อกำหนดและเงื่อนไข กฎหมายและข้อบังคับที่ควบคุมการชำระเงินทั้งหมด</p>


<p><b>เงื่อนไขธุรกิจ :</b> โปรดทราบว่าเงื่อนไขการชำระเงินของเราสำหรับใบแจ้งหนี้นี้คือ NET 15 (ชำระภายใน 15 วัน) ดอกเบี้ยจะถูกเรียกเก็บจากใบแจ้งหนี้ทั้งหมดที่ไม่ได้ชำระตรงเวลา</p>
<h3>ชำระเงินออนไลน์ด้วยการโอนเงินมาที่:</h3>


<div class="row">
<div class="col5">
<table class="detail">
<tr>
<td >ชื่อธนาคาร :</td>
<td ><img src="k.png" width="20"  />ธนาคารกสิกรไทย</td>
</tr>

<tr>
<td >ชื่อบัญชี :</td>
<td >บจก.เวิร์คสเตชั่น โซลูชั่นส์</td>
</tr>

<tr>
<td>รหัสประเทศ :</td>
<td>THA</td>
</tr>

<tr>
<td>เลขที่บัญชี :</td>
<td>073-1-81570-4</td>
</tr>

<tr>
<td>รหัสธนาคาร :</td>
<td>0366</td>
</tr>

</table>
</div>
</div>
<p><b>หากมีข้อสงสัย :</b> Email:workstationsols@gmail.com Or Call: 063-306-5555</p>

<p><b>หมายเหตุ:</b> ใบแจ้งหนี้นี้สร้างโดย Workstation CRM และระบบการออกใบแจ้งหนี้โดยอัตโนมัติ</p>

<div class="date">วันที่ :06/11/2021</div>
<div class="time">เวลา :18.25</div>
</body>
  ';
//

$mpdf->WriteHTML($nokhtml . $termsHTML);


//

$mpdf->Output();


?>