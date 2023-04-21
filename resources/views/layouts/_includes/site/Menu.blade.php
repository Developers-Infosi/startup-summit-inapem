<!-- Preloader End Here -->
<div id="page" class="site site-wrp full-layout">
    <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
    <header id="masthead" class="site-header">
        <div class="rt-header-top-bar full-width-compress">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <div class="rt-tophead-contact">
                            <ul>


                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i> Contacto : &nbsp;<a
                                        href="tel:5647-345-2224"> (+244) 929 794 319</a>
                                </li>

                                <li>
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i><a
                                        href="mailto:startupsummit@mep.gov.ao">startupsummit@mep.gov.ao</a>
                                </li>


                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="masthead-container full-width-compress header-style1">
            <div class="container-fluid">
                <div class="row no-gutters d-flex align-items-center">
                    <div class="col-sm-2 col-xs-12">
                        <div class="site-branding">
                            <a class="dark-logo" href="{{ route('site.home') }}"><img width="360" height="112"
                                    src="https://radiustheme.com/demo/wordpress/eventalk/wp-content/themes/eventalk/assets/img/logo-dark.png"
                                    alt="Eventalk - Event Conference WordPress Theme" loading="lazy" /></a>
                            <a class="light-logo" href="{{ route('site.home') }}"><img width="360" height="112"
                                    src="site/images/logo/logoass.png" loading="lazy" /></a>
                        </div>
                    </div>
                    <div class="col-sm-8 col-xs-12">

                        <div id="site-navigation" class="main-navigation">
                            <nav class="menu-main-container">
                                <ul id="menu-main" class="menu">

                                    <li id="menu-item-553"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-553">
                                        <a href="{{ route('site.home') }}">Início</a>
                                    </li>
                                    <li id="menu-item-553"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-553">
                                        <a href="{{ route('site.about.index') }}">Sobre</a>
                                    </li>
                                    <li id="menu-item-363"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-363">
                                        <a href="#">Galerias</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-362"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-362">
                                                <a href="{{ route('site.gallery') }}">Imagens</a>
                                            </li>
                                            <li id="menu-item-361"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-361">
                                                <a href="">Videos</a>
                                            </li>



                                        </ul>
                                    </li>
                                    <li id="menu-item-553"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-553">
                                        <a href="{{ route('site.schedule') }}">Programa</a>
                                    </li>



                                    <li id="menu-item-553"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-553">
                                        <a href="{{ route('site.contact') }}">Contactos</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 d-none d-lg-block">
                        <ul class="header-action-items">
                            <li>


                                <button type="button" class="btn-fill size-xs color-yellow border-radius-5 gust"
                                    data-toggle="modal" data-target="#exampleModal">
                                    Como Participar
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Como participar Passo à passo:</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        1 - Preenchimento da ficha de inscrição e envio para EA - geral@eventosarena.co.ao <br>

                        2 - emissão da proforma (EA)<br>

                        3 - pagamento<br>

                        4 - envio do recibo e confirmação<br>

                        5 - levantamento das credências com comprovativo de pagamento<br>
<b>       Contactos</b><br>

                        (+244)924 901 280<br>

                      <b>   Email</b><br>
                        geral@eventosarena.co.ao<br>
<b>    Valor da Inscrição</b> <br>

                        Startup com até um ano de actividade, 15 mil (kz)<br>

                        Startups com dois ou mais anos, de actividade, 85 mil (kz)<br>

                        <b>       Observações:</b><br>

                        As despesas com transporte, logística de materiais, deverão ser por conta de cada participante;<br>

                        As empresas participantes deverão ter individualmente suas inscrições e contratos devidamente
                        preenchidos com a organização;<br>

                        A empresa está ciente e obriga-se a cumprir todas as normas de participação da Feira, bem como
                        se obriga a observar e atender a identidade visual pré- determinada pela organização.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>

                    </div>
                </div>
            </div>
        </div>
    </header>

    <ul class="header-action-items mobile-button-area">
        <li>
            <a href="#" title="Buy Tickets" target="_blank"
                class="btn-fill size-xs color-yellow border-radius-5 gust">participar</a>
        </li>
    </ul>


    <div class="rt-header-menu mean-container" id="meanmenu">
        <div class="mean-bar">
            <a href="{{ route('site.home') }}" alt="Eventalk - Event Conference WordPress Theme"><img width="489"
                    height="121" class="logo-small" alt="Eventalk - Event Conference WordPress Theme"
                    src="https://radiustheme.com/demo/wordpress/eventalk/wp-content/themes/eventalk/assets/img/logo-dark.png"></a>
            <span class="sidebarBtn ">
                <span class="fa fa-bars">
                </span>
            </span>
        </div>

        <div class="rt-slide-nav">
            <div class="offscreen-navigation">
                <nav class="menu-main-container">
                    <ul id="menu-main" class="menu">

                        <li id="menu-item-553"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-553">
                            <a href="{{ route('site.home') }}">Início</a>
                        </li>
                        <li id="menu-item-553"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-553">
                            <a href="">Notícias</a>
                        </li>
                        <li id="menu-item-363"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-363">
                            <a href="#">Galerias</a>
                            <ul class="sub-menu">
                                <li id="menu-item-362"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-362">
                                    <a href="">Imagens</a>
                                </li>
                                <li id="menu-item-361"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-361">
                                    <a href="">Videos</a>
                                </li>


                            </ul>
                        </li>
                        <li id="menu-item-553"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-553">
                            <a href="{{ route('site.schedule') }}">Programa</a>
                        </li>

                        <li id="menu-item-553"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-553">
                            <a href="{{ route('site.gallery') }}">Galeria</a>
                        </li>

                        <li id="menu-item-553"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-553">
                            <a href="{{ route('site.contact') }}">Contactos</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

    </div>
