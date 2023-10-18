<?php 
    get_header(); 
?>
<!-- Banner -->
<header class="masthead">
    <img src="<?php echo get_template_directory_uri().'/assets/images/noticias/news.jpg' ?>" width="100%">
</header>
<!-- Fin banner -->

<section class="bg-light page-section" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
               <h2 class="section-heading text-uppercase">
                    <?php 
                        if (LANG == 'es') {
                            echo 'Noticias';
                        }
                        else{
                            echo 'News';
                        }
                    ?>
                </h2>
               <h3 class="section-subheading text-muted">
                    <?php 
                        if (LANG == 'es') {
                            echo 'Fundación Ávila Cruz A. C., contribuye a la reducción de la pobreza extrema en las comunidades indígenas del Estado de Oaxaca. ';
                        }
                        else{
                            echo 'Fundación Ávila Cruz AC, contributes to the reduction of extreme poverty in the indigenous communities of the State of Oaxaca.';
                        }
                    ?>
                </h3>
           </div>
       </div>

       <div class="row">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" href="<?php the_permalink(); ?>">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <?php 
                            if(has_post_thumbnail()) {                    
                                $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'full' );
                                 echo '<img class="img-fluid" src="' . $image_src[0]  . '" width="100%"  />';
                            } 
                            /*https://wordpress.stackexchange.com/questions/21136/set-post-thumbnail-size-in-percent-not-pixels*/
                        ?>
                        <?php //the_post_thumbnail('thumbnail', array('width' => 100, 'class' => 'img-fluid')); 
                        /* https://wordpress.stackexchange.com/questions/102158/add-class-name-to-post-thumbnail*/?>
                    </a>

                    <div class="portfolio-caption">

                        <h6><?php the_title(); ?></h6>

                        <p class="text-muted"><i class="far fa-clock"></i>  <?php echo get_the_date(); ?></p>

                    </div>
                </div>

                <nav class="raiola-paginacion">
                    <?php echo paginate_links(); ?>
                </nav>

            <?php endwhile; else : ?>
                <p>Lo siento, no hemos encontrado ningún post.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>