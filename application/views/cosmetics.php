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
    <div class="item active">

      <div class="row">
        <?php foreach ($marcas as $img){ ?>
        <div class="col-md-4">
          <div class="marcas-box">
            <img src="<?php echo $img; ?>" alt="" style="width:100%;height:124px;border-radius:50px;">
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
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
            <i class="glyphicon glyphicon-menu-down pull-right cursor-pointer"></i></li>
            <li>PERFUMES
              <i class="glyphicon glyphicon-menu-down pull-right cursor-pointer"></i></li>
            <li>TRATAMENTO
              <i class="glyphicon glyphicon-menu-down pull-right cursor-pointer"></i></li>
            <li>CORPO E BANHO
              <i class="glyphicon glyphicon-menu-down pull-right cursor-pointer"></i></li>
            <li>CABELOS
              <i class="glyphicon glyphicon-menu-down pull-right cursor-pointer"></i></li>
            <li>HOMEM
              <i class="glyphicon glyphicon-menu-down pull-right cursor-pointer"></i></li>
            <li>ACESSÓRIOS
              <i class="glyphicon glyphicon-menu-down pull-right cursor-pointer"></i></li>
          </ul>
        </div>

      </div>
    </div>
    <div class="container-fluid cosmeticbg" >
      <div class="col-md-12 text-center" >
          <div class="bg_control">
            <div class="col-md-2 bg_text_cosmetic" >
              <span>2000</span>
              <p>Produtos</p>
            </div>

            <div class="hidden-xs hidden-sm col-md-1 bg_text_cosmetic">
                <img src="<?php echo base_url('/public/img/cosmetics/barra.png') ?>" class="bar_cosmetics" alt="">
            </div>

            <div class="col-md-2 bg_text_cosmetic">
              <span>111</span>
              <p>Marcas</p>
            </div>

            <div class="hidden-xs hidden-sm col-md-1 bg_text_cosmetic">
              <!-- <span class="bar_cosmetics"></span> -->
              <img src="<?php echo base_url('/public/img/cosmetics/barra.png') ?>" class="bar_cosmetics" alt="">
            </div>

            <div class="col-md-3 bg_text_cosmetic">
              <span>45</span>
              <p>Itens para cabelo</p>
            </div>

            <div class="hidden-xs hidden-sm col-md-1 bg_text_cosmetic">
              <img src="<?php echo base_url('/public/img/cosmetics/barra.png') ?>" class="bar_cosmetics" alt="">
            </div>

            <div class="col-md-2 bg_text_cosmetic">
              <span>15</span>
              <p>Perfumes</p>
            </div>

          </div>
      </div>

    </div>
  </body>
</html>
