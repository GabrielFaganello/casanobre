   <section class="main-home home-size">
      <div class="contact-top-bg"></div>
      <div class="home__header-content">
      <div class="col-md-offset-1 col-md-11">
        <p class="intro-ambiente-cn text-left title-ambientes">[ Contato ]</p>
        </div>
      </div>
    </section>

    <section>
        <div class="row" style="float: left;">
                <div class="col-md-5 col-md-offset-6">
                    <span style="font-weight:bold; margin-top: 20px; font-family: Regular; font-size: 18px;">Telefone:</span>
                    <br>
                    <span style="font-weight: bold !important; color: #C24F56 !important; font-size: 20px !important; padding: 0px !important; padding: 0px !important; margin: 0px !important;">(11)4574-0443</span>

                    <br><br><br>
                    <span style="font-weight:bold; margin-top: 20px; font-family: Regular; font-size: 18px;">Nossas Redes:</span>
                    <br>
                    
                    <img style="float: left !important; width: 30%" src="resources/img/facebook.png" >
                    <span style="font-weight:bold; padding-left: 8px; font-family: Regular; font-size: 18px;">@casanobre</span><br>
                    <span style="font-weight:bold; padding-left: 8px; font-family: Regular; font-size: 18px;">planejados</span>
                    <br><br><br>

                    <img style="clear: both; float: left !important; width: 30%" src="resources/img/instagram.png" >
                    <span style="font-weight:bold; padding-left: 8px; font-family: Regular; font-size: 18px;">@casanobre</span><br>
                    <span style="font-weight:bold; padding-left: 8px; font-family: Regular; font-size: 18px;">oficial</span>
                    
                </div>


        </div>
        <div class="row">
            <div class="col-md-5">
                    <form class=" text-center" method="POST" action='<?=base_url('enviar');?>'> 
                            <label style="float: left; font-weight:lighter; font-family: Regular; font-size: 12px;" for="nome"></label>
                            <span style="float: left;"><input type="text" id="nome" placeholder="Nome" required autofocus></span>
                            <br><br>
                             <label style="float: left;" for="fone"></label>
                             <span style="float: left;"><input type="text" id="fone" placeholder="Telefone/Celular" required data-mask="(00) 00000-0000"></span>
                             <br><br>
                             <label style="float:left;" for="assunto"></label>
                             <span style="float:left;"><input type="text" id="assunto" placeholder="Assunto" required></span>
                             <br><br>

                  
                             <label style="float: left;" for="textDe" id="from"></label></span>
                             <span style="float: left;"><input id="textDe" type="text" placeholder="Email" required name="txt_de"/></span>
                             <br><br>
                  
                             <label style="float: left;" for="textMsg" id="text"></label><br>
                             <span style="float: left;"><textarea name="emailMensagem" id="textMsg" placeholder="Mensagem" required rows=""></textarea></span>
                             <br><br>
                 
                             <span class="col-md-1" style="float: right;"><input id="ButtonEnviar" type="submit" name="env" required value="Enviar E-mail"/></span>
                    </form>

                    <!-- <form class=" text-center" method="POST" action='<?=base_url('enviar');?>'> 

                    <span id="destiny">E-mail de Destino:</span>
                    <input id="emailPara" type="text" name="txt_para"/>
                    <br>
                    <br>
         
                    <span id="text">Mensagem:</span>
                    <textarea name="emailMensagem" id="textMsg" rows=""></textarea>
                    <br>
                    <br>
         
                    <input id="ButtonEnviar" type="submit" name="env" value="Enviar E-mail"/>
         
                </form>-->
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
