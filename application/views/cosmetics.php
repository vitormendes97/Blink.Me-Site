  <body>
    <div class="container padding-container">
      <div class="col-md-7">
          <div class="col-md-12">
            <p class="centralize-responsive text-left reklame-config" style="color:#000;">
              Tem na blink<span style="font-family:cursive">.</span>me
            </p>
            <hr class="hr_custom" id="hr_cosmetics">
          </div>
          <div class="col-md-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
              <?php
              $paginas = 0;
              $itens = 1;
              $totalMarcas = count($marcas);
              for ($i=0; $i < $totalMarcas ; $i++) {
                  if($itens == 1) {
                     $active = $paginas==0 ? 'active' : '';
                     echo '<div class="item '.$active.'">';
                   } ?>
                        <div class="col-md-3 col-xs-6 col-sm-3">
                          <div class="marcas-box">
                            <img src="<?php echo $marcas[$i]; ?>" alt="" style="width:100%;border-radius:5px;">
                          </div>
                        </div>
                  <?php if($itens==16){
                    echo '</div>';
                    $itens=0;
                    $paginas++;
                  }
                  $itens++;
                  ?>
              <?php }
              echo $totalMarcas%16>0 ? '</div>' : '';
              ?>
              </div>

              <!-- Controls -->
              <a class="left carousel-control" style="background:none;" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" style="background:none;" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
      </div>
      <div class="col-md-5">
        <div class="col-md-12">
          <p class="centralize-responsive text-left reklame-config" style="color:#000;">
            Marcas por Categoria
          </p>
          <hr class="hr_custom" id="hr_cosmetics">
        </div>

        <div class="col-md-12">
          <ul class="main-menu font-bold">
            <li>MAQUIAGEM
            <i class="glyphicon glyphicon-menu-down pull-right cursor-pointer closed"></i>
              <ul class="cosmetics_menu">
                <li>Jacki Design</li>
                <li>Klass Vough</li>
                <li>Real Techniques</li>
                <li>Tweezerman</li>
                <li>Dior</li>
                <li>Mundial Personal Care</li>
                <li>Shiseido</li>
              </ul>
            </li>
            <li>PERFUMES
              <i class="glyphicon glyphicon-menu-down pull-right cursor-pointer closed"></i>
              <ul class="cosmetics_menu">
                <li>A.Banderas</li>
                <li>Agatha Ruiz</li>
                <li>Abercrombie & Fitch</li>
                <li>Animale</li>
                <li>Azzaro</li>
                <li>Britney Spears</li>
                <li>Burberry</li>
                <li>Bvlgari</li>
                <li>C.Herrera</li>
                <li>Cacharel</li>
                <li>Calvin Klein</li>
                <li>Dior</li>
                <li>Ferrari</li>
                <li>G.Sabatini</li>
                <li>Givenchy</li>
                <li>Hugo Boss</li>
                <li>Jimmy Choo</li>
                <li>Juliana Paes</li>
                <li>Kenzo</li>
                <li>Lancôme</li>
                <li>MontBlanc</li>
                <li>Nina Ricci</li>
                <li>P.Rabanne</li>
                <li>Ralph Lauren</li>
                <li>Salvador Dali</li>
                <li>Tommy Hilfiger</li>
                <li>Y.S.Laurent</li>
              </ul>
            </li>
            
            <li>CORPO E BANHO
              <i class="glyphicon glyphicon-menu-down pull-right cursor-pointer closed"></i>
              <ul class="cosmetics_menu">
                <li>Australian Gold</li>
                <li>Alessandro Internacional</li>
                <li>Kapeh Cosméticos</li>
                <li>Korres</li>
                <li>Vinotage</li>
                <li>Dermalogica</li>
                <li>Dior</li>
                <li>Lancôme</li>
                <li>Nuxe</li>
                <li>Shiseido</li>
              </ul>
            </li>
            <li>CABELOS
              <i class="glyphicon glyphicon-menu-down pull-right cursor-pointer closed"></i>
              <ul class="cosmetics_menu">
                <li>AcquaFlora</li>
                <li>AlfaParf</li>
                <li>Asian Secret</li>
                <li>Cadiveu</li>
                <li>Davines</li>
                <li>GoldWell</li>
                <li>Inoar</li>
                <li>John Frieda</li>
                <li>Joico</li>
                <li>K.Pro</li>
                <li>Kérastase</li>
                <li>Keune</li>
                <li>L'oréal Professionel</li>
                <li>Lee Stafford</li>
                <li>Living Proof</li>
                <li>NG de France</li>
                <li>Nioxin</li>
                <li>Paul Mitchell</li>
                <li>Phil Smith</li>
                <li>Ponto 9</li>
                <li>RedKen</li>
                <li>Schwarzkopf Professional</li>
                <li>SH-RD</li>
                <li>Shiseido</li>
                <li>Sweet Hair</li>
                <li>Tigi</li>
                <li>Wella Professionals</li>
              </ul>
            </li>
            <li>HOMEM
              <i class="glyphicon glyphicon-menu-down pull-right cursor-pointer closed"></i>
              <ul class="cosmetics_menu">
                <li>AcquaFlora</li>
                <li>Dr.Jones</li>
                <li>L'oréal Professionnel</li>
                <li>Ponto 9</li>
                <li>Redken</li>
                <li>Shiseido</li>
                <li>SobreBarba</li>
                <li>Surya</li>
              </ul>
            </li>
            <li>NAILS
              <i class="glyphicon glyphicon-menu-down pull-right cursor-pointer closed"></i>
              <ul class="cosmetics_menu">
                <li>Alessandro International</li>
                <li>Dior</li>
                <li>Impala</li>
                <li>Morgan Taylor</li>
                <li>Risqué</li>
                <li>Surya</li>
                <li>Vult</li>
                <li>Kiss NY</li>
                <li>Mundial</li>
                <li>Oceane</li>
                <li>Tweezerman</li>
              </ul>
            </li>
            <!-- <li>ACESSÓRIOS
              <i class="glyphicon glyphicon-menu-down pull-right cursor-pointer closed"></i>
              <ul class="cosmetics_menu">
                <li> Hair<i class="glyphicon glyphicon-menu-down pull-right cursor-pointer sub_menu_closed"></i>
                  <ul class="cosmetics_submenu">
                    <li>Cine 732</li>
                    <li>Finestra</li>
                    <li>Juliana Manzini</li>
                    <li>Linzi Clip</li>
                  </ul>
                </li>

                <li> Nail<i class="glyphicon glyphicon-menu-down pull-right cursor-pointer sub_menu_closed"></i>
                  <ul class="cosmetics_submenu">
                    <li>Alessandro Internacional</li>
                    <li>Dior</li>
                    <li>Impala</li>
                    <li>Mundial</li>
                    <li>Oceane</li>
                    <li>Tweezerman</li>
                  </ul>
                </li>

                <li> Make<i class="glyphicon glyphicon-menu-down pull-right cursor-pointer sub_menu_closed"></i>
                  <ul class="cosmetics_submenu">
                    <li>Jacki Design</li>
                    <li>Klass Vough</li>
                    <li>Real Techniques</li>
                    <li>Tweezerman</li>
                  </ul>
                </li>
              </ul>
            </li> -->
          </ul>
        </div>

      </div>
    </div>
    <div class="container-fluid cosmeticbg" >
      <div class="col-md-12 text-center" >
          <div class="bg_control container">
            <div class="col-md-2 bg_text_cosmetic" >
              <span>+2000</span>
              <p style="margin-left:5px;">Produtos</p>
            </div>

            <div class="hidden-xs hidden-sm col-md-1 bg_text_cosmetic">
                <img src="<?php echo base_url('/public/img/cosmetics/barra.png') ?>" class="bar_cosmetics" alt="">
            </div>

            <div class="col-md-1 bg_text_cosmetic">
              <span>111</span>
              <p>Marcas</p>
            </div>

            <div class="hidden-xs hidden-sm col-md-1 bg_text_cosmetic">
              <!-- <span class="bar_cosmetics"></span> -->
              <img src="<?php echo base_url('/public/img/cosmetics/barra.png') ?>" class="bar_cosmetics" alt="">
            </div>

            <div class="col-md-2 bg_text_cosmetic">
              <span>45</span>
              <p>Itens para cabelo</p>
            </div>

            <div class="hidden-xs hidden-sm col-md-1 bg_text_cosmetic">
              <img src="<?php echo base_url('/public/img/cosmetics/barra.png') ?>" class="bar_cosmetics" alt="">
            </div>

            <div class="col-md-1 bg_text_cosmetic">
              <span>15</span>
              <p>Perfumes</p>
            </div>

          </div>
      </div>

    </div>
  </body>
</html>
