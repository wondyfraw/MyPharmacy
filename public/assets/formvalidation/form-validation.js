//$(document).ready(function(){
jQuery(document).ready(function(){	
		$flag=1;
    	//$("#myName").focusout(function(){
		jQuery("#myName").focusout(function(){
    		if(jQuery(this).val()==''){
        		jQuery(this).css("border-color", "#FF0000");
        			jQuery('#submit').attr('disabled',true);
        			 jQuery("#error_name").text("*first_name is mandatory");
        	}
        	else
        	{
        		jQuery(this).css("border-color", "#2eb82e");
        		jQuery('#submit').attr('disabled',false);
        		jQuery("#error_name").text("");

        	}
           });
       	    jQuery("#myMiddleName").focusout(function(){
    		if(jQuery(this).val()==''){
        		jQuery(this).css("border-color", "#FF0000");
        			jQuery('#submit').attr('disabled',true);
        			 jQuery("#error_middlename").text("fathers name is mandatory");
        	}
        	else
        	{
        		jQuery(this).css("border-color", "#2eb82e");
        		jQuery('#submit').attr('disabled',false);
        		jQuery("#error_name").text("");

        	}
       });
        //$("#lastname").focusout(function(){
		jQuery("#lastname").focusout(function(){	
    		if(jQuery(this).val()==''){
        		jQuery(this).css("border-color", "#FF0000");
        			jQuery('#submit').attr('disabled',true);
        			jQuery("#error_lastname").text("Last name is mandatory");
        	}
        	else
        	{
        		jQuery(this).css("border-color", "#2eb82e");
        		jQuery('#submit').attr('disabled',false);
        		jQuery("#error_lastname").text("");
        	}
       });
       jQuery("#lastname").focusout(function(){	
    		if(jQuery(this).val()==''){
        		jQuery(this).css("border-color", "#FF0000");
        			jQuery('#submit').attr('disabled',true);
        			jQuery("#error_lastname").text("your Last name is mandatory");
        	}
        	else
        	{
        		jQuery(this).css("border-color", "#2eb82e");
        		jQuery('#submit').attr('disabled',false);
        		jQuery("#error_lastname").text("");
        	}
       });
       
       	jQuery("#email").focusout(function(){
    		if(jQuery(this).val()==''){
        		jQuery(this).css("border-color", "#FF0000");
        			jQuery('#submit').attr('disabled',true);
        			 jQuery("#error_email").text("Email address is mandatory");
        	}
        	else
        	{
        		jQuery(this).css("border-color", "#2eb82e");
        		jQuery('#submit').attr('disabled',false);
        		jQuery("#error_email").text("");

        	}
           });
           	jQuery("#password").focusout(function(){
    		if(jQuery(this).val()==''){
        		jQuery(this).css("border-color", "#FF0000");
        			jQuery('#submit').attr('disabled',true);
        			 jQuery("#error_password").text("* Password can not be null!");
        	}
        	else
        	{
        		jQuery(this).css("border-color", "#2eb82e");
        		jQuery('#submit').attr('disabled',false);
        		jQuery("#error_password").text("");

        	}
           });
       jQuery("#occupationId").focusout(function(){	
    		if(jQuery(this).val()==''){
        		jQuery(this).css("border-color", "#FF0000");
        			jQuery('#submit').attr('disabled',true);
        			jQuery("#error_occupationId").text("Occupation can not be null");
        	}
        	else
        	{
        		jQuery(this).css("border-color", "#2eb82e");
        		jQuery('#submit').attr('disabled',false);
        		jQuery("#error_lastname").text("");
        	}
       });
       jQuery("#lavel").focusout(function(){	
    		if(jQuery(this).val()==''){
        		jQuery(this).css("border-color", "#FF0000");
        			jQuery('#submit').attr('disabled',true);
        			jQuery("#error_lavel").text("* You have to select the lavel!");
        	}
        	else
        	{
        		jQuery(this).css("border-color", "#2eb82e");
        		jQuery('#submit').attr('disabled',false);
        		jQuery("#error_lastname").text("");
        	}
       });
        jQuery("#trainingProvider").focusout(function(){	
    		if(jQuery(this).val()==''){
        		jQuery(this).css("border-color", "#FF0000");
        			jQuery('#submit').attr('disabled',true);
        			jQuery("#error_trainingProvider").text("* You have to specify trainging provider!");
        	}
        	else
        	{
        		jQuery(this).css("border-color", "#2eb82e");
        		jQuery('#submit').attr('disabled',false);
        		jQuery("#error_lastname").text("");
        	}
       });
        //$("#dob").focusout(function(){
		jQuery("#dob").focusout(function(){	
    		if(jQuery(this).val()==''){
        		jQuery(this).css("border-color", "#FF0000");
        			jQuery('#submit').attr('disabled',true);
        			jQuery("#error_dob").text("Date of Birth can not be null");
        	}
        	else
        	{
        		jQuery(this).css("border-color", "#2eb82e");
        		jQuery('#submit').attr('disabled',false);
        		jQuery("#error_dob").text("");
        	}
       });
        //$("#gender").focusout(function(){
		jQuery("#gender").focusout(function(){	
        	jQuery(this).css("border-color", "#2eb82e");
       
       });
        jQuery("#age").focusout(function(){
    		if(jQuery(this).val()==''){
        		jQuery(this).css("border-color", "#FF0000");
        			jQuery('#submit').attr('disabled',true);
        			jQuery("#error_age").text("Age is mandatory");
        	}
        	else
        	{
        		jQuery(this).css({"border-color":"#2eb82e"});
        		jQuery('#submit').attr('disabled',false);
        		jQuery("#error_age").text("");

        	}
        	});
        jQuery("#assessmentDate").focusout(function(){
            if(jQuery(this).val() == ''){
                jQuery(this).css("border-color", "#FF0000");
                       jQuery('#submit').attr('disable', true);
                       jQuery('Yerror_assessmentDate').text('Assessment date is mandatory');
            }
            else{
                        jQuery(this).css({"border-color":"#2eb82e"});
        		jQuery('#submit').attr('disabled',false);
        		jQuery("#error_assessmentDate").text("");
            }
        });        
        jQuery("#phone").focusout(function(){
            $pho =jQuery("#phone").val();
    		if(jQuery(this).val()==''){
        		jQuery(this).css("border-color", "#FF0000");
        			jQuery('#submit').attr('disabled',true);
        			jQuery("#error_phone").text("Phone Number is mandatory");
        	}
        	else if ($pho.length!=10)
        	{   
                    jQuery(this).css("border-color", "#FF0000");
        			jQuery('#submit').attr('disabled',true);
        			jQuery("#error_phone").text("Lenght of Phone Number Should Be Ten");
        	}
        	else if(!$.isNumeric($pho))
        	{
        	        $(this).css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			$("#error_phone").text("Phone Number Should Be Numeric");  
        	}
        	else{
        		$(this).css({"border-color":"#2eb82e"});
        		$('#submit').attr('disabled',false);
        		$("#error_phone").text("");
        	}

    	});
jQuery("#candidateId").focusout(function(){
    		if(jQuery(this).val()==''){
        		jQuery(this).css("border-color", "#FF0000");
        			jQuery('#submit').attr('disabled',true);
        			 jQuery("#error_candidateId").text("You must insert candidate Id!");
        	}
        	else
        	{
        		jQuery(this).css("border-color", "#2eb82e");
        		jQuery('#submit').attr('disabled',false);
        		jQuery("#error_name").text("");

        	}
           });
  //======== Disable Submt button if there is inpute error  ===========///
   		jQuery( "#submit" ).click(function() {
   			if(jQuery("#myName" ).val()=='')
   			{
        		jQuery("#myName").css("border-color", "#FF0000");
        			jQuery('#submit').attr('disabled',true);
        			 jQuery("#error_name").text("first name is mandatory");
        	}
                if(jQuery("#myMiddleName" ).val()=='')
   			{
        		jQuery("#myMiddleName").css("border-color", "#FF0000");
        			jQuery('#submit').attr('disabled',true);
        			 jQuery("#error_middlename").text("Father name mandatory");
        	}
        	if(jQuery("#lastname" ).val()=='')
   			{
        		$("#lastname").css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			 $("#error_lastname").text("Last/Sur name is mandatory");
        	 }
                 if(jQuery("#email" ).val()=='')
   			{
        		$("#email").css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			 $("#error_email").text("Email is mandatory");
        	 }
                 if(jQuery("#password" ).val()=='')
   			{
        		$("#password").css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			 $("#error_password").text("Password can not be null");
        	 } 
                 if(jQuery("#occupationId" ).val()=='')
   			{
        		$("#occupationId").css("border-color", "#FF0000");
        			jQuery('#submit').attr('disabled',true);
        			 jQuery("#error_lastname").text("Last/Sur name can't be null");
        	   }
                 if(jQuery("#lavel" ).val()=='')
   			{
        		$("#occupationId").css("border-color", "#FF0000");
        			jQuery('#submit').attr('disabled',true);
        			 jQuery("#error_lavel").text("* You have to select the lavel!");
        	   }
                    if(jQuery("#trainingProvider" ).val()=='')
   			{
        		$("#trainingProvider").css("border-color", "#FF0000");
        			jQuery('#submit').attr('disabled',true);
        			 jQuery("#error_trainingProvider").text("* You have to specify trainging provider!");
        	   }
   			if($("#dob" ).val()=='')
   			{
        		$("#dob").css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			 $("#error_dob").text("Date of Birth mandatory");
        	}
   			if($("#age" ).val()=='')
   			{
        		$("#age").css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			 $("#error_age").text("Age can not be null");
        	}
        	if($("#phone" ).val()=='')
   			{
        		$("#phone").css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			 $("#error_phone").text("Phone Number is mandatory");
        	}
                if($("#assessmentDate" ).val()=='')
   			{
        		$("#phone").css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			 $("#error_assessmentDate").text("Assessment date is mandatory");
        	}
	  });
    	
	});