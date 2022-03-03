<?php
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf([
	'default_font_size' => 16,
	'default_font' => 'domine'
]);


$nokhtml = '
<style>
body {
	font-family: domine;
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
	font-family: domine;
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
<div class="quotation"><b>Numéro de devis: ws-0001</b> </div>
<div class="date"><b>Date : 01/11/2021</b> </div>
<div class="due date"><b>Due Date : 15/11/2021</b> </div>


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
<div class="name"><b>Nom du client : </b></div>
<div class="address"><b>Adresse :...</b></div>
<div class="tel"><b>Tél: 000 000 0000</b></div>
</div>

<div class="col2 floatright" style="padding: 15px;">
<div class="job"><b>Profession : conception de petit site web</b></div>
<div class="vat"><b>V.A.T. NO. :12345678 </b></div>
<div class="email"><b>E-mail: customers@gmail.com</b></div>
</div>
</div>
<hr>

<h3>SRL Balinder Walia Workstation. Demandez un devis pour les travaux comme suit:</h3>




<table class="item">
<tr>
<th width="10%">No</th>
<th width="50%">La description/ </th>
<th width="10%">Unité</th>
<th width="15%">Prix unitaire</th>
<th width="15%">Total</th>
</tr>

<tr>
<td>1</td>
<td>conception de petit site web- 1 Page (Hébergement et nom de domaine gratuits la première année)</td>
<td>1</td>
<td>5,000 ฿</td>
<td>5,000 ฿</td>
</tr>

<tr>
<td class="blanktotal" colspan="3" rowspan="6" >
</td>

</tr>

<tr>
<td class="totals">subtotal (excl. V.A.T.):</td>
<td class="totals">&#8364;000 </td>
</tr>

<tr>
<td class="totals">V.A.T.21,00%:</td>
<td class="totals">&#8364;</td>
</tr>

<tr>
<td class="totals" style="background-color: #f5f5f5;"><b>Total:</b></td>
<td class="totals" style="background-color: #f5f5f5;"><b>&#8364;0000 </b></td>
</tr>

</table>

<div class="row">
<div class="col1">
<p><b><i>Noter :</i> </b><br /> . Confirmer le prix dans les 15 jours à compter de la date du devis.<br /> . Attention après 3 mois d utilisation du site. </p>

<p><b><i> Modalités de paiement:</i> </b><br />.1er versement.) Payez 50% avant de commencer le processus.<br />
.2e versement.) Paiement de 50% après la livraison de l œuvre / le site est effectivement utilisé</p>
</div>

<div class="col2 floatright">
<p><b><i>Informations de paiement :</i></b><br /> <img src="ing.png" width="20"  />ING BELGIUM : Workstation SRL <br />IBAN :BE50 0015 4190 411<br />GEBABEBB</p>
</div>
</div>


</div>
<div class="col2 floatright">
<h5>
signe _________________________soumissionnaire<br />SRL Balinder Walia Workstation<br />   Date 01 / 11/ 2021</h5>
</div>
</div>
<br />
<h5>* confirmation de devis : Transférez de l argent et envoyez un e-mail de confirmation à : workstationsols@gmail.com</h5>
<div class="date">Date : 01/11/2021</div>
<div class="time">Time : 20.00</div>
</body>';


//

$mpdf->WriteHTML($nokhtml . $termsHTML);


//

$mpdf->Output();


?>