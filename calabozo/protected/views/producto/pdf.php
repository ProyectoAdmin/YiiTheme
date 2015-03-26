<?php

$pdf = Yii::createComponent('application.venders.mpdf.mpdf');
$dataProvider=$_SESSION['Productos']->getData();
$contador=count($dataProvider);

$html2="";
$html='
<h1 align="center">Productos</h1> 
<br>
<h2 align="center" >Cartas</h2>      
<h3 align="center"> REPORTE DE PRODUCTOS</h3> 
<pre><h3>Total Resultados: '.$contador.' </h3></pre>

 <table align="center"> 
 <tr>
 <th>Id producto</th>
 <th>nombre </th>
 <th>Juego</th>
 <th>Expancion</th>
 <th>precio</th>
 <th>piezas</th>
 <th>Fecha</th>
 
 </tr>';
 $i=0;
 $val=count($dataProvider);
 while($i<$val){
 $html2=$html2.'
 <tr>
 <td>'.$dataProvider[$i]["IDProducto"].'</td>
 <td>'.$dataProvider[$i]["nombreColeccionable"].'</td>
 <td>'.$dataProvider[$i]["juego"].'</td>
 <td>'.$dataProvider[$i]["expansion"].'</td>
 <td>'.$dataProvider[$i]["precio"].'</td>
 <td>'.$dataProvider[$i]["piezasEnExistencia"].'</td>
 <td>'.$dataProvider[$i]["fechaDeRegistro"].'</td>

 </tr>'; $i++;
 }
 $html3='</table>';

 $mpdf=new mPDF('win-1252','LETTER-L','','',9,9,24,10,5,5);
 //$mpdf = Yii::app()->ePdf->mpdf();
 $mpdf->WriteHTML($html.$html2.$html3);
 $mpdf->Output('Lista de cratas'.date('Y/m/d').'.pdf','D');
 //$mpdf->Output();


 //$mpdf->Output();
 exit; ?>