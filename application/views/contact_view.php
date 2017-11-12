   <section class="main-home home-size">
      <div class="contact-top-bg"></div>
      <div class="home__header-content">
      <div class="col-md-offset-1 col-md-11">
        <p class="intro-ambiente-cn text-left title-ambientes">[ Contato ]</p>
        </div>
      </div>
    </section>

    <section >
        <div class="row">
            <div class="col-md-12">
            
                <form class=" text-center" method="POST" action='<?=base_url('enviar');?>'>

                    <span id="destiny">E-mail de Destino:</span>
                    <input id="emailPara" type="text" name="txt_para"/>
                    <br>
                    <br>
         
                    <span id="text">Mensagem:</span>
                    <textarea name="emailMensagem" id="textMsg" rows=""></textarea>
                    <br>
                    <br>
         
                    <input id="ButtonEnviar" type="submit" name="env" value="Enviar E-mail"/>
         
                </form>
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
