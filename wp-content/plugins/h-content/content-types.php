<?php
    /**
     * Plugin Name: Hospitalito Pattern - Contenido
     * Description: Todo los bloques de contenido.
     * Version: 1.0
     * Author: Miguel Guzmán
     */

    /*
     * 
     * Hos N Historia
     *
     */

    function dual_block_nhistoria() {
        if ( function_exists( 'register_block_pattern' ) ) {
            /**
            * Registro del patrón de bloques
            */
            register_block_pattern(
                'hos-n-historia/hos-n-historia',
                array(
                    'title'   => __( 'Hos N Historia', 'hos-n-historia' ),
                    'content' => '
                           <section class="section-padding" id="">
                                <div class="container">
                                    <div class="row">

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <h2 class="mb-lg-3 mb-3">Nuestra Historia y Asociados Fundadores</h2>

                                            <h6 class="subtitles font-weight-bold font-italic">Hospitalito de la Mixteca, A. C., inició en el año 2018 en el Municipio de la Heroica Ciudad de Tlaxiaco de la región Mixteca del estado de Oaxaca, México.</h6>

                                            <p class="text-justify pt-3">
                                                Hospitalito de la Mixteca A. C., se fundó en el año 2018 con los ciudadanos Justino Ávila Galindo, Nancy Rodríguez Bautista, María Eugenia Velasco González y Regina Cruz Ávila en el Municipio de la Heroica Ciudad de Tlaxiaco en la región Mixteca del estado de Oaxaca, México, ante la carencia de atención médica integral en la epidemia de la diabetes mellitus a las personas del Estado de Oaxaca. Reconocida por la Organización Mundial de la Salud como una amenaza mundial. 
                                            </p>
                                        </div>

                                        <div class="col-lg-4 col-md-5 col-12 mx-auto">
                                            <div class="featured-circle bg-white shadow-lg d-flex justify-content-center align-items-center">
                                                <p class="featured-text"><span class="featured-number">4</span> años <br> de historia</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                    ',
                )
            );
        }
    }

    add_action( 'init', 'dual_block_nhistoria' );



    /*
     * 
     * Consejo directivo
     *
     */

    function consejo_directivo() {
        if ( function_exists( 'register_block_pattern' ) ) {
            /**
            * Registro del patrón de bloques
            */
            register_block_pattern(
                'consejo_directivo/consejo_directivo',
                array(
                    'title'   => __( 'Hos Consejo Directivo', 'consejo_directivo' ),
                    'content' => '
                        <section class="section-padding pb-0" id="reviews">
                            <div class="container">
                                <div class="row">

                                    <div class="col-12">
                                        <h2 class="text-center mb-lg-5 mb-4">Consejo Directivo</h2>

                                        <h6 class="subtitles font-weight-bold font-italic text-center">La administración de Hospitalito de la Mixteca A. C., está a cargo de un Consejo Directivo.</h6>

                                        <div class="owl-carousel reviews-carousel pt-5">

                                            <figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">
                                                <div class="reviews-stars">
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <!-- <i class="bi-star"></i> -->
                                                </div>
                                                
                                                <p class="text-primary d-block mt-2 mb-0 w-100"><strong>Presidente</strong></p>

                                                <p class="reviews-text w-100"></p>

                                                <img src="'.get_template_directory_uri().'/assets/img/conocenos/justino.png" class="img-fluid reviews-image" alt="">

                                                <figcaption class="ms-4">
                                                    <strong>Justino Ávila </strong>

                                                    <span class="text-muted">Galindo</span>
                                                </figcaption>
                                            </figure>

                                            <figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">
                                                <div class="reviews-stars">
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <!-- <i class="bi-star"></i> -->
                                                </div>
                                                
                                                <p class="text-primary d-block mt-2 mb-0 w-100"><strong>Secretaria</strong></p>

                                                <p class="reviews-text w-100"></p>

                                                <img src="'.get_template_directory_uri().'/assets/img/conocenos/nancy.JPG" class="img-fluid reviews-image" alt="">

                                                <figcaption class="ms-4">
                                                    <strong>Nancy Rodríguez </strong>

                                                    <span class="text-muted">Bautista</span>
                                                </figcaption>
                                            </figure>

                                            <figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">
                                                <div class="reviews-stars">
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <!-- <i class="bi-star"></i> -->
                                                </div>
                                                
                                                <p class="text-primary d-block mt-2 mb-0 w-100"><strong>Tesorera</strong></p>

                                                <p class="reviews-text w-100"></p>

                                                <img src="'.get_template_directory_uri().'/assets/img/conocenos/eugenia.JPG" class="img-fluid reviews-image" alt="">

                                                <figcaption class="ms-4">
                                                    <strong>María Eugenia Velasco </strong>

                                                    <span class="text-muted">González</span>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    ',
                )
            );
        }
    }

    add_action( 'init', 'consejo_directivo' );
    