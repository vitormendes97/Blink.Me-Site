  <body>
    <div class="container" id="atelier_container">
      <div class="col-md-3" >

        <img src="<?php echo base_url('/public/img/blink_atelier.png') ?>" alt="" id="blink_atelier_logo">

        <dl class="dl-horizontal lista-vertical" style="background: #F2A68B; padding:4%;margin-bottom: 0; width:100%;">

            <dd><span style="color:#fff;">&gt;</span> DESCONTO EM TODA LOJA</dd>
          </dl>

          <dl class="dl-horizontal lista-vertical" style="background: #F28761; padding:4%;margin-bottom:0;width:100%;">
            <dd><span style="color:#fff;">&gt;</span> PROMOÇÕES EXCLUSIVAS</dd>
          </dl>

          <dl class="dl-horizontal lista-vertical" style="background: #F2A68B; padding:4%;width:100%;">
            <dd><span style="color:#fff;">&gt;</span> SERVIÇOS DE CASHBACK</dd>
          </dl>
      </div>

      <div class="col-md-9" style="padding:4% 0% 0% 4%;">
        <div class="col-md-4">
          <img src="<?php echo base_url('/public/img/atelier/img-circle.png') ?>" id="img_circle_atelier"
          class="img-circle">
        </div>
        <div class="col-md-8" style="color:#888;">
          <h2 style="color:#000;">HAIR</h2>
          <p>Como não poderia ser diferente, no nosso Atelier todos os  profissionais especializados em cabelos
          têm o padrão blink.me de qualidade. Isso significa talento, bom gosto e as melhores técnicas para corte,
         coloração, luzes, mechas e penteados.</p>
         <p>Mas, como nem só de aparência vivem os cabelos, nos preocupamos em cuidar profundamente dos seus fios,
         por meio de técnicas como o bordado e tratamentos de reconstrução.</p>
        </div>
        <div class="col-md-12" style="color:#888;padding-top:4%;">
          <p>Para que tudo isso aconteça com excelência, temos a honra de contar com parceiros incríveis. A Joe Academy
          garante os melhores métodos de cortes de cabelo e escovas e o Instituto Liceu assegura a atualização do olhar
          dos nossos profissionais para que há de mais atual e diferenciado no que diz respeito a penteados.
          </p>
        </div>
      </div>
    </div>

    <div class="container" id="portifolio_hair">
      <div class="col-md-12">
        <p>Portifólio-Hair</p>
      </div>
    </div>

    <div class="container-fluid">
      <!-- add extra container element for Masonry -->
      <div class="grid">
        <!-- add sizing element for columnWidth -->
        <div class="grid-sizer col-xs-4" style="background:orange;"></div>
        <!-- items use Bootstrap .col- classes -->
        <div class="grid-item col-xs-8">
          <!-- wrap item content in its own element -->
          <div class="grid-item-content">...</div>
        </div>
        <div class="grid-item col-xs-4">
          <div class="grid-item-content">...</div>
        </div>
        ...
      </div>
    </div>

    <section>
      <div class="container-fluid">
        <div class="row" style="background:#A3A3A3;padding-bottom:4%;">
          <div id="promocao_area">
            <div class="col-md-12">
              <p class="text-center">Cadastre seu email e receba promoções exclusivas</p>
            </div>
            <div class="col-md-12 col-xs-12 text-center">
              <form class="form-inline">
              <div class="form-group">
                <input type="text" class="form-control"  placeholder="Nome">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email">
              </div>
              <button type="submit" class="btn btn-default">EU QUERO</button>
            </form>
            </div>
          </div>
        </div>
      </div>

    </section>
  </body>
</html>
