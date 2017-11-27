        <section style="margin-bottom: 0px !important; padding-bottom: 1px !important; padding-top: 0px !important;">
            <div class="container-fluid" >
                <div class="row" style="background-color: #383838 !important;  height: 200px !important; padding-top: 5% !important; font-weight:normal !important;">
                    <div class=" col-md-2 col-md-offset-3">
                        <img src="resources/img/logo_branco.png" class="logo" style="height: 70px !important; margin-top: -10px;"></img>
                    </div>
                    <div class=" col-md-2">
                        <p style="color: #fff !important;">Casa Nobre Planejados Ltda.<br>
                           <span style="font-family: Regular !important;">Telefone: (11) 4574-4443</span></p>
                    </div>
                    <div class=" col-md-3">
                        <p style="color: #fff !important;">Show Room<br>
                           Guarulhos - Av. Torres Tibagy, 870. Gopouva</p>
                    </div>
                </div>
            </div>
        </section>

    <footer class="text-center" style="font-weight:normal !important;">
        <div class="col-md-12 footer">
            <p>Copyrights 2017 <a style="color: white;">casanobreplanejados.com.br</a> Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="resources/js/jquery.min.js"></script>
    <script src="resources/js/casanobre.js"></script>
    <script src="resources/js/jquery.easing.min.js"></script>
    <script src="resources/js/bootstrap.min.js"></script>
    <script src="resources/js/SmoothScroll.js"></script>
    <script src="resources/js/owl.carousel.js"></script>
    <script src="resources/js/waypoints.min.js" type="text/javascript"></script>
    <script src="resources/js/jquery.counterup.min.js" type="text/javascript"></script>
    <script src="resources/js/jquery.stellar.min.js"></script>
    <script src="resources/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
    <script src="resources/js/jquery.mask.js" type="text/javascript"></script>
    <script src="resources/js/jquery.mask.min.js" type="text/javascript"></script>
    <script type="text/javascript">

        <!-- cross browser -->
        window.requestAnimationFrame || (window.requestAnimationFrame = function() {
            return window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame || function(n) {
                window.setTimeout(n, 1e3 / 60)
            }
        }());
    </script>
    <script src="resources/js/jquery.circliful.min.js"></script>
    <script src="resources/js/typed.js" type="text/javascript"></script>
    <script src="resources/js/app.js" type="text/javascript"></script>
    <script type="text/javascript" src="resources/js/switcher.js"></script>



<script type="text/javascript">

// this is the id of the form
$("#email_form").submit(function(e) {

    $.ajax({
           type: "POST",
           url: "enviar",
           data: $("#email_form").serialize(), // serializes the form's elements.
           dataType: 'json',
           beforeSend: function(){
        
                $("#email_success").addClass("hide");
                $("#email_fail").addClass("hide");

           },
           complete: function(data)
           {

              if( data.status == 200 ){

                var envia_msg = data.responseJSON;
                if (envia_msg == 1){
                  $("#email_success").removeClass("hide");
                  $('#email_form').trigger("reset");
                }else{
                  $("#email_fail").removeClass("hide");
                }
                
              }
            
           }

           

         });

    e.preventDefault(); // avoid to execute the actual submit of the form.
});


</script>

</body>

</html>
