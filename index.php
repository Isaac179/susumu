<?php get_header(); ?>
<div class="row cuerpo" id="inicio" >

<div class="row seccion-pagina">
        <div class="columns grande-1 medio-2 chico-12">
            <span>New</span>
            </div>
            <div class="columns medio-10 grande-11 chico-12">
                <!-- Slider main container -->
                <div class="swiper-container">
                <!-- Additional required wrapper -->
                <?php $nostros = get_page_by_title('nosotros');?>
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    
                    <a href="<?php echo get_permalink($nostros->ID) ?>" class="swiper-slide" style="background-image: url(https://i.ytimg.com/vi/2w7cnjMkp7E/maxresdefault.jpg);padding: 40px 60px;background-size: cover;"><h1>MEMORIAL</h1><br><p>Ultimate Archive</p></a>
                    <a href="<?php echo get_permalink($nostros->ID) ?>" class="swiper-slide" style="background-image: url(https://i.pinimg.com/originals/04/eb/63/04eb638f126d53efe818fe4f04e03264.png);padding: 40px 60px;background-size: cover;"><h1>HISTORY & LIFE</h1><p>listening.</p></a>
                    <a href="<?php echo get_permalink($nostros->ID) ?>" class="swiper-slide" style="background-image: url(https://mir-s3-cdn-cf.behance.net/project_modules/1400_opt_1/63ebea86302691.5d951aa176fcb.jpg);padding: 40px 60px;background-size: cover;"><h1></h1><p></p></a>
                    <a href="<?php echo get_permalink($nostros->ID) ?>" class="swiper-slide" style="background-image: url(https://i.ytimg.com/vi/orn2XwHOppw/maxresdefault.jpg);padding: 40px 60px;background-size: cover;"><h1></h1><p></p></a>
                    <a href="<?php echo get_permalink($nostros->ID) ?>" class="swiper-slide" style="background-image: url(https://mir-s3-cdn-cf.behance.net/project_modules/1400_opt_1/e2fb5486302691.5e33679cb480a.jpg);padding: 40px 60px;background-size: cover;"><h1></h1><p></p></a>
                </div> 
            </div>
            </div>
            </div>

	
<div class="row seccion-pagina">
        <div class="cuadricula">
            <div class="cuadro grande-1 medio-2 chico-12">
                <span>Álbum</span>
            </div>
            <div class="cuadro medio-10 grande-11 chico-12 slider-home">
                <?php 
						
				        $trabajos = get_posts( array(
				            'post_type' => 'trabajos_pt',
				            'posts_per_page' => 3,
				            'orderby' => 'post_date', 
				            'order' => 'DESC',
				        ) );
				 			
				            foreach ( $trabajos as $trabajo ):
								$empresa_relacionada = get_post_meta( $trabajo->ID, 'empresa_relacionada_meta', true );
                                 $empresa_relacionada = $empresa_relacionada[0];
                            
						?>

                <div class="cuadro grande-4 chico-12 cuadro-trabajo" style="border-bottom: 20px solid 
                           <?php echo get_post_meta( $empresa_relacionada, 'color_destacado_meta', true ); ?>;"> <!-- Color Estilo -->
                           
                           <?php echo get_the_title( $trabajo->ID ); ?><br><br> <!-- Imprime Puesto -->
                           &nbsp;&nbsp;<?php echo get_the_title( $empresa_relacionada); ?><br><br> <!-- Imprime Empresa -->
                           <p class="fa fa-map-marker"> <?php echo get_post_meta( $empresa_relacionada, 'datos_destacado_meta', true ); ?> </p><br><!-- Imprime Ubicacion-->         
                           <a href="<?php echo get_permalink($trabajo->ID); ?>">Ver mas</a>
                           
                           <!-- echo "<a href='$link' title='$linktitle'>$linkname</a>"; -->
                               
                </div>
                <?php endforeach;?>
                <div class="row">
                    <br><br>
                        <a href="<?php echo get_post_type_archive_link( 'trabajos_pt' ) ?> ">Ver todas las ofertas de trabajo ></a>
                </div>  
            </div>
        </div>    
    </div>


	<div class="row seccion-empresa">
        <div class="cuadricula">
            <div class="cuadro grande-1 medio-2 chico-12">
                <span>Empresas</span>
            </div>
			
            <div class="cuadro medio-10 grande-11 chico-12 slider-home">
                <div class="row">
                    <div class="cuadricula">
                    <?php 
				        $empresas = get_posts( array(
				            'post_type' => 'empresas_pt',
				            'posts_per_page' => 4,
				            'orderby' => 'post_date', 
				            'order' => 'ASC',
				        ) );
				 			
				            foreach ( $empresas as $empresa ):
								$logo_empresa = get_post_meta( $empresa->ID, 'logo_destacado_meta', true ); 
                            
						?>
                            <div class="cuadro grande-3 medio-6 chico-12 cuadro-trabajo logo-empresa2">
                                <a href="<?php echo get_permalink($empresa->ID); ?>"><?php echo $logo_empresa; ?></a>
                            </div>
                            <?php endforeach;?>             
                    </div>
                </div>
            </div>
        </div>
    </div>


	<div class="row seccion-nosotros">
            <div class="columns grande-1 medio-2 chico-12">
                <span>Nosotros</span>
            </div>

            <div class="columns medio-12 grande-11 chico-12"> 
                <?php $nostros = get_page_by_title('nosotros');
                    $img_nosotros = get_the_post_thumbnail_url($nostros->ID);
                    $image_id = get_post_thumbnail_id($nostros->ID);
                    $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
                ?>
                <img style="width: 900px;" alt="<?php echo $image_alt  ?>" src="<?php echo $img_nosotros  ?>">
                <?php echo $nostros->post_content ?>
            </div>
    </div>


    <div class="seccion-insta">
        <div class="cuadricula">
            <div class="cuadro grande-1 medio-2 chico-12">
                <span>Instagram</span>
            </div>
            <div class="cuadro medio-10 grande-11 chico-12 slider-home">
                <div class="row">
                    <div class="cuadricula">
                        <div class="cuadro grande-4 chico-12 cuadro-trabajo">
                           <a href="https://www.instagram.com/" target="_Blank"><img class="img-insta" src="<?php bloginfo('template_url'); ?>/images/proxima/proxima-instagram.png"></a>
                        </div>

                        <div class="cuadro grande-4 chico-12 cuadro-trabajo2">
                            <a href="https://www.instagram.com/" target="_Blank"><img class="img-insta" src="<?php bloginfo('template_url'); ?>/images/proxima/proxima-instagram2.png"></a>
                        </div>

                        <div class="cuadro grande-4 chico-12 cuadro-trabajo3">
                            <a href="https://www.instagram.com/" target="_Blank"><img class="img-insta" src="<?php bloginfo('template_url'); ?>/images/proxima/proxima-instagram.png"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

						
</div>

<?php get_footer(); ?>