     
     // jQuery(function(){
    	//  $("#btnSubmit").click(function(){
    	//  	if($('input[name=applied]:checked').length<=0)
    	//  	{
    	//  	 alert("You must apply to Georgia Highlands College before you can apply for the Dental Program.");
    	//  	 return false;
    	//  	}
    	//  });
    	//  });
     //
     // $(document).ready(function() {
     //     $('input[type=radio][name=GHC]').change(function() {
     //         if (this.value == 'yes') {
     //             alert("Allot Thai Gayo Bhai");
     //         }
     //         else if (this.value == 'no') {
     //             alert("Transfer Thai Gayo");
     //         }
     //     });
     // });

     // jQuery(function(){
    	//  $("#cprBtn").click(function(){
    	//  	if(! $('#cpr').val())
    	//  	{
    	//  	 alert("Please attach a copy your current CPR Certificate");
    	//  	 return false;
    	//  	}
    	//  });
    	//  });
     //
     // jQuery(function(){
     //     $("#identificationBtn").click(function(){
     //         if(! $('#identification').val())
     //         {
     //             alert("Please attach a copy your valid identification");
     //             return false;
     //         }
     //     });
     // });

     $(document).ready(function(){
             $( "#create" ).validate({
                 rules: {
                     email: {
                         required: true,
                         email: true
                     },
                     password: {
                         required: true,
                         minlength: 8
                     },
                     passconf: {
                         equalTo: "#password"
                     }
                 },
                 messages: {
                     email:"Enter your email address",
                     password: {
                         required: "Select a password",
                         minlength: "Password must be at least 8 characters"
                     }
                 }
         });
     });

     $(document).ready(function(){
         $( "#GHC" ).validate({
             rules: {
                 GHC_ID: {
                     required: true,
                     range: [90000000 , 90099999]
                 }
             },
             messages: {
                 GHC_ID: "Please enter valid GHC ID in the form 900XXXXX"
             }
         });
     });


     $(document).ready(function(){
         $( "#personal" ).validate({
             // ignore: ".ignore",
             rules: {
                 first_name: {
                     required: true
                 },
                 last_name: {
                     required: true
                 },
                 birth_date: {
                     required: true,
                     date: true
                 },
                 street: {
                     required: true
                 },
                 city: {
                     required: true
                 },
                 zip: {
                     required: true,
                     range: [10000, 99999]
                 },
                 preferred_phone: {
                     required: true,
                     digits: true,
                     minlength: 10,
                     maxlength: 10
                 }
             },
             messages: {
                 first_name: "Please specify your first name",
                 last_name: "Please specify your last name",
                 birth_date: {
                     required: "Please specify your birth date",
                     date: "Please enter your birth date in format MM/DD/YYYY"
                 },
                 street: "Please enter your street address",
                 city: "Please enter your city",
                 zip: {
                     required: "Please enter your zip code",
                     range: "Please enter a valid zip code"
                 },

             }
         });
     });

     $(document).ready(function(){
         $( "#identification" ).validate({
             rules: {
                 fileToUpload: {
                     required: true
                 }
             },
             messages: {
                 fileToUpload: "Please upload a copy of your identification"
             }
         });
     });

     $(document).ready(function(){
         $( "#cpr" ).validate({
             rules: {
                 fileToUpload: {
                     required: true
                 },
                expiration_date: {
                     required: true,
                     date: true
                }
             },
             messages: {
                 fileToUpload: "Please upload a copy of your current CPR certification",
                 expiration_date: {
                     required: "Please enter the expiration date of your current CPR certification",
                     date: "Please use the format MM/DD/YYYY"
                 }
             }
         });
     });

     $(document).ready(function(){
         $( "#license" ).validate({
             rules: {
                 number: {
                     required: true
                 },
                 fileToUpload: {
                     required: true
                 }

             },
             messages: {
                 number: "Please enter your license number",
                 fileToUpload: "Please upload a copy of your license"
             }


         });
     });

     $(document).ready(function(){
         $( "#school" ).validate({
             rules: {
                 name: {
                     required: true
                 },
                 year: {
                     required: true,
                     range: [1900, 2050]
                 }

             },
             messages: {
                 name: "Please enter the name of the school",
                 year: "Please enter your graduation year"
             }


         });
     });

     $(document).ready(function(){
         $( "#emergency" ).validate({
             // ignore: ".ignore",
             rules: {
                 e_first_name: {
                     required: true
                 },
                 e_last_name: {
                     required: true
                 },
                 e_street: {
                     required: true
                 },
                 e_city: {
                     required: true
                 },
                 e_zip: {
                     required: true,
                     range: [10000, 99999]
                 },
                 e_preferred_phone: {
                     required: true,
                     digits: true,
                     minlength: 10,
                     maxlength: 10
                 }
             },
             messages: {
                 e_first_name: "Please specify your first name",
                 e_last_name: "Please specify your last name",
                 e_street: "Please enter your street address",
                 e_city: "Please enter your city",
                 e_zip: {
                     required: "Please enter your zip code",
                     range: "Please enter a valid zip code"
                 },

             }
         });
     });

     $(document).ready(function(){
         $( "#employer" ).validate({
             rules: {
                 company: {
                     required: true
                 },
                 phone: {
                     required: true,
                     digits: true,
                     minlength: 10,
                     maxlength: 10
                 }

             },
             messages: {
                 company: "Please enter the company name",
                 phone: {
                     required: "Please enter the company phone number"
                 }
             }


         });
     });

     $(document).ready(function(){
         $( "#transcript" ).validate({
             rules: {
                 school: {
                     required: true
                 },
                 fileToUpload: {
                     required: true
                 }
             },
             messages: {
                 school: "Please enter the name of the school",
                 fileToUpload: "Please upload a copy of your transcript"
             }
         });
     });

     $(document).ready(function(){
         $( "#program" ).validate({
             rules: {
                 student_type: {
                     required: true
                 },
                 hear: {
                     required: true
                 }
             },
             messages: {
                 student_type: "Please select the program you're interested in",
                 hear: "Please tell us how you heard about our program"
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