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
    border-bottom: 2px solid #f5f5f5;
    text-align: center;
	padding: 8px;
  }

img{
    padding-right:10px;
}
</style>



<body>
<div class="row">
<div class="col1 ">
<img src="worklogosmall2.png" width="240" />
</div>
<div class="col2 floatright">
<h4>SRL Balinder Walia Workstation <br />Avenue de Roodebeeck 78,1030 BRUXELLES (SCHAERBEEK)<br />Tel: 049 245 6746<br />Email: workstationsols@gmail.com</h4>
</div>
</div>
<hr>



<htmlpagefooter name="myfooter">
<div style="border-top: 1px solid #333333; font-size: 9pt; text-align: center; padding-top: 1mm; ">
Page {PAGENO} of {nb}
</div>
</htmlpagefooter>

<sethtmlpageheader name="myheader" value="on" show-this-page="1" />
<sethtmlpagefooter name="myfooter" value="on" />

<div class="row" style="background-color: #f5f5f5;">
<div class="col1" style="padding:15px;">
<h2>FACTURER À :</h2>
<div class="name"><b>Nom du client...</b></div>
<div class="address"><b>Adresse....</b></div>
<div class="tel"><b>Tél: 000 000 0000</b></div>
<div class="email"><b>E-mail: customers@gmail.com</b></div>
</div>
<div class="col2 floatright" style="padding:15px;">
<div class="invoice no"><h2>FACTURE NO : 12345</h2></div>
<div class="date"><h2>DATE : 28/10/2021</h2></div>
<div class="due date"><h2>DUE DATE :11/10/2021</h2></div>
<div class="project"><h2>PROJET : Création de sites web</h2></div>
</div>
</div>

<hr>
<!-- INVOICE ITEMS HERE -->

<table class="items" style="magin: top 25px;">

<tr>
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
  <td>&#8364;500 </td>
  <td>&#8364;500 </td>
</tr>
<tr>
  <td>2</td>
  <td>Nom de domaine</td>
  <td>2</td>
  <td>&#8364;50 </td>
  <td>&#8364;50 </td>
</tr>

<tr>
<td class="blanktotal" colspan="3" rowspan="6">
</td>
</tr>
<td class="totals">Subtotal (excl. T.V.A.):</td>
<td class="totals">&#8364;850 </td>
</tr>
<tr>
<td class="totals">T.V.A. 21,00%:</td>
<td class="totals">-&#8364; </td>
</tr>
<tr>
<td class="totals">Expédition:</td>
<td class="totals">- &#8364;</td>
</tr>
<tr>
<td class="totals"><b>Total:</b></td>
<td class="totals"><b> &#8364;950 </b></td>
</tr>
<tr>
<td class="totals" style="background-color: #f5f5f5;"><b>Solde dû:</b></td>
<td class="totals" style="background-color: #f5f5f5;"><b>&#8364;950</b></td>
</tr>

</table>

  <!-- END ITEMS HERE -->

  ';

$termsHTML = '
<div class="tenthmatrixlogo">
<ximg src="/Volumes/GoogleDrive/.shortcut-targets-by-id/1-9_ANNWeOpmVIwN01qqEiImCs6RH8tks/WorkstationSolsGoogleDrive/Shared_TenthMatrix_CRM_DEV/Tenthmatrixv18/TENTHMATRIX_CRM_DATA/php_components/mpdf60/examples/mysignature.png" width="150" />
</div>
</p>
<br />
<h3><i>Merci pour votre entreprise.</i></h3>
<p>Je certifie que cette affirmation est à tous égards vraie, correcte, étayée par la documentation disponible et conforme à tous les termes et
conditions, lois et règlements régissant ses paiements.</p>
<p>Veuillez noter que nos conditions de paiement pour cette facture sont NET 15. Des intérêts seront facturés sur toutes les factures qui ne sont pas payées à temps.
 </p>

<div class="row" >
<div class="col1" style="background-color: #f5f5f5;">
<p style="padding: left 15px;"><b>paiement en ligne :</b>
<p style="padding: left 15px;"><b>Nom de banque :</b> <img src="ing.png" width="20"  />ING BELGIUM</p>
<p style="padding: left 15px;"><b>Nom du compte : </b>Workstation SRL</p>
<p style="padding: left 15px;"><b>Code pays iso : </b>BEL</p>
<p style="padding: left 15px;"><b>IBAN : </b>BE50 0015 4190 4118</p>
<p style="padding: left 15px;"><b>BIC code / SWIFT Code : </b>GEBABEBB</p>

</div>
<div class="col2 floatright">
<p><b>Note:</b> <br />Cette facture a été générée automatiquement par Workstation CRM et le système de facturation.</p>

<div class="date">Date :28/10/2021</div>
<div class="time">Time : 09.00 </div>
<div>
</div>
</body>';


//

$mpdf->WriteHTML($nokhtml . $termsHTML);


//

$mpdf->Output();


?>