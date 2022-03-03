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
<td><b>FACTURE NO :</b></td>
<td><b>DATE :</b></td>
<td><b>DUE DATE :</b></td>
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
<p>SRL Balinder Walia Workstation <br />Avenue de Roodebeeck 78,1030 BRUXELLES (SCHAERBEEK)<br />Tel: 049 245 6746<br />Email: workstationsols@gmail.com</p>
</div>
</div>





<htmlpagefooter name="myfooter">
<div style="border-top: 1px solid #333333; font-size: 9pt; text-align: center; padding-top: 1mm; ">
Page {PAGENO} of {nb}
</div>
</htmlpagefooter>

<sethtmlpageheader name="myheader" value="on" show-this-page="1" />
<sethtmlpagefooter name="myfooter" value="on" />



<h2>FACTURER À:</h2>


<div class="container" width="35%" style="background-color: #d4f1ff; padding: 20px;">
<div class="name"><b>Nom du client :</b>  ..... </div>
<div class="address"><b>Adresse :</b>  ..... </div>
<div class="email"><b>E-MAIL : </b> customer@gmail.com </div>
<div class="project"><b>PROJET :</b> Nouveau site Web et nom de domaine </div>
</div>


<br />


<!-- INVOICE ITEMS HERE -->

<table class="items" >

<tr style="background-color: #d4f1ff">
<td width="10%"><b>PÉRIODE</b></td>
<td width="50%"><b>LA DESCRIPTION</b></td>
<td width="10%"><b>UNITÉS</b></td>
<td width="15%"><b>PRIX UNITAIRE</b></td>
<td width="15%"><b>TOTAL</b></td>
</tr>
<tr>
  <td>1</td>
  <td>Création de sites webe</td>
  <td>1</td>
  <td>&#8364;500</td>
  <td>&#8364;500</td>
</tr>
<tr>
  <td>2</td>
  <td>Nom de domaine</td>
  <td>2</td>
  <td>&#8364;50</td>
  <td>&#8364;50</td>
</tr>

<tr>
<td width="10%"><b>Subtotal(excl. VAT):</b></td>
<td width="50%"><b>T.V.A. 21,00%:</b></td>
<td width="10%"><b>Total :</b></td>
</tr>

<tr>
<td width="10%"><b>&#8364;550</b></td>
<td width="50%"><b>&#8364; 115.5</b></td>
<td width="10%"><b>&#8364;665.5</b></td>
<td width="20%" style="background-color: #d4f1ff"><h1>&#8364; 665.5</h1>
</tr>
</table>
<hr style="color:#d4f1ff">


<!-- END ITEMS HERE -->

';

$termsHTML = '
<div class="tenthmatrixlogo">
<ximg src="/Volumes/GoogleDrive/.shortcut-targets-by-id/1-9_ANNWeOpmVIwN01qqEiImCs6RH8tks/WorkstationSolsGoogleDrive/Shared_TenthMatrix_CRM_DEV/Tenthmatrixv18/TENTHMATRIX_CRM_DATA/php_components/mpdf60/examples/mysignature.png" width="150" />
</div>


<h3><i>Merci pour votre entreprise.</i></h3>
<b><u>Note:</u></b>
<p>Je certifie que cette affirmation est à tous égards vraie, correcte, étayée par la documentation disponible et conforme à tous les termes et
conditions, lois et règlements régissant ses paiements.</p>
<p>Veuillez noter que nos conditions de paiement pour cette facture sont NET 15. Des intérêts seront facturés sur toutes les factures qui ne sont pas payées à temps.
 </p>
 
 <div class="bankDetails" cellpadding="8" cellspacing="0"  style="width: 40%">
 <p><b>paiement en ligne:</b>
 <p><b>Bank name :</b> <img src="ing.png" width="20"  />ING BELGIUM</p>
 <p><b>Account name : </b>Workstation SRL</p>
 <p><b>Country code iso : </b>BEL</p>
<p><b>IBAN : </b>BE50 0015 4190 4118</p>
<p><b>BIC code / SWIFT Code : </b>GEBABEBB</p>
 </div>

</body>

';
//

$mpdf->WriteHTML($nokhtml . $termsHTML);


//

$mpdf->Output();


?>