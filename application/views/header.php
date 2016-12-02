<header>
    <nav class="navbar navbar-default visible-xs ">
        <div class="container-fluid col-sm-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" style="background-color: #F15922;">
           <span class="sr-only">Toggle navigation</span>
           <span class="icon-bar" style="background-color: #fff;"></span>
           <span class="icon-bar" style="background-color: #fff;"></span>
           <span class="icon-bar" style="background-color: #fff;"></span>
           </button>
                <a class="navbar-brand" href="#"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav ">

                    <li><a class="ancora" href="home" style="color:#fff; font-family: MyRiad;font-size: 19px;">HOME<span class="sr-only">(current)</span></a></li>

                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                      aria-haspopup="true" aria-expanded="false" style="color:#fff; font-family:MyRiad;font-size: 19px;cursos:pointer;">ATELIER <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                          <li><a href="hair">HAIR</a></li>
                          <li><a href="nails">NAIL</a></li>
                          <li><a href="makeup">MAKEUP</a></li>
                      </ul>
                    </li>

                    <li><a class="ancora" href="cosmetics" style="color:#fff; font-family: MyRiad;font-size: 19px;">COSMETICS</a></li>

                    <li><a class="ancora" href="lab" style="color:#fff; font-family: MyRiad;font-size: 19px;">LAB</a></li>

                    <li><a class="ancora" href="club" style="color:#fff; font-family: MyRiad;font-size: 19px;">CLUB</a></li>

                    <li><a class="ancora" href="contato" style="color:#fff; font-family: MyRiad;font-size: 19px;">CONTATO</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--INICIO TOPO DESKTOP-->
    <div class="container-fluid" style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.49);z-index:99999">
        <div class="row visible-lg visible-md">
            <div class="col-md-12" id="top01">
            </div>
        </div>
        <div class="row visible-lg visible-md visible-sm" id="top02">
            <div class="container">
                <div class="col-md-3 col-sm-5">
                  <a href="home">
                      <img class="img-responsive" src="<?php echo base_url('public/img/logo2.jpg')?>">
                  </a>
                </div>
                <div class="col-md-9 col-sm-7" id="top03-lista" style="text-align: right;">
                    <ul class="list-inline">
                        <!-- <li><a class="ancora" href="#cadastrese">CADASTRE-SE</a></li>
                 <li><a class="ancora"  href="#club">BLINK ME CLUB</a></li>
                 <li><a class="ancora"  href="#manifesto">MANIFESTO</a></li>
                 <li><a class="ancora"  href="#fotos">FOTOS</a></li>
                 <li><a class="ancora"  href="#contato">CONTATO
                 </a></li> -->
                        <!-- <li class="login-circle">
                            <p>Olá Visitante</p>
                            <p>
                                <a href="#">Clique aqui para entrar</a>
                            </p>
                        </li> -->
                        <li>
                            <a>
                                <i id="menu" class="fa fa-bars fa-2x" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--MENUS Desktop-->
    <div class="col-md-3 col-md-offset-9 open" id="submenu_geral">
        <div class="menu-desktop riad-bold">
            <ul>
                <li><a href="home">HOME</a></li>
                <li><a style="cursor:pointer">ATELIER</a>
                    <ul class="sub-menu">
                        <li><a href="hair">HAIR</a></li>
                        <li><a href="nails">NAIL</a></li>
                        <li><a href="makeup">MAKEUP</a></li>
                    </ul>
                </li>
                <li><a href="cosmetics">COSMETICS</a></li>
                <li><a href="lab">LAB</a></li>
                <li><a href="club">CLUB</a></li>
                <li><a href="contato">CONTATO</a></li>
            </ul>
        </div>
    </div>
</header>
