<?php
// if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();
 ?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Official Site of FRU - Xbox One Kinect Game | Through Games</title>
        <meta charset="UTF-8">
        <meta name="language" content="en">
        <meta description="The official site of FRU. FRU is an upcoming Xbox One puzzle platformer which features an innovative use of the Kinect peripheral, using the player’s silhouette as a “mask” between worlds." />
        <meta name="keywords" content="FRU, Fru, Fru game, Game Fru, Xbox, Xbox One, Xbox 360, Kinect, Microsoft, Xbox Kinect, Xbox One Kinect, Through, Games, Through Games, Fru Game Xbox, Fru Game Xbox One, Fru Kinect Game, Fru Xbox One Game, Xbox Indie Games, Xbox One Games, Xbox ID program, Xbox Indie Developers, Indie Developers, Indie Game, Independent Game, Independent Game Developers, FROO, Fro Game, Froo game, Froo Xbox One, Fruit, Fruit game, Fru, Platformer Game,"
        />
        <meta name='viewport' content='width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no' />

        <link href="//frugame.com/" rel="canonical" />
        <link rel="stylesheet" href="style.css" type="text/css" media="all" />
        <link rel="author" href="humans.txt" />
        <link rel="icon" type="img/ico" href="favicon.ico">
        <script src="assets/js/mobile-detect.min.js"></script>
        <script src="assets/js/bowser.min.js"></script>
        <script>
        var md = new MobileDetect(window.navigator.userAgent);
        var isMobile = md.mobile() || md.tablet();
        if (!isMobile) {
            if (Object.prototype.toString.call(window.HTMLElement).indexOf('Constructor') > 0) {
                isMobile = true;
            };

            if (bowser.msie || bowser.msedge) {
                isMobile = true;
            }
        }

        </script>
    </head>

    <body name="COOP">

        <header id="nav-top" class="full-wrap">
            <!-- TOP NAV -->
            <nav class="menu-top" role="navigation">
                <div class="center">
                    <div class="center-copy">
                        <h1 style="top:-20px;"><a href="/"><img style="width:320px; height:180px; " src="assets/images/fru_logo.png" /></a></h1></div>
                </div>
            </nav>

            <!-- SECONDARY NAV REVEAL -->
            <nav id="nav-reveal" class="full-wrap">


                <div class="center linksTop">
                    <ul>
                        <li><a href="#COOP" onclick="return false;">Trailer</a> - </li>
                        <li><a href="#MEDIA-C" onclick="return false;">Media</a> - </li>
                        <li><a href="#TEAM" onclick="return false;">The Team</a></li>
                    </ul>
                </div>

                <div class="center">
                    <div class="center-copy">
                        <div id="btnPressKitTop" class="pressKit"><a href="/presskit">PRESS KIT</a></div>
                    </div>

                </div>
            </nav>

        </header>

        <!-- END HEADER -->

        <a class="buffer" name="COOP">
            <section class="video full-wrap">
                <div class="center">
                    <div class="center-copy">
                        <div class="videoWrapper">
                            <iframe width="853" height="480" src="//www.youtube.com/embed/pH2zzMEBb7E" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </section>
        </a>

        <!-- END VIDEO -->

        <section class="block info full-wrap">
            <div class="content center con-full">
                <div class="center-copy">
                    <h2>About.</h2>
                    <p>FRU is a puzzle platformer that features an innovative use of Kinect, in which your silhouette becomes a "portal" between two worlds.</p>
                    <br>
                    <b>Buy it now on</b><br><a href="https://store.xbox.com/en-US/Xbox-One/Games/FRU/66ef35eb-339f-47f2-9651-6a932c631232"><img style="width: 211px; height: 75;" src="assets/images/xboxone.png" /></a>
                    <div class="socialbutton">
                        <a href="http://www.facebook.com/frugame" target="_blank"><img src="assets/images/fab.png"/></a>
                        <a href="http://www.twitter.com/fru_game" target="_blank"><img src="assets/images/twit.png"/></a>
                        <a href="http://www.instagram.com/frugame" target="_blank"><img src="assets/images/insta.png"/></a>
                    </div>
                </div>
            </div>
        </section>

        <div class="bg-break full-wrap"></div>

        <section class="block media co-op full-wrap">
            <div class="center">
                <div class="center-copy fc">
                    <h2><a class="buffer" name="MEDIA-C">#SPOILERS.</a></h2>
                    <script>
                        if (!isMobile) {
                            document.write("<video loop autoplay src=\"assets/images/gifs/01_13.webm\"></video>");
                            document.write("<video loop autoplay src=\"assets/images/gifs/02_23.webm\"></video>");
                            document.write("<video loop autoplay src=\"assets/images/gifs/03_06.webm\"></video>");
                            document.write("<video loop autoplay src=\"assets/images/gifs/04_09.webm\"></video>");
                        } else {
                            document.write("<img src=\"assets/images/gifs/01_13.gif\" \">");
                            document.write("<img src=\"assets/images/gifs/02_23.gif\" \">");
                            document.write("<img src=\"assets/images/gifs/03_06.gif\" \">");
                            document.write("<img src=\"assets/images/gifs/04_09.gif\" \">");
                        }
                    </script>
                </div>
            </div>
        </section>

        <section class="block press full-wrap">
            <div class="center content">
                <div class="center-copy">
                    <span class="cycleQuotes"></span>
                </div>
            </div>
        </section>

        <section class="block team full-wrap">
            <a name="TEAM">
                <div class="content center">
                    <div class="center-copy">
                        <h2>WE ARE <span class="t">THROUGH</span> GAMES</h2>
                        <ul>
                            <li>
                                <a href="//twitter.com/chikwanwong" target="_blank"><img src="assets/images/people/chi.png" alt="Chi Wong" title="Chi Wong"></a>
                            </li>
                            <li>
                                <a href="//twitter.com/Chrusb" target="_blank"><img src="assets/images/people/christiaan.png" alt="Christiaan Bloemendaal" title="Christiaan Bloemendaal"></a>
                            </li>
                            <li>
                                <a href="//twitter.com/dotKokott" target="_blank"><img src="assets/images/people/christian.png" alt="Christian Kokott" title="Christian Kokott"></a>
                            </li>
                            <li>
                                <a href="//twitter.com/MountainDopp" target="_blank"><img src="assets/images/people/david.png" alt="David Oppenberg" title="David Oppenberg"></a>
                            </li>
                            <li>
                                <a href="//twitter.com/aparaitre" target="_blank"><img src="assets/images/people/lauren.png" alt="Lauren Lapierre Amande" title="Lauren Lapierre Amande"></a>
                            </li>
                            <li>
                                <a href="//twitter.com/MattiaNotFound" target="_blank"><img src="assets/images/people/mattia.png" alt="Mattia Traverso" title="Mattia Traverso"></a>
                            </li>
                        </ul>

                        <h2>ALSO <span class="t">MADE POSSIBLE</span> BY</h2>
                        <ul>
                            <li>
                                <a href="//twitter.com/eriktemolder" target="_blank"><img src="assets/images/people/erik.png" alt="Erik te Molder" title="Erik te Molder"></a>
                            </li>
                            <li>
                                <a href="//twitter.com/EvHoof" target="_blank"><img src="assets/images/people/erwin.png" alt="Erwin van Hoof" title="Erwin van Hoof"></a>
                            </li>
                            <li>
                                <a href="//twitter.com/anagaogao" target="_blank"><img src="assets/images/people/ilona.png" alt="Ilona Reitsma" title="Ilona Reitsma"></a>
                            </li>
                            <li>
                                <a href="//twitter.com/CursedMidna" target="_blank"><img src="assets/images/people/jacqueline.png" alt="Jacqueline Teley" title="Jacqueline Teley"></a>
                            </li>
                            <li>
                                <a href="//twitter.com/Kwebbelkop" target="_blank"><img src="assets/images/people/kwebbelkop.png" alt="David Oppenberg" title="Kwebbelkop"></a>
                            </li>
                            <li>
                                <a href="//twitter.com/RYStorm" target="_blank"><img src="assets/images/people/robinyann.png" alt="Robin-Yann Storm" title="Robin-Yann Storm"></a>
                            </li>
                            <li>
                                <a href="//twitter.com/YeroPharaoh" target="_blank"><img src="assets/images/people/yero.png" alt="Yero Pharaoh" title="Yero Pharaoh"></a>
                            </li>
                        </ul>
                        <p>And Kamyar Fadai</p>
                        <br>
                    </div>
                </div>
            </a>
        </section>

        <section class="block kit full-wrap">
            <div class="center content">
                <div class="center-copy">
                    <h2><a href="/presskit">GET THE PRESSKIT.</a></h2>
                </div>
            </div>
        </section>

        <section id="sponsors" class="full-wrap">
            <div class="content center">
                <div class="center-copy">
                    <h2>SPECIAL THANKS</h2>
                    <a href="//www.xbox.com/en-US/kinect"><img src="assets/images/logos/kinectlogo_272a68eeed0a39aabbb668f73f21518e.png" alt="Kinect" title="Kinect"></a>
                    <a href="//www.nhtv.nl" target="_blank"><img src="assets/images/logos/nhtv_dadfebd11155a6adb47c2635277c4f3d.png" alt="NHTV BREDA" title="NHTV"></a>
                    <a href="//www.xbox.com" target="_blank"><img src="assets/images/logos/xblive_d3fd2828164995268b1fa774145f98f5.png" alt="Xbox Live" title="Xbox Live"></a>

                    <div class="socialBot">
                        <a href="//twitter.com/share" class="twitter-share-button" data-lang="en">Tweet</a>
                        <div class="fb-share-button" data-href="http://www.frugame.com" data-type="button_count" style="margin-left:12px;"></div>
                    </div>

                    <p>Through Games VoF Kvk number 60710136,
                        <br> Breda, Netherlands. <a href="mailto:contact@frugame.com">contact@frugame.com</a>
                        <br> <u><a href="/presskit">Press Kit</a></u></p>
                    <p>&copy; 2016 <a href="/">Through Games</a> &mdash; Site By: <a href="//www.twitter.com/MattStenquist" target="_blank">Matt Stenquist</a> and <a href="//www.twitter.com/Chrusb" target="_blank">Christiaan Bloemendaal</a></p>
                </div>
            </div>
        </section>

        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="assets/js/behavior.min.js" type="text/javascript"></script>

        <script>
            ! function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (!d.getElementById(id)) {
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "https://platform.twitter.com/widgets.js";
                    fjs.parentNode.insertBefore(js, fjs);
                }
            }(document, "script", "twitter-wjs");
        </script>

        <div id="fb-root"></div>
        <script>
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=277247825636475&version=v2.0";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-77361365-1', 'auto');
          ga('send', 'pageview');

        </script>

    </body>

    </html>
