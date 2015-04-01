$(document).ready(function(){


// ....Function for logging in.... //
 $(function(){
       $("#loginauthentication").submit(function(){
         

         var formData = new FormData($(this)[0]);
 
         $.ajax({
           type: "POST",
           url: "login/auth",
           data: formData,
           async: false,
           cache: false,
           contentType: false,
           processData: false,
           success: function(msg){
            //alert(msg);
               if(msg === 'incorrect'){
                  $("#username").attr("placeholder", "Username").val("").focus().blur();
                  $("#password").attr("placeholder", "Password").val("").focus().blur();
                  swal({   title: "Incorrect Credentials",   text: "The wrong Username or Password",   timer: 3000 });

               }else if(msg === 'inactive'){
                  $("#username").attr("placeholder", "Username").val("").focus().blur();
                  $("#password").attr("placeholder", "Password").val("").focus().blur();
                  swal({   title: "Account Inactive",   text: "Your Account is Inactive",   timer: 3000 });

               }else if(msg === 'session'){
                  $("#username").attr("placeholder", "Username").val("").focus().blur();
                  $("#password").attr("placeholder", "Password").val("").focus().blur();
                  swal({   title: "Session Failure",   text: "Your Session has failed to start",   timer: 3000 });

               }else if(msg === 'validation'){
                  $("#username").attr("placeholder", "Username").val("").focus().blur();
                  $("#password").attr("placeholder", "Password").val("").focus().blur();
                  swal({   title: "Validation Error",   text: "Your Credentials are not valid",   timer: 3000 });

               }else{
                    if(msg === '1'){
                      $(location).attr('href', 'hr');
                    }else if(msg === '2'){
                      $(location).attr('href', 'caretaker');
                    }else{
                        $("#username").attr("placeholder", "Username").val("").focus().blur();
                        $("#password").attr("placeholder", "Password").val("").focus().blur();
                        swal({   title: "User Type",   text: "The User Type is not found",   timer: 3000 });
                    }
               }
            }
         });
 
         return false;  //stop the actual form post !important!
 
       });
      });

     // ....end of function.... //












});




