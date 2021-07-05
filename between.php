<?php
if ($_POST['z1']<$_POST['z2']) {
  if (0.0<=abs($_POST['z1']) and 3.49>=abs($_POST['z1']) AND 0.0<=abs($_POST['z2']) and 3.49>=abs($_POST['z2'])) {
  	
  	if ($_POST['z1']<0) {
		$hold1= '( 1 - '. (round(zValue(abs($_POST['z1'])),4)) .' )';
		$holdres1 = (1- (round(zValue(abs($_POST['z1'])),4)));
		$res1 = (1- (round(zValue(abs($_POST['z1'])),4)));
   }else{
   		$hold1= (round(zValue(abs($_POST['z1'])),4));
   		$holdres1= (round(zValue(abs($_POST['z1'])),4));
   		$res1= (round(zValue(abs($_POST['z1'])),4));
   }
   
 	if ( $_POST['z2']<0) {
		$hold2= '( 1 - '. (round(zValue(abs($_POST['z2'])),4)) .' )';
		$holdres2 = (1- (round(zValue(abs($_POST['z2'])),4)));
		$res2 = (1- (round(zValue(abs($_POST['z2'])),4)));
   }else{
   		$hold2= (round(zValue(abs($_POST['z2'])),4));
   		$holdres2= (round(zValue(abs($_POST['z2'])),4));
   		$res2= (round(zValue(abs($_POST['z2'])),4));
   }

 if ($_POST['z1']< $_POST['z2']) {
 	echo '<div style="color: white;margin-left: 60px;margin-top:100px;border:1px solid white;padding:40px 10px 40px 40px; box-shadow: 1px 1px 2px black, 0 0 15px #001a00, 0 0 5px darkblue;">
			<table style="font-size: 23px;">
				<tr>
					<td style="text-align: right;">P ( a < Z < b ) = </td>
					<td style="text-align: left;"> P ( Z < b ) – P ( Z ≤ a )</td>
				</tr>
				<tr>
					<td style="text-align: right;">=</td>
					<td style="text-align: left;"> '. $hold2 .' - '. $hold1 .'</td>
				</tr>';

		if ($_POST['z1'] < 0 || $_POST['z2'] < 0) {

		echo '  <tr>
					<td style="text-align: right;">=</td>
					<td style="text-align: left;">'. @$holdres2 .' - '. @$holdres1 .'</td>
				</tr>
				<tr>
				<td style="text-align: right;">=</td>
				<td style="text-align: left;"> <font style="border:1px solid white;padding-left: 8px;padding-right: 8px;padding-bottom: 5px">'. ($res2-$res1) .'</font></td>
				</tr>';
		}else{

		echo ' <tr>
				<td style="text-align: right;">=</td>
				<td style="text-align: left;"> <font style="border:1px solid white;padding-left: 8px;padding-right: 8px;padding-bottom: 5px">'. ($res2-$res1) .'</font></td>
				</tr>';
		}
		echo '
			</table>
		  </div>';

		 
	 }else{
	 	alert("warning", "Wrong input");
	 }
  }else{
  	alert("warning","Sorry! Z-table are Range at 0.0 to 3.49 only");
  }
  }else{
  		alert("warning", "Wrong input");	
  }