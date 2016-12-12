     
     jQuery(function(){
    	 $("#btnSubmit").click(function(){
    	 	if($('input[name=applied]:checked').length<=0)
    	 	{
    	 	 alert("You must apply to Georgia Highlands College before you can apply for the Dental Program.");
    	 	 return false;
    	 	}
    	 });
    	 });
     
     jQuery(function(){
    	 $("#driverBtn").click(function(){
    	 	if(! $('#driver').val())
    	 	{
    	 	 alert("Please attach a copy of a valid form of identification");
    	 	 return false;
    	 	}
    	 });
    	 });

     jQuery(function(){
    	 $("#cprBtn").click(function(){
    	 	if(! $('#cpr').val())
    	 	{
    	 	 alert("Please attach a copy your current CPR Certificate");
    	 	 return false;
    	 	}
    	 });
    	 });
     
     var _validFileExtensions = [".jpg", ".jpeg", ".bmp", ".gif", ".png"];    
     function Validate(oForm) {
         var arrInputs = oForm.getElementsByTagName("input");
         for (var i = 0; i < arrInputs.length; i++) {
             var oInput = arrInputs[i];
             if (oInput.type == "file") {
                 var sFileName = oInput.value;
                 if (sFileName.length > 0) {
                     var blnValid = false;
                     for (var j = 0; j < _validFileExtensions.length; j++) {
                         var sCurExtension = _validFileExtensions[j];
                         if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                             blnValid = true;
                             break;
                         }
                     }
                     
                     if (!blnValid) {
                         alert("Sorry, the only allowed extensions are: " + _validFileExtensions.join(", "));
                         return false;
                     }
                 }
             }
         }
       
         return true;
     }