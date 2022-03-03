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
    border: 1px solid #ffffff;
    
    text-align: center;
	padding: 8px;
  }
  

  </style>

<body>


<div class="row">
<div class="col1" style="background-color: #d4f1ff">
<table class="detail">
<tr>
<td><b>ใบแจ้งหนี้เลขที่ :</b></td>
<td><b>วันที่แจ้ง :</b></td>
<td><b>วันครบกำหนด :</b></td>
</tr>

<tr>
<td class="invoice no">12345</td>
<td class="date">29/10/2021</td>
<td class="due date">14/10/2021</td>
</tr>
</table>

</div>
<div class="col2 floatright">
<img src="worklogosmall2.png" width="240" />
<p>บริษัท เวิร์คสเตชั่น โซลูชั่นส์ จำกัด <br />617 หมู่ 10 ตำบลเมืองเดช อำเภอเดชอุดม,จังหวัดอุบลราชธานี,34160<br />Tel: 063 306 5555,เลขประจำตัวผู้เสียภาษี: 0345563001684<br />Email: workstationsols@gmail.com</p>
</div>
</div>





<htmlpagefooter name="myfooter">
<div style="border-top: 1px solid #333333; font-size: 9pt; text-align: center; padding-top: 1mm; ">
Page {PAGENO} of {nb}
</div>
</htmlpagefooter>

<sethtmlpageheader name="myheader" value="on" show-this-page="1" />
<sethtmlpagefooter name="myfooter" value="on" />



<h2>เรียกเก็บไปยัง :</h2>


<div class="container" width="35%" style="background-color: #d4f1ff; padding: 20px;">
<div class="name"><b>ชื่อ :</b>  ..... </div>
<div class="address"><b>ที่อยู่ :</b>  ..... </div>
<div class="email"><b>Email : </b> customer@gmail.com </div>
<div class="project"><b>สินค้า/บริการ :</b> ออกแบบเว็บไซต์และซื้อโดเมนเนม </div>
</div>


<br />


<!-- INVOICE ITEMS HERE -->

<table class="items" >

<tr style="background-color: #d4f1ff">
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
<td width="10%"><b>ราคารวมย่อย(excl. VAT):</b></td>
<td width="50%"><b>ภาษีมูลค่าเพิ่ม 7,00%:</b></td>
<td width="10%"><b>ยอดรวม :</b></td>
</tr>

<tr>
<td width="10%"><b>5,850 ฿</b></td>
<td width="50%"><b>410 ฿</b></td>
<td width="10%"><b>6,260 ฿</b></td>
<td width="20%" style="background-color: #d4f1ff"><h1>6,260 บาท</h1>
</tr>
</table>
<hr style="color:#d4f1ff">


<!-- END ITEMS HERE -->

';

$termsHTML = '
<div class="tenthmatrixlogo">
<ximg src="/Volumes/GoogleDrive/.shortcut-targets-by-id/1-9_ANNWeOpmVIwN01qqEiImCs6RH8tks/WorkstationSolsGoogleDrive/Shared_TenthMatrix_CRM_DEV/Tenthmatrixv18/TENTHMATRIX_CRM_DATA/php_components/mpdf60/examples/mysignature.png" width="150" />
</div>


<h3><i>ขอบคุณที่ร่วมธุรกิจกับเรา</i></h3>
<b><u>หมายเหตุ:</u></b>
<p>ข้าพเจ้าขอรับรองว่าการอ้างสิทธิ์นี้เป็นความจริงทุกประการ ถูกต้อง รองรับโดยเอกสารที่มีอยู่ และเป็นไปตามข้อกำหนดและเงื่อนไข กฎหมายและข้อบังคับที่ควบคุมการชำระเงินทั้งหมด</p>
<p>โปรดทราบว่าเงื่อนไขการชำระเงินของเราสำหรับใบแจ้งหนี้นี้คือ NET 15 (ชำระภายใน 15 วัน) ดอกเบี้ยจะถูกเรียกเก็บจากใบแจ้งหนี้ทั้งหมดที่ไม่ได้ชำระตรงเวลา
 </p>
 <p>ใบแจ้งหนี้นี้สร้างโดย Workstation CRM และระบบการออกใบแจ้งหนี้โดยอัตโนมัติ</p>

 <div class="bankDetails" cellpadding="8" cellspacing="0"  style="width: 40%">
 <p><b>ชำระเงินออนไลน์ด้วยการโอนเงินมาที่:</b>
 <p><b>ชื่อธนาคาร :</b> <img src="k.png" width="20"  />ธนาคารกสิกรไทย</p>
 <p><b>ชื่อบัญชี : </b>บจก.เวิร์คสเตชั่น โซลูชั่นส์</p>
 <p><b>รหัสประเทศ : </b>THA</p>
 <p><b>เลขที่บัญชี : </b>073-1-81570-4</p>
 <p><b>รหัสธนาคาร : </b>0366</p>
 </div>

</body>

';
//

$mpdf->WriteHTML($nokhtml . $termsHTML);


//

$mpdf->Output();


?>