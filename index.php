<?php
header("Content-Type: text/html; charset=ISO-8859-1", true);
$URL = 'http://www.martnando.com.br/';
$title = 'Martnando';
$desc = 'Martnando';
$char = '@martnando';
$link_fb = 'https://www.facebook.com/martnando';
$link_tw = 'https://twitter.com/mArtnando';
$link_in = 'https://www.instagram.com/martnando/';
$link_ld = 'https://linkedin.com/in/fernandomartinello/';
?>
<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="ISO-8859-1" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="<?php echo $desc; ?>" />
        <meta name="keywords" content="#" />
        <meta name="author" content="<?php echo $char; ?>" />
        <meta property="og:site_name" content="<?php echo $title; ?>" />
        <meta property="og:url" content="<?php echo $URL; ?>" />
        <meta property="og:title" content="<?php echo $title; ?>" />
        <meta property="og:image" content="<?php echo $URL; ?>lib/img/post.jpg?1542991161" />
        <meta property="og:image:type" content="image/jpeg"/>
        <meta property="og:type" content="website">
        <meta property="og:locale" content="pt_BR">
        <meta property="og:description" content="<?php echo $desc; ?>" />
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="<?php echo $char; ?>" />
        <meta name="twitter:creator" content="<?php echo $char; ?>" />
        <meta name="twitter:url" content="<?php echo $URL; ?>">
        <meta name="twitter:title" content="<?php echo $title; ?>">
        <meta name="twitter:description" content="<?php echo $desc; ?>">
        <meta name="twitter:image" content="<?php echo $URL; ?>lib/img/post.jpg?1542991161">
        <base href="<?php echo $URL; ?>">
        <link rel="canonical" href="<?php echo $URL; ?>">
        <link rel="shortcut icon" href="<?php echo $URL; ?>lib/img/favicon.png">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700" rel="stylesheet">
        <link type="text/css" href="lib/css/reset.css" rel="stylesheet" />
        <link type="text/css" href="lib/css/estilo.css" rel="stylesheet" />
        <link type="text/css" href="lib/css/animate.css" rel="stylesheet" />
        <script type="text/javascript" src="lib/js/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript" src="lib/js/scrollReveal.min.js"></script>
        <title><?php echo $title; ?></title>
        <!--[if lt IE 9]>
            <script src="lib/js/html5shiv.js"></script>
            <script src="lib/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bgParallax" data-speed="10">
        <header>
            <div class="center">
                <h1 onclick="$('html,body').animate({scrollTop: $('#home').offset().top}, 1000);" title="Martnando">Martnando</h1>
                <nav>
                    <ul>
                        <li onclick="$('html,body').animate({scrollTop: $('#projetos').offset().top}, 1000);">Projetos</li>
                        <li onclick="$('html,body').animate({scrollTop: $('#sobre').offset().top}, 1000);">Sobre</li>
                        <li onclick="$('html,body').animate({scrollTop: $('#contato').offset().top}, 1000);">Contato</li>
                    </ul>
                </nav>
            </div>
        </header>
        <section id="home">
            <article class="title">
                <div class="content animated fadeInUp">
                    <h2><img src="lib/img/logo-completo.svg" alt="Martnando" /></h2>
                    <p>UX Designer + Front-End Dev</p>
                </div>
            </article>
            <img src="lib/img/scroll-desktop.gif" alt="scroll down" class="scroll-down" />
        </section>
        <section id="projetos" class="bgParallax" data-speed="10">
            <article class="intro">
                <div class="content">
                    <h3>Projetos</h3>
                    <p>Aqui temos diversos projetos de webdesign, muitos deles eu atuei como front-end, outros são publicidades e projetos de redesign/estudo.</p>
                    <ul>
                        <li><a href="https://www.disneyexibidor.com.br/restrito/campanha_banners/visualizar.php?COD_MIDIA_DIGITAL=112" target="_blank"><img src="lib/img/proj/023.jpg" alt="Rei Leão" width="100%" /></a></li>
                        <li><a href="https://www.disneyexibidor.com.br/restrito/campanha_banners/visualizar.php?COD_MIDIA_DIGITAL=80" target="_blank"><img src="lib/img/proj/022.jpg" alt="Toy Story 4" width="100%" /></a></li>
                        <li><a href="https://www.disneyexibidor.com.br/restrito/campanha_banners/visualizar.php?COD_MIDIA_DIGITAL=72" target="_blank"><img src="lib/img/proj/021.jpg" alt="Aladdin" width="100%" /></a></li>
                        <li><a href="https://www.disneyexibidor.com.br/restrito/campanha_banners/visualizar.php?COD_MIDIA_DIGITAL=49" target="_blank"><img src="lib/img/proj/020.jpg" alt="Vingadores: Ultimato" width="100%" /></a></li>
                        <li><a href="http://www.disneyexibidor.com.br/restrito/campanha_banners/visualizar.php?COD_MIDIA_DIGITAL=38" target="_blank"><img src="lib/img/proj/018.jpg" alt="Dumbo" width="100%" /></a></li>
                        <li><a href="http://www.disneyexibidor.com.br/restrito/campanha_banners/visualizar.php?COD_MIDIA_DIGITAL=4" target="_blank"><img src="lib/img/proj/017.jpg" alt="Capitã Marvel" width="100%" /></a></li>
                        <li><a href="http://www.cinetks.com.br/capitamarvel" target="_blank"><img src="lib/img/proj/004.jpg" alt="Cine Tks" width="100%" /></a></li>
                        <li><a href="https://www.cineart.com.br/index.php?ban_intervencao=172" target="_blank"><img src="lib/img/proj/019.jpg" alt="Alita" width="100%" /></a></li>
                        <li><a href="http://www.centerplex.com.br/" target="_blank"><img src="lib/img/proj/001.jpg" alt="Centerplex" width="100%" /></a></li>
                        <li><a href="http://www.cinepolis.com.br/" target="_blank"><img src="lib/img/proj/002.jpg" alt="Cinépolis" width="100%" /></a></li>
                        <li><a href="http://www.paramountpictures.com.br/" target="_blank"><img src="lib/img/proj/003.jpg" alt="Paramount Pic." width="100%" /></a></li>
                        <li><a href="http://www.downtownexibidor.com.br/" target="_blank"><img src="lib/img/proj/005.jpg" alt="Downtown" width="100%" /></a></li>
                        <li><a href="http://www.disneyexibidor.com.br/" target="_blank"><img src="lib/img/proj/006.jpg" alt="Disney" width="100%" /></a></li>
                        <li><a href="http://www.exibidor.com.br/" target="_blank"><img src="lib/img/proj/007.jpg" alt="Exibidor" width="100%" /></a></li>
                        <li><a href="http://www.expocine.com.br/" target="_blank"><img src="lib/img/proj/008.jpg" alt="Expocine" width="100%" /></a></li>
                        <li><a href="http://www.orientcinemas.com.br/" target="_blank"><img src="lib/img/proj/009.jpg" alt="Orient Cinemas" width="100%" /></a></li>
                        <li><a href="http://www.cineartfilmes.com.br/" target="_blank"><img src="lib/img/proj/010.jpg" alt="Cineart Filmes" width="100%" /></a></li>
                        <li><a href="http://www.cineart.com.br/letsmovie/" target="_blank"><img src="lib/img/proj/011.jpg" alt="Cineart Let's Movie" width="100%" /></a></li>
                        <li><a href="http://www.h2ofilms.com.br/" target="_blank"><img src="lib/img/proj/012.jpg" alt="H2O Films" width="100%" /></a></li>
                    </ul>
                </div>
            </article>
        </section>
        <section id="sobre" class="bgParallax" data-speed="10">
            <article class="intro">
                <div class="content">
                    <h3>Sobre mim</h3>
                    <figure><img src="lib/img/profile.jpg" alt="Martnando" /></figure>
                    <p>Me chamo Fernando Martinello e sou formado em Publicidade / Propaganda e também em WebDesign.</p>
                    <p>Trabalho nas áreas de propaganda, design e desenvolvimento há mais de 10 anos, atuando em agências, empresas e projetos free-lances.</p>
                    <p>Me destaco por unir conhecimentos de artes aos de desenvolvimento, tendo amplo conhecimento em ferramentas de criação e design, assim como em front-end.</p>
                    <p>Meu foco atual está na área de UX, aonde venho me aperfeiçoando há alguns anos e trabalhando em diversos projetos.</p>
                    <p>Caso queira informaçõs mais detalhadas, acesse minhas redes sociais no rodapé ou <a href="" title="baixe meu currículo" target="_blank">clique aqui</a> e veja meu currículo</p>
                </div>
            </article>
        </section>
        <section id="contato" class="bgParallax" data-speed="10">
            <article class="intro">
                <div class="content">
                    <h3>Contato</h3>
                    <p>Para propostas de free-lances e outros assuntos, utilize o formulário abaixo ou me contate por redes sociais.</p>
                    <form id="frmContato">
                        <div class="grid">
                            <div><label><input type="text" name="nome" placeholder="Nome:" id="name" required="required" /></label></div>
                            <div><label><input type="text" name="email" placeholder="E-mail:" id="email" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" /></label></div>
                            <div class="full"><label><textarea name="mensagem" placeholder="Mensagem:" id="msg" required="required"></textarea></label></div>
                        </div>
                        <input type="submit" name="send" value="enviar" />
                    </form>
                    <script>
                        $('#frmContato').submit(function () {
                            var dados = $(this).serialize();
                            $.ajax({
                                url: "lib/ajax/ajax.enviar_email.php",
                                type: "POST",
                                dataType: 'json',
                                data: dados
                            }).done(function (data)
                            {
                                if (data.sts == 1)
                                {
                                    $('#success').show();
                                    $('#error').hide();
                                    $('#name').val('');
                                    $('#email').val('');
                                    $('#msg').val('');
                                } else if (data.sts == 9)
                                {
                                    $('#success').hide();
                                    $('#error').show();
                                } else
                                {
                                    $('#email').get(0).style.border = '0';
                                }
                                return false;
                            });
                            return false;
                        });
                    </script>
                </div>
            </article>
            <footer>
            <img src="lib/img/logo-icon.svg" alt="Martnando" width="50" />
            <ol>
                <li>
                    <a href="<?php echo $link_fb; ?>" target="_blank">
                        <img src="lib/img/icon-fb.png" alt="Siga-nos" width="30" height="34">
                    </a>
                </li>
                <li>
                    <a href="<?php echo $link_tw; ?>" target="_blank">
                        <img src="lib/img/icon-tw.png" alt="Siga-nos" width="30" height="34">
                    </a>
                </li>
                </li>
                <li>
                    <a href="<?php echo $link_ld; ?>" target="_blank">
                        <img src="lib/img/icon-ld.png" alt="Siga-nos" width="30" height="34">
                    </a>
                </li>
                <li>
                    <a href="<?php echo $link_in; ?>" target="_blank">
                        <img src="lib/img/icon-in.png" alt="Siga-nos" width="30" height="34">
                    </a>
                </li>
            </ol>
            <p class="copy">©2019 - Martnando. Todos os direitos reservados</p>
        </footer>
        </section>
        <script>
            $(document).ready(function () {
                $('.bgParallax').each(function () {
                    var $obj = $(this);
                    $(window).scroll(function () {
                        var yPos = -($(window).scrollTop() / $obj.data('speed'));
                        var bgpos = '50% ' + yPos + 'px';
                        $obj.css('background-position', bgpos);
                    });
                });
                $('.nav-icon').click(function () {
                    $(this).toggleClass('open');
                    $('nav ul').slideToggle();
                });
            });

            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-75217149-1', 'auto');
            ga('send', 'pageview');

        </script>
    </body>
</html>