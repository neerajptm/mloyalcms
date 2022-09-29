<footer class="main_footer">

</footer>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> 
<script src="<?php echo base_url(); ?>/public/assets/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>/ckeditor/ckeditor.js"></script>
<!-- <script src="<?php //echo base_url(); ?>/ckeditor/samples/js/sample.js"></script> -->
<script src="<?php echo base_url(); ?>/public/assets/js/custom.js"></script>
<script>
	// initSample();



// Datatable
$(document).ready(function() {
	   callDatatableInit();
	} );

	function callDatatableInit(){
		
		
	   var table =  $('#dataTable').DataTable( {
	        dom: 'Bfrtip',
		   	autoWidth: false, 
		   	responsive: true,
		    bInfo : false,
		    "ordering": false,
	        // buttons: {
			// 	  buttons: [
			// 		{
			// 			extend : 'copyHtml5',
			// 			text : '<img title="Copy to clip board" src="https://taghash.co/hppayweb/hppay/dsb/assets/images/xls_icon.png" alt="">'
			// 		},				
			// 		{
			// 			extend : 'excelHtml5',
			// 			text : '<img title="xls File" src="https://taghash.co/hppayweb/hppay/dsb/assets/images/xls_icon.png" alt="">'
			// 		},	
			// 		{
			// 			extend : 'csvHtml5',
			// 			text : '<img title="Csv File" src="https://taghash.co/hppayweb/hppay/dsb/assets/images/csv_icon.png" alt="">'
			// 		},				
			// 		{
			// 			extend : 'pdfHtml5',
			// 			customize: function ( doc ) {
			// 				doc.content.splice( 1, 0, {
			// 					margin: [ 0, 0, 0, 12 ],
			// 					alignment: 'center',
			// 					image: logo_data
			// 				} );
			// 			},
			// 			messageTop: 'Mr. Parent test<br> 2000001199',
			// 			 orientation : 'landscape',
			// 			pageSize : 'A3',
			// 			text : '<img title="PDF File" src="https://taghash.co/hppayweb/hppay/dsb/assets/images/pdf_icon.png" alt="">'
			// 		}
			// 	],				
			// }
			
			//columnDefs: [				
//					{ width: '100px', targets: '1' }
//				]
	    } );
		
		table.buttons().container().appendTo(".download_file_btns");
	}


	CKEDITOR.replace('editorck', {
        filebrowserUploadUrl: '<?php echo base_url() ?>/editorupload',
		//  filebrowserUploadUrl: "<?php //echo base_url() ?>/upload.php",
        filebrowserUploadMethod: 'form'
    });
</script>

</body>
</html>