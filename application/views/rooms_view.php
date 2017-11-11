
    <section class="main-home home-size">
      <div class="rooms-top-bg default-bg"></div>
      <div class="home__header-content">
      <div class="col-md-offset-1 col-md-11">
        <p class="intro-ambiente-cn text-left title-ambientes">[ Dormitórios ]</p>
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

 

    <section style="padding: 2%">
       <div class="container bg-dark">
          <div class="col-md-5 col-md-offset-1" style="padding: 1%;">

            <div class="row" style="margin: 1%; padding: 1%;">
                <div class="item-img-wrap">
                    <div class="img-responsive"></div>
                     <img src="resources/img/<?=$folder?>/1.jpg" class="img-responsive hover-shadow" alt="Dormitório_1" onclick="openModal();currentSlide(1)">
                </div>
            </div>

            <div class="row" style="margin: 1%; padding: 1%;">
                <div class="item-img-wrap">
                    <div class="img-responsive"></div>
                     <img src="resources/img/<?=$folder?>/2.jpg" class="img-responsive hover-shadow" alt="Dormitório_2" onclick="openModal();currentSlide(3)">
                </div>
            </div>

            <div class="row" style="margin: 1%; padding: 1%;">
                <div class="item-img-wrap">
                    <div class="img-responsive"></div>
                     <img src="resources/img/<?=$folder?>/3.jpg" class="img-responsive hover-shadow" alt="Dormitório_3" onclick="openModal();currentSlide(5)">
                </div>
            </div>

            <div class="row" style="margin: 1%; padding: 1%;">
                <div class="item-img-wrap">
                    <div class="img-responsive"></div>
                     <img src="resources/img/<?=$folder?>/4.jpg" class="img-responsive hover-shadow" alt="Dormitório_4" onclick="openModal();currentSlide(7)">
                </div>
            </div>

            <div class="row" style="margin: 1%; padding: 1%;">
                <div class="item-img-wrap">
                    <div class="img-responsive"></div>
                     <img src="resources/img/<?=$folder?>/5.jpg" class="img-responsive hover-shadow" alt="Dormitório_5" onclick="openModal();currentSlide(9)">
                </div>
            </div>

            <div class="row" style="margin: 1%; padding: 1%;">
                <div class="item-img-wrap">
                    <div class="img-responsive"></div>
                     <img src="resources/img/<?=$folder?>/6.jpg" class="img-responsive hover-shadow" alt="Dormitório_6" onclick="openModal();currentSlide(11)">
                </div>
            </div>

            <div class="row" style="margin: 1%; padding: 1%;">
                <div class="item-img-wrap">
                    <div class="img-responsive"></div>
                     <img src="resources/img/<?=$folder?>/7.jpg" class="img-responsive hover-shadow" alt="Dormitório_7" onclick="openModal();currentSlide(13)">
                </div>
            </div>

          </div>


          <div class="col-md-5" style="padding: 1%;">

            <div class="row" style="margin: 1%; padding: 1%;">
                <div class="item-img-wrap">
                    <div class="img-responsive"></div>
                     <img src="resources/img/<?=$folder?>/8.jpg" class="img-responsive hover-shadow" alt="Dormitório_8" onclick="openModal();currentSlide(2)">
                </div>
            </div>

            <div class="row" style="margin: 1%; padding: 1%;">
                <div class="item-img-wrap">
                    <div class="img-responsive"></div>
                     <img src="resources/img/<?=$folder?>/9.jpg" class="img-responsive hover-shadow" alt="Dormitório_9" onclick="openModal();currentSlide(4)">
                </div>
            </div>

            <div class="row" style="margin: 1%; padding: 1%;">
                <div class="item-img-wrap">
                    <div class="img-responsive"></div>
                     <img src="resources/img/<?=$folder?>/10.jpg" class="img-responsive hover-shadow" alt="Dormitório_10" onclick="openModal();currentSlide(6)">
                </div>
            </div>

            <div class="row" style="margin: 1%; padding: 1%;">
                <div class="item-img-wrap">
                    <div class="img-responsive"></div>
                     <img src="resources/img/<?=$folder?>/11.jpg" class="img-responsive hover-shadow" alt="Dormitório_11" onclick="openModal();currentSlide(8)">
                </div>
            </div>

            <div class="row" style="margin: 1%; padding: 1%;">
                <div class="item-img-wrap">
                    <div class="img-responsive"></div>
                     <img src="resources/img/<?=$folder?>/12.jpg" class="img-responsive hover-shadow" alt="Dormitório_12" onclick="openModal();currentSlide(10)">
                </div>
            </div>

            <div class="row" style="margin: 1%; padding: 1%;">
                <div class="item-img-wrap">
                    <div class="img-responsive"></div>
                     <img src="resources/img/<?=$folder?>/13.jpg" class="img-responsive hover-shadow" alt="Dormitório_13" onclick="openModal();currentSlide(12)">
                </div>
            </div>

            <div class="row" style="margin: 1%; padding: 1%;">
                <div class="item-img-wrap">
                    <div class="img-responsive"></div>
                     <img src="resources/img/<?=$folder?>/14.jpg" class="img-responsive hover-shadow" alt="Dormitório_14" onclick="openModal();currentSlide(14)">
                </div>
            </div>

          </div>

       </div>
    </section>

    <?= $this->load->view('ambientes_view'); ?>
  
    <?= $this->load->view('visit_view'); ?>

    <section class="main-ambiente" id="home" style="padding: 0px; height: 200px !important;">
        <div class="row text-center" style="margin: 0px !important; padding: 0px !important;">
            <div class="col-md-8 col-md-offset-2">
                <img src="resources/img/NobrezaNasAtitudesWite.png" style=" margin-top: 73px;">
            </div>
        </div>
        <div class="rooms-bg default-bg"></div>
    </section>

    <div id="myModal" class="modal" style="z-index: 101">
      <div class="modal-content">

        <div class="mySlides">
          <span class="close cursor back-light-slider" onclick="closeModal()">&times;</span>
          <div class="numbertext number-photo">1 / 14</div>
          <img src="resources/img/<?=$folder?>/1.jpg" class="img-width-ambiente">
        </div>

        <div class="mySlides">
          <span class="close cursor back-light-slider" onclick="closeModal()">&times;</span>
          <div class="numbertext number-photo">2 / 14</div>
          <img src="resources/img/<?=$folder?>/8.jpg" class="img-width-ambiente">
        </div>

        <div class="mySlides">
          <span class="close cursor back-light-slider" onclick="closeModal()">&times;</span>
          <div class="numbertext number-photo">3 / 14</div>
          <img src="resources/img/<?=$folder?>/2.jpg" class="img-width-ambiente">
        </div>

        <div class="mySlides">
          <span class="close cursor back-light-slider" onclick="closeModal()">&times;</span>
          <div class="numbertext number-photo">4 / 14</div>
          <img src="resources/img/<?=$folder?>/9.jpg" class="img-width-ambiente">
        </div>

        <div class="mySlides">
          <span class="close cursor back-light-slider" onclick="closeModal()">&times;</span>
          <div class="numbertext number-photo">5 / 14</div>
          <img src="resources/img/<?=$folder?>/3.jpg" class="img-width-ambiente">
        </div>

        <div class="mySlides">
          <span class="close cursor back-light-slider" onclick="closeModal()">&times;</span>
          <div class="numbertext number-photo">6 / 14</div>
          <img src="resources/img/<?=$folder?>/10.jpg" class="img-width-ambiente">
        </div>

        <div class="mySlides">
          <span class="close cursor back-light-slider" onclick="closeModal()">&times;</span>
          <div class="numbertext number-photo">7 / 14</div>
          <img src="resources/img/<?=$folder?>/4.jpg" class="img-width-ambiente">
        </div>

        <div class="mySlides">
          <span class="close cursor back-light-slider" onclick="closeModal()">&times;</span>
          <div class="numbertext number-photo">8 / 14</div>
          <img src="resources/img/<?=$folder?>/11.jpg" class="img-width-ambiente">
        </div>

        <div class="mySlides">
          <span class="close cursor back-light-slider" onclick="closeModal()">&times;</span>
          <div class="numbertext number-photo">9 / 14</div>
          <img src="resources/img/<?=$folder?>/5.jpg" class="img-width-ambiente">
        </div>

        <div class="mySlides">
          <span class="close cursor back-light-slider" onclick="closeModal()">&times;</span>
          <div class="numbertext number-photo">10 / 14</div>
          <img src="resources/img/<?=$folder?>/12.jpg" class="img-width-ambiente">
        </div>

        <div class="mySlides">
          <span class="close cursor back-light-slider" onclick="closeModal()">&times;</span>
          <div class="numbertext number-photo">11 / 14</div>
          <img src="resources/img/<?=$folder?>/6.jpg" class="img-width-ambiente">
        </div>

        <div class="mySlides">
          <span class="close cursor back-light-slider" onclick="closeModal()">&times;</span>
          <div class="numbertext number-photo">12 / 14</div>
          <img src="resources/img/<?=$folder?>/13.jpg" class="img-width-ambiente">
        </div>

        <div class="mySlides">
          <span class="close cursor back-light-slider" onclick="closeModal()">&times;</span>
          <div class="numbertext number-photo">13 / 14</div>
          <img src="resources/img/<?=$folder?>/7.jpg" class="img-width-ambiente">
        </div>

        <div class="mySlides">
          <span class="close cursor back-light-slider" onclick="closeModal()">&times;</span>
          <div class="numbertext number-photo">14 / 14</div>
          <img src="resources/img/<?=$folder?>/14.jpg" class="img-width-ambiente">
        </div>

        <a class="prev" style="color: #fff !important;" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" style="color: #fff !important;" onclick="plusSlides(1)">&#10095;</a>

      </div>
    </div>
