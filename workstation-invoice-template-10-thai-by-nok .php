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
    border-bottom: 2px dotted #f5f5f5;
    
    text-align: center;
	padding: 8px;
  }
  
  .items td.blanktotal {
    background-color: #FFFFFF;
    border: 0mm none #F21d55;
   
}
.items td.totals {
    background-color: #fff;

}

.detail {
    background-color: #ffffff;
    border: 2px solid #ff2266;
    
}
  </style>

<body>

<div class="row">

<div class="col1 ">
<h4>บริษัท เวิร์คสเตชั่น โซลูชั่นส์ จำกัด<br />617 หมู่ 10 อำเภอเดชอุดม<br />จังหวัดอุบลราชธานี,34160<br />workstationsols@gmail.com<br />Tel: 063 306 555</h4>
</div>
<div class="col2 floatright">
<img src="worklogosmall2.png" width="240" />
</div>
</div>




  <htmlpagefooter name="myfooter">
<div style="border-top: 1px solid #333333; font-size: 9pt; text-align: center; padding-top: 1mm; ">
Page {PAGENO} of {nb}
</div>
</htmlpagefooter>

<sethtmlpageheader name="myheader" value="on" show-this-page="1" />
<sethtmlpagefooter name="myfooter" value="on" />

<div class="row">

<div class="col1" style="padding-top: 15px;">
<img src="iv.5.png" width="100" />
<h3>เรียกเก็บไปยัง  :</h3>
<div class="name"><b>ชื่อ :</b> ลูกค้า/บริษัท .... </div>

<div class="email"><b>Email : </b> customer@gmail.com</div>
</div>

<div class="col2" style="text-align: right; padding-top: 15px;">
<h2>ใบแจ้งหนี้เลขที่ : </h2>
<h2>วันที่แจ้ง : </h2>
<h2>วันครบกำหนด: </h2>
<h2>จำนวนเงิน : </h2>
</div>

<div class="col3 floatright" style="padding-top: 15px;">
<div class="invoice no"><h2> 123456</h2></div>
<div class="date"><h2> 07/11/2021</h2></div>
<div class="due date"><h2> 21/11/2021</h2></div>
<h2>&#3647;5,000</h2>
</div>

</div>


<br />
<!-- INVOICE ITEMS HERE -->



<table class="items" >
<thead>
<tr style="background-color: #f5f5f5;">
<td width="10%" style="color: #ff2266;"><b>บริการ</b></td>
<td width="40%" style="color: #ff2266;"><b>คำอธิบาย</b></td>
<td width="10%" style="color: #ff2266;"><b>ภาษีมูลค่าเพิ่ม</b></td>
<td width="10%" style="color: #ff2266;"><b>จำนวน</b></td>
<td width="15%" style="color: #ff2266;"><b>ราคา</b></td>
<td width="15%" style="color: #ff2266;"><b>จำนวนเงิน</b></td>
</tr>
</thead>

<tbody>
<tr>
  <td>ขาย</td>
  <td>ออกแบบเว็บไซต์</td>
  <td>7.00%</td>
  <td>1</td>
  <td>&#3647;5,000</td>
  <td>&#3647;5,000</td>
</tr>


<tr>
<td class="blanktotal" colspan="2" rowspan="5">
</td>
</tr>

<tr>
<td class="totals">ยอดรวมย่อย</td>
<td></td>
<td></td>
<td class="totals">&#3647;5,000</td>

</tr>

<tr>
<td class="totals">ภาษีมูลค่าเพิ่ม</td>
<td></td>
<td></td>
<td class="totals">&#3647;350</td>

</tr>

<tr>
<td class="totals">ยอดรวม</td>
<td></td>
<td></td>
<td class="totals">&#3647;5,350</td>

</tr>

<tr>
<td class="totals">การชำระเงิน</td>
<td></td>
<td></td>
<td class="totals">&#3647;5,350</td>
</tr>
</tbody>

<tfoot>
<tr style="background-color: #f5f5f5;">
<td width="20%" style="color: #ff2266;"><b>สรุปภาษีมูลค่าเพิ่ม</b></td>
<td width="20%" style="color: #ff2266;"><b>ราคา</b></td>
<td width="20%" style="color: #ff2266;"><b></b></td>
<td width="15%" style="color: #ff2266;"><b>ภาษีมูลค่าเพิ่ม</b></td>
<td width="10%" style="color: #ff2266;"><b></b></td>
<td width="15%" style="color: #ff2266;"><b>จำนวนเงินสุทธิ</b></td>
</tr>

<tr>
<td width="20%" style="color: #ff2266;"><b></b></td>
<td width="20%" style="color: #ff2266;"><b>&#3647;350</b></td>
<td width="20%" style="color: #ff2266e;"><b></b></td>
<td width="15%" style="color: #ff2266;"><b>7.00%</b></td>
<td width="10%" style="color: #ff2266;"><b></b></td>
<td width="15%" style="color: #ff2266;"><b>&#3647;5,350</b></td>
</tr>
</tfoot>
</table>

<!-- END ITEMS HERE -->

';

$termsHTML = '
<div class="tenthmatrixlogo">
<ximg src="/Volumes/GoogleDrive/.shortcut-targets-by-id/1-9_ANNWeOpmVIwN01qqEiImCs6RH8tks/WorkstationSolsGoogleDrive/Shared_TenthMatrix_CRM_DEV/Tenthmatrixv18/TENTHMATRIX_CRM_DATA/php_components/mpdf60/examples/mysignature.png" width="150" />
</div>


<br />

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
<p>บริษัท เวิร์คสเตชั่น โซลูชั่นส์ จำกัด, ได้จดทะเบียนเป็นนิติบุคคลตามประมวลกฎหมายแพ่งและพาณิชย์ ณ สำนักงานทะเบียนหุ้นส่วนบริษัท อุบลราชธานี <br />เมื่อวันที่ 21 กรกฎาคม 2020 ทะเบียนเลขที่: 0345563001684, ที่ตั้งบริษัท: 617 หมู่ 10 , ตำบลเมืองเดช ,อำเภอเดชอุดม จังหวัดอุบลราชธานี, 34160.</p>
<p><b>หมายเหตุ:</b> ใบแจ้งหนี้นี้สร้างโดย Workstation CRM และระบบการออกใบแจ้งหนี้โดยอัตโนมัติ</p>

<div class="date">วันที่ : 18/11/2021</div>
<div class="time"> เวลา: 22:30:05</div>
</body>
  ';
//

$mpdf->WriteHTML($nokhtml . $termsHTML);


//

$mpdf->Output();


?>