
//check password with confirm 
function checkPassword(form){
//     var pass =document.getElementById("password1");
//     var confirm = document.querySelector("#confirm2");
       pass = form.password1.value;    
       con = form.confirm2.value; 
    //console.log('element pass =' + document.getElementById("password1").value +'confirm = '+ document.getElementById("confirm2").value);
    
    //console.log('query pass =' + document.querySelector("#password1") +'confirm = '+ document.querySelector("#confirm2"));

     if (pass == con){
        return true;
     }else{
         //  alert('hi');
        // console.log('mesh zay b3d');
        var msg =" Password and Confirm Password dosen't Match ";
        //alert(pass+ 'hi'+con);

        $('#passError').fadeIn(1000).html(msg).delay(1000).fadeOut(2000);
       // event.preventDefault();
    return false ;
     }
}

    //  function checkPassword(form) { 
    //     console.log('element pass =' + document.getElementById("password1").value +'confirm = '+ document.getElementById("confirm2").value);
    
    //     console.log('query pass =' + document.querySelector("password1") +'confirm = '+ document.querySelector("#confirm2"));
    //     password1 = form.password1.value;    
    //     password2 = form.confirm2.value; 
 
    //     // If password not entered 
    //     if (password1 == '') 
    //         alert ("Please enter Password"); 
              
    //     // If confirm password not entered 
    //     else if (password2 == '') 
    //         alert ("Please enter confirm password"); 
              
    //     // If Not same return False.     
    //     else if (password1 != password2) { 
    //         alert ("\nPassword did not match: Please try again...") 
    //         return false; 
    //     } 

    //     // If same return True. 
    //     else{ 
    //         alert("Password Match: Welcome to GeeksforGeeks!") 
    //         return true; 
    //     } 
    // } 
    

//date of birth drop down menu
// function loadDropDown(defopt,start,end){
//     document.write("<select class='birthdate'>");
//     document.write("<option>"+defopt+"</option>");

//         for(var date= start ; date>=end; date--){
//             document.write('<option>'+date+'</option>');
//         }
//     document.write("</select>");
    
// }
// $( function() {
//     $( "#datepicker" ).datepicker();
//   } );



// function clearInput(){
//     var elements = document.getElementsByTagName("input");
//     for(var el = 0; el < elements.length; el ++){
//         if(elements[el].type =='text' ||  elements[el].type =='password' || elements[el].type =='email'){
//             elements[el].value ='';
//         }
//     }
// }

// login error
$(document).ready(function(){
    $('#loggo').click(function(){
        var usIn= $('#username').val();
        // var passIn=$('$passw').val();
        if( usIn =='' ){
            $('#error').fadeIn(1000);
            $('#error').html(' UserName and Password Is Required ').delay(1000).fadeOut(2000);
        }
    });
});
// $(document).ready(function(){
//     $('#fullwidth').click(function(){
//         var usname = $('#username').val();
//         if(username == ''){
//             var userMsg = 'user name is required'
//             document.getElementById("userError").innerHTML=userMsg;

//             $('#usError').fadeIn(2000).html('user name is required').delay(1000).fadeOut(2000);
//         }
//     });
// });
// manageusers search result
$(document).ready(function(){
    $('#search').keyup(function(){
        var key =$(this).val();
        if(key !=''){
            $.ajax({
            url:'search.php' ,
            type: 'GET' ,
            data: 'k='+key,

            success: function(view){
                $('.result').show();
                $('.result').html(view);
            }
           });
        }else {
            $('.result').hide();
        } 
        
    });
});
$(document).ready(function(){
    $('#free').change(function(){
        var id =$(this).val();
        // alert(id);
        $('.result').html(id)
    });
});
$(document).ready(function(){
    $('#free').change (function (){
        var f_id = $(this).val();
        $.ajax({
            url:'show-freelancers.php',
            type:'GET',
            data:'ID='+f_id,
     
     
            success:function(response){
            $('.resulttbl').show();
            $('.resulttbl').html(response);
            }
        });
     
    });
});
