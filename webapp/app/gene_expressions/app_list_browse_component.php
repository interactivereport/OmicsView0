<?php


if ($APP_CONFIG['APP']['List_Category'][$category]['Page_Title'] == ''){
	$category = 'Gene';	
}


$lists = get_list_records_by_category($category);


$URL_New = "app_list_new.php?Category={$category}";


if (array_size($lists) <= 0){
	
	header("Location: {$URL_New}");
	exit();

	
	
} else {
	
	echo "<div class='row'>";
		echo "<div class='col-12'>";

			$actions[] = "<a href='{$URL_New}'>" . printFontAwesomeIcon('far fa-file') . " {$APP_CONFIG['APP']['List_Category'][$category]['Create_New_List']}</a>";
		
			echo "<p>" . implode(" &nbsp; &nbsp; ", $actions) . "</p>";
		
		echo "</div>";
	echo "</div>";
	
	
	
	echo "<div class='row'>";
		echo "<div class='col-12'>";
			echo "<table id='resultTable' class='table table-sm table-striped w-100'>";
				echo "<thead>";
					echo "<tr>";
						echo "<th class='text-left text-nowrap'>No.</th>";
						echo "<th class='text-left text-nowrap'>Name</th>";
						echo "<th class='text-left text-nowrap'>{$APP_CONFIG['APP']['List_Category'][$category]['Number']}</th>";
						echo "<th class='text-left text-nowrap'>Description</th>";
						echo "<th class='text-left text-nowrap'>Owner</th>";
						echo "<th class='text-left text-nowrap'>Date</th>";
						echo "<th class='text-left text-nowrap'>Actions</th>";
					echo "</tr>";
				echo "</thead>";
		
			
				echo "<tbody>";
					unset($currentCount);
					foreach($lists as $listID => $listContent){
						
						echo "<tr>";
							++$currentCount;
							
							echo "<td><a href='{$BXAF_CONFIG['BXAF_APP_URL']}gene_expressions/app_list_review.php?ID={$listID}'>{$currentCount}.</a></td>";
							
							echo "<td><a href='{$BXAF_CONFIG['BXAF_APP_URL']}gene_expressions/app_list_review.php?ID={$listID}'>{$listContent['Name']}</a></td>";
							
							echo "<td>{$listContent['Count']}</td>";
							
							echo "<td>" . displayLongText($listContent['Notes'], 140) . "</td>";
							
							echo "<td>{$listContent['User']['Name']} ({$listContent['User']['Email']})</td>";
							echo "<td>{$listContent['Date']}</td>";
						
						
						
							unset($actions);
							$actions[] = "<a href='app_list_review.php?ID={$listID}' >" . printFontAwesomeIcon('fas fa-list') . "Review</a>";
			
							if ($listContent['isOwner']){
								$actions[] = "<a href='app_list_update.php?ID={$listID}' >" . printFontAwesomeIcon('far fa-edit') . "Update</a>";
							
								$actions[] = "<a href='javascript:void(0);' class='deleteListTrigger' listid='{$listID}' human_readable='{$listContent['Name']}'>" . printFontAwesomeIcon('far fa-trash-alt') . "Delete</a>";
							
							}
						
							echo "<td>" . implode(' &nbsp; ', $actions) . "</td>";
			
						echo "</tr>";
					}
				echo "</tbody>";
			echo "</table>";
		echo "</div>";
	echo "</div>";
				
	
	
}
	
	
if (true){
	$modalID 	= 'removeListModal';
	$modalTitle	= "<div id='removeListModalHumanReadableID'></div>";
	$modalBody	= "";
	$modalButtonTextAction 	= 'Delete';
	$modalButtonTextCancel	= 'Cancel';
	$modalButtonActionClass = 'removeListTrigger btn-danger';
	echo printConfirmation($modalID, $modalTitle, $modalBody, $modalButtonTextAction, $modalButtonTextCancel, $modalButtonActionClass);
}
	

?>

<script type="text/javascript">

$(document).ready(function(){
	
	
	$('#resultTable').DataTable({
        "processing": 	true,
		"scrollX": 		true,
		"order": [[ 0, "asc" ]],
		"columns": [
		    { "searchable": false },
				null,
				null,
				null,
				null,
				null,
			{ "searchable": false },
			  ],
		dom: '<"row col-12"l>Bfrtip',
		buttons: [
            {
                extend: 'copyHtml5',
                exportOptions: {
                    columns: [1,2,3,4,5]
                }
            },
			{
                extend: 'csvHtml5',
				exportOptions: {
                    columns: [1,2,3,4,5]
                }
            },
            {
                extend: 'excelHtml5',
				exportOptions: {
                    columns: [1,2,3,4,5]
                }
            },
            {
                extend: 'pdfHtml5',
				exportOptions: {
                    columns: [1,2,3,4,5]
                }
            },

        ]
    });
	
	
	$('.deleteListTrigger').click(function(){
		var currentValue	 = parseInt($(this).attr('listid'));
		var humanReadable 	= $(this).attr('human_readable');
		
		if (currentValue > 0){
			
			$('#removeListModalHumanReadableID').html('You are going to delete <strong>' + humanReadable + '</strong>, do you want to continue?');

			$('#removeListModal').modal('show');
		
			$(document).on('click', '.removeListTrigger', function(){
				$('#removeListModal').modal('hide');
				window.location = 'app_list_delete_record.php?ID=' + currentValue;
			});
			

		}
	});
	
});
</script>