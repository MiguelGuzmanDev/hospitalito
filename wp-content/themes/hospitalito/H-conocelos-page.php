<?php 
    
    /**
    * Template Name: H-conocenos
    */

    get_header(); 
?>
    
    <main>
        <section class="hero" id="hero">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?php echo get_template_directory_uri().'/assets/img/conocenos/HDLM1.png' ?>" class="img-fluid" alt="">
                                </div>

                                <div class="carousel-item">
                                    <img src="<?php echo get_template_directory_uri().'/assets/img/conocenos/HDLM4.png' ?>" class="img-fluid" alt="">
                                </div>

                                <div class="carousel-item">
                                    <img src="<?php echo get_template_directory_uri().'/assets/img/conocenos/HDLM6.png' ?>" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="heroText d-flex flex-column justify-content-center">

                            <h1 class="mt-auto mb-2">
                                Mejor
                                <div class="animated-info">
                                    <span class="animated-item">salud</span>
                                    <span class="animated-item">Tlaxiaco</span>
                                    <span class="animated-item">vida</span>
                                </div>
                            </h1>

                            <p class="mb-4">Contribuir a reducir la incidencia de diabetes mellitus tipo II en el estado de Oaxaca a través de educación y atención integral al paciente para mejorar su bienestar y calidad de vida.</p>

                            <div class="heroLinks d-flex flex-wrap align-items-center">
                                <a class="custom-link me-4" href="#about" data-hover="Learn More">Leer mas</a>

                                <!-- <p class="contact-phone mb-0"><i class="bi-phone"></i> 010-020-0340</p> -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Aca va el contenido de WP -->

        <section class="section-padding" id="booking">
            <div class="container">
                <div class="row">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                       
                    <?php the_content(); ?>

                    <?php endwhile; else : ?>
                        <p>Lo siento, no hemos encontrado ningún post.</p>
                    <?php endif; ?>

                </div>
            </div>
        </section>

        <section class="section-padding pt-0" id="booking">
            <div class="container">
                <div class="row">
                
                    <div class="col-lg-8 col-12 mx-auto">
                        <div class="booking-form">
                            
                            <h2 class="text-center mb-lg-3 mb-2">Contacto <?php //echo LANG ?></h2>
                        
                            <form role="form" action="#booking" method="post">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Nombre Completo" required>
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Correo Eléctronico" required>
                                    </div>

                                    <div class="col-12">
                                        <textarea class="form-control" rows="5" id="message" name="message" placeholder="Mensaje"></textarea>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-6 mx-auto">
                                        <button type="submit" class="form-control" id="submit-button">Enviar</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
    
    <!-- Aca el Footer, va afuera del main -->
    <?php get_footer(); ?>