<?php
 include "header.php";
 $getAllProductWithChart = $product->getAllProductsWithChart();
$dataPoints = array( 
);  
foreach($getAllProductWithChart as $value){
  $dataPoints = array_merge($dataPoints,array(array("y"=>$value['qty'],"label"=>$value['name'])));
}
 
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "Product Statistics chart"
	},
	axisY: {
		includeZero: true,

	},
	data: [{
		type: "bar",
		yValueFormatString: "#,##0 Sản phẩm",
		indexLabel: "{y}",
		indexLabelPlacement: "inside",
		indexLabelFontWeight: "bolder",
		indexLabelFontColor: "white",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 100%; width: 70%; margin:0px 250px"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<?php include "footer.html"; ?>       