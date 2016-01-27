$().ready(function(){
                        $(function(){
                        $('#login, #login2').hide(); 
                        });
                        
                        $('#toggle-login').click(
                          function(){                     
                          $('#login').toggle();
                        });
                       
                        $('#toggle-login2').click(
                          function(){                     
                          $('#login2').toggle();
                        });                        
})
