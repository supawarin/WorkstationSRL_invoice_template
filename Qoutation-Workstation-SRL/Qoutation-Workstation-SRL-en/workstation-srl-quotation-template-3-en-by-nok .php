<?php
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf([
	'default_font_size' => 15,
	'default_font' => 'manrope'
]);


$nokhtml = '
<style>
body {
	font-family: manrope;
	font-size: 15px;
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
	font-family:gotham; 
	font-size: 12px;
	margin: 0;
}
.floatleft{
	float:left;
}

.floatright{
	float:right;
}
table {
	font-family: manrope;
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
<h4 >SRL Balinder Walia Workstation 78,Box 59 Diament ,Schaerbeek,Brussels Belgium ,1030.<br />VAT NO: BE0751.518.683 , Email: workstationsols@gmail.com</h4>

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
<h2> QUOTATION</h2>
</div>

<div class="row">
<div class="col1" style="padding: left 20px; border: 1px solid #63b8ff;">
<p><b>NAME : </b>.........<br /><b>ADDRESS :</b>BELGIUM,1030<br /><b>Tel : </b>000 000 0000<br /><b>Email : </b>customer@gmail.com</p>
</div>

<div class="col2 floatright" style="padding: left 20px; border: 1px solid #63b8ff;">
<p><b>QUOTATION NO :</b> ws001<br /><b>DATE :</b> 12/11/2021<br /><b>DUE DATE :</b> 19/11/2021<br /><b>VAT NUMBER :</b>1234567890</p>
</div>
</div>
<br />
<h4>We would like to offer the price and conditions for you as follows.</h4>

<table class="items">
<tr>
<th width="10%">No</th>
<th width="50%">Description</th>
<th width="10%">Unit</th>
<th width="15%">Unit price</th>
<th width="15%">Total</th>
</tr>

<tr>
<td>1</td>
<td>New website design (Free hosting and domain name for the first year)</td>
<td>1</td>
<td>&#8364; 000 </td>
<td>&#8364; 000 </td>
</tr>

<tr>
<td class="blanktotal" colspan="3" rowspan="5" >

</td>

</tr>

<tr>
<td class="totals">Subtotal (excl. VAT):</td>
<td class="totals">&#8364; 000 </td>
</tr>

<tr>
<td class="totals">VAT 21,00%:</td>
<td class="totals">&#8364; 000</td>
</tr>

<tr>
<td class="totals" style="background-color: #87ceff;"><b>Total:</b></td>
<td class="totals" style="background-color: #87ceff;"><b>&#8364; 000 </b></td>
</tr>

</table>

<br />

<div class="row">
<div class="col1" style="padding: left 20px; border: 1px solid #63b8ff;">
<p><b>Terms and conditions for requesting a quote : </b><br />.1st installment.) Pay 50% before starting the process.<br />
.2nd installment.) 50% payment after the delivery of the work / the website is actually used<br />- Take care after the website has been used for 3 months.</p>
</div>

<div class="col2 floatright" style="padding: left 20px; border: 1px solid #63b8ff;">
<p><u>I certify that the above work will be delivered within the time limit.</u><br />bidder : Workststion Solutions Co.,Ltd.<br />Order by :............................<br />Note : This price is agreed upon within 7 days.</p>
</div>
</div>


<p><b><i>payment information :</i></b><br /> <img src="ing.png" width="20"  />ING BELGIUM : Workstation SRL <br />IBAN :BE50 0015 4190 411<br />GEBABEBB</p>

<h4>* confirmation of quotation : Transfer money and send a confirmation email to workstationsols@gmail.com</h4>

<br />
<div class="date">Date : 12/11/2021</div>
<div class="time">Time : 09.00</div>


</body>';


//

$mpdf->WriteHTML($nokhtml . $termsHTML);


//

$mpdf->Output();


?>