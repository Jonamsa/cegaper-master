   
    <header class="general">
        <div class="header">
            <div class="container">
                <div class="three columns">
                    <div id="logo-home">
                        <a href="<?php echo base_url()?>cancun">
                            <img src="<?php echo BASE_URL?>/assets/images/LOGO-HOME.png" alt="Cegaper">
                        </a>
                    </div>
                </div>
                <div class="two columns">
                    <div class="red-top"> 
                        <p>
                            <a class="face-top" target="_blank" href=""></a>
                            <a class="twitter-top" target="_blank" href=""></a>
                        </p>
                    </div> 
                </div>
                <div class="nine columns">
                    <ul class="top-menu">
                        <li class="tel">Cancun - (998) 882 2060   |   Cuernavaca - (777) 318 3814 - (777) 318 7490</li>
                        <li class="mail"> <a href="mailto:info@cegaper.com">info@cegaper.com</a></li>
                        <?php if (isset($_SESSION['AvaiBookRs']) && $_SESSION['AvaiBookRs'] != ''){?>
                        <li class="shoping"><a href="/shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-2">
            <div class="container ">
                <div class="eight columns offset-by-four">
                    <div class="bg-header">
                        <div id="menu-header">
                            <ul id="menu">
                                <li><a <?php if ($active=='1') { ?> class="active" <?php } ?> href="<?php echo base_url()?>cancun">Inicio</a></li>
                                <li><a <?php if ($active=='2') { ?> class="active" <?php } ?> href="<?php echo base_url()?>cancun/nosotros">Nosotros</a>
                                    
                                </li>
                                <li><a <?php if ($active=='3') { ?> class="active" <?php } ?> href="<?php echo base_url()?>cancun/servicios">Servicios</a>
                                    
                                </li>
                                <li><a <?php if ($active=='4') { ?> class="active" <?php } ?> href="<?php echo base_url()?>cancun/contacto">Contacto</a></li>
                                <li><a <?php if ($active=='5') { ?> class="active" <?php } ?> href="<?php echo base_url()?>cuernavaca">Cuernavaca</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>