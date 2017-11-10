   <section class="main-home home-size" id="home">
      <div class="contact-top-bg"></div>
      <div class="home__header-content">
      <div class="col-md-offset-1 col-md-11">
        <p class="intro-ambiente-cn text-left" style="font-family: Semibold !important; letter-spacing: 4px !important;font-size: 36px;">[ Contato ]</p>
        </div>
      </div>
    </section>

    <section >
        <form class="col-md-offset-5 col-md-2">
            <label style="float: left;" for="nome">Nome:</label>
            <span style="float: right;"><input type="text" id="nome" placeholder="Nome" required autofocus></span>
            <br><br>
        </form>
        <form class="col-md-offset-5 col-md-2"">
            
            <label style="float: left;" for="fone">Telefone:</label>
            <span style="float: right;"><input type="text" id="fone" placeholder="Telefone/Celular" required data-mask="(00) 00000-0000"></span>
            <br><br>
        </form>
        <form class="col-md-offset-5 col-md-2">
            <label style="float:left;" for="assunto">Assunto:</label>
            <span style="float:right;"><input type="text" id="assunto" placeholder="Assunto" required></span>
            <br><br>
        </form>
        <form class="col-md-offset-5" method="POST" action="index.php/welcome/enviar">
 
            <label for="textDe" id="from">E-mail:</label>
            <input id="textDe" type="text" name="txt_de"/>
            <br><br>
 
            <label for="textPara" id="destiny">E-mail de Destino:</label>
            <input id="textPara" type="text" name="txt_para"/>
            <br><br>
            
            <label for="textMsg" id="text">Mensagem:</label><br>
            <textarea name="txt_msg" id="textMsg" rows=""></textarea>
            <br><br>

            <input id="ButtonEnviar" type="submit" name="env" value="Enviar E-mail"/>
            <br><br>
 
        </form>
        
 
 
    


    </section>

        <section style="margin-top: 0px !important; margin-bottom: 0px !important; padding-top: 40px !important; padding-bottom: 0px !important;">
            <div class="container-fluid" >
                <div class="row">
                    <div id="map_google" class="col-md-6 text-right select-home" style=" height:50px; margin-left: 0px !important; width:  !important; "><p id="p_map_google" style="padding-top: 13px !important; font-size: 18px !important; color: #fff">Localização</p></div>

                    <div id="fotos_carousel"  class="col-md-6 text-left deselect-home" style="height:50px; width: 50% !important;"><p id="p_fotos_carousel" style="padding-top: 15px !important; font-size: 14px !important;">Fotos do Instagram</p></div>
                </div>
                <div  id="line_map" class="row" style="margin-bottom: -6px !important; padding-bottom: 0px !important;">
                        <iframe  style="margin-bottom: 0px !important; padding-bottom: 0px !important;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.03901426177!2d-46.55042564855444!3d-23.4590571636344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef50cf7473765%3A0x94614946c2e08760!2sAv.+Torres+Tibagy%2C+870+-+Vila+Aprazivel%2C+Guarulhos+-+SP!5e0!3m2!1spt-BR!2sbr!4v1508985729569" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div  id="line_fotos" class="row hide" style="margin-bottom: -6px !important; padding-bottom: 0px !important;">
                    <div class="container" style="height: 450px;">
                    <div class="row" style="height: 450px !important;">
                        
                            <div class="carousel slide" id="carousel2" >
                                <ol class="carousel-indicators">
                                    <li data-slide-to="0" data-target="#carousel2"  class="active"></li>
                                    <li data-slide-to="1" data-target="#carousel2"></li>
                                    <li data-slide-to="2" data-target="#carousel2" class=""></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item active" >
                                        <img alt="image" style="height: 450px !important; margin-left: 16%" class="img-responsive" src="resources/img/kitchen/1.jpg">
                                    </div>
                                    <div class="item ">
                                        <img alt="image" style="height: 450px !important; margin-left: 16%"  class="img-responsive" src="resources/img/kitchen/2.jpg">
                                    </div>
                                    <div class="item">
                                        <img alt="image" style="height: 450px !important; margin-left: 16%"  class="img-responsive" src="resources/img/kitchen/3.jpg">
                                    </div>
                                </div>
                                <a data-slide="prev" href="#carousel2" class="left carousel-control">
                                    <span class="icon-prev"></span>
                                </a>
                                <a data-slide="next" href="#carousel2" class="right carousel-control">
                                    <span class="icon-next"></span>
                                </a>
                            </div>

                    </div>
                    </div>
                </div>                
                <div class="row">
                    <div class="col-md-12" style="background-color: #C24F56 !important; height:3px; margin-left: 0px !important; width:  !important;"></div>
                </div>                
            </div>
        </section>

