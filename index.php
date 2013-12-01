
<?php 
#header('Content-Type: text/html; charset=utf-8');

require_once('assets/header.php');

require_once('read-data-to-json.php');
#echo $json;
#print_r($stocks);
echo "<div style='width:75%; border-radius:15px;background-color:red;padding:5%'>";
echo "<div style='width: 100%; height: 50%; min-height: 400px; overflow: scroll; background-color:lime'><table border='1'>";
#$i = 0;

echo "<tr>";
echo "<td></td>";
foreach ($stocks as $val) {
	if(empty($val[1])){
		continue;
	}
	echo "<td>" . $val[0] . "</td>";
	#$i++;
}
echo "</tr>";

for ($i=1; $i < count($stocks[0]); $i++) { 
	echo "<tr>";
	$date = explode("|", $stocks[0][$i]);
	echo "<td>" . $date[0] . "</td>";
	#echo $i;
		foreach ($stocks as $val) {
			if(empty($val[1])){
				continue;
			}
			# code...
			$value = explode("|", $val[$i]);
			echo "<td>" . $value[1] . "</td>";
			#echo "<td>" . $val[$i] . "</td>";
			#echo "<td>" . explode("|", $val[$i]) . "</td>";
			#$i++;
		}
	echo "</tr>";
}

echo "</table></div></div>";
require_once('assets/footer.php');
?>

