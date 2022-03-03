<?php
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf([
	'default_font_size' => 16,
	'default_font' => 'manrope'
]);


$nokhtml = '
<style>
body {
	font-family: manrope;
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
	font-family:manrope; 
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
	font-family: manrope;
	border-collapse: collapse;
	width: 100%;
  }
  
  td, th {
	border-bottom: 1px solid #788292;
	text-align: center;
	padding: 8px;
  }
 
  .items td.blanktotal {
    background-color: #FFFFFF;
    border: 0mm none #FFFFFF;
    
	text-align: left;
}
.items td.totals {
    text-align: right;
}

.title {
    text-align: center;
    background-color: #ff3366;
    color: #ffffff;
}
img {
    padding-right: 10px;
}

  </style>



<body>
<div class="logo">
<img src="worklogosmall2.png" width="180"  />

<hr style="color: #ff3366;">
</div>


<h4 >SRL Balinder Walia Workstation 78,Box 59 Diament ,Schaerbeek,Brussels Belgium ,1030.<br />VAT NO: BE0751.518.683 , Email: workstationsols@gmail.com</h4>



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
<div class="col1" style="padding: left 20px; border: 1px solid #ff3366;">
<div class="name"><b>NAME : ...</b></div>
<div class="address"><b>ADDRESS :...</b></div>
<div class="tel"><b>Tel : 000 000 0000</b></div>
<div class="email"><b>Email : customer@gmail.com</b></div>
</div>

<div class="col2 floatright" style="padding: left 20px; border: 1px solid #ff3366;">
<div class="quotationnumber"><b>QUOTATION NO :000</b> </div>
<div class="date"><b>DATE : 12/11/2021</b></div>
<div class="due date"><b>DUE DATE :19/11/2021</b></div>
<div class="vat"><b>VAT NUMBER :1234567890</b></div>
</div>
</div>
<br />
<h4><u>We would like to offer the price and conditions for you as follows.</u></h4>
<br />
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
<td class="totals" style="background-color: #f5f5f5;">&#8364; 000 </td>
</tr>

<tr>
<td class="totals">VAT 21,00%:</td>
<td class="totals" style="background-color: #f5f5f5;">&#8364; 000</td>
</tr>


<tr>
<td class="totals"><b>Total:</b></td>
<td class="totals" style="background-color: #f5f5f5;"><b>&#8364; 000 </b></td>
</tr>

</table>



<div class="total" style="background-color: #788292; text-align: right; padding: right 10px;">
<h2>Grand Total : (five hundred pounds)   &#8364; 5,000 </h2>
</div>


<br />

<div class="row">
<div class="col1" style="padding: left 20px; border: 1px solid #ff3366;">
<p><b>Terms and conditions for requesting a quote : </b><br />.1st installment.) Pay 50% before starting the process.<br />
.2nd installment.) 50% payment after the delivery of the work / the website is actually used<br />- Take care after the website has been used for 3 months.<br />- This price is agreed upon within 7 days</p>
</div>

<div class="col2 floatright" style="padding: left 20px; border: 1px solid #ff3366;">
<p><b>payment information :</b> <img src="ing.png" width="20"  />ING BELGIUM  <br />Account name : Workstation SRL <br />IBAN :BE50 0015 4190 411 , GEBABEBB<br /><b> confirmation of quotation : </b>Transfer money and send a confirmation email to workstationsols@gmail.com</p>
</div>
</div>


<br />

<div class="row">
<div class="col1" style="text-align: center;">
<p><b> .........................................................</b></p>
<p>Bidder<br />Date 00/00/0000</p>
</div>
<div class="col2 floatright" style="text-align: center;">
<p><b> .........................................................</b></p>
<p>Offeree<br />Date 00/00/0000</p>
</div>
</div>





</body>';


//

$mpdf->WriteHTML($nokhtml . $termsHTML);


//

$mpdf->Output();


?>