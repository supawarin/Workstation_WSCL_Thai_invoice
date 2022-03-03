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
	border-bottom: 1px solid #dfe6ef;;
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
<div class="col1" style="background-color: #dfe6ef; border: 1px solid #3860bb; padding: 15px;">
<h1>ใบเสนอราคา</h1>
<div class="name"><b>ชื่อ :</b></div>
<div class="address"><b>ที่อยู่ :</b></div>
<div class="tel"><b>เบอร์โทร :000 000 0000</b></div>
<div class="email"><b>Email : customer@gmail.com</b></div>
</div>
<div class="col2 floatright">
<img src="worklogosmall2.png" width="240"  />
<h3>บริษัท เวิร์คสเตชั่น โซลูชั่นส์ จำกัด</h3>
<hr style="color: #3860bb;"><br />
<div class="date"><b>วันที่เสนอ : 02/11/2021 </b></div>
<div class="due date"><b>วันครบกำหนด : 17/11/2021</b></div>
</div>
</div>
ิ<br />

<htmlpagefooter name="myfooter">
<div style="border-top: 1px solid #333333; font-size: 9pt; text-align: center; padding-top: 1mm; ">
Page {PAGENO} of {nb}
</div>
</htmlpagefooter>

<sethtmlpageheader name="myheader" value="on" show-this-page="1" />
<sethtmlpagefooter name="myfooter" value="on" />

<hr style="color: #3860bb;">
<table class="items">
<tr style="background-color: #dfe6ef;">
<th width="50%">บริการ/คำอธิบาย</th>
<th width="10%">หน่วย</th>
<th width="20%">ราคาต่อหน่วย</th>
<th width="20%">จำนวนเงิน(บาท)</th>
</tr>

<tr>
<td>ออกแบบเว็บไซต์ร้านค้าออนไลน์ (ฟรีโฮสติ้งและโดเมนเนมปีแรก)</td>
<td>1</td>
<td>15,000</td>
<td>15,000</td>
</tr>

<tr>
<td class="blanktotal" colspan="2" rowspan="6" >
</td>

</tr>

<tr>
<td class="totals">ยอดรวมย่อย (excl. VAT):</td>
<td class="totals">15,000 ฿</td>
</tr>

<tr>
<td class="totals">ภาษีมูลค่าเพิ่ม 7,00%:</td>
<td class="totals">1,050 ฿</td>
</tr>

<tr>
<td class="totals" style="background-color: #dfe6ef;;"><b>ยอดรวมสุทธิ:</b></td>
<td class="totals" style="background-color: #dfe6ef;;"><b>16,050 ฿</b></td>
</tr>

</table>

<p><b><i>หมายเหตุ :</i> </b><br /> . ยืนยันราคาภายใน 15 วัน นับจากวันเสนอราคา<br /> . ดูแลหลังจากเว็บใช้จริงเป็นเวลา 3 เดือน </p>

<p><b><i> เงื่อนไขการชำระเงิน:</i> </b><br />.งวดที่ 1.) ชำระ 50% ก่อนเริ่มดำเนินการ<br />
.งวดที่ 2.) ชำระ 50% หลังส่งมอบงาน/เว็บขึ้นใช้จริง</p>

<p><b><i>ข้อมูลการชำระเงิน :</i></b><br /> <img src="k.png" width="20"  />ธนาคารกสิกรไทย : บจก.เวิร์คสเตชั่น โซลูชั่นส์ <br />เลขที่บัญชี :073-1-81570-4<br />.สาขาเดชอุดม</p>

<hr style="color: #3860bb;">
<br />
<br />
<br />
<div class="row">
<div class="col1">
<h3>ลงชื่อ.....................................................ผู้เสนอราคา<br />               (...........................................................)   </h3>
</div>

<div class="col2 floatright">
<h3>ลงชื่อ.....................................................ผู้อนุมัติ<br />               (...........................................................)   </h3>
</div>
</div>
<br />
<h3>* ยืนยันใบเสนอราคา : โอนเงินและส่งเมลล์ยืนยันที่ workstationsols@gmail.com</h3>

<p>บริษัท เวิร์คสเตชั่น โซลูชั่นส์ จำกัด, ได้จดทะเบียนเป็นนิติบุคคลตามประมวลกฎหมายแพ่งและพาณิชย์ ณ สำนักงานทะเบียนหุ้นส่วนบริษัท อุบลราชธานี <br />เมื่อวันที่ 21 กรกฎาคม 2020 ทะเบียนเลขที่: 0345563001684, ที่ตั้งบริษัท: 617 หมู่ 10 , ตำบลเมืองเดช ,อำเภอเดชอุดม จังหวัดอุบลราชธานี, 34160.</p>
<div class="date">Date : 02/11/2021</div>
<div class="time">Time : 03.30</div>

</body>';


//

$mpdf->WriteHTML($nokhtml . $termsHTML);


//

$mpdf->Output();


?>