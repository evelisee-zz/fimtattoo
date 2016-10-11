<?php get_header(); ?>

<div class="container padding-top index conteudo">
    <section class='col-xs-12 static-banner' style='padding:0;'>
        <article class='content-static' role='pge-title-content'>
            <header class='oswald-bold'>
                <h2>Resultados para: </h2>
                <p class='oswald-light'>  <?php echo $_GET['s']; ?>   |  <?php echo $_GET['post_type']; ?></p>
            </header>
        </article>
    </section>

    <section class='col-xs-12' style='padding:20px 0;'>
            <div id='masonry-search' class='masonry'>
                <?php
                    /* Template Name: Custom Search */        
                    $postType = $_GET['post_type'];
                    $searchLabel = $_GET['s'];

                    $posts = new WP_Query( array(
                        'post_type'             => $postType,
                        'order'                 => 'DESC',
                        'posts_per_page'        => 20,
                        's'                     => $searchLabel
                    ));

                    if( $posts->have_posts() ) {
                    // echo '<ul class="grid-lod effect-2" id="grid">';
                        while( $posts->have_posts() ) {
                            $posts->the_post();
                            $link                   = types_render_field( "link-do-tatuador", array('output' => 'raw')  );
                            $titulo                 = get_the_title();
                            $categorias             = get_the_category($posts->ID);
                            $Data                   = get_the_date('d-m-Y');
                            $tatuador               = types_render_field( "tatuador");

                            $asasassa = "";

                            foreach( $categorias as $category ) {
                                $asasassa .= '<button onClick= goToSection("'. get_site_url() . '/category/' . $category->slug .'")><span>' . $category->name . '</span></button>';
                            }

                            echo '<div class="item medium grid">'; 
                                    echo '<a class="fancy" href="' . get_the_post_thumbnail_url() . '" title="'. $titulo . '">';
                                        echo '<figure class="effect-oscar">';
                                            if( has_post_thumbnail() ) {
                                                echo get_the_post_thumbnail( get_the_ID(), 'foto1', array( 'alt' => get_the_title(), 'title' => get_the_title(),  'class' => 'img-responsive' ) );
                                            } else {
                                                echo '<img src="' . get_bloginfo( 'template_directory' ) . '/images/img-sliderG.jpg" alt="' . get_the_title() . '" title="' . get_the_title() . '" />';
                                            }
                                        echo '<figcaption>';
                                            echo '<h2 class="oswald-bold">' .  $titulo  . '</h2>';
                                            echo '<p class="author oswald-light"><button onClick= goToPage("' . $link. '")>Tatuador:' . $tatuador . '</button></p>';
                                            echo '<p class="tags oswald-light">Tags:';
                                                echo $asasassa;
                                            echo '</p>';
                                            echo '<p class="date oswald-light"> ' . $Data . '</p>';
                                        echo '</figcaption>';
                                            
                                        echo '</figure>';
                                    echo '</a>';

                                    
                        echo '</div>';
                        }
                    } else {
                        echo "<section class='col-xs-12 no-results' style='padding-left:0;'><p>Nenhum resultado encontrado :(</p></section>";
                    }

                    wp_reset_postdata();
                ?>
            </div>
    </section>
</div>

<?php get_footer(); ?>