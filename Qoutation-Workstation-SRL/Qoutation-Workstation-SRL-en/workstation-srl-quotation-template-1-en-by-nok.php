<?php
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf([
	'default_font_size' => 16,
	'default_font' => 'inter'
]);


$nokhtml = '
<style>
body {
	font-family: inter;
	font-size: 16px;
	padding :0; margin: 0;
}
.row{
	clear:both;
	overflow:hidden;
}

.col1, .col2, .col3, .col4, .col5, .col6{
	float:left;
	width:40%;
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
	font-family: inter;
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

<h4 >SRL Balinder Walia Workstation <br />Avenue de Roodebeeck 78,1030 BRUXELLES (SCHAERBEEK)<br />Tel: 049 245 6746<br />Email: workstationsols@gmail.com</h4>

</div>

<div class="col2 floatright">
<h1>Devis/ Quotation</h1>
<hr>
<div class="quotation"><b>Quotation number: ws-0001</b></div> 
<div class="date"><b>Date : 01/11/2021</b></div> 
<div class="due date"><b>Due Date : 15/11/2021</b></div> 


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
<div class="name"><b>Customer Name :... </b></div>
<div class="address"><b>Address :...</b></div>
<div class="tel"><b>Tel: 000 000 0000</b></div>
</div>

<div class="col2 floatright" style="padding: 15px;">
<div class="job"><b>Job title : small website design</b></div>
<div class="vat"><b>VAT NO. :12345678 </b></div>
<div class="email"><b>Email: customers@gmail.com</b></div>
</div>
</div>
<hr>

<h3>SRL Balinder Walia Workstation. Request a quote for the work as follows:</h3>




<table class="items">
<tr>
<th width="10%">No</th>
<th width="50%">Description </th>
<th width="10%">Unit</th>
<th width="15%">Unit price</th>
<th width="15%">Total</th>
</tr>

<tr>
<td>1</td>
<td>small website design-one page website (Free hosting and domain name for the first year)</td>
<td>1</td>
<td>5,000 </td>
<td>5,000 </td>
</tr>

<tr>
<td class="blanktotal" colspan="3" rowspan="6" >
</td>

</tr>

<tr>
<td class="totals">subtotal (excl. VAT):</td>
<td class="totals">&#8364;000 </td>
</tr>

<tr>
<td class="totals">VAT 21,00%:</td>
<td class="totals">&#8364;</td>
</tr>

<tr>
<td class="totals" style="background-color: #f5f5f5;"><b>Total:</b></td>
<td class="totals" style="background-color: #f5f5f5;"><b>&#8364;0000 </b></td>
</tr>

</table>

<div class="row">
<div class="col1">
<p><b><i>Note :</i> </b><br /> . Confirm the price within 15 days from the date of quotation.<br /> . Take care after the website has been used for 3 months. </p>

<p><b><i> Payment terms:</i> </b><br />.1st installment.) Pay 50% before starting the process.<br />
.2nd installment.) 50% payment after the delivery of the work / the website is actually used</p>
</div>

<div class="col2 floatright">
<p><b><i>payment information :</i></b><br /> <img src="ing.png" width="20"  />ING BELGIUM : Workstation SRL <br />IBAN :BE50 0015 4190 411<br />GEBABEBB</p>
</div>
</div>


</div>
<div class="col2 floatright">
<h3>
sign _________________________bidder<br />SRL Balinder Walia Workstation<br />   Date 01 / 11/ 2021</h3>
</div>
</div>
<br />
<h5>* confirmation of quotation : Transfer money and send a confirmation email to workstationsols@gmail.com</h5>

<div class="date">Date : 01/11/2021</div>
<div class="time">Time : 20.00</div>
</body>';


//

$mpdf->WriteHTML($nokhtml . $termsHTML);


//

$mpdf->Output();


?>