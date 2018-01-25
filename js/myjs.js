// uppercase method
 $('.name').keyup(function() {
        this.value = this.value.toUpperCase();
    });


//submit function
function Submit(){
 var emailRegex = /^[a-z0-9._]*\@[a-z]*\.[a-z]{2,5}$/;
 var fname = document.form.Name.value,
  lname = document.form.LastName.value,
  femail = document.form.Email.value,
  freemail = document.form.enterEmail.value,
  fpassword = document.form.Password.value,
  fmonth = document.form.birthday_month.value,
  fday = document.form.birthday_day.value,
  fyear = document.form.birthday_year.value;
   
 if( fname == "" || !isNaN(fname))
   {
     document.form.Name.focus();
  document.getElementById("errorBox").innerHTML = "Enter the first name";
     return false;
   }
 if( lname == "" || !isNaN(lname))
   {
     document.form.LastName.focus() ;
   document.getElementById("errorBox").innerHTML = "Enter the last name";
     return false;
   }
    
   if (femail == "" )
 {
  document.form.Email.focus();
  document.getElementById("errorBox").innerHTML = "Enter the email";
  return false;
  }else if(!emailRegex.test(femail)){
  document.form.Email.focus();
  document.getElementById("errorBox").innerHTML = "Enter the valid email";
  return false;
  }
   
   if (freemail == "" )
 {
  document.form.enterEmail.focus();
  document.getElementById("errorBox").innerHTML = "Re-enter the email";
  return false;
  }else if(!emailRegex.test(freemail)){
  document.form.enterEmail.focus();
  document.getElementById("errorBox").innerHTML = "Re-enter the valid email";
  return false;
  }
   
  if(freemail !=  femail){
   document.form.enterEmail.focus();
   document.getElementById("errorBox").innerHTML = "emails are not matching, re-enter again";
   return false;
   }
   
   
 if(fpassword == "")
  {
   document.form.Password.focus();
   document.getElementById("errorBox").innerHTML = "enter the password";
   return false;
  }
   
   if (fmonth == "") {
        document.form.birthday_month.focus();
  document.getElementById("errorBox").innerHTML = "select the birthday month";
        return false;
     }
  if (fday == "") {
        document.form.birthday_day.focus();
  document.getElementById("errorBox").innerHTML = "select the birthday day";
        return false;
     }
  if (fyear == "") {
        document.form.birthday_year.focus();
  document.getElementById("errorBox").innerHTML = "select the birthday year";
        return false;
     }
  if(document.form.radiobutton[0].checked == false && document.form.radiobutton[1].checked == false){
    document.getElementById("errorBox").innerHTML = "select your gender";
    return false;
   }
  if(fname != '' && lname != '' && femail != '' && freemail != '' && fpassword != '' && fmonth != '' && fday != '' && fyear != ''){
   document.getElementById("errorBox").setAttribute="color","#00ff00"; 
   document.getElementById("errorBox").innerHTML = "form submitted successfully";
   }
     
}

/*Js of loading bar*/

$(".ajax-call").loadingbar({
  target: "#loadingbar-frame",
  replaceURL: false,
  direction: "right",
 
  /* Default Ajax Parameters.  */
  async: true, 
  complete: function(xhr, text) {},
  cache: true,
  error: function(xhr, text, e) {},
  global: true,
  headers: {},
  statusCode: {},
  success: function(data, text, xhr) {},
  dataType: "html",
  done: function(data) {}
});