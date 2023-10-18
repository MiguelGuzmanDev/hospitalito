<?php 
    
    /**
    * Template Name: H-en-default
    */

    get_header(); 
?>
    
    <main>
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

        <section class="section-padding pt-0" id="">
            <div class="container">
                <div class="row">
                
                    <div class="col-lg-8 col-12 mx-auto">
                        <div class="booking-form">
                            
                            <h2 class="text-center mb-lg-3 mb-2">Contact <?php //echo LANG ?></h2>
                        
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
                                        <button type="submit" class="form-control" id="submit-button">Send</button>
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