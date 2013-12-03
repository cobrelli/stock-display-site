<?php
	$stocks = array();
	$jsonStock;
	$file = fopen("stock.txt", "r");
	if($file){
		while (($line = fgets($file)) !== false){
			$stock_data = explode("#", utf8_encode($line));
			array_push($stocks, $stock_data);
		}
		$jsonStock = json_encode($stocks);
		$jsonStock = str_replace('\n', '', $jsonStock);
		#echo $json;
	}else{
		echo "Could not find stock data :(";
	}
	fclose($file);

	$indexes = array();
	$jsonIndex;
	$file = fopen("index.txt", "r");
	if($file){
		while (($line = fgets($file)) !== false){
			$index_data = explode("#", utf8_encode($line));
			array_push($indexes, $index_data);
		}
		$jsonIndex = json_encode($indexes);
		$jsonIndex = str_replace('\n', '', $jsonIndex);
		#echo $json;
	}else{
		echo "Could not find index data :(";
	}
	fclose($file);
?>
