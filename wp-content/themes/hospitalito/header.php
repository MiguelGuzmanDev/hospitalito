<?php 
    /*
    * $pagename variable de Wordpress
    *
    * Este es el código dentro de /wp-includes/theme.php, que utiliza la solución que usted señaló cuando $pagename no se puede fijar.
    * Fuente: https://www.iteramos.com/pregunta/20944/como-obtener-el-nombre-de-la-pagina-actual-en-wordpress
    */
    
    /*
    * Se puede usar la variable $pagename pero no funcio con categoria.
    */

    /*
    * Código para obtener el slug o permalink de la página actual, independientemente que sea la página de inicio, 
    * entrada, página, categoría, tag o cualquier otra plantilla de WordPress.
    * https://www.bufa.es/wordpress-obtener-slug-de-la-pagina-post-categoria-actual/
    */

    global $wp;
    $slug = add_query_arg( array(), $wp->request );

    switch ($slug) {
        case 'conocenos':
            define('TRANSLATE', 'know-us');
            define('LANG', 'es');
            break;

        case 'know-us': 
            define('TRANSLATE', 'conocenos');
            define('LANG', 'en');
            break;

        case 'que-hacemos': 
            define('TRANSLATE', 'what-do-we-do');
            define('LANG', 'es');
            break;

        case 'what-do-we-do': 
            define('TRANSLATE', 'que-hacemos');
            define('LANG', 'en');
            break;

        case 'donar': 
            define('TRANSLATE', 'donate');
            define('LANG', 'es');
            break;

        case 'donate': 
            define('TRANSLATE', 'donar');
            define('LANG', 'en');
            break;

        case 'voluntariado': 
            define('TRANSLATE', 'volunteering');
            define('LANG', 'es');
            break;

        case 'volunteering': 
            define('TRANSLATE', 'voluntariado');
            define('LANG', 'en');
            break;

        case 'transparencia': 
            define('TRANSLATE', 'transparency');
            define('LANG', 'es');
            break;

        case 'transparency': 
            define('TRANSLATE', 'transparencia');
            define('LANG', 'en');
            break;


        case 'noticias/es': 
            define('TRANSLATE', 'noticias/en');
            define('LANG', 'es');
            break;

        case 'noticias/en': 
            define('TRANSLATE', 'noticias/es');
            define('LANG', 'en');
            break;

        default:
            define('TRANSLATE', 'know-us');
            define('LANG', 'es');
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="copyright" content="hospitalitodelamixteca.org" />
        <meta name="robots" content="index"/>
        <meta name="Keywords" content="hospitalitodelamixteca.org, Tlaxiaco, Hospital, Salud Dental">

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

        <link rel="icon" href="<?php echo get_template_directory_uri().'/assets/ico/hospitalito-mint.ico' ?>">

        <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/style.css">

        <?php wp_head(); ?>
    </head>

    <body id="page-top">
        <nav class="navbar navbar-expand-lg bg-light fixed-top shadow-lg">
            <div class="container container-red">
                <a class="navbar-brand mx-left d-lg-none" href="index.html">
                    <div class="row">
                        <div class="col-6">
                            <img src="<?php echo get_template_directory_uri().'/assets/img/hospitalito-mint.png' ?>" class="img-fluid" alt="" width="70">
                        </div>

                        <div class="col-6">
                            <?php 
                                switch (LANG) {
                                    case 'en':
                                        echo "Little Hospital";
                                        break;

                                    case 'es': 
                                        echo "Hospitalito";
                                        break;
                                }
                            ?>
                            
                            <strong class="d-block">
                                <?php 
                                    switch (LANG) {
                                        case 'en':
                                            echo "of the Mixteca";
                                            break;

                                        case 'es': 
                                            echo "de la Mixteca";
                                            break;
                                    }
                                ?>
                            </strong>
                        </div>
                    </div>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <?php 
                            switch (LANG) {
                                case 'en':
                                    $titles = array("Know us","What do we do?","Donate","Volunteering","Transparency","News");
                                    $namesUrl = array("know-us","what-do-we-do","donate","volunteering","transparency","news");
                                    break;

                                case 'es': 
                                    $titles = array("Conócenos","¿Qué hacemos?","Donar","Voluntariado","Transparencia","Noticias");
                                    $namesUrl = array("conocenos","que-hacemos","donar","voluntariado","transparencia","noticias");
                                    break;
                            }

                            for ($i=0; $i < 3; $i++) { 
                                ?>
                                    <li class="nav-item <?php echo ($url==$namesUrl[$i]) ? 'active' : ''; ?>">
                                        <a class="nav-link" href="<?php echo $namesUrl[$i]; ?>"><?php echo $titles[$i] ?></a>
                                    </li>
                                <?php
                            }
                        ?>

                        <a class="navbar-brand d-none d-lg-block" href="inicio">
                            <img src="<?php echo get_template_directory_uri().'/assets/img/hospitalito-'.LANG.'.png' ?>" class="img-fluid" alt="" width="80">
                            <!-- Medic Care -->
                            <!-- <strong class="d-block">Health Specialist</strong> -->
                        </a>

                        <?php 
                            for ($i=3; $i < 6; $i++) { 
                                ?>
                                    <li class="nav-item <?php echo ($url==$namesUrl[$i]) ? 'active' : ''; ?>">
                                        <a class="nav-link" href="<?php echo $namesUrl[$i]; ?>"><?php echo $titles[$i] ?></a>
                                    </li>
                                <?php
                            }
                        ?>
                    </ul>
                </div>
            </div>

            <div class="dropdown mt-1">
                <button class="btn btn-whithe-main dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo get_template_directory_uri().'/assets/ico/red.png' ?>" width="20"></a>
                </button>
                
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="<?php echo 'https://hospitalitodelamixteca.org/'.TRANSLATE ?>">
                        <?php 
                            if (LANG == 'es') {
                                echo 'Ingles';
                            }
                            else{
                                echo 'Español';
                            }
                        //(LANG == 'es') ?  echo 'Ingles' : echo 'Español'; ?>
                    </a></li>
                    <!-- <li><a class="dropdown-item" href="<?php echo $translate_en ?>">English (EU)</a></li> -->
                </ul>
            </div>
        </nav>