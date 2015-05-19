<html>
    <script src="admin/js/jquery-1.11.0.min.js" type="text/javascript"></script>

<script>
        jQuery(function (){
             $(".summary").hide();
             
             PreencheApostas();
            
        
        });
      function PreencheApostas(){
              $.ajax({
            type: "get",
            url: "index.php?r=premio/GetProdutos",
            data:"id=0",
            dataType: "json",
            success: function(response, status) {
                debugger;
               

                for (var i = 0; response.length > i; i++) {
                    
                  jQuery('.verApostaDiv').append('<span>'+response[i][1]+'</span><br/>');
                   
                   
                }
            
            },
            error: function(response, status) {

            },
        });
        }
        </script>
        
        <div class="verApostaDiv">
            
        </div>
</html> 