function createStockTable(jsonStock){
	//console.log(jsonStock);
	var table = document.getElementById('main_table');
	table.innerHTML = "";
	var newTable = "";

	newTable += "<tr><td></td>";
	for (var i = 0; i < jsonStock.length; i++) {
		if(jsonStock[i].length > 1){
			//console.log(jsonStock[i]);
			newTable+= "<td>" + jsonStock[i][0] + "</td>";
		}
	}
	newTable += "</tr>";

	for (var i = 1; i < jsonStock[0].length; i++) {
		newTable+= "<tr><td>" + jsonStock[0][i].split("|")[0] + "</td>"
		for (var j = 0; j < jsonStock.length; j++) {
			if(!jsonStock[j][i] || jsonStock[j][i].length < 1){
				continue;
			}
			var value = jsonStock[j][i].split("|");
			newTable+="<td>" + value[1] + "</td>";
			}
		newTable+="</tr>"
	}
	table.innerHTML = newTable;
}

function createIndexTable(jsonIndex){
	var table = document.getElementById('main_table');
	table.innerHTML = "";
	var newTable = "";

	newTable += "<tr><td></td>";
	for (var i = 0; i < jsonIndex.length; i++) {
		if(jsonIndex[i].length > 1){
			//console.log(jsonIndex[i]);
			newTable+= "<td>" + jsonIndex[i][0] + "</td>";
		}
	}
	newTable += "</tr>";

	for (var i = 1; i < jsonIndex[0].length; i++) {
		newTable+= "<tr><td>" + jsonIndex[0][i].split("|")[0] + "</td>"
		for (var j = 0; j < jsonIndex.length; j++) {
			if(!jsonIndex[j][i] || jsonIndex[j][i].length < 1){
				continue;
			}
			var value = jsonIndex[j][i].split("|");
			newTable+="<td>" + value[1] + "</td>";
			}
		newTable+="</tr>"
	}
	table.innerHTML = newTable;
}