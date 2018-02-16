$(document).ready(function(){

		$('#editLaptopModal').on('show.bs.modal',function(event){
	          var button = $(event.relatedTarget) // Button that triggered the modal
  			  var recipient = button.data('whatever')
  			  var url = './php_action/getlaptop.php'+'?tf_id='+recipient;
	          var modal = $(this);
	          
	          $.ajax({
	            url:url,
	            dataType:'json',
	            type:'GET',
	            success:function(data){
	              $('#tf_id').val(data.tf_id);
	              $('#brand').val(data.brand);
	              $('#model').val(data.model);
	              $('#service_tag').val(data.service_tag);
	              $('#mac_address').val(data.mac_address);
	              $('#status').val(data.status);
	            }
	          });
	    });

	    $('#editlaptopform').on('submit',function(event){
	    	event.preventDefault();
	    	var data = $('#editlaptopform').serialize();
        	var url = './php_action/editlaptop.php';

        	$.ajax({
        		url:url,
	            dataType:'json',
	            type:'POST',
	            data:data,
	            beforeSend : function(){
	                $('#submit').val("Updating");
	            },
	            success:function(data){
	            	if (data.error != 'false') {
	                    $('#editlaptopform')[0].reset();  
     					$('#editLaptopModal').modal('hide');
     					window.location.reload();
	                }else{
	                    $('#editlaptopform')[0].reset();  
     					$('#editLaptopModal').modal('hide');
     					window.location.reload();
     					toastr.success("YYEESSSSSSS");
	                }
	                
	            }
        	});
	    });

	     $('#issueLaptopModal').on('show.bs.modal',function(event){
	          var button = $(event.relatedTarget) // Button that triggered the modal
  			  var tf_id = button.data('whatever')
  			  var url = './php_action/getlaptopid.php'+'?tf_id='+tf_id
	          var modal = $(this);
	          
	          $.ajax({
	            url:url,
	            dataType:'json',
	            type:'GET',
	            success:function(data){
	              $('#tf_id_issue').val(data.tf_id);
	            }
	          });
	    });


	     $('#issuelaptopform').on('submit',function(event){
	    	event.preventDefault();
	    	var data = $('#issuelaptopform').serialize();
        	var url = './php_action/issuelaptop.php';
        	$.ajax({
        		url:url,
	            dataType:'json',
	            type:'POST',
	            data:data,
	            success:function(data){
	            	if (data.error != 'false') {
	                    $('#issuelaptopform')[0].reset();  
     					$('#issueLaptopModal').modal('hide');
     					window.location.reload();
	                }else{
	                    $('#issuelaptopform')[0].reset();  
     					$('#issueLaptopModal').modal('hide');
     					window.location.reload();
	                }
	                
	            }
        	});
	    });


		 $('#withdrawLaptopModal').on('show.bs.modal',function(event){
	          var button = $(event.relatedTarget) // Button that triggered the modal
  			  var tf_id = button.data('whatever')
  			  var url = './php_action/getlaptop.php'+'?tf_id='+tf_id
	          var modal = $(this);
	          
	          $.ajax({
	            url:url,
	            dataType:'json',
	            type:'GET',
	            success:function(data){
	              $('#tf_id_withdraw').val(data.tf_id);
	            }
	          });
	    });


	     $('#withdrawlaptopform').on('submit',function(event){
	    	event.preventDefault();
	    	var data = $('#withdrawlaptopform').serialize();
        	var url = './php_action/withdrawlaptop.php';
        	$.ajax({
        		url:url,
	            dataType:'json',
	            type:'POST',
	            data:data,
	            beforeSend : function(){
	                alert();
	            },
	            success:function(data){
	            	if (data.error != 'false') {
	                    $('#withdrawlaptopform')[0].reset();  
     					$('#withdrawLaptopModal').modal('hide');
     					window.location.reload();
	                }else{
	                    $('#withdrawlaptopform')[0].reset();  
     					$('#withdrawLaptopModal').modal('hide');
     					window.location.reload();
	                }
	                
	            }
        	});
	    });
	     

	});