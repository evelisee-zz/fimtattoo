<?php get_header(); ?>
<div class="container padding-top no-padding blog conteudo">
    <!-- Static banner -->
    <div class="row no-margin">
        <section class="col-xs-12 no-padding">
            <article class="content-static" role="pge-title-content">
                <header class="oswald-bold">
                    <h2>Resultados para:</h2>
                   <p class='oswald-light'>  <?php echo $_GET['s']; ?>   |  <?php echo $_GET['post_type']; ?></p>
                </header>
            </article>
        </section>
    </div>

    <!-- All Banners -->
    <div class="no-margin">
    <?php
        /* Template Name: Custom Search */        
        $postType       = $_GET['post_type'];
        $searchLabel    = $_GET['s'];

        $posts = new WP_Query( array(
            'post_type'             => $postType,
            'order'                 => 'DESC',
            'posts_per_page'        => 10,
            's'                     => $searchLabel
        ));

        if( $posts->have_posts() ) {
            echo '<div class="row">';

            while( $posts->have_posts() ) {
                $index++;
                $posts->the_post();
                $titulo                 = get_the_title();
                $resume                 = get_the_excerpt();
                $image                  = get_the_post_thumbnail();
                $categorias             = get_the_category($posts->ID);
                $dia                    = get_the_date('j');
                $mes                    = get_the_date('F');
                $ano                    = get_the_date('Y');
                

                if(($index % 2) == 1){
                    echo '</div><div class="row">';
                }
                echo '<section class="col-xs-12 col-sm-6 padding-top">';
                        echo '<article class="blog-article">';
                            echo '<figure>';
                                echo '<div class="data">';
                                    echo '<p class="oswald-bold">' . $dia . '</p>';
                                    echo '<p class="oswald">'. $mes . '  ' . $ano .'</p>';
                                echo '</div>';
                                        if( has_post_thumbnail() ) {
                                            echo get_the_post_thumbnail( get_the_ID(), 'foto1', array( 'alt' => get_the_title(), 'title' => get_the_title(),  'class' => 'img-responsive',  ) );
                                        } else {
                                            echo '<img src="' . get_bloginfo( 'template_directory' ) . '/images/img-sliderG.jpg" alt="' . get_the_title() . '" title="' . get_the_title() . '" />';
                                        } 
                                
                            echo '</figure>';

                            echo '<div class="container-text">';
                                echo '<h2 class="oswald-bold">' . $titulo . '</h2>';
                                echo '<p>'. $resume .'</p>';
                                echo '<a href="'. get_permalink( get_the_ID() ) .'" class="oswald">Leia mais [+]</a>';
                            echo '</div>';
                        echo '</article>';
                echo '</section>';

            
            }

        } else {
             echo "<section class='col-xs-12 no-results' style='padding-left:0;'><p>Nenhum resultado encontrado :(</p></section>";
        }

        wp_reset_postdata();
    ?>
    </div>
</div>

<?php get_footer(); ?>