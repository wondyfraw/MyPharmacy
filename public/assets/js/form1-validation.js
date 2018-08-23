$(document).ready(function(){
		$flag=1;
    	$("#myName").focusout(function(){
    		if($(this).val()==''){
        		$(this).css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			 $("#error_name").text("* You have to enter your first name!");
        	}
        	else
        	{
        		$(this).css("border-color", "#2eb82e");
        		$('#submit').attr('disabled',false);
        		$("#error_name").text("");

        	}
       });

        $("#lastname").focusout(function(){
    		if($(this).val()==''){
        		$(this).css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			$("#error_lastname").text("* You have to enter Batch number!");
        	}
        	else
        	{
        		$(this).css("border-color", "#2eb82e");
        		$('#submit').attr('disabled',false);
        		$("#error_lastname").text("");
        	}
       });
	   	$("#brand").focusout(function(){
    		if($(this).val()==''){
        		$(this).css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			 $("#error_brand").text("* You have to enter brand!");
        	}
        	else
        	{
        		$(this).css("border-color", "#2eb82e");
        		$('#submit').attr('disabled',false);
        		$("#error_brand").text("");

        	}
       });
        $("#expireDate").focusout(function(){
    		if($(this).val()==''){
        		$(this).css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			$("#error_expireDate").text("* You have to enter Expire Date!");
        	}
        	else
        	{
        		$(this).css("border-color", "#2eb82e");
        		$('#submit').attr('disabled',false);
        		$("#error_expireDate").text("");
        	}
       });
	       $("#manufacturDate").focusout(function(){
    		if($(this).val()==''){
        		$(this).css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			$("#error_manufacturDate").text("* You have to enter Manufactury Date!");
        	}
        	else
        	{
        		$(this).css("border-color", "#2eb82e");
        		$('#submit').attr('disabled',false);
        		$("#error_manufacturDate").text("");
        	}
       });
	   $("#quantity").focusout(function(){
		   if($(this).val()==''){
			  $(this).css("border-color","#FF0000");
			      $('#submit').attr('disabled',true);
				  $("#error_quantity").text("* You have to enter the quantity");
		   }
		  else{
			  $(this).css("border-color","#2eb82e");
			  $('#submit').attr('disabled',false)
		  }			  
	   });
	   $("#quantitypp").focusout(function(){
		   if($(this).val()==''){
			   $(this).css("border-color","#FF0000");
			     $('#submit').attr('disabled',true);
				 $("#error_quantitypp").text("* You have to enter quantity per package");
		   }
          else{
			  $(this).css("border-color","#2eb82e");
			  $('#submit').attr('disabled',false);
		  }			  
	   });
	    $("#myUnit").focusout(function(){
		   if($(this).val()==''){
			   $(this).css("border-color","#FF0000");
			     $('#submit').attr('disabled',true);
				 $("#error_myUnit").text("* You have to enter Unit of drugs");
		   }
          else{
			  $(this).css("border-color","#2eb82e");
			  $('#submit').attr('disabled',false);
		  }			  
	   });
	   $("#weight").focusout(function(){
		   if($(this).val()==''){
			   $(this).css("border-color","#FF0000");
			     $('#submit').attr('disabled',true);
				 $("#error_weight").text("* You have to enter weight");
		   }
          else{
			  $(this).css("border-color","#2eb82e");
			  $('#submit').attr('disabled',false);
		  }			  
	   });
	    $("#uPrice").focusout(function(){
		   if($(this).val()==''){
			   $(this).css("border-color","#FF0000");
			     $('#submit').attr('disabled',true);
				 $("#error_uPrice").text("* You have to enter Unit price");
		   }
          else{
			  $(this).css("border-color","#2eb82e");
			  $('#submit').attr('disabled',false);
		  }			  
	   });
	     /*$("#salesPrice").focusout(function(){
		   if($(this).val()==''){
			   $(this).css("border-color","#FF0000");
			     $('#submit').attr('disabled',true);
				 $("#error_salesPrice").text("* You have to enter Sales price");
		   }
          else{
			  $(this).css("border-color","#2eb82e");
			  $('#submit').attr('disabled',false);
		  }			  
	   });*/
	   $("#totalQuantity").focusout(function(){
		   if($(this).val()==''){
			   $(this).css("border-color","#FF0000");
			     $('#submit').attr('disabled',true);
				 $("#error_totalQuantity").text("* You have to enter Total Quantity per pack per unit");
		   }
          else{
			  $(this).css("border-color","#2eb82e");
			  $('#submit').attr('disabled',false);
		  }			  
	   });
        $("#gender").focusout(function(){
        	$(this).css("border-color", "#2eb82e");
       
       });
        $("#age").focusout(function(){
    		if($(this).val()==''){
        		$(this).css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			$("#error_age").text("* You have to enter your Age!");
        	}
        	else
        	{
        		$(this).css({"border-color":"#2eb82e"});
        		$('#submit').attr('disabled',false);
        		$("#error_age").text("");

        	}
        	});
        $("#phone").focusout(function(){
            $pho =$("#phone").val();
    		if($(this).val()==''){
        		$(this).css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			$("#error_phone").text("* You have to enter your Phone Number!");
        	}
        	else if ($pho.length!=10)
        	{   
                    $(this).css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			$("#error_phone").text("* Lenght of Phone Number Should Be Ten");
        	}
        	else if(!$.isNumeric($pho))
        	{
        	        $(this).css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			$("#error_phone").text("* Phone Number Should Be Numeric");  
        	}
        	else{
        		$(this).css({"border-color":"#2eb82e"});
        		$('#submit').attr('disabled',false);
        		$("#error_phone").text("");
        	}

    	});

   		$( "#submit" ).click(function() {
   			if($("#myName" ).val()=='')
   			{
        		$("#myName").css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			 $("#error_name").text("* You have to enter your first name!");
        	}
        	if($("#lastname" ).val()=='')
   			{
        		$("#lastname").css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			 $("#error_lastname").text("* You have to enter your Last name!");
        	}
			if($("#brand" ).val()=='')
   			{
        		$("#brand").css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			 $("#error_brand").text("* You have to enter the brand!");
        	}
   			if($("#expireDate" ).val()=='')
   			{
        		$("#expireDate").css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			 $("#error_expireDate").text("* You have to enter Expire Date !");
        	}
			if($("#manufacturDate" ).val()=='')
   			{
        		$("#manufacturDate").css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			 $("#error_manufacturDate").text("* You have to enter Expire Date !");
        	}
			if($("#quantity").val()==''){
				$("#quantity").css("border-color", "#FF0000");
				  $('#submit').attr('disabled',true);
				  $("#error_quantity").text("* You have to enter the quantity");
			}
			if($("#quantitypp").val()==''){
				$("#quantitypp").css("border-color","#FF0000");
				$('#submit').attr('disabled',true);
				$("#error_quantitypp").text("* You have to enter quantity per package");
			}
			if($("#myUnit").val()==''){
				$("#myUnit").css("border-color","#FF0000");
				$('#submit').attr('disabled',true);
				$("#error_myUnit").text("* You have to enter unit of drugs");
			}
			if($("#weight").val()==''){
				$("#weight").css("border-color","#FF0000");
				$('#submit').attr('disabled',true);
				$("#error_weight").text("* You have to enter weight");
			}
			if($("#uPrice").val()==''){
				$("#uPrice").css("border-color","#FF0000");
				$('#submit').attr('disabled',true);
				$("#error_uPrice").text("* You have to enter Unit price");
			}
			/*if($("#salesPrice").val()==''){
				$("#salesPrice").css("border-color","#FF0000");
				$('#submit').attr('disabled',true);
				$("#error_salesPrice").text("* You have to enter Sales price");
			}*/
			if($("#totalQuantity").val()==''){
				$("#totalQuantity").css("border-color","#FF0000");
				$('#submit').attr('disabled',true);
				$("#error_salesPrice").text("* You have to enter Total Quantity per pack per unit");
			}
   			if($("#age" ).val()=='')
   			{
        		$("#age").css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			 $("#error_age").text("* You have to enter your Age!");
        	}
        	if($("#phone" ).val()=='')
   			{
        		$("#phone").css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			 $("#error_phone").text("* You have to enter your Phone Number!");
        	}
			});


    	
	});