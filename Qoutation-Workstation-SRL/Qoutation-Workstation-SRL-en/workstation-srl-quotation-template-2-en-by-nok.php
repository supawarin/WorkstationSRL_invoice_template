<?php
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf([
	'default_font_size' => 15,
	'default_font' => 'domine'
]);


$nokhtml = '
<style>
body {
	font-family: domine;
	font-size: 15px;
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
	font-family: domine;
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
<h1>Quotation</h1>
<div class="name"><b>Name :</b></div>
<div class="address"><b>Address :</b></div>
<div class="tel"><b>Tel :000 000 0000</b></div>
<div class="email"><b>Email : customer@gmail.com</b></div>
</div>

<div class="col2 floatright">
<img src="worklogosmall2.png" width="240"  />
<h3>SRL Balinder Walia Workstation</h3>
<hr style="color: #3860bb;"><br />

<div class="date"><h3>Date : 02/11/2021 </h3></div>
<div class="due date"><h3>Due Date : 17/11/2021</h3></div>
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
<th width="50%">Description</th>
<th width="10%">Unit</th>
<th width="20%">Unit price</th>
<th width="20%">Total</th>
</tr>

<tr>
<td>New website design (Free hosting and domain name for the first year)</td>
<td>1</td>
<td>&#8364; 15,000</td>
<td>&#8364; 15,000</td>
</tr>

<tr>
<td class="blanktotal" colspan="2" rowspan="6" >
</td>

</tr>

<tr>
<td class="totals">Subtotal (excl. VAT):</td>
<td class="totals">&#8364; 000 </td>
</tr>

<tr>
<td class="totals">VAT 21,00%:</td>
<td class="totals">&#8364;000 </td>
</tr>

<tr>
<td class="totals" style="background-color: #dfe6ef;;"><b>Total:</b></td>
<td class="totals" style="background-color: #dfe6ef;;"><b>&#8364;0000 </b></td>
</tr>

</table>

<p><b><i>Note :</i> </b><br /> . Confirm the price within 15 days from the date of quotation.<br /> . Take care after the website has been used for 3 months. </p>

<p><b><i> Payment terms:</i> </b><br />.1st installment.) Pay 50% before starting the process.<br />
.2nd installment.) 50% payment after the delivery of the work / the website is actually used</p>

<p><b><i>payment information :</i></b><br /> <img src="ing.png" width="20"  />ING BELGIUM : Workstation SRL <br />IBAN :BE50 0015 4190 411<br />GEBABEBB</p>

<hr style="color: #3860bb;">
<br />
<br />
<br />
<div class="row">
<div class="col1">
<h5>sign.....................................................bidder<br />    <br />            (...........................................................)   </h5>
</div>

<div class="col2 floatright">
<h5>sign.................................................approver<br />    <br />            (...........................................................)   </h5>
</div>
</div>
<br />
<h5>* confirmation of quotation : Transfer money and send a confirmation email to workstationsols@gmail.com</h5>

<p> Workstation SRL,Is a registered Ltd company in Belgium <br />company number : 752 VAT number:BE0751.518.683, Registered office address: 78,Box 59 Diament ,Schaerbeek,Brussels Belgium ,1030.</p>

<div class="date">Date : 02/11/2021</div>
<div class="time">Time : 03.30</div>

</body>';


//

$mpdf->WriteHTML($nokhtml . $termsHTML);


//

$mpdf->Output();


?>