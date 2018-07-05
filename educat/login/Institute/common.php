<?php
function populateCombo($tableName,$fldName,$fldValue,$condtion,$conn)
{
	$qr1="select ". $fldName . ", " . $fldValue ." from ". $tableName . " " . $condtion;
	$result1 = mysqli_query($conn,$qr1); 
	while ($row = mysqli_fetch_array($result1))
	{
			echo "<option value=".$row[$fldValue].">".$row[$fldName]."</option>";
	}
}
function populateComboSelValue($tableName,$fldName,$fldValue,$condtion,$value,$conn)
{
	$qr1="select ". $fldName . ", " . $fldValue ." from ". $tableName . " " . $condtion;
	//echo $qrl;
	$result1 = mysqli_query($conn,$qr1); 
	while ($row = mysqli_fetch_array($result1))
	{
		?><option value= "<?=$row[$fldValue]?>" <?php if($value == $row[$fldValue]) {?>selected<?php }?>><?=$row[$fldName]?></option><?php
	}
}
function populateComboDis($tableName,$fldName,$fldValue,$condtion,$conn)
{
   $qr1="select distinct(". $fldName . "), " . $fldValue ." from ". $tableName . " " . $condtion;
	$result1 = mysqli_query($conn,$qr1); 
	while ($row = mysqli_fetch_array($result1))
	{
			echo "<option value=".$row[$fldValue].">".$row[$fldName]."</option>";
	}
	
}
?>

