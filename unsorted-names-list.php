<?php

/* Name  : Andry Krisnanda
	Email : andry.krisnanda@gmail.com
*/


$name = array(
	 "Orson Milka Iddins"
	,"Erna Dorey Battelle"
	,"Flori Chaunce Franzel"
	,"Odetta Sue Kaspar"
	,"Roy Ketti Kopfen"
	,"Madel Bordie Mapplebeck"
	,"Selle Bellison"
	,"Leonerd Adda Mitchell Monaghan"
	,"Debra Micheli"
	,"Hailey Avie Annakin"
);

function genString($arr){
	foreach($arr as $key=>$row){
		echo $row."<br/>";
	}
}

// get the last name and put in the array
foreach($name as $key=>$row){
	$pecah = explode(" ",$row);
	$new_name[$pecah[count($pecah)-1]] = $row;
}

// sort asc by key of array
ksort($new_name);

echo "<b>Input: </b><br/>";
genString($name);

echo "<br/>";

echo "<b>Output: </b><br/>";
genString($new_name);
?>
