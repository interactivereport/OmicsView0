<?php
include_once('config_init.php');

$PAGE['Title'] 		= $APP_MESSAGE['Gene Expressions from Microarray'];
$PAGE['Header']		= $APP_MESSAGE['Gene Expressions from Microarray'];
$PAGE['Category']	= "Gene Expression Plots";

$PAGE['URL']		= 'app_gene_expression_microarray_multiple.php';
$PAGE['Barcode']	= 'app_gene_expression_microarray_multiple.php';
$PAGE['Body'] 		= 'app_gene_expression_common_multiple_content.php';
$PAGE['EXE'] 		= 'app_gene_expression_microarray_multiple_exe.php';

$PAGE['Plugins']['selectPicker'] 	= 1;
$PAGE['Plugins']['dataTables']		= 1;
$PAGE['Plugins']['canvasxpress']	= 1;

$geneValueTable 	= 'GeneLevelExpression';
$category			= 'Microarray';
$exampleMessage		= $APP_CONFIG['APP']['Microarray']['Multiple_Example_Message'];

if (!$APP_CONFIG['APP']['Module']['Microarray']){
	$PAGE['Body'] = 'app_disabled.php';
}

include('page_generator.php');

?>