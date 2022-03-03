<?php
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf([
	'default_font_size' => 15,
	'default_font' => 'domine'
]);


$nokhtml = '
<style>
body {
	font-family: domin;
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
	font-family: domin;
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
<h1>Devis</h1>
<div class="name"><b>Nom du client :</b></div>
<div class="address"><b>Adresse :</b></div>
<div class="tel"><b>Tél :000 000 0000</b></div>
<div class="email"><b>E-mail : customer@gmail.com</b></div>
</div>
<div class="col2 floatright">
<img src="worklogosmall2.png" width="240"  />
<h3>SRL Balinder Walia Workstation</h3>
<hr style="color: #3860bb;"><br />

<div class="date"><h3>Date : 02/11/2021 </h3></div>
<div class="due date"><h3> Due Date : 17/11/2021</h3></div>
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
<th width="50%">La description</th>
<th width="10%">Unité</th>
<th width="20%">Prix unitaire</th>
<th width="20%">Total</th>
</tr>

<tr>
<td>Nouveau design de site Web (hébergement et nom de domaine gratuits pour la première année)</td>
<td>1</td>
<td>&#8364; 000</td>
<td>&#8364; 000</td>
</tr>

<tr>
<td class="blanktotal" colspan="2" rowspan="6" >
</td>

</tr>

<tr>
<td class="totals">Subtotal (excl. V.A.T.):</td>
<td class="totals">&#8364; 000 </td>
</tr>

<tr>
<td class="totals">V.A.T. 21,00%:</td>
<td class="totals">&#8364;000 </td>
</tr>

<tr>
<td class="totals" style="background-color: #dfe6ef;;"><b>Total:</b></td>
<td class="totals" style="background-color: #dfe6ef;;"><b>&#8364;0000 </b></td>
</tr>

</table>

<p><b><i>Noter :</i> </b><br /> . Confirmer le prix dans les 15 jours à compter de la date du devis.<br /> . Attention après 3 mois d utilisation du site.  </p>

<p><b><i> Modalités de paiement:</i> </b><br />.1er versement.) Payez 50% avant de commencer le processus.<br />
.2e versement.) Paiement de 50% après la livraison de l œuvre / le site est effectivement utilisé</p>

<p><b><i>Informations de paiement :</i></b><br /> <img src="ing.png" width="20"  />ING BELGIUM : Workstation SRL <br />IBAN :BE50 0015 4190 411<br />GEBABEBB</p>

<hr style="color: #3860bb;">
<br />
<br />
<br />
<div class="row">
<div class="col1">
<h5>signe .....................................................soumissionnaire<br />    <br />            (...........................................................)   </h5>
</div>

<div class="col2 floatright">
<h5>signe .................................................approuver<br />    <br />            (...........................................................)   </h5>
</div>
</div>

<br />
<h5>* confirmation de devis : Transférez de l argent et envoyez un e-mail de confirmation à : workstationsols@gmail.com</h5>

<p> Workstation SRL, est une société SA enregistrée en Belgique <br />numéro d entreprise : 752 ,V.A.T. no :BE0751.518.683, Adresse du siège social: 78,Box 59 Diament ,Schaerbeek,Brussels Belgium ,1030.</p>
<div class="date">Date : 02/11/2021</div>
<div class="time">Time : 03.30</div>
</body>';


//

$mpdf->WriteHTML($nokhtml . $termsHTML);


//

$mpdf->Output();


?>