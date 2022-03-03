<?php
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf([
	'default_font_size' => 12,
	'default_font' => 'Hind Siliguri'
]);

$nokhtml = '
<style>
body {
	font-family: Hind Siliguri;
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
	font-family: Hind Siliguri;
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
<p><b>Address :</b><br />SRL Balinder Walia Workstation <br />Avenue de Roodebeeck 78, 1030 <br />BRUXELLES ( SCHAERBEEK )</p>
</div>

<div class="col3 floatright">
<p><b>Email :</b><br />workstationsols@gmail.com<br /><b>Phone:</b><br /> 049 245 67465</p>
</div>
</div>


<hr style="color:#ff0066">

<div class="row">
<div class="col1">
<img src="iv.4.png" width="200"  />
<br />
</div>

<div class="col2" style="text-align: right;">
<h1>PROJECT : </h1>
</div>

<div class="col3 floatright">
<div class="project"><h1>New website</h1></div>
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
<h2>INVOICE TO :</h2>
<div class="name"><b>NAME :</b> Customer ..... </div>
<div class="address"><b>ADDRESS :</b>  UK ,34160..... </div>
<div class="email"><b>Email : </b> customer@gmail.com</div>

</div>

<div class="col2" style="text-align: right;">
<h2>INVOICE NO : </h2>
<h2>DATE : </h2>
<h2>DUE DATE : </h2>
<h2>TOTAL : </h2>
</div>

<div class="col3 floatright">
<div class="invoice no"><h2> 12345</h2></div>
<div class="date"><h2> 06/11/2021</h2></div>
<div class="due date"><h2> 20/11/2021</h2></div>
<div class="totals"><h2>&#8364;665.5</h2></div>
</div>

</div>
<br />
<!-- INVOICE ITEMS HERE -->



<table class="items" >
<tr style="background-color: #de3163;">
<td width="10%" style="color: #fff;"><b>PERIOD</b></td>
<td width="50%" style="color: #fff;"><b>DESCRIPTION</b></td>
<td width="10%" style="color: #fff;"><b>UNITS</b></td>
<td width="15%" style="color: #fff;"><b>UNIT PRICE</b></td>
<td width="15%" style="color: #fff;"><b>AMOUNT</b></td>
</tr>
<tr>
  <td>1</td>
  <td>New Website</td>
  <td>1</td>
  <td>&#8364;500</td>
  <td>&#8364;500</td>
</tr>
<tr>
  <td>2</td>
  <td>Domanname</td>
  <td>1</td>
  <td>&#8364;50</td>
  <td>&#8364;50</td>
</tr>

<tr>
<td class="blanktotal" colspan="3" rowspan="6">
<h2>Thank you for doing business with us.</h2>
</td>
</tr>

<tr>
<td class="totals">SUBTOTAL (excl. VAT):</td>
<td class="totals" style="background-color: #f5f5f5;">&#8364;550</td>
</tr>

<tr>
<td class="totals">VAT 21,00%:</td>
<td class="totals" style="background-color: #f5f5f5;">&#8364; 115.5</td>
</tr>

<tr>
<td class="totals" style="background-color: #de3163; color: #fff;"><b>TOTAL:</b></td>
<td class="totals" style="background-color: #de3163; color: #fff;"><b> &#8364;665.5</b></td>
</tr>
</table>

<!-- END ITEMS HERE -->

';

$termsHTML = '
<div class="tenthmatrixlogo">
<ximg src="/Volumes/GoogleDrive/.shortcut-targets-by-id/1-9_ANNWeOpmVIwN01qqEiImCs6RH8tks/WorkstationSolsGoogleDrive/Shared_TenthMatrix_CRM_DEV/Tenthmatrixv18/TENTHMATRIX_CRM_DATA/php_components/mpdf60/examples/mysignature.png" width="150" />
</div>


<p><b>Note :</b>I certify that this claim is in all respects true, correct, supportable by available documentation, and in compliance with all the terms and
conditions, laws and regulations governing its payments.</p>

<p><b>Terms :</b> Please note that our payment terms for this Invoice are NET 15. Interest will be charged on all Invoice that are not paid on time.</p>
<h3>Please make payment by electronic transfer to:</h3>


<div class="row">
<div class="col5">
<table class="detail">
<tr style="background-color: #eef2f7;">
<td >Bank name :</td>
<td ><img src="ing.png" width="20"  />ING BELGIUM</td>
</tr>

<tr>
<td >Account name :</td>
<td >Workstation SRL</td>
</tr>

<tr style="background-color: #eef2f7;">
<td>Country code iso :</td>
<td>BEL</td>
</tr>

<tr>
<td>IBAN :</td>
<td>BE50 0015 4190 4118</td>
</tr>

<tr style="background-color: #eef2f7;">
<td>BIC code / SWIFT Code :</td>
<td>GEBABEBB</td>
</tr>
</table>
</div>
</div>
<p><b>Questions?:</b> Email:workstationsols@gmail.com Or Call: 049 245 67465</p>

<p><b>Note: </b> This Invoice was generated by  Workstation CRM and Invoicing system automatically.</p>

<div class="date">Date :06/11/2021</div>
<div class="time">Time :18.25</div>
</body>
  ';
//

$mpdf->WriteHTML($nokhtml . $termsHTML);


//

$mpdf->Output();


?>