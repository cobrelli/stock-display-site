<?php 
require_once('helpers/header.php');
require_once('read-data-to-json.php');
#echo $json;
echo "<div style='width:75%; -moz-border-radius: 15px; border-radius:15px;background-color:red;padding:2%'>";
echo "<div style='width: 100%; height: 50%; min-height: 400px; overflow: scroll; background-color:white'><table border='1'>";

echo "<tr>";
echo "<td></td>";
foreach ($stocks as $val) {
	if(empty($val[1])){
		continue;
	}
	echo "<td>" . $val[0] . "</td>";
}
echo "</tr>";

for ($i=1; $i < count($stocks[0]); $i++) { 
	echo "<tr>";
	$date = explode("|", $stocks[0][$i]);
	echo "<td>" . $date[0] . "</td>";
		foreach ($stocks as $val) {
			if(empty($val[1])){
				continue;
			}
			$value = explode("|", $val[$i]);
			echo "<td>" . $value[1] . "</td>";
		}
	echo "</tr>";
}

echo "</table></div></div>";
require_once('helpers/footer.php');

echo "<script src='page-functions.js'></script>";
echo "<button onclick='log()'>test</button>";
?>

