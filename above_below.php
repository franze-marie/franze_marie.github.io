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
			showComputeZ($hold,$_POST['m'],$_POST['sd'],$_POST['p'],$Z);
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
			showComputeZ($hold,$_POST['m'],$_POST['sd'],$_POST['p'],$Z);
		}else{
			$hold=alert("warning","Please proper input");
		}
				
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