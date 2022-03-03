<?php
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf([
	'default_font_size' => 13,
	'default_font' => 'Rubik'
]);

$nokhtml = '
<style>
body {
	font-family: Rubik;
	font-size: 13px;
	padding :0; margin: 0;
}

.col1, .col2, .col3, .col4, .col5, .col6{
	float:left;
	width:40%
}
h1, h2, h3, h4, h5, h6 {
padding-left: 20px;
margin : 0;
}

.floatleft{
	float:left;
}

.floatright{
	float:right;
}
table {
	font-family: Rubik;
	border-collapse: collapse;
	width: 100%;
    
  }
  
  
th ,td{
    border-top: 1px solid #eef2f7;
   
    text-align: center;
	padding: 8px;
  }
  img {
    padding: right 10px;
  }

  </style>

  <body>

  <htmlpagefooter name="myfooter">
  <div style="border-top: 1px solid #333333; font-size: 9pt; text-align: center; padding-top: 1mm; ">
  Page {PAGENO} of {nb}
  </div>
  </htmlpagefooter>
  
  <sethtmlpageheader name="myheader" value="on" show-this-page="1" />
  <sethtmlpagefooter name="myfooter" value="on" />
  
<div class="row">
<div class="col1">
<img src="iv.3.png" width="200" />
<br />
<br />
<div class="date"><h2>DATE : 04/11/2021</h2></div>
<div class="due date"><h2>DUE DATE : 18/11/2021</h2></div>
<hr style="color:#0066ff;">

<div class="container">
<h2>FACTURER À :</h2>
<div class="name"><b>Nom du client:</b> ........</div>
<div class="address"><b>Adresse :</b> ........</div>
<div class="tel"><b>TEL :</b> 000 000 0000</div>
<div class="email"><b>E-MAIL :</b> customer@gmail.com</div>



</div>

</div>

<div class="col2 floatright">

<img src="worklogosmall2.png" width="240" />
<p>SRL Balinder Walia Workstation <br />Avenue de Roodebeeck 78, 1030 BRUXELLES ( SCHAERBEEK )<br />Tel: 049 245 6746<br />Email: workstationsols@gmail.com</p>

<div class="invoice no"><h2>FACTURE NO : 12345</h2></div>
<div class="project"><h2>PROJET: Nouveau site Web </h2></div>
</div>
</div>  
<hr style="color:#999999;">

<br />


<!-- INVOICE ITEMS HERE -->

<table class="items" >
<tr>
<td width="10%"><b>PÉRIODE</b></td>
<td width="50%"><b>LA DESCRIPTION</b></td>
<td width="10%"><b>UNITÉS</b></td>
<td width="15%"><b>PRIX UNITAIRE</b></td>
<td width="15%" style="background-color: #eef2f7;"><b>Amount</b></td>
</tr>

<tr>
  <td>1</td>
  <td>Création de sites webe</td>
  <td>1</td>
  <td>&#8364;500</td>
  <td style="background-color: #eef2f7;">&#8364;500</td>
</tr>
<tr>
  <td>2</td>
  <td>Nom de domaine</td>
  <td>1</td>
  <td>&#8364;50</td>
  <td style="background-color: #eef2f7;">&#8364;50</td>
</tr>
<tr>
<td class="blanktotal" colspan="3" rowspan="6">

</td>
</tr>
<td class="totals">SUBTOTAL (excl. V.A.T.):</td>
<td class="totals" style="background-color: #eef2f7;">&#8364;550</td>
</tr>
<tr>
<td class="totals">V.A.T. 21,00%:</td>
<td class="totals" style="background-color: #eef2f7;">&#8364; 115.5</td>
</tr>

<tr>
<td class="totals"><b>TOTAL:</b></td>
<td class="totals" style="background-color: #eef2f7;"><b> &#8364;665.5</b></td>
</tr>

</table>


<!-- END ITEMS HERE -->

<div class="row" style="background-color: #0066ff; color:#ffffff;">
<div class="col1">
<h1>Merci pour votre entreprise.</h1>
</div>

<div class="col2 floatright">
<h1> TOTAL : &#8364;665.5</h1>
</div>
</div>
<hr style="color:#999999;">

<div class="row">
<div class="col1">
<p><b>Note :</b>Je certifie que cette affirmation est à tous égards vraie, correcte, étayée par la documentation disponible et conforme à tous les termes et
conditions, lois et règlements régissant ses paiements.</p>
</div>
<div class="col2 floatright">
<p><b>Termes :</b> Veuillez noter que nos conditions de paiement pour cette facture sont NET 15. Des intérêts seront facturés sur toutes les factures qui ne sont pas payées à temps.</p>
</div>
</div>

<h3>Veuillez effectuer le paiement par virement électronique à:</h3>

<div class="row">
<div class="col1">

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



<p><b>Noter:</b> <br />Cette facture a été générée automatiquement par Workstation CRM et le système de facturation.</p>

<div class="date">Date : 04/11/2021</div>
<div class="time">Time : 11.00</div>
  </body>

';
//

$mpdf->WriteHTML($nokhtml . $termsHTML);


//

$mpdf->Output();


?>