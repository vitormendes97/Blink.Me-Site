  <body>
      <div class="container" id="lab-container">
        <div class="col-md-12 col-xs-12">
          <img src="<?php echo base_url('/public/img/blink_lab_original.png'); ?>"
          id="lab-img1" class="lab-img-layout" alt="">
        </div>
        <div class="col-md-2 col-sm-3">
          <img src="<?php echo base_url('/public/img/lab/lab2.jpg'); ?>"
          id="lab-img2" class="lab-img-layout" alt="">
        </div>
        <div class="col-md-9 col-sm-9">
          <p style="color:#888;">Lab é a sala mais vip da blink.me. Acesse o menu no nosso site e desfrute dos serviços do nosso salão
          com todo o requinte e exclusividade que você merece. São 3 opções de serviço de buffet para até 15 convidados
        e você está liberadíssima para trazer a bebida que quiser.</p>
          <p style="color:#888;">Preencha o nosso formulário para sabermos o que mais você deseja e venha passar o dia com a gente.<br>
          Você e seus convidados vão sair reluzindo.</p>
        </div>
      </div>

      <div class="container centralize-responsive" id="lab-form">
        <div class="col-md-12">
          <h3>AGENDE AQUI</h3>
        </div>
        <form class="form-inline">
        <div class="col-md-12">
            <div class="form-group">
              <input type="text" class="form-control lab-form" placeholder="Nome*">
            </div>
            <div class="form-group">
              <input type="text" class="form-control lab-form" placeholder="Sobrenome*">
            </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <input type="email" class="form-control lab-form" placeholder="Email*">
          </div>
          <div class="form-group">
            <input type="text" class="form-control lab-form" placeholder="Número de Pessoas*">
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <input type="date" class="form-control lab-form" placeholder="Data*">
          </div>
          <div class="form-group">
            <input type="text" class="form-control lab-form" placeholder="Horário*">
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <input type="text" class="form-control lab-form" placeholder="Celular">
          </div>
          <div class="form-group">
            <input type="text" class="form-control lab-form" placeholder="Telefone*">
          </div>
        </div>
        </form>
      <div class="col-md-12" style="padding-top:8px;">
          <p id="requisito1">OS CAMPOS COM ASTERISCO SÃO DE PREENCHIMENTO OBRIGATÓRIO</p>
      </div>

      <div class="col-md-12" style="padding-top:5%;" id="lab-check">
        <p>SERVIÇOS SOLICITADOS</p>
        <div class="col-md-12" id="check_area">
          <!--Parte esquerda do check-->
          <div id="check_left">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="escova">
                Escova
              </label>
           </div>
           <div class="checkbox">
             <label>
               <input type="checkbox" value="penteado">
               Penteado
             </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" value="make">
              Make Up
            </label>
         </div>
      </div>
      <!--FIM PARTE ESQUERDA-->

      <div id="check_right">
       <div class="checkbox">
         <label>
           <input type="checkbox" value="mao/pe">
           Mão/Pé
         </label>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" value="design">
          Design de Sombrancelha
        </label>
     </div>
     <div class="checkbox">
       <label>
         <input type="checkbox" value="outros">
         Outros
       </label>
    </div>
  </div>
  </div>
</div>

      <div class="col-md-12"  id="text-area-lab">
          <div class="col-md-12">
            <label for="">Comentários</label>
          </div>
          <div class="col-md-12">
            <textarea class="hidden-xs textarea" name="coments" rows="5" cols="80"></textarea>
              <textarea class="visible-xs textarea" name="coments" rows="5" cols="40"></textarea>
          </div>
          <div class="col-md-12" id="enviar-lab">
            <input type="submit" name="" value="ENVIAR">
          </div>
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
