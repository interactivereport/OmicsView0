<?php

//******************************************************************************************
//System-level Application
$BXAF_CONFIG_CUSTOM['GZIP_BIN']							= '/bin/pigz -p 3';
$BXAF_CONFIG_CUSTOM['GUNZIP_BIN']						= '/bin/unpigz -p 3';
$BXAF_CONFIG_CUSTOM['UNZIP_BIN']						= '/usr/bin/unzip';
$BXAF_CONFIG_CUSTOM['PHP_BIN']							= '/bin/php';
$BXAF_CONFIG_CUSTOM['SORT_BIN']							= '/bin/sort --parallel=4';
$BXAF_CONFIG_CUSTOM['CAT_BIN']							= '/bin/cat';
$BXAF_CONFIG_CUSTOM['TAIL_BIN']							= '/bin/tail';
$BXAF_CONFIG_CUSTOM['RM_BIN']							= '/bin/rm';
$BXAF_CONFIG_CUSTOM['FIND_BIN']							= '/bin/find';
$BXAF_CONFIG_CUSTOM['BGZIP_DIR'] 						= '/public/programs/tabix/latest/bgzip';
$BXAF_CONFIG_CUSTOM['TABIX_BIN'] 						= '/public/programs/tabix/latest/tabix';
$BXAF_CONFIG_CUSTOM['HOMER_PATH']						= '/public/programs/homer/bin';
$BXAF_CONFIG_CUSTOM['RSCRIPT_BIN'] 						= '/bin/Rscript';
$BXAF_CONFIG_CUSTOM['RSYNC_BIN'] 						= '/bin/rsync';
$BXAF_CONFIG_CUSTOM['NETSTAT_BIN'] 						= '/bin/netstat';
$BXAF_CONFIG_CUSTOM['PS_BIN'] 							= '/bin/ps';
$BXAF_CONFIG_CUSTOM['PKILL_BIN'] 						= '/bin/pkill';
$BXAF_CONFIG_CUSTOM['PGREP_BIN']						= '/bin/pgrep';
$BXAF_CONFIG_CUSTOM['GREP_BIN']							= '/usr/bin/grep';
//******************************************************************************************


//******************************************************************************************
//MySQL, SQLite and Redis Settings
$BXAF_CONFIG_CUSTOM['APP_DB_NAME'] 				   		= 'db_omicsview_human';
$BXAF_CONFIG_CUSTOM['APP_DB_DRIVER']               	 	= 'mysql';
$BXAF_CONFIG_CUSTOM['APP_DB_SERVER'] 					= 'localhost';
$BXAF_CONFIG_CUSTOM['APP_DB_USER'] 						= 'mysql_username';
$BXAF_CONFIG_CUSTOM['APP_DB_PASSWORD'] 					= 'mysql_password';

$BXAF_CONFIG_CUSTOM['BXAF_DB_NAME']                     = '/var/www/html/omicsview_share/users.db';

$BXAF_CONFIG_CUSTOM['REDIS_ENABLE']						= true;
$BXAF_CONFIG_CUSTOM['REDIS_COMPRESSION']				= true;
//******************************************************************************************



//******************************************************************************************
//Settings to send emails
$BXAF_CONFIG_CUSTOM['EMAIL_METHOD']     				= 'smtp';
$BXAF_CONFIG_CUSTOM['EMAIL_SMTP_SERVER'] 				= 'smtp_address';
$BXAF_CONFIG_CUSTOM['EMAIL_SMTP_AUTH'] 					= TRUE;
$BXAF_CONFIG_CUSTOM['EMAIL_SMTP_PORT'] 					= 465;
$BXAF_CONFIG_CUSTOM['EMAIL_SMTP_SECURITY'] 				= 'SSL';
$BXAF_CONFIG_CUSTOM['EMAIL_SMTP_USER'] 					= "smtp_username";
$BXAF_CONFIG_CUSTOM['EMAIL_SMTP_PASSWORD'] 				= 'smtp_user_password';
$BXAF_CONFIG_CUSTOM['BXAF_PAGE_EMAIL'] 					= 'admin@omicsview.org';
//******************************************************************************************


//******************************************************************************************
//General Settings
//This user will have access to admin related tools.
$BXAF_CONFIG_CUSTOM['Admin_User_Email']					= array('admin@omicsview.org');


$BXAF_CONFIG_CUSTOM['BXAF_ADMIN_PASSWORD']				= 'enter_admin_password_here';

//Allow user to sign up
$BXAF_CONFIG_CUSTOM['USER_SIGNUP_ENABLE']				= true;

//Make sure that all pages require user to login
$BXAF_CONFIG_CUSTOM['BXAF_LOGIN_REQUIRED'] 				= true;

$BXAF_CONFIG_CUSTOM['GUEST_ACCOUNT']					= 'guest';
$BXAF_CONFIG_CUSTOM['GUEST_ACCOUNT_READONLY']			= true;

//This account will be used when the user clicks "Login as Guest"
$BXAF_CONFIG_CUSTOM['GUEST_ACCOUNT']					= '';
//$BXAF_CONFIG_CUSTOM['GUEST_ACCOUNT']					= 'guest';


$BXAF_CONFIG_CUSTOM['BXAF_PAGE_AUTHOR']					= 'OmicsView Team';


$BXAF_CONFIG_CUSTOM['BXAF_PAGE_APP_NAME'] 				= 'OmicsView Visual Analytics';
$BXAF_CONFIG_CUSTOM['BXAF_PAGE_TITLE'] 					= 'OmicsView Visual Analytics';

//******************************************************************************************



//******************************************************************************************
//Application Level Settings
$BXAF_CONFIG_CUSTOM['HAS_PUBLIC_DATA']					= false;
$BXAF_CONFIG_CUSTOM['HAS_PUBLIC_COMPARISON_DATA']		= false;
$BXAF_CONFIG_CUSTOM['HAS_PUBLIC_MICROARRAY_DATA']		= false;
$BXAF_CONFIG_CUSTOM['Gene_or_Protein'] 					= 'Gene';
$BXAF_CONFIG_CUSTOM['Internal_Data_Flexible_Columns']	= false;
$BXAF_CONFIG_CUSTOM['Left_Menu_Expanded']				= false;
$BXAF_CONFIG_CUSTOM['HAS_GTEx_DATA']					= false;
$BXAF_CONFIG_CUSTOM['HAS_TPM_DATA']						= true;
$BXAF_CONFIG_CUSTOM['Precheck_Modified_DiseaseState']	= true;

$BXAF_CONFIG_CUSTOM['NGS_PLATFORMS']					= array('GPL15433', 'GPL18460', 'GPL20301', 'GPL20795', 'GPL11154', 'GPL16791', 'GPL10999', 'GPL18573', 'GPL9052', 'GPL15456', 'GPL20301', 'GPL9115', 'GPL21290', 'GPL20795', 'GPL15433', 'GPL18460', 'GPL15520', 'GPL13112', 'GPL17021', 'GPL11002', 'GPL19057', 'GPL9185', 'GPL15103', 'GPL9250', 'GPL21103', 'GPL18480', 'GPL16173', 'GPL21493', 'GPL16417', 'GPL14844', 'GPL18694', 'GPL20797', 'GPL22396', 'GPL20084', 'GPL10287', 'GPL10669', 'GPL19052', 'RNA-SEQ');

$BXAF_CONFIG_CUSTOM['GENESETS_API']['genesets.php']		= '//bxngs.com/bxomics/api2_dc/genesets.php';
$BXAF_CONFIG_CUSTOM['GENESETS_API']['genesets.css']		= '//bxngs.com/bxomics/api2_dc/genesets.css';
$BXAF_CONFIG_CUSTOM['GENESETS_API']['genesets.js']		= '//bxngs.com/bxomics/api2_dc/genesets.js';

//# of upload handled by the background process at a time, recommend: 1
$BXAF_CONFIG_CUSTOM['IMPORT']['CONCURRENT']				= 1;

//# of records inserted into MySQL at a time
$BXAF_CONFIG_CUSTOM['IMPORT']['BULK_INSERT']			= 10000;



$BXAF_CONFIG_CUSTOM['APP_SWITCH']['KEGG_Pathway']		= 1;
$BXAF_CONFIG_CUSTOM['APP_SWITCH']['Internal_Data']		= 1;

$BXAF_CONFIG_CUSTOM['Home_Page']						= '';

$BXAF_CONFIG_CUSTOM['BUBBLE_PLOT_SELECT_TOP']			= 20;

$BXAF_CONFIG_CUSTOM['TEXT_LENGTH']						= 50;

$BXAF_CONFIG_CUSTOM['BULK_UPDATE']						= true;

//Framework Level Settings
$BXAF_CONFIG_CUSTOM['BXAF_PAGE_CSS_MENU'] 				= 'navbar-light bg-faded';
$BXAF_CONFIG_CUSTOM['BXAF_PAGE_CSS_FOOTER']	    		= 'w-100 bg-faded text-center text-muted py-3';

//Footer Text
$BXAF_CONFIG_CUSTOM['BXAF_PAGE_FOOTER_CONTENT']			= "Powered by 
 <a href='https://canvasxpress.org' target='_blank'>CanvasXpress.js</a>,
 <a href='https://d3js.org/' target='_blank'>D3.js</a>, 
 <a href='https://plot.ly/javascript/' target='_blank'>Plotly.js</a>, 
 <a href='https://www.highcharts.com' target='_blank'>Highcharts.js</a>, 
 <a href='https://www.r-project.org/' target='_blank'>R</a>, 
 <a href='https://www.bioconductor.org' target='_blank'>Bioconductor</a>, 
 <a href='http://homer.ucsd.edu/homer/ngs/rnaseq/index.html' target='_blank'>HOMER</a>,
 <a href='https://wikipathways.org' target='_blank'>WikiPathways</a>,
 <a href='http://www.genome.jp/kegg/' target='_blank'>KEGG</a>, 
 <a href='http://reactome.org/' target='_blank'>Reactome</a> and
 <a href='http://bioinforx.com/contact' target='_blank'>BioInfoRx Data Platform</a>.
 
 </div>";




$BXAF_CONFIG_CUSTOM['USE_TPM_ALWAYS']								= true;

$BXAF_CONFIG_CUSTOM['Left_Menu_Expanded']							= false;

$BXAF_CONFIG_CUSTOM['canvasxpress']['Log_Add_Value']				= 0.01;
$BXAF_CONFIG_CUSTOM['canvasxpress']['graphOrientation']				= 'vertical';
$BXAF_CONFIG_CUSTOM['Precheck_Modified_DiseaseState']				= false;
$BXAF_CONFIG_CUSTOM['BUBBLE_PLOT_SELECT_TOP']						= 'All';



$BXAF_CONFIG_CUSTOM['APP_PROFILE']					   				= 'human';
$BXAF_CONFIG_CUSTOM['APP_SPECIES']					    			= 'human';
$BXAF_CONFIG_CUSTOM['SPECIES'] 										= 'Human';

$SHARE_DIR_NAME														= 'omicsview_share';
$BXAF_CONFIG_CUSTOM['WORK_DIR'] 				                	= "/var/www/html/{$SHARE_DIR_NAME}/work-omicsview_human_v4.0/";
$BXAF_CONFIG_CUSTOM['WORK_URL']										= "{$SHARE_DIR_NAME}/work-omicsview_human_v4.0/";

$BXAF_CONFIG_CUSTOM['SHARE_LIBRARY_DIR']							= "/var/www/html/{$SHARE_DIR_NAME}/library-4.0/";
$BXAF_CONFIG_CUSTOM['KEGG']['Script']				 				= "/var/www/html/{$SHARE_DIR_NAME}/library-4.0/KEGG/Scripts/";
$BXAF_CONFIG_CUSTOM['KEGG_Path']									= "/var/www/html/{$SHARE_DIR_NAME}/library-4.0/KEGG/Human/";

$BXAF_CONFIG_CUSTOM['WIKIPATHWAY_GPML_PATH']						= "/var/www/html/{$SHARE_DIR_NAME}/library-4.0/wikipathways/current/gpml/";

$BXAF_CONFIG_CUSTOM['TABIX_INDEX']['GeneAnnotation']			 	= "/var/www/html/{$SHARE_DIR_NAME}/library-4.0/Gene_Annotation/HumanGeneAnnotation.txt";
$BXAF_CONFIG_CUSTOM['TABIX_INDEX']['GeneAnnotation.gz']			 	= "/var/www/html/{$SHARE_DIR_NAME}/library-4.0/Gene_Annotation/HumanGeneAnnotation.txt.gz";

$BXAF_CONFIG_CUSTOM['FUNCTIONAL_ENRICHMENT_FILES']['GMT']			= "/var/www/html/{$SHARE_DIR_NAME}/library-4.0/R_Files/Human_msigdb.v6.2.symbols.gmt";
$BXAF_CONFIG_CUSTOM['FUNCTIONAL_ENRICHMENT_FILES']['Script']		= "/var/www/html/{$SHARE_DIR_NAME}/library-4.0/Functional_Enrichment/Scripts/";
$BXAF_CONFIG_CUSTOM['FUNCTIONAL_ENRICHMENT_FILES']['Species']		= 'human';



$BXAF_CONFIG_CUSTOM['COMPARISON_INFO']['ComparisonCategory']['CellType1 vs. CellType2'] 	= 'C1vsC2';
$BXAF_CONFIG_CUSTOM['COMPARISON_INFO']['ComparisonCategory']['Disease vs. Normal'] 			= 'DvsN';
$BXAF_CONFIG_CUSTOM['COMPARISON_INFO']['ComparisonCategory']['Disease Vs. Normal'] 			= 'DvsN';
$BXAF_CONFIG_CUSTOM['COMPARISON_INFO']['ComparisonCategory']['Disease1 vs. Disease2'] 		= 'D1vsD2';
$BXAF_CONFIG_CUSTOM['COMPARISON_INFO']['ComparisonCategory']['Other Comparisons'] 			= 'Others';
$BXAF_CONFIG_CUSTOM['COMPARISON_INFO']['ComparisonCategory']['Resistant vs. Sensitive'] 	= 'RvsS';
$BXAF_CONFIG_CUSTOM['COMPARISON_INFO']['ComparisonCategory']['Responder vs. Non-Responder'] = 'RvsNS';
$BXAF_CONFIG_CUSTOM['COMPARISON_INFO']['ComparisonCategory']['Tissue1 vs. Tissue2'] 		= 'Ts1vsTs2';
$BXAF_CONFIG_CUSTOM['COMPARISON_INFO']['ComparisonCategory']['Treatment vs. Control'] 		= 'TvsC';
$BXAF_CONFIG_CUSTOM['COMPARISON_INFO']['ComparisonCategory']['Treatment1 vs. Treatment2'] 	= 'Tr1vsTr2';

$BXAF_CONFIG_CUSTOM['COMPARISON_INFO']['ComparisonCategory_Short']['CellType1']				 	= 'C1';
$BXAF_CONFIG_CUSTOM['COMPARISON_INFO']['ComparisonCategory_Short']['CellType2']				 	= 'C2';
$BXAF_CONFIG_CUSTOM['COMPARISON_INFO']['ComparisonCategory_Short']['Disease']				 	= 'D';
$BXAF_CONFIG_CUSTOM['COMPARISON_INFO']['ComparisonCategory_Short']['Disease1']				 	= 'D1';
$BXAF_CONFIG_CUSTOM['COMPARISON_INFO']['ComparisonCategory_Short']['Disease2']				 	= 'D2';
$BXAF_CONFIG_CUSTOM['COMPARISON_INFO']['ComparisonCategory_Short']['Other Comparisons']			= 'Others';
$BXAF_CONFIG_CUSTOM['COMPARISON_INFO']['ComparisonCategory_Short']['Resistant']				 	= 'R';
$BXAF_CONFIG_CUSTOM['COMPARISON_INFO']['ComparisonCategory_Short']['Sensitive']				 	= 'S';
$BXAF_CONFIG_CUSTOM['COMPARISON_INFO']['ComparisonCategory_Short']['Responder']				 	= 'R';
$BXAF_CONFIG_CUSTOM['COMPARISON_INFO']['ComparisonCategory_Short']['Non-Responder']				= 'NR';
$BXAF_CONFIG_CUSTOM['COMPARISON_INFO']['ComparisonCategory_Short']['Normal']				 	= 'N';
$BXAF_CONFIG_CUSTOM['COMPARISON_INFO']['ComparisonCategory_Short']['Tissue1']					= 'T1';
$BXAF_CONFIG_CUSTOM['COMPARISON_INFO']['ComparisonCategory_Short']['Tissue2']					= 'T2';
$BXAF_CONFIG_CUSTOM['COMPARISON_INFO']['ComparisonCategory_Short']['Treatment']					= 'T';
$BXAF_CONFIG_CUSTOM['COMPARISON_INFO']['ComparisonCategory_Short']['Control']					= 'C';
$BXAF_CONFIG_CUSTOM['COMPARISON_INFO']['ComparisonCategory_Short']['Treatment1']				= 'T1';
$BXAF_CONFIG_CUSTOM['COMPARISON_INFO']['ComparisonCategory_Short']['Treatment2']				= 'T2';

$BXAF_CONFIG_CUSTOM['COMPARISON_INFO']['Sequence'] = array('ComparisonCategory', 'Case_Tissue', 'Case_DiseaseState', 'ProjectName');


//Name of the folder, e.g., http://example.com/omicsview_human_v4.0_webapp/
$BXAF_APP_BASE_DIRECTORY_NAME							= 'omicsview_human_v4.0';

$BXAF_APP_SUBDIR                                        = "{$BXAF_APP_BASE_DIRECTORY_NAME}/app/";
$BXAF_CUSTOMER_SUBDIR                                   = "{$BXAF_APP_BASE_DIRECTORY_NAME}/bxaf_setup/OmicsView/";
$BXAF_CONFIG_CUSTOM['BXAF_PAGE_HEADER_CUSTOM_CSS']		= "/{$BXAF_APP_SUBDIR}css/page.css";
$BXAF_CONFIG_CUSTOM['BXAF_PAGE_HEADER_CUSTOM_JS']		= "/{$BXAF_APP_SUBDIR}js/page.js";
$BXAF_CONFIG_CUSTOM['BXAF_PAGE_APP_LOGO_URL'] 			= "/{$BXAF_CUSTOMER_SUBDIR}Logo-105x25.png";
$BXAF_CONFIG_CUSTOM['BXAF_PAGE_APP_URL_ICON']			= "/{$BXAF_CUSTOMER_SUBDIR}Logo-105x25.png";
$BXAF_CONFIG_CUSTOM['BXAF_LOGIN_SUCCESS'] 				= "/{$BXAF_APP_SUBDIR}gene_expressions/index.php";

//******************************************************************************************

?>
