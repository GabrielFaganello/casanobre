
    <section class="main-home home-size" id="home">
      <div class="wcs-top-bg"></div>
      <div class="home__header-content">
      <div class="col-md-offset-1 col-md-11">
        <p class="intro-ambiente-cn text-left" style="font-family: Semibold !important; letter-spacing: 4px !important;">[ Banheiros ]</p>
        </div>
      </div>
    </section>
    <div class="container">
        <div class="row">
                <div class="col-md-12"> 
                    <p style="margin-top: 20px; font-family: Regular; font-size: 18px;" class="text-left texto-ambientes">Conheça alguns de nossos modelos:</p>
                </div>
        </div>
    </div>

 


    <section style="padding: 20px">
       <div class="container bg-dark">
            <div class="row row-margins-ambiente">
                <div class="col-md-offset-1 col-md-5 col-margins-ambiente">
                    <div class="item-img-wrap">
                        <div class="img-responsive"></div>
                         <img src="resources/img/<?=$folder?>/1.jpg" class="img-responsive hover-shadow" alt="Cozinha_1" onclick="openModal();currentSlide(1)">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="item-img-wrap">
                        <div class="img-responsive"></div>
                         <img src="resources/img/<?=$folder?>/2.jpg" class="img-responsive hover-shadow" alt="Cozinha_2" onclick="openModal();currentSlide(2)">
                    </div>
                </div>
            </div>
      
            <div class="row row-margins-ambiente">
                <div class="col-md-offset-1 col-md-5 col-margins-ambiente">
                    <div class="item-img-wrap">
                        <div class="img-responsive"></div>
                         <img src="resources/img/<?=$folder?>/3.jpg" class="img-responsive hover-shadow" alt="Cozinha_3" onclick="openModal();currentSlide(3)">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="item-img-wrap">
                        <div class="img-responsive"></div>
                         <img src="resources/img/<?=$folder?>/4.jpg" class="img-responsive hover-shadow" alt="Cozinha_4" onclick="openModal();currentSlide(4)">
                    </div>
                </div>
            </div>

            <div class="row row-margins-ambiente">
                <div class="col-md-offset-1 col-md-5 col-margins-ambiente">
                    <div class="item-img-wrap">
                        <div class="img-responsive"></div>
                         <img src="resources/img/<?=$folder?>/5.jpg" class="img-responsive hover-shadow" alt="Cozinha_5" onclick="openModal();currentSlide(5)">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="item-img-wrap">
                        <div class="img-responsive"></div>
                         <img src="resources/img/<?=$folder?>/6.jpg" class="img-responsive hover-shadow" alt="Cozinha_6" onclick="openModal();currentSlide(6)">
                    </div>
                </div>
            </div>
       </div>
    </section>

    <?= $this->load->view('ambientes_view'); ?>
  
    <?= $this->load->view('visit_view'); ?>

    <section class="main-ambiente" id="home" style="padding: 0px">
        <div class="row text-center" style="margin: 0px !important; padding: 0px !important;">
            <div class="col-md-8 col-md-offset-2">
                <img src="resources/img/NobrezaNasAtitudesWite.png" style="height: 200px !important; margin-top: 65px;">
            </div>
        </div>
        <div class="wcs-bg"></div>
    </section>

    <div id="myModal" class="modal" style="z-index: 101">
      <div class="modal-content">

        <div class="mySlides">
          <span class="close cursor back-light-slider" onclick="closeModal()">&times;</span>
          <div class="numbertext number-photo">1 / 19</div>
          <img src="resources/img/<?=$folder?>/1.jpg" class="img-width-ambiente">
        </div>

        <div class="mySlides">
          <span class="close cursor back-light-slider" onclick="closeModal()">&times;</span>
          <div class="numbertext number-photo">2 / 19</div>
          <img src="resources/img/<?=$folder?>/2.jpg" class="img-width-ambiente">
        </div>

        <div class="mySlides">
          <span class="close cursor back-light-slider" onclick="closeModal()">&times;</span>
          <div class="numbertext number-photo">3 / 19</div>
          <img src="resources/img/<?=$folder?>/3.jpg" class="img-width-ambiente">
        </div>

        <div class="mySlides">
          <span class="close cursor back-light-slider" onclick="closeModal()">&times;</span>
          <div class="numbertext number-photo">4 / 19</div>
          <img src="resources/img/<?=$folder?>/4.jpg" class="img-width-ambiente">
        </div>

        <div class="mySlides">
          <span class="close cursor back-light-slider" onclick="closeModal()">&times;</span>
          <div class="numbertext number-photo">5 / 19</div>
          <img src="resources/img/<?=$folder?>/5.jpg" class="img-width-ambiente">
        </div>

        <div class="mySlides">
          <span class="close cursor back-light-slider" onclick="closeModal()">&times;</span>
          <div class="numbertext number-photo">6 / 19</div>
          <img src="resources/img/<?=$folder?>/6.jpg" class="img-width-ambiente">
        </div>

        <a class="prev" style="color: #fff !important;" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" style="color: #fff !important;" onclick="plusSlides(1)">&#10095;</a>

      </div>
    </div>
