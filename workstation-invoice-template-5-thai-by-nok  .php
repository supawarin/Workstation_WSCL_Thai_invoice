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
    border-bottom: 2px solid #f5f5f5;
    text-align: center;
	padding: 8px;
  }

img{
    padding-right:10px;
}
</style>



<body>
<div class="row">
<div class="col1 ">
<img src="worklogosmall2.png" width="240" center/>
</div>
<div class="col2 floatright">
<h4>บริษัท เวิร์คสเตชั่น โซลูชั่นส์ จำกัด <br />617 หมู่ 10 ตำบลเมืองเดช อำเภอเดชอุดม,จังหวัดอุบลราชธานี,34160<br />Tel: 063 306 5555,เลขประจำตัวผู้เสียภาษี: 0345563001684<br />Email: workstationsols@gmail.com</h4>
</div>
</div>
<hr>



<htmlpagefooter name="myfooter">
<div style="border-top: 1px solid #333333; font-size: 9pt; text-align: center; padding-top: 1mm; ">
Page {PAGENO} of {nb}
</div>
</htmlpagefooter>

<sethtmlpageheader name="myheader" value="on" show-this-page="1" />
<sethtmlpagefooter name="myfooter" value="on" />

<div class="row" style="background-color: #f5f5f5;">
<div class="col1" style="padding:15px;">
<h2>เรียกเก็บไปยัง :</h2>
<div class="name"><b>ชื่อ :</b></div>
<div class="address"><b>ที่อยู่ :จังหวัด,34160</b></div>
<div class="tel"><b>Tel: 000 000 0000</b></div>
<div class="email"><b>Email: customers@gmail.com</b></div>
</div>
<div class="col2 floatright" style="padding:15px;">
<div class="invoice no"><h2>ใบแจ้งหนี้เลขที่ : 12345</h2></div>
<div class="date"><h2>วันที่ออกใบแจ้ง : 28/10/2021</h2></div>
<div class="due date"><h2>วันครบกำหนดชำระ :11/10/2021</h2></div>
<div class="project"><h2>โครงการ : ออกแบบเว็บ</h2></div>
</div>
</div>

<hr>
<!-- INVOICE ITEMS HERE -->

<table class="items" style="magin: top 25px;">

<tr>
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
  <td>2</td>
  <td>350 ฿</td>
  <td>350 ฿</td>
</tr>

<tr>
<td class="blanktotal" colspan="3" rowspan="6">
</td>
</tr>
<td class="totals">ยอดรวมย่อย (excl. VAT):</td>
<td class="totals">5,850 ฿</td>
</tr>
<tr>
<td class="totals">ภาษีมูลค่าเพิ่ม 7,00%:</td>
<td class="totals">410 ฿</td>
</tr>
<tr>
<td class="totals">การส่งสินค้า:</td>
<td class="totals">- ฿</td>
</tr>
<tr>
<td class="totals"><b>ยอดรวม:</b></td>
<td class="totals"><b> 6,260 ฿</b></td>
</tr>
<tr>
<td class="totals" style="background-color: #f5f5f5;"><b>ยอดรวมสุทธิ:</b></td>
<td class="totals" style="background-color: #f5f5f5;"><b>6,260 ฿</b></td>
</tr>

</table>

  <!-- END ITEMS HERE -->

  ';

$termsHTML = '
<div class="tenthmatrixlogo">
<ximg src="/Volumes/GoogleDrive/.shortcut-targets-by-id/1-9_ANNWeOpmVIwN01qqEiImCs6RH8tks/WorkstationSolsGoogleDrive/Shared_TenthMatrix_CRM_DEV/Tenthmatrixv18/TENTHMATRIX_CRM_DATA/php_components/mpdf60/examples/mysignature.png" width="150" />
</div>

<br />
<h3><i>ขอบคุณที่ร่วมธุรกิจกับเรา</i></h3>
<p>ข้าพเจ้าขอรับรองว่าการอ้างสิทธิ์นี้เป็นความจริงทุกประการ ถูกต้อง รองรับโดยเอกสารที่มีอยู่ และเป็นไปตามข้อกำหนดและเงื่อนไข กฎหมายและข้อบังคับที่ควบคุมการชำระเงินทั้งหมด</p>
<p>โปรดทราบว่าเงื่อนไขการชำระเงินของเราสำหรับใบแจ้งหนี้นี้คือ NET 15 (ชำระภายใน 15 วัน) ดอกเบี้ยจะถูกเรียกเก็บจากใบแจ้งหนี้ทั้งหมดที่ไม่ได้ชำระตรงเวลา
 </p>

<div class="row" >
<div class="col1" style="background-color: #f5f5f5;">
<p style="padding: left 15px;"><b>ชำระเงินออนไลน์ด้วยการโอนเงินมาที่:</b>
<p style="padding: left 15px;"><b>ชื่อธนาคาร :</b> <img src="k.png" width="20"  />ธนาคารกสิกรไทย</p>
<p style="padding: left 15px;"><b>ชื่อบัญชี : </b>บจก.เวิร์คสเตชั่น โซลูชั่นส์</p>
<p style="padding: left 15px;"><b>รหัสประเทศ : </b>THA</p>
<p style="padding: left 15px;"><b>เลขที่บัญชี : </b>073-1-81570-4</p>
<p style="padding: left 15px;"><b>รหัสธนาคาร : </b>0366</p>

</div>
<div class="col2 floatright">
<p><b>หมายเหตุ:</b> <br />ใบแจ้งหนี้นี้สร้างโดย Workstation CRM และระบบการออกใบแจ้งหนี้โดยอัตโนมัติ</p>

<div class="date">วันที่ :28/10/2021</div>
<div class="time">เวลา : 09.00 </div>
<div>
</div>
</body>';


//

$mpdf->WriteHTML($nokhtml . $termsHTML);


//

$mpdf->Output();


?>