<?php
	#echo "moi";
	header('Content-Type: text/html; charset=utf-8');
	$stocks = array();
	$json;
	$file = fopen("stock.txt", "r");
	if($file){
		#echo "<tr>";
		while (($line = fgets($file)) !== false){
			$stock_data = explode("#", utf8_encode($line));
			array_push($stocks, $stock_data);
		}
		#print_r($stocks);

		$json = json_encode($stocks);
		$json = str_replace('\n', '', $json);
		echo $json;
		#echo "</tr>";
	}else{
		echo "Could not find data :(";
	}
	#print_r(json_decode($json));
?>
