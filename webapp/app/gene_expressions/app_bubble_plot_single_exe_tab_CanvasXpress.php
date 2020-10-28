<?php

$chartTitle1 = "Bubble Plot for {$geneNameStandard}";
$chartTitle2 = "Colored by {$results['Summary']['colorBy_Title']}";

$dataLimit = $APP_CONFIG['canvasxpress']['Data_Limit_Bubble_Plot'];

if (($results['Summary']['Data_Count']['Current'] > $dataLimit)){
	$tooManyDataPoints = 1;	
	
	$luckyCandidates = array_keys($results['CanvasXpress']['y']['smps']);
	shuffle($luckyCandidates);
	$luckyCandidates = array_slice($luckyCandidates, 0, $dataLimit);
	$luckyCandidates = array_combine($luckyCandidates, $luckyCandidates);
	
	
	$x_keys = array_keys($results['CanvasXpress']['x']);
	$y_keys = array_keys($results['CanvasXpress']['y']);
	
	foreach($results['CanvasXpress']['y']['smps'] as $tempKey => $tempValue){
		
		if (!isset($luckyCandidates[$tempKey])){
			foreach($x_keys as $tempKeyX => $tempValueX){
				unset($results['CanvasXpress']['x'][$tempValueX][$tempKey]);
			}
			
			foreach($y_keys as $tempKeyX => $tempValueX){
				unset($results['CanvasXpress']['y'][$tempValueX][$tempKey]);
			}
		}
	}
	
	
	if (!$_POST['API']){
		$message = "<p>" .  printFontAwesomeIcon('fas fa-exclamation-triangle text-danger') . " There are too many data points in the search result. 
						Plotting too many data points may cause performance problem to your browser. 
						Please refine your search conditions to reduce the number of data points in the plot.</p>
					<p>" . printFontAwesomeIcon('fa-spacer') . " For preview purposes, the corresponding plot is based on <strong>{$dataLimit}</strong> (out of {$results['Summary']['Data_Count']['Current']}) randomly selected data points.</p>
					
					";
	
		echo getAlerts($message, 'warning', 'col-lg-12');
	}

}

echo "<br/>";


$height = $results['Summary']['Height'];
$width	= $_POST['width'];

if ($_POST['plot_width'] > 0){
	$width = $_POST['plot_width'];	
}

if ($_POST['plot_height'] > 0){
	$height = $_POST['plot_height'];	
}



?>

<canvas  id="plotSection" width="<?php echo $width; ?>" height="<?php echo $height; ?>"></canvas>


<script type="text/javascript">

$(document).ready(function(){
	
	var data = {
    
    "x": {
		<?php 
			foreach($results['CanvasXpress']['x'] as $currentColumn => $currentInfo){

				$currentDisplay = $APP_CONFIG['DB_Dictionary']['Comparisons']['SQL'][$currentColumn]['Title'];
				
				if ($currentDisplay == ''){
					$currentDisplay = $currentColumn;	
				}
				
				echo '"' . $currentDisplay . '": [' . implode(',', $currentInfo) . '],';
			}	
		?>
    },
    "y": {
      "vars": [
        "Comparison Data",
      ],
      "smps": [<?php echo implode(',', $results['CanvasXpress']['y']['smps']); ?>],
      "data": [[<?php echo implode(',', $results['CanvasXpress']['y']['data']); ?>]],
    },
	
  };
    var conf = {
    "graphOrientation": 		"horizontal",
    "graphType": 				"Dotplot",
    "legendColumns": 			1,
    "lineType": 				"spline",
    "showAnimation": 			false,
    "showTransition": 			false,
    "sizeByShowLegend": 		false,
	
    "theme": 					"CanvasXpress",
    "title": 					"<?php echo $chartTitle1; ?>",
	"subtitle": 				"<?php echo $chartTitle2; ?>",
	"smpTitle": 				"<?php echo $results['Summary']['y-axis_Title']; ?>",
	"xAxisTitle": 				"Log2(Fold Change)",	
	"marginBottom":				50,
    
  };
	
	
	var plotObj = new CanvasXpress('plotSection', data, conf);

	<?php
		if (true){
			$currentColumn	= $_POST['y-axis'];
			$currentDisplay	= $APP_CONFIG['DB_Dictionary']['Comparisons']['SQL'][$currentColumn]['Title'];	
	?>
		plotObj.groupSamples(["<?php echo $currentDisplay; ?>"]);
	<?php } ?>
	
	
	
		
	<?php
		if ($_POST['subplotBy'] != ''){
			$currentColumn	= $_POST['subplotBy'];
			$currentDisplay	= $APP_CONFIG['DB_Dictionary']['Comparisons']['SQL'][$currentColumn]['Title'];	
	?>
		plotObj.segregate('Samples', ["<?php echo $currentDisplay; ?>"], false, true);
		
		<?php for ($i = 1; $i <= 10; $i++){ ?>
			plotObj.setFontAttributeSize('axisTickScaleFontFactor', 'decrease');
		<?php } ?>
		
		<?php for ($i = 1; $i <= 2; $i++){ ?>
			plotObj.setFontAttributeSize('smpLabelScaleFontFactor', 'decrease');
		<?php } ?>
		
	<?php } else { ?>
	
		<?php for ($i = 1; $i <= 5; $i++){ ?>
			plotObj.setFontAttributeSize('smpLabelScaleFontFactor', 'decrease');
		<?php } ?>
		
		<?php for ($i = 1; $i <= 15; $i++){ ?>
			plotObj.setFontAttributeSize('axisTickScaleFontFactor', 'decrease');
		<?php } ?>
		
	<?php } ?>
	
	
	
	<?php
		if (true){
			$currentColumn	= $_POST['colorBy'];
			$currentDisplay	= $APP_CONFIG['DB_Dictionary']['Comparisons']['SQL'][$currentColumn]['Title'];	
	?>
		plotObj.changeAttribute('colorBy', "<?php echo $currentDisplay; ?>");
	<?php } ?>
	
	
	<?php
		if ($_POST['shapeBy'] != ''){
			$currentColumn	= $_POST['shapeBy'];
			$currentDisplay	= $APP_CONFIG['DB_Dictionary']['Comparisons']['SQL'][$currentColumn]['Title'];	
	?>
		plotObj.changeAttribute('shapeBy', "<?php echo $currentDisplay; ?>");
	<?php } ?>
	
	
	
	<?php
		if (true){
			$currentDisplay	= $results['Summary']['Marker'];	
	?>
		plotObj.changeAttribute('sizeBy', "<?php echo $currentDisplay; ?>");
	<?php } ?>


	
	plotObj.toggleAttribute('showErrorBars');
	plotObj.toggleAttribute('jitter');
	
	<?php for ($i = 1; $i <= 4; $i++){ ?>
		plotObj.setFontAttributeSize('legendScaleFontFactor', 'decrease');
	<?php } ?>
	
	<?php for ($i = 1; $i <= 10; $i++){ ?>
	plotObj.setFontAttributeSize('titleScaleFontFactor', 'decrease');
	plotObj.setFontAttributeSize('subtitleScaleFontFactor', 'decrease');
	plotObj.setFontAttributeSize('axisTitleScaleFontFactor', 'decrease');
	<?php } ?>
	
	<?php
		if ($_POST['JSCode'] != ''){
			echo $_POST['JSCode'];
		}
	?>
	
	
	<?php if (!$_POST['API'] && $urlKey != ''){ ?>
	if ('function' == typeof window.history.pushState) {
		var URL = "<?php echo "{$_POST['URL']}?key={$urlKey}"; ?>";
		var urlObject = { foo: "bar" };
		window.history.pushState(urlObject, "", URL);
	}
	<?php } ?>
	
	
	
	
	
	

});

</script>