<?php 

/*

                  d8b                        
                  Y8P                        
                                             
 .d88888 888  888 888 88888b.d88b.   .d88b.  
d88" 888 888  888 888 888 "888 "88b d88""88b 
888  888 888  888 888 888  888  888 888  888 
Y88b 888 Y88b 888 888 888  888  888 Y88..88P 
 "Y88888  "Y88888 888 888  888  888  "Y88P"  
     888                                     
     888                                     
     888                                     

*/

?>
<!doctype html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" xmlns:fb="http://ogp.me/ns/fb#"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" xmlns:fb="http://ogp.me/ns/fb#"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" xmlns:fb="http://ogp.me/ns/fb#"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="[[getLang]]" class="no-js"><!--<![endif]-->
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
		<meta charset="utf-8">
		<title>[*pagetitle*]</title>
		<base href="[(site_url)]">
        <meta name="description" content="[*description*]">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
		<meta name="author" content="[(site_name)]">
		<!-- Realizzato da Zenzero Comunicazione, Parma, MESE/ANNO -->
		
		<!--alternate lang -->
		<link rel="alternate" hreflang="en" href="http://www.mywebsite.com/engpage.html">
		<!--alternate lang -->
		
		<!-- Facebook START -->
		<meta property="og:image" content="assets/templates/default/images/logo.jpg">
		<meta property="og:title" content="[*pagetitle*]">
		<meta property="og:url" content="[[getPageUrl]]">
		<meta property="og:locale" content="it_IT" >
		<!--
		<meta property="og:locale:alternate" content="fr_FR">
		<meta property="og:locale:alternate" content="es_ES">
		-->
		<meta property="og:site_name" content="[(site_name)]">
		<meta property="og:type" content="website">
		<meta property="og:description" content="[*description*]">
		<!-- Facebook END -->
		
		<!-- Canonical -->
		<!--[[setCanonical]]-->
		<!-- Canonical -->
		
        <!-- icone create con http://iconifier.net/ -->
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <!--[if it IE 8]><link rel="shortcut icon" type="image/vnd.microsoft.icon" href="favicon.ico"><![endif]-->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png">    
        <link rel="apple-touch-icon" sizes="152x152" href="apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon-180x180.png">
		
        <!-- stili per il contenuto above-the-fold -->
		<style type="text/css">
		<?php include 'assets/templates/build/critical.css' ?>
		</style>
        
        <?php include 'assets/chunks/css.php' ?>

        <script type="text/javascript" src="assets/js/modernizr-2.8.3.min.js"></script>
		<!-- CODICE GOOGLE ANALYTICS / TAG MANAGER -->
    </head>
    <body>
        <?php include 'assets/chunks/header.php' ?>

        <section class="wrapper first">
            <hgroup>
                <h1>Sezione wrapper</h1>
                <h2>Griglia a 12 colonne con gutter interno</h2>
            </hgroup>
            <div class="grid-col default">
                <article class="box">
                    <h3>Titolo</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel lacus vitae purus <strong>tristique feugiat imperdiet</strong> id leo. <a href="#">Donec ex odio</a>, varius sit amet malesuada non, pharetra eu nunc. Nunc vitae auctor metus, eu dictum dolor. <em>Quisque auctor dolor</em> ac placerat lacinia.</p>
                    <figure>
                        <img alt="" src="http://lorempicsum.com/futurama/350/150/3">
                        <figcaption>Didascalia</figcaption>
                    </figure>
                    <h3>Titolo</h3>
                    <p>Lorem <mark>ipsum dolor sit</mark> amet, consectetur adipiscing elit. Quisque vel lacus vitae purus tristique.</p>
                </article>
            </div>
            <div class="grid-col alternate">
                <article class="box">
                    <h3>News</h3>
                    <p>Donec vel vestibulum tortor, sit amet dapibus neque. Nulla neque felis, sodales eget nunc ac, commodo sodales ex.</p>
                    <time pubdate datetime="2015-11-21T14:50+01:00">21 novembre 2015</time>
                </article>
                <article class="box">
                    <h3>News</h3>
                    <p>Donec vel vestibulum tortor, sit amet dapibus neque. Nulla neque felis, sodales eget nunc ac, commodo sodales ex.</p>
                    <time pubdate datetime="2015-11-21T14:50+01:00">21 novembre 2015</time>
                </article>
                <article class="box">
                    <h3>News</h3>
                    <p>Donec vel vestibulum tortor, sit amet dapibus neque. Nulla neque felis, sodales eget nunc ac, commodo sodales ex.</p>
                    <time pubdate datetime="2015-11-21T14:50+01:00">21 novembre 2015</time>
                </article>
            </div>
            <div class="grid-col default">
                <article class="box">
                    <h3>Immagini responsive</h3>
                    <figure>
                        <img src="http://lorempicsum.com/futurama/350/150/9">
                        <figcaption>Immagine standard</figcaption>
                    </figure>
                    <p>Donec vel vestibulum tortor, sit amet dapibus neque. Nulla neque felis, sodales eget nunc ac, commodo sodales ex.</p>
                    <figure>
                        <picture>
                            <!-- stile applicato all'immagine -->
                            <style scoped media="(max-width: 480px)">img{ width: 100%; height: auto }</style>
                            <!-- set di immagini alternative -->
                            <source srcset="assets/images/myphoto_180.jpg" media="(max-width: 180px)">
                            <source srcset="assets/images/myphoto_375.jpg" media="(max-width: 375px)">
                            <source srcset="assets/images/myphoto_480.jpg" media="(max-width: 480px)">
                            <source srcset="assets/images/myphoto_768.jpg" media="(max-width: 768px)">
                            <!-- se nessuna corrisponde al viewport per browser compatibili -->
                            <source srcset="assets/images/myphoto_768.jpg">
                            <!-- fallback per browser non compatibili -->
                            <!-- definisco una dimensione dell'immagine per evitare il reflow -->
                            <img width="250" height="333" rc="assets/images/myphoto_180.jpg" alt="">
                        </picture>
                        <figcaption>Immagine variabile in funzione del viewport</figcaption>
                    </figure>
                    <p>Donec vel vestibulum tortor, sit amet dapibus neque. Nulla neque felis, sodales eget nunc ac, commodo sodales ex.</p>
                    
                </article>
            </div>
            <div class="grid-col alternate">
                <article class="box">
                    <h3>Liste</h3>
                    <ul>
                        <li>Uno</li>
                        <li class="star">Due</li>
                        <li>Tre</li>
                    </ul>
                    <p>Vivamus in neque quis lacus dapibus vestibulum.</p>
                    <h3>Bottoni</h3>
                    <div class="buttons">
                        <div class="button"><a href="#" class="default">Uno</a></div>
                        <div class="button"><a href="#" class="alternate">Due</a></div>
                    </div>
                    <p>Curabitur id mattis dolor.</p>
                </article>
            </div>
        </section>

        <section class="large_wrapper">
            <hgroup>
                <h1>Sezione large_wrapper</h1>
                <h2>Griglia a 24 colonne con gutter esterno</h2>
            </hgroup>
            <div class="grid-col">a</div>
            <div class="grid-col">b</div>
            <div class="grid-col">c</div>
            <div class="grid-col">d</div>
            <div class="grid-col">e</div>
            <div class="grid-col">f</div>
            <div class="grid-col">g</div>
            <div class="grid-col">h</div>
            <div class="grid-col">i</div>
            <div class="grid-col">l</div>
            <div class="grid-col">m</div>
            <div class="grid-col">n</div>
            <div class="grid-col">o</div>
            <div class="grid-col">p</div>
            <div class="grid-col">q</div>
            <div class="grid-col">r</div>
            <div class="grid-col">s</div>
            <div class="grid-col">t</div>
            <div class="grid-col">u</div>
            <div class="grid-col">v</div>
            <div class="grid-col">w</div>
            <div class="grid-col">x</div>
            <div class="grid-col">y</div>
            <div class="grid-col">z</div>
        </section>

        <section class="wrapper second">	
            <hgroup>
                <h1>Sezione wrapper</h1>
                <h2>Griglia a 12 colonne con gutter interno</h2>
            </hgroup>
            <div class="grid-col alternate">
                <article class="box">
                    <h3>Titolo</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel lacus vitae purus tristique feugiat imperdiet id leo. Donec ex odio.</p>
                    <h3>Pure.css table</h3>
                    <table class="pure-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Make</th>
                                <th>Model</th>
                                <th>Year</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Honda</td>
                                <td>Accord</td>
                                <td>2009</td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Toyota</td>
                                <td>Camry</td>
                                <td>2012</td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Hyundai</td>
                                <td>Elantra</td>
                                <td>2010</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="button single"><a href="#" class="alternate">Leggi</a></div>
                </article>
            </div>
            <div class="grid-col default">
                <article class="box">
                    <h3>Slider</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel lacus vitae purus tristique feugiat imperdiet id leo. Donec ex odio.</p>
                    <div id="main-slider" class="slider owl-carousel">
                        <div class="item">
                            <h2>Titolo1</h2>
                            <img alt="" src="assets/templates/default/images/slider/slide1.jpg" class="responsive">
                        </div>
                        <div class="item">
                            <h2>Titolo2</h2>
                            <img alt="" src="assets/templates/default/images/slider/slide2.jpg" class="responsive">
                        </div>
                        <div class="item">
                            <h2>Titolo3</h2>
                            <img alt="" src="assets/templates/default/images/slider/slide3.jpg" class="responsive">
                        </div>
                    </div><!--slider-->
                    <div class="button single"><a href="#" class="default">Leggi</a></div>
                </article>
            </div>
            <div class="grid-col alternate">
                <article class="box">
                    <h3>Titolo</h3>
                    <p>Curabitur id mattis dolor. Nunc augue eros, condimentum id vehicula sit amet, luctus tincidunt neque. Praesent eu mollis urna. Nulla gravida.</p>
                    <h3>Bottoni</h3>
                    <div class="buttons">
                        <div class="button"><a href="#" class="success">Success</a></div>
                        <div class="button"><a href="#" class="alert">Alert</a></div>
                        <div class="button"><a href="#" class="warning">Warning</a></div>
                    </div>
                </article>
            </div>	
        </section>

        <div class="wrapper">
            <main>
                <hgroup>
                    <h1>Contenuto principale</h1>
                    <h2>Form</h2>
                </hgroup>
                <article class="box">
                    <h3>Form</h3>
                    <form class="default" method="post" action="">
                        <fieldset>
                            <legend>1. Account</legend>
                            <label for="username">Username &bull;</label>
                            <input id="username" name="username" type="text" placeholder="Username" class="field full" maxlength="20" tabindex="1">
                            <label class="error"><i class="fa fa-warning"></i>&nbsp;Campo obbligatorio</label>
                            <label foe="email">Email &bull;</label>
                            <input id="email" name="email" type="text" placeholder="Email" class="field full" maxlength="20" tabindex="2">
                            <label class="error"><i class="fa fa-warning"></i>&nbsp;Campo obbligatorio</label>
                        </fieldset>
                        <fieldset>
                            <legend>2. Altro</legend>
                            <label for="provincia">Provincia &bull;</label>
                            <select id="provincia" name="provincia" class="field" tabindex="3">
                                <option value="">Seleziona...</option>
                                <option value="1">Uno</option>
                                <option value="2">Due</option>
                            </select>
                            <label for="messaggio">Messaggio &bull;</label>
                            <textarea id="messaggio" name="messaggio" class="field full" maxlength="500" tabindex="5"></textarea>
                            <p><small>Donec vel vestibulum tortor, sit amet dapibus neque. Nulla neque felis, sodales eget nunc ac, commodo sodales ex.</small></p>
                            <label for="check">Accetto &bull;</label>
                            <input id="check" name="check" type="checkbox" class="field" tabindex="5">
                            <label class="error"><i class="fa fa-warning"></i>&nbsp;Campo obbligatorio</label>
                            <p><small>I campi indicati da (&bull;) sono obbligatori.</small></p>
                            <input id="submit" class="button" type="submit" value="Invia" tabindex="6">
                        </fieldset>
                    </form>
                </article>
            </main>
            <aside>
                <hgroup>
                    <h1>Contenuto accessorio</h1>
                    <h2>Pure.css user interface</h2>
                </hgroup>
                <form class="pure-form">
                    <fieldset>
                        <legend>A compact inline form</legend>

                        <input type="email" placeholder="Email">
                        <input type="password" placeholder="Password">

                        <label for="remember">
                            <input id="remember" type="checkbox"> Remember me
                        </label>

                        <button type="submit" class="pure-button pure-button-primary">Sign in</button>
                    </fieldset>
                </form>
                <button class="pure-button">
                    <i class="fa fa-cog"></i>
                    Settings
                </button>

                <a class="pure-button" href="#">
                    <i class="fa fa-shopping-cart fa-lg"></i>
                    Checkout
                </a>

                <a class="pure-button pure-button-primary" href="#">A Primary Button</a>
                <button class="pure-button pure-button-primary">A Primary Button</button>
                <a class="pure-button pure-button-active" href="#">An Active Button</a>
                <button class="pure-button pure-button-active">An Active Button</button>


                <div class="pure-menu pure-menu-horizontal">
                    <ul class="pure-menu-list">
                        <li class="pure-menu-item pure-menu-selected"><a href="#" class="pure-menu-link">Home</a></li>
                        <li class="pure-menu-item pure-menu-has-children pure-menu-allow-hover">
                            <a href="#" id="menuLink1" class="pure-menu-link">Contact</a>
                            <ul class="pure-menu-children">
                                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Email</a></li>
                                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Twitter</a></li>
                                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Tumblr Blog</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </aside>
        </div><!--wrapper-->	
        <?php include 'assets/chunks/footer.php' ?>
		<script type="text/javascript" src="assets/build/init.min.js"></script>
    </body>
</html>