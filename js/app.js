

$(document).ready(function(){
    $('#search').keyup(function(){
        var  sub =$(this).val();
        // alert(sub);
        if(sub !=''){
            $.ajax({
                    url:'find.php' ,
                    type: 'GET' ,
                    data: 'k='+sub,

                    success: function(show){
                        $('.result').show().html(show);
                    }
                }); 
         
        }else {
            $('.result').hide();
        }
        // $('.result').show().html(sub);
    });


});
