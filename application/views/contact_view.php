  
   <section class="main-home home-size">
      <div class="contact-top-bg default-bg"></div>
      <div class="home__header-content">
      <div class="col-md-offset-1 col-md-11">
        <p class="intro-ambiente-cn text-left title-ambientes">[ Contato ]</p>
        </div>
      </div>
    </section>

    <section>
        <div style="float: left;"" class="col-md-2 col-md-offset-2 center-contact">
            <span class="font-contact">Telefone:</span>
            <br>
            <span class="font-weight-contact">(11)4574-0443</span>

            <br><br><br>
            <span class="font-contact">Nossas Redes:</span>
            <br>
            
            <img style="float: left !important; width: 30%; padding-top: 10px;" src="resources/img/facebook.png" >
            <span class="font-contact" style="padding-top: 5%">@casanobre</span><br>
            <span class="font-contact">planejados</span>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-1">
                    <!-- <form id="email_form" class=" text-center" method="POST" action='<?=base_url('enviar');?>'>  -->
                    <form id="email_form" class="text-center" method="POST"> 

                            <label style="font-weight:lighter; font-family: Regular; font-size: 12px;" for="nome"></label>
                            <span><input type="text" id="nome" name="nome" placeholder="Nome:" required autofocus></span>
                            <br><br>

                            <label for="fone"></label>
                            <span><input type="text" id="fone"  name="fone" placeholder="Telefone/Celular:" required data-mask="(00) 00000-0000"></span>
                            <br><br>
                        
                            <label for="assunto"></label>
                            <span><input type="text" id="assunto" name="assunto" placeholder="Assunto:" required></span>
                            <br><br>
                  
                            <label for="email"></label></span>
                            <span><input type="email" id="email" name="email" placeholder="Email:" required /></span>
                            <br>
                  
                            <label for="emailMensagem" id="text"></label><br>
                            <span><textarea name="emailMensagem" id="emailMensagem" placeholder="Mensagem:" required rows=""></textarea></span>
                            <br><br>
                 
                            <span class="col-md-1 send-button"><input id="ButtonEnviar" type="submit" name="env" required value="ENVIAR"/></span>
                    </form>
                            <div id="email_success" class="alert-success text-center hide" style=" width: 75%; font-weight:lighter !important; font-family: Regular !important; font-size: 18px !important;">
                                E-mail enviado com sucesso!
                            </div>
                            <div  id="email_fail" class="alert-danger text-center hide" style=" width: 75%; font-weight:lighter !important; font-family: Regular !important; font-size: 18px !important;">
                                Erro ao enviar e-mail! Tenete novamente.
                            </div>
            </div>
            
        </div>
</section>

        <section style="margin-top: 0px !important; margin-bottom: 0px !important; padding-top: 40px !important; padding-bottom: 0px !important;">
            <div class="container-fluid" style="border-bottom: 3px solid #C24F56">
                <div class="row">
                    <div id="map_google" class="text-center select-home" style=" height:50px; margin-left: 0px !important; width:  !important; "><p id="p_map_google" style="padding-top: 13px !important; font-size: 18px !important; color: #fff">Localização</p></div>
                </div>
                <div  id="line_map" class="row" style="margin-bottom: -6px !important; padding-bottom: 0px !important;">
                        <iframe  style="margin-bottom: 0px !important; padding-bottom: 0px !important;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.03901426177!2d-46.55042564855444!3d-23.4590571636344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef50cf7473765%3A0x94614946c2e08760!2sAv.+Torres+Tibagy%2C+870+-+Vila+Aprazivel%2C+Guarulhos+-+SP!5e0!3m2!1spt-BR!2sbr!4v1508985729569" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </section>
