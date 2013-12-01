<?php
	$stocks = array();
	$json;
	$file = fopen("stock.txt", "r");
	if($file){
		while (($line = fgets($file)) !== false){
			$stock_data = explode("#", utf8_encode($line));
			array_push($stocks, $stock_data);
		}
		$json = json_encode($stocks);
		$json = str_replace('\n', '', $json);
		echo $json;
	}else{
		echo "Could not find data :(";
	}
?>
