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
<h2> DEVIS</h2>
</div>

<div class="row">
<div class="col1" style="padding: left 20px; border: 1px solid #63b8ff;">
<div class="name"><b>Nom du client : </b></div>
<div class="address"><b>Adresse :</b></div>
<div class="tel"><b>Tél : 000 </b></div>
<div class="email"><b>customer@gmail.com</b></div>
</div>

<div class="col2 floatright" style="padding: left 20px; border: 1px solid #63b8ff;">
<div class="quotationnumber"><b>DEVIS NO : ws001</b></div>
<div class="date"><b>DATE : 12/11/2021</b></div>
<div class="due date"><b>DUE DATE :19/11/2021</b></div>
<div class="vat"><b>NUMÉRO DE TVA :1234567890</b></div>
</div>
</div>
<br />
<h4>Nous aimerions vous offrir le prix et les conditions comme suit.</h4>

<table class="items">
<tr>
<th width="10%">No</th>
<th width="50%">La description</th>
<th width="10%">Unité</th>
<th width="20%">Prix unitaire</th>
<th width="20%">Total</th>
</tr>

<tr>
<td>1</td>
<td>Nouveau design de site Web (hébergement et nom de domaine gratuits pour la première année)</td>
<td>1</td>
<td>&#8364; 000</td>
<td>&#8364; 000</td>
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
<td class="totals">V.A.T. 21,00%:</td>
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
<p><b>Termes et conditions pour demander un devis : </b><br />.1er versement.) Payez 50% avant de commencer le processus.<br />
.2e versement.) Paiement de 50% après la livraison de l œuvre / le site est effectivement utilisé<br />- Attention après 3 mois d utilisation du site.</p>
</div>

<div class="col2 floatright" style="padding: left 20px; border: 1px solid #63b8ff;">
<p><u>Je certifie que les travaux ci-dessus seront livrés dans les délais.</u><br />bidder : Workststion Solutions Co.,Ltd.<br />Order by :............................<br />Note : Ce prix est convenu dans les 7 jours.</p>
</div>
</div>


<p><b><i>Informations de paiement :</i></b><br /> <img src="ing.png" width="20"  />ING BELGIUM : Workstation SRL <br />IBAN :BE50 0015 4190 411<br />GEBABEBB</p>

<h4>* confirmation de devis : Transférez de l argent et envoyez un e-mail de confirmation à : workstationsols@gmail.com</h4>
<br />
<div class="date">Date : 12/11/2021</div>
<div class="time">Time : 09.00</div>

</body>';


//

$mpdf->WriteHTML($nokhtml . $termsHTML);


//

$mpdf->Output();


?>