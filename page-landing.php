<?php
/*
Template Name: Landing
*/

/**
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package esdlp
 */
get_header();
?>
      
       <header>
        <div class="row">
            <div class="columns float-left large-12" id="header">
                <img id="headerimg" src="<?php the_post_thumbnail_url(); ?>" alt="Maquete novas instalações ESD Carvalho Araújo">
            </div>
            <div class="" id="logoheader">
                <img src="<?php echo get_theme_mod( 'logo' ) ?>" alt="Logo ESD IPCA branco">
            </div>
            <div id="whitesquare"></div>
        </div>
        <div class="row">
            <nav class="columns float-left large-6">
                   <ul id="main-nav">
                    <li><a href="#background1">edifício</a></li>
                    <li><a href="#projectoimg">projecto</a></li>
                    <li id="lastnav"><a href="#">localização</a></li>
                </ul>
            </nav>
            <div class="float-left columns large-5 large-push-0 medium-6 medium-push-5">
                <div class="animate-scroll" id="materialbox1">
                    <?php the_field('p_intro'); ?>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="row" id="rowedificio">
            <div class="columns float-left large-push-1 large-4 medium-6"><div id="edificiotext">
               <?php the_field('p_edf') ?>
            </div></div>
            <div class="columns float-left large-3 large-push-1 medium-3">
                <div class="edificioimg animate-scroll">
                   <?php
                    $image = get_field('foto_edf_1');
                    
                    $url = $image["url"];
                    $src = $image["src"]; ?>
                    <img src="<?php echo $url; ?>" alt="<?php echo $src; ?>"></div>
                <div class="edificioimg animate-scroll">
                    <?php
                    $image = get_field('foto_edf_2');
                    
                    $url = $image["url"];
                    $src = $image["src"]; ?>
                    <img src="<?php echo $url; ?>" alt="<?php echo $src; ?>"></div></div>
                 <div class="columns float-left large-4 large-push-1 medium-3">
                <div class="edificioimg animate-scroll">
                    <?php
                    $image = get_field('foto_edf_3');
                    
                    $url = $image["url"];
                    $src = $image["src"]; ?>
                    <img src="<?php echo $url; ?>" alt="<?php echo $src; ?>"></div>
                <div class="edificioimg animate-scroll">
                    <?php
                    $image = get_field('foto_edf_4');
                    
                    $url = $image["url"];
                    $src = $image["src"]; ?>
                    <img src="<?php echo $url; ?>" alt="<?php echo $src; ?>"></div>
            </div>
       
        <div class="columns large-2">
            <div id="borderedificio"></div>
        </div>
         </div>
        <div class="row" id="projecto">
            <div class="float-left columns large-push-1 large-5 medium-6"> <div class="materialbox animate-scroll" id="materialbox2">
              <?php
                    $image = get_field('des_proj');
                    
                    $url = $image["url"];
                    $src = $image["src"]; ?>
                    <img src="<?php echo $url; ?>" alt="<?php echo $src; ?>">
                <?php the_field('p_proj') ?>
            </div></div>
            <!--SLIDESHOW DAS PLANTAS-->
            <div class="columns float-left large-3 large-push-3 medium-4 medium-push-1 small-push-1">
                <div class="slideplantas">
                   <div><svg width="222px" height="378px" viewBox="0 0 222 378" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="12maio" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="landingpage-copy" transform="translate(-758.000000, -2714.000000)">
                                <g id="Piso-1" transform="translate(759.000000, 2715.000000)">
                                    <polygon id="Rectangle-19" fill="#6B3F9E" class="purplearea" data-label="Oficina de madeiras e metais: 47,97m2" points="145.170068 335.986395 219.251701 335.986395 219.251701 375.646259 145.170068 375.646259"></polygon>
                                    <polygon id="Rectangle-19" fill="#6B3F9E" class="purplearea" data-label="Oficina: 37,30m2" points="157.48175 303.061224 219.251701 303.061224 219.251701 336.136055 157.48175 336.136055"></polygon>
                                    <polygon id="Rectangle-19" fill="#6B3F9E" class="purplearea" data-label="Oficina de imagem: 29,23m2" points="0.33889325 303.061224 49.459707 303.061224 49.459707 336.136055 0.33889325 336.136055"></polygon>
                                    <polygon id="Rectangle-19" fill="#6B3F9E" class="purplearea" data-label="oficina de imagem digital: 47,12m2" points="0.33889325 336.734694 74.4205259 336.734694 74.4205259 376.394558 0.33889325 376.394558"></polygon>
                                    <rect id="Rectangle-12" fill="#D8D8D8" x="73.8184118" y="336.228491" width="71.0639934" height="40.1660664"></rect>
                                    <polyline id="Line" stroke="#FFFFFF" stroke-linecap="square" points="0.74829932 302.780707 0.74829932 0 219.578362 0 219.578362 303.959193"></polyline>
                                    <g id="wcs" transform="translate(77.000000, 349.000000)" font-size="10" font-family="Montserrat-Medium, Montserrat" letter-spacing="0.625" fill="#8D8D8D" font-weight="400">
                                        <text id="wc">
                                            <tspan x="8.07899617" y="10.9097639">wc</tspan>
                                        </text>
                                        <text id="wc">
                                            <tspan x="43.4373184" y="10.9097639">wc</tspan>
                                        </text>
                                    </g>
                                    <polygon id="Stroke-24" stroke="#8D8D8D" fill="#D8D8D8" points="18.1304291 283.278483 70.6243459 283.278483 70.6243459 302.870779 146.940803 302.870779 146.940803 310.244224 147.994898 310.244224 147.994898 327.519152 71.4676217 327.519152 71.4676217 325.412453 61.1374935 325.412453 61.1374935 310.244224 62.1915882 310.244224 62.1915882 298.868052 18.1304291 298.868052"></polygon>
                                    <path d="M0.843275772,336.367286 L49.9640895,336.367286" id="Stroke-3" stroke="#8D8D8D"></path>
                                    <path d="M73.997449,336.613348 L73.997449,376.148495" id="Stroke-5" stroke="#8D8D8D"></path>
                                    <path d="M109.415031,336.367286 L109.415031,375.973218" id="Stroke-7" stroke="#8D8D8D"></path>
                                    <path d="M157.48175,336.367286 L219.251701,336.367286" id="Stroke-9" stroke="#8D8D8D"></path>
                                    <path d="M62.1915882,310.244224 L146.940803,310.244224" id="Stroke-12" stroke="#8D8D8D"></path>
                                    <path d="M62.1915882,302.870779 L70.6243459,302.870779" id="Stroke-13" stroke="#8D8D8D"></path>
                                    <path d="M41.8125642,298.868052 L41.8125642,283.278483" id="Stroke-14" stroke="#8D8D8D"></path>
                                    <path d="M35.9096338,298.868052 L35.9096338,283.278483" id="Stroke-16" stroke="#8D8D8D"></path>
                                    <path d="M30.5687467,298.868052 L30.5687467,283.278483" id="Stroke-18" stroke="#8D8D8D"></path>
                                    <path d="M24.103773,298.868052 L24.103773,283.278483" id="Stroke-20" stroke="#8D8D8D"></path>
                                    <polyline id="Stroke-23" stroke="#8D8D8D" points="61.1374935 313.966339 70.6243459 313.966339 70.6243459 325.412453"></polyline>
                                    <path d="M144.973441,336.613348 L144.973441,375.973218" id="Stroke-26" stroke="#8D8D8D"></path>
                                    <polygon id="Stroke-1" stroke="#8D8D8D" points="0.421637886 302.870779 49.5424516 302.870779 49.5424516 336.367286 157.48175 336.367286 157.48175 302.870779 219.251701 302.870779 219.251701 375.973218 0.421637886 375.973218"></polygon>
                                    <polygon id="Stroke-24" stroke="#8D8D8D" points="18.1304291 283.278483 70.6243459 283.278483 70.6243459 302.870779 146.940803 302.870779 146.940803 310.244224 147.994898 310.244224 147.994898 327.519152 71.4676217 327.519152 71.4676217 325.412453 61.1374935 325.412453 61.1374935 310.244224 62.1915882 310.244224 62.1915882 298.868052 18.1304291 298.868052"></polygon>
                                </g>
                            </g>
                        </g>
                       </svg></div>
                    <div><svg width="221px" height="378px" viewBox="0 0 221 378" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="12maio" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="landingpage-copy" transform="translate(-758.000000, -1547.000000)">
                                <g id="Piso0" transform="translate(759.000000, 1548.000000)">
                                    <rect id="Rectangle-22" fill="#6B3F9E" class="purplearea" x="171.362678" y="336.825435" width="47.8917529" height="39.6705512"></rect>
                                    <rect id="Rectangle-22" fill="#6B3F9E" class="purplearea" x="171.362678" y="297.903385" width="47.8917529" height="38.398099"></rect>
                                    <polygon id="Rectangle-22" fill="#6B3F9E" class="purplearea" points="144.423567 298.336634 170.785645 298.336634 170.785645 323.352417 144.423567 323.352417"></polygon>
                                    <polygon id="Rectangle-21" fill="#6B3F9E" class="purplearea" points="144.049413 336.825435 170.764032 336.825435 170.764032 375.897186 118.981074 375.897186 118.981074 356.931778 138.174206 356.931778 138.174206 340.480535 144.049413 340.480535"></polygon>
                                    <polygon id="Rectangle-20" fill="#6B3F9E" class="purplearea" points="48.3450552 336.825435 75.0772841 336.825435 75.0772841 341.161468 81.4375602 341.161468 81.4375602 356.863019 100.72666 356.863019 100.72666 375.897186 48.3450552 375.897186"></polygon>
                                    <rect id="Rectangle-20" fill="#6B3F9E" class="purplearea" x="73.3342466" y="83.8321082" width="116.736148" height="65.1195841"></rect>
                                    <rect id="Rectangle-20" fill="#6B3F9E" class="purplearea" x="73.3342466" y="240.616923" width="73.028684" height="43.0649433"></rect>
                                    <rect id="Rectangle-20" fill="#6B3F9E" class="purplearea" x="0.748308639" y="336.825435" width="47.8917529" height="39.071751"></rect>
                                    <rect id="Rectangle-20" fill="#6B3F9E" class="purplearea" x="0.748308639" y="297.903385" width="47.5967466" height="38.4729508"></rect>
                                    <g id="linhas">
                                        <polyline id="Stroke-3" stroke="#8D8D8D" points="73.1932192 83.7343166 160.559692 83.7343166 189.752363 83.7343166 189.752363 149.072656 73.1932192 149.072656"></polyline>
                                        <path d="M160.348151,149.072656 L160.348151,83.7343166" id="Stroke-4" stroke="#8D8D8D"></path>
                                        <rect id="Rectangle-14" fill="#D8D8D8" x="47.8917529" y="297.903385" width="30.7741928" height="31.2686279"></rect>
                                        <rect id="Rectangle-13" fill="#D8D8D8" x="20.9526419" y="148.951692" width="41.9052838" height="60.6285783"></rect>
                                        <polygon id="Stroke-1" stroke="#8D8D8D" fill="#D8D8D8" points="62.5459327 298.145565 75.097089 298.145565 75.097089 306.744852 61.9815411 306.744852 61.9815411 322.955526 48.0198288 322.955526 48.0198288 336.629635 75.097089 336.629635 75.097089 340.858654 81.0904714 340.858654 81.0904714 356.717474 100.62333 356.717474 100.62333 376.241162 118.674555 376.241162 118.674555 356.717474 138.559418 356.717474 138.559418 340.858654 144.482568 340.858654 144.482568 336.559433 171.136747 336.559433 171.136747 323.519677 144.059486 323.519677 144.059486 298.145565 146.174897 298.145565 146.174897 283.978352 73.1932192 283.978352 73.1932192 53.9899365 62.5459327 53.9899365"></polygon>
                                        <polyline id="Stroke-5" stroke="#8D8D8D" points="73.1932192 240.912986 146.033588 240.912986 146.033588 283.977929"></polyline>
                                        <polyline id="Stroke-6" stroke="#8D8D8D" points="62.5459327 149.072656 21.1541096 149.072656 21.1541096 209.547623 62.5459327 209.547623"></polyline>
                                        <path d="M36.5966096,149.072656 L36.5966096,209.547623" id="Stroke-7" stroke="#8D8D8D"></path>
                                        <path d="M0.423082192,336.559433 L48.0198288,336.559433" id="Stroke-12" stroke="#8D8D8D"></path>
                                        <polyline id="Stroke-10" stroke="#8D8D8D" points="48.0198288 376.241162 48.0198288 336.629635 48.0198288 298.145565"></polyline>
                                        <polyline id="Stroke-8" stroke="#8D8D8D" points="62.5459327 298.145565 48.0198288 298.145565 0.423082192 298.145565 0.423082192 376.241162 100.62333 376.241162 219.156575 376.241162 219.156575 298.145565 146.174897 298.145565"></polyline>
                                        <path d="M171.136747,298.145565 L171.136747,376.241162" id="Stroke-14" stroke="#8D8D8D"></path>
                                        <path d="M171.136747,336.559433 L219.156575,336.559433" id="Stroke-16" stroke="#8D8D8D"></path>
                                        <polyline id="Stroke-19" stroke="#8D8D8D" points="61.9815411 312.101327 70.9364988 312.101327 70.9364988 322.955526 62.0517727 322.955526"></polyline>
                                        <polyline id="Stroke-20" stroke="#8D8D8D" points="75.097089 298.145565 102.333428 298.145565 102.333428 317.228589 75.097089 317.228589 75.097089 306.744852"></polyline>
                                        <polyline id="Stroke-21" stroke="#8D8D8D" points="144.059486 298.145565 117.193767 298.145565 117.193767 317.228589 144.059486 317.228589"></polyline>
                                        <polyline id="Stroke-22" stroke="#8D8D8D" stroke-dasharray="10" points="0.423082192 298.1464 0.423082192 53.9900867 0.423082192 0.422648129 219.368116 0.422648129 219.368116 298.1464"></polyline>
                                        <path d="M52.973291,53.8920696 L0.748308639,53.8920696" id="Stroke-24" stroke="#8D8D8D" stroke-dasharray="10"></path>
                                        <path d="M206.415234,53.8920696 L78.6659456,53.8920696" id="Stroke-24" stroke="#8D8D8D" stroke-dasharray="10"></path>
                                        <path d="M100.62333,356.928925 L118.674555,356.928925" id="Stroke-27" stroke="#8D8D8D"></path>
                                        <polyline id="Stroke-28" stroke="#8D8D8D" points="100.62333 362.162336 118.674555 362.162336 118.674555 367.131433 100.62333 367.131433"></polyline>
                                        <path d="M82.571259,307.687246 L102.332582,307.687246" id="Stroke-29" stroke="#8D8D8D"></path>
                                        <path d="M117.193767,307.687246 L136.091156,307.687246" id="Stroke-30" stroke="#8D8D8D"></path>
                                        <path d="M98.013759,298.145565 L98.013759,317.228589" id="Stroke-31" stroke="#8D8D8D"></path>
                                        <path d="M94.153134,317.229012 L94.153134,298.145988" id="Stroke-32" stroke="#8D8D8D"></path>
                                        <path d="M90.292509,317.229012 L90.292509,298.145988" id="Stroke-33" stroke="#8D8D8D"></path>
                                        <path d="M86.431884,317.229012 L86.431884,298.145988" id="Stroke-34" stroke="#8D8D8D"></path>
                                        <path d="M82.571259,317.229012 L82.571259,298.145988" id="Stroke-35" stroke="#8D8D8D"></path>
                                        <path d="M136.091156,298.145565 L136.091156,317.228589" id="Stroke-36" stroke="#8D8D8D"></path>
                                        <path d="M132.230531,317.229012 L132.230531,298.145988" id="Stroke-37" stroke="#8D8D8D"></path>
                                        <path d="M128.369906,317.229012 L128.369906,298.145988" id="Stroke-38" stroke="#8D8D8D"></path>
                                        <path d="M124.509281,317.229012 L124.509281,298.145988" id="Stroke-39" stroke="#8D8D8D"></path>
                                        <path d="M120.648656,317.229012 L120.648656,298.145988" id="Stroke-40" stroke="#8D8D8D"></path>
                                    </g>
                                    <g id="WCS" transform="translate(41.817738, 165.440132)" font-weight="400" font-family="Montserrat-Medium, Montserrat" fill="#8D8D8D">
                                        <text id="wc" transform="translate(12.977163, 144.436459) rotate(-90.000000) translate(-12.977163, -144.436459) " font-size="8" letter-spacing="1">
                                            <tspan x="6.60116254" y="147.436459">w</tspan>
                                            <tspan x="14.8411625" y="147.436459">c</tspan>
                                        </text>
                                        <text id="wc" transform="translate(6.979227, 13.336826) rotate(-90.000000) translate(-6.979227, -13.336826) " font-size="10" letter-spacing="1.25">
                                            <tspan x="-1.67702259" y="16.836826">w</tspan>
                                            <tspan x="8.43297741" y="16.836826" letter-spacing="1.5625">c</tspan>
                                        </text>
                                    </g>
                                </g>
                            </g>
                        </g>
                        </svg></div>
                    <div><svg width="222px" height="377px" viewBox="0 0 222 377" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="12maio" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="landingpage-copy" transform="translate(-758.000000, -2089.000000)">
                                <g id="Piso1" transform="translate(759.000000, 2089.000000)">
                                    <polygon id="Rectangle-19" fill="#6B3F9E" class="purplearea" points="0.74829932 336.734694 72.7346916 336.734694 72.7346916 375.646259 0.74829932 375.646259"></polygon>
                                    <polygon id="Rectangle-19" fill="#6B3F9E" class="purplearea" points="143.673469 336.734694 219.251701 336.734694 219.251701 375.646259 143.673469 375.646259"></polygon>
                                    <polygon id="Rectangle-19" fill="#6B3F9E" class="purplearea" points="73.3333333 336.734694 143.673469 336.734694 143.673469 375.646259 73.3333333 375.646259"></polygon>
                                    <polygon id="Rectangle-19" fill="#6B3F9E" class="purplearea" points="0.74829932 297.823129 71.8367347 297.823129 71.8367347 308.29932 60.4069725 308.29932 60.4069725 336.285641 0.74829932 336.285641"></polygon>
                                    <polygon id="Rectangle-19" fill="#6B3F9E" class="purplearea" points="74.829932 242.44898 142.176871 242.44898 142.176871 296.326531 74.829932 296.326531"></polygon>
                                    <polygon id="Rectangle-19" fill="#6B3F9E" class="purplearea" points="154.897959 298.571429 219.251701 298.571429 219.251701 336.734694 154.897959 336.734694"></polygon>
                                    <polyline id="Line" stroke="#FFFFFF" stroke-linecap="square" points="0.37414966 298.197279 0.37414966 0.553741497 219.579553 0.553741497 219.579553 299.35577"></polyline>
                                    <path d="M0.419562351,336.56281 L73.003849,336.547619" id="Stroke-9" stroke="#8D8D8D"></path>
                                    <polygon id="Rectangle-10" fill="#D8D8D8" points="60.445331 308.222963 71.7809771 308.222963 71.7809771 298.327086 74.54957 298.327086 74.54957 296.128002 142.244542 296.128002 142.244542 298.435574 154.410346 298.435574 154.410346 336.26128 60.445331 336.26128"></polygon>
                                    <polyline id="Line" stroke="#979797" stroke-linecap="square" points="143.5 298.5 143.5 322.520824 153.827969 322.520824"></polyline>
                                    <polyline id="Stroke-3" stroke="#8D8D8D" points="219.151261 336.346301 154.608307 336.346301 154.608307 298.183036"></polyline>
                                    <polyline id="Stroke-5" stroke="#8D8D8D" points="154.608726 336.56281 143.909886 336.56281 143.909886 375.644792"></polyline>
                                    <polyline id="Stroke-7" stroke="#8D8D8D" points="143.909886 336.56281 73.003849 336.56281 73.003849 375.855286"></polyline>
                                    <polygon id="Stroke-1" stroke="#8D8D8D" points="219.151261 298.182615 219.151261 375.644371 0.419981913 375.644371 0.419981913 298.182615 74.5423842 298.182615 74.5423842 286.414143 74.5423842 284.612764 74.5423842 281.638059 74.5423842 242.050626 142.511485 242.050626 142.511485 281.648076 142.511485 285.070337 142.511485 287.039692 142.511485 298.182615"></polygon>
                                    <path d="M74.5423842,296.147981 L142.511485,296.147981" id="Stroke-13" stroke="#8D8D8D"></path>
                                    <polyline id="Stroke-12" stroke="#8D8D8D" points="71.745162 298.182615 71.745162 308.005944 60.2071973 308.005944 60.2071973 336.562389"></polyline>
                                    <polygon id="Stroke-15" stroke="#8D8D8D" points="61.6756656 322.880454 70.2766938 322.880454 70.2766938 311.724277 61.6756656 311.724277"></polygon>
                                    <polygon id="Stroke-16" stroke="#8D8D8D" points="86.8494066 317.373091 131.323016 317.373091 131.323016 298.182783 86.8494066 298.182783"></polygon>
                                    <polyline id="Stroke-17" stroke="#8D8D8D" points="86.8494066 306.356935 101.114527 306.356935 101.114527 309.724837 101.114527 317.302618 101.114527 315.51342 117.267677 315.51342 117.267677 317.302618 117.267677 306.356935 131.323016 306.356935"></polyline>
                                    <path d="M117.267677,309.830084 L101.114527,309.830084" id="Stroke-18" stroke="#8D8D8D"></path>
                                    <path d="M119.470379,306.356935 L119.470379,298.183036" id="Stroke-19" stroke="#8D8D8D"></path>
                                    <path d="M123.718448,306.356935 L123.718448,298.183036" id="Stroke-20" stroke="#8D8D8D"></path>
                                    <path d="M127.966517,306.356935 L127.966517,298.183036" id="Stroke-21" stroke="#8D8D8D"></path>
                                    <path d="M98.5971525,306.356935 L98.5971525,298.183036" id="Stroke-22" stroke="#8D8D8D"></path>
                                    <path d="M94.4539742,306.356935 L94.4539742,298.183036" id="Stroke-23" stroke="#8D8D8D"></path>
                                    <path d="M90.310796,306.356935 L90.310796,298.183036" id="Stroke-24" stroke="#8D8D8D"></path>
                                    <text id="wc" transform="translate(150.000000, 309.500000) rotate(-90.000000) translate(-150.000000, -309.500000) " font-family="Montserrat-Medium, Montserrat" font-size="10" font-weight="400" letter-spacing="1.25" fill="#8D8D8D">
                                        <tspan x="141.34375" y="313">w</tspan>
                                        <tspan x="151.45375" y="313" letter-spacing="1.5625">c</tspan>
                                    </text>
                                </g>
                            </g>
                        </g>
                        </svg></div>
                </div>
                <!----------------------------------------------FIM DO SLIDESHOW DAS PLANTAS--------------------------------------------->
            <div class="plantasnav">
    <a class="dot" data-slide="0" href="javascript:void(0)">-1</a>
    <a class="dot active" data-slide="1" href="javascript:void(0)">0</a>
    <a class="dot" data-slide="2" href="javascript:void(0)">1</a>
            </div>
            <div class="plantastext">
                <div id="legendaplantas">
                    <p></p>
                </div>
            </div>
        </div>
                     <div class="columns large-1 large-push-3">
                <div id="borderprojecto"></div>
            </div>
                    </div>    
        <div class="row" id="rowmaquetes">
            <div class="maquetescastanhas columns small-12 medium-12 large-8 animate-scroll">
                <?php
                    $image = get_field('foto_maq_1');
                    
                    $url = $image["url"];
                    $src = $image["src"]; ?>
                    <img src="<?php echo $url; ?>" alt="<?php echo $src; ?>">
            </div>
            <div class="maquetescastanhas columns small-12 medium-12 large-4 animate-scroll">
            <?php
                    $image = get_field('foto_maq_2');
                    
                    $url = $image["url"];
                    $src = $image["src"]; ?>
                    <img id="maqcastanha2" src="<?php echo $url; ?>" alt="<?php echo $src; ?>">
            </div>
            <!------------------------------------------------------SLIDESHOW DAS MAQUETES------------------------------------------------>
            <div class="columns large-12">
                <div class="slidemaquetes">
                    <div><?php
                    $image = get_field('foto_slider_1');
                    
                    $url = $image["url"];
                    $src = $image["src"]; ?>
                    <img src="<?php echo $url; ?>" alt="<?php echo $src; ?>">
                        <div class="info"><span class="infoSlide">i</span>
                            <div class="legendamaq">
                                <p class="description">Vista a partir da rua de S. Bento para o novo edifício de bar e sala polivalente. Entrada traseira.</p>
                            </div>
                        </div>
                    </div>
                    <div><?php
                    $image = get_field('foto_slider_2');
                    
                    $url = $image["url"];
                    $src = $image["src"]; ?>
                    <img src="<?php echo $url; ?>" alt="<?php echo $src; ?>">
                        <div class="info"><span class="infoSlide">i</span>
                            <div class="legendamaq">
                                <p>Bar e sala polivalente no novo edifício. Vista sudoeste.</p>
                            </div>
                        </div>
                    </div>
                    <div> <?php
                    $image = get_field('foto_slider_3');
                    
                    $url = $image["url"];
                    $src = $image["src"]; ?>
                    <img src="<?php echo $url; ?>" alt="<?php echo $src; ?>">
                        <div class="info"><span class="infoSlide">i</span>
                            <div class="legendamaq">
                                <p>Interior do bar e sala polivalente e corredor ligação ao edifício antigo.</p>
                            </div>
                        </div>
                    </div>
                    <div> <?php
                    $image = get_field('foto_slider_4');
                    
                    $url = $image["url"];
                    $src = $image["src"]; ?>
                    <img src="<?php echo $url; ?>" alt="<?php echo $src; ?>">
                        <div class="info"><span class="infoSlide">i</span>
                            <div class="legendamaq">
                                <p>Vista a partir do antigo edifício para pátio coberto e bar/sala polivalente.</p>
                            </div>
                        </div>
                    </div>
                    <div> <?php
                    $image = get_field('foto_slider_5');
                    
                    $url = $image["url"];
                    $src = $image["src"]; ?>
                    <img src="<?php echo $url; ?>" alt="<?php echo $src; ?>">
                        <div class="info"><span class="infoSlide">i</span>
                            <div class="legendamaq">
                                <p>Pátio coberto e corredor de ligação entre edifício novo e existente.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-----------------------------------------------FIM DO SLIDESHOW DAS MAQUETES------------------------------------------------>
        <?php
                    $image = get_field('maq_final');
                    
                    $url = $image["url"];
                    $src = $image["src"]; ?>
           <div class="row" id="rowlocalizacao" style="background-image: url('<?php echo $url; ?>')">
            <div class="columns float-left large-push-1 large-5 medium-6">
               <?php the_field('p_local') ?>
                <br><a id="google" target=" _blank" href="<?php the_field('google_maps') ?>">Ver no Google Maps</a></div>
               <div class="columns float-left large-push-2 large-4 medium-6"><div class="materialbox animate-scroll" id="materialbox3"> 
                <div id="mapa"><?php
                    $image = get_field('mapa');
                    
                    $url = $image["url"];
                    $src = $image["src"]; ?>
                    <img src="<?php echo $url; ?>" alt="<?php echo $src; ?>"></div>
                <div id="legendamapa"><?php the_field('p_legenda') ?></div>
                        </div> 
                </div>
             
        </div>
    </main>
    <?php get_footer(); ?>