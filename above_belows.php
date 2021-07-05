<?php
if ($_POST['option']=="Above") { $sign =">"; }else{ $sign ="<"; }
	if (empty($_POST['m']) and empty($_POST['sd']) and empty($_POST['option']) and empty($_POST['p'])) {
		alert("danger","The All fields are required.");
	}else{
		if (empty($_POST['m'])) { alert("danger","The Mean field is required."); }else{
			if ($_POST['m']<0) { alert("danger","Plase higher number.");}else{
				if ($_POST['sd']<0) { alert("danger","Plase higher number.");}else{
					if (empty($_POST['sd'])) { alert("danger","The Standard Deviation field is required."); }else{
					   if (empty($_POST['option'])) { alert("danger","Please Select ( ABOVE | BELOW )."); }else{
						  if (empty($_POST['p'])) { alert("danger","Please provide number."); }else{
	if ($_POST['m']<0 || $_POST['sd']<0) { $reponse="YES"; }else{ $reponse="NO"; }
	$Y=($_POST['p']-$_POST['m'])/$_POST['sd'];
	$Z=round($Y,2);
	if (0.0<=abs($Z) and 3.49>=abs($Z)) {
		if ($Z<0 and $_POST['p']<$_POST['m'] and $sign=="<" and $reponse!="YES") {
			/*
				for funtion one 
				<td style="text-align: left;"> 
						1 – ('. (1-(round(zValue($Z),4))) .')
				</td>
				<td style="text-align: left;">
					<font style="border:1px solid white;padding-left: 8px;padding-right: 8px;padding-bottom: 5px">'. ((round(zValue($Z),4))). ' or '. percent((round(zValue($Z),4))) .' </font>
				</td>

			*/
			$hold='
					<tr>
						<td style="text-align: right;">P(x '.$sign .' '. $_POST['p'] .') = </td>
						<td style="text-align: left;"> P(Z '.$sign .' '.$Z .') = P(Z > '. abs($Z) .') = 1 – P(Z < '. abs($Z) .')</td>
					</tr>
					<tr >
						<td style="text-align: right;">=</td>
						<td style="text-align: left;"> 1 – ('. (round(zValue($Z),4)) .')</td>
					</tr>
					<tr >
						<td style="text-align: right;">=</td>
						<td style="text-align: left;"> <font style="border:1px solid white;padding-left: 8px;padding-right: 8px;padding-bottom: 5px">'. (1-(round(zValue($Z),4))). ' or '. percent(1-(round(zValue($Z),4))) .' </font></td>
					</tr>';
		}elseif ($Z>=0 and $_POST['p']>$_POST['m'] and $sign==">" and  $reponse!="YES") {
			$hold='
					<tr>
						<td style="text-align: right;">P(x '.$sign .' '. $_POST['p'] .') = </td>
						<td style="text-align: left;"> P(Z '.$sign .' '.$Z .') =  1 – P(Z ≤ '.$Z .')</td>
					</tr>
					<tr >
						<td style="text-align: right;">=</td>
						<td style="text-align: left;"> 1 – ('. round(zValue($Z),4) .')</td>
					</tr>
					<tr >
						<td style="text-align: right;">=</td>
						<td style="text-align: left;"> <font style="border:1px solid white;padding-left: 8px;padding-right: 8px;padding-bottom: 5px">'. (1-(round(zValue($Z),4))) .' or '. percent((1-(round(zValue($Z),4)))) .'</font> </td>
					</tr>';
		}else{
			$hold=alert("warning","Please proper input");
		}

			echo '<div class="row text-center" style="color: white;margin-left: 190px">
					<table style="font-size: 25px;margin:-20px;">
					
					<tr>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$_POST['p'].'&nbsp;&nbsp;-&nbsp;&nbsp;'.$_POST['m'].' </td>
					</tr>
					<tr>
						<td>Z = -----------</td>
					</tr>
					<tr>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;'.$_POST['sd'].'</td>
					</tr>
					<tr>
						<td><br></td>
					</tr>
					<tr>
						<td><font style="border-bottom:1px solid white;padding:0px 8px 0px 8px">Z = '.$Z.'</font></td>
					</tr>
				</table>
				</div><br><br>
				<div style="color: white;margin-left: 60px">
					<table style="font-size: 22px;">
						'. $hold .'
					</table>
				</div>';
				
	}else{
		alert("warning","Sorry! Z-table are Range at 0.0 to 3.49 only <br>and your Z value is Z = ".abs($Z));
	}//range
	
					   	  }
					   }
					}
				}
			}
		}
	}