<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>


<div class="container padding-top index">

	<div class="row">
		<!-- Banner Estático -->
		<section class="col-xs-12 col-sm-3 col-md-3 col-lg-3">

        	<article class="content-static" role="pge-title-content">

            	<header class="oswald-bold">

                	<h2>Inspiração</h2>

                </header>

                <p class="oswald-light">Esse é o fim da falta de inspiração para tatuagens.</p>

            </article>
        </section>

        <!-- 2 colina -->
		<section class="col-xs-12 col-sm-3 col-md-3 col-lg-3 grid">
			<ul class="grid-lod effect-2" id="grid">
				<?php lista_posts(); ?>
			</ul>
		</section>
	</div>



</div>


<!-- <div class="container padding-top index"> 
	
	<!-- <div class="row"> -->
    
    <!-- 	<section class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

        	<article class="content-static" role="pge-title-content">

            	<header class="oswald-bold">

                	<h2>Inspiração</h2>

                </header>

                <p class="oswald-light">Esse é o fim da falta de inspiração para tatuagens.</p>

            </article>
        </section>        

        <section class="col-xs-12 col-sm-2 col-md-2 col-lg-2 grid">

        	<figure class="effect-oscar">

            	<img src="http://localhost/fimtattoo/wp-content/uploads/2016/09/alice.jpg" alt="" class="img-responsive"/>

                <figcaption>

                	<h2 class="oswald-bold">Baleia</h2>

					<p class="author oswald-light">Tatuador: Lorem Ipsum</p>

					<p class="tags oswald-light">Tags: <span>Baleia </span> <span>Animais </span></p>

					<p class="date oswald-light">1 agosto 2016</p>

                </figcaption>

            </figure>
        </section>

        <section class="col-xs-12 col-sm-2 col-md-2 col-lg-2 grid">

        	<figure class="effect-oscar">

            	<img src="http://localhost/fimtattoo/wp-content/uploads/2016/09/chapeleiro.jpg" alt="" class="img-responsive"/>

                <figcaption>

                	<h2 class="oswald-bold">Baleia</h2>

					<p class="author oswald-light">Tatuador: Lorem Ipsum</p>

					<p class="tags oswald-light">Tags: <span>Baleia </span> <span>Animais </span></p>

					<p class="date oswald-light">1 agosto 2016</p>

                </figcaption>
            </figure>
        </section>

      	<section class="col-xs-12 col-sm-2 col-md-2 col-lg-2 grid">

        	<figure class="effect-oscar">

            	<img src="http://localhost/fimtattoo/wp-content/uploads/2016/09/chapeleiro.jpg" alt="" class="img-responsive"/>

                <figcaption>

                	<h2 class="oswald-bold">Baleia</h2>

					<p class="author oswald-light">Tatuador: Lorem Ipsum</p>

					<p class="tags oswald-light">Tags: <span>Baleia </span> <span>Animais </span></p>

					<p class="date oswald-light">1 agosto 2016</p>

                </figcaption>
            </figure>
        </section>
      
      	<section class="col-xs-12 col-sm-2 col-md-2 col-lg-2 grid">

        	<figure class="effect-oscar">

            	<img src="http://localhost/fimtattoo/wp-content/uploads/2016/09/chapeleiro.jpg" alt="" class="img-responsive"/>

                <figcaption>

                	<h2 class="oswald-bold">Baleia</h2>

					<p class="author oswald-light">Tatuador: Lorem Ipsum</p>

					<p class="tags oswald-light">Tags: <span>Baleia </span> <span>Animais </span></p>

					<p class="date oswald-light">1 agosto 2016</p>

                </figcaption>
            </figure>
        </section>

        <div class="clearfix"></div>
 -->
       <!--<section class="col-xs-12 col-sm-3 col-md-3 col-lg-3 grid">
        	<ul class="grid-lod effect-2" id="grid">

            
                <li>

					<figure class="effect-oscar">

						<img src="http://localhost/fimtattoo/wp-content/uploads/2016/09/alice.jpg" alt="" class="img-responsive"/>
					<figcaption>

						<h2 class="oswald-bold">Baleia</h2>

						<p class="author oswald-light">Tatuador: Lorem Ipsum</p>

						<p class="tags oswald-light">Tags: <span>Baleia </span> <span>Animais </span></p>

						<p class="date oswald-light">1 agosto 2016</p>

					</figcaption>
                </li>
                <li>

					<figure class="effect-oscar">

						<img src="http://localhost/fimtattoo/wp-content/uploads/2016/09/alice.jpg" alt="" class="img-responsive"/>
					<figcaption>

						<h2 class="oswald-bold">Baleia</h2>

						<p class="author oswald-light">Tatuador: Lorem Ipsum</p>

						<p class="tags oswald-light">Tags: <span>Baleia </span> <span>Animais </span></p>

						<p class="date oswald-light">1 agosto 2016</p>

					</figcaption>
                </li>
                <li>

					<figure class="effect-oscar">

						<img src="http://localhost/fimtattoo/wp-content/uploads/2016/09/alice.jpg" alt="" class="img-responsive"/>
					<figcaption>

						<h2 class="oswald-bold">Baleia</h2>

						<p class="author oswald-light">Tatuador: Lorem Ipsum</p>

						<p class="tags oswald-light">Tags: <span>Baleia </span> <span>Animais </span></p>

						<p class="date oswald-light">1 agosto 2016</p>

					</figcaption>
                </li>
                <li>

					<figure class="effect-oscar">

						<img src="http://localhost/fimtattoo/wp-content/uploads/2016/09/alice.jpg" alt="" class="img-responsive"/>
					<figcaption>

						<h2 class="oswald-bold">Baleia</h2>

						<p class="author oswald-light">Tatuador: Lorem Ipsum</p>

						<p class="tags oswald-light">Tags: <span>Baleia </span> <span>Animais </span></p>

						<p class="date oswald-light">1 agosto 2016</p>

					</figcaption>
                </li>
                <li>

					<figure class="effect-oscar">

						<img src="http://localhost/fimtattoo/wp-content/uploads/2016/09/alice.jpg" alt="" class="img-responsive"/>
					<figcaption>

						<h2 class="oswald-bold">Baleia</h2>

						<p class="author oswald-light">Tatuador: Lorem Ipsum</p>

						<p class="tags oswald-light">Tags: <span>Baleia </span> <span>Animais </span></p>

						<p class="date oswald-light">1 agosto 2016</p>

					</figcaption>
                </li>
                <li>

					<figure class="effect-oscar">

						<img src="http://localhost/fimtattoo/wp-content/uploads/2016/09/alice.jpg" alt="" class="img-responsive"/>
					<figcaption>

						<h2 class="oswald-bold">Baleia</h2>

						<p class="author oswald-light">Tatuador: Lorem Ipsum</p>

						<p class="tags oswald-light">Tags: <span>Baleia </span> <span>Animais </span></p>

						<p class="date oswald-light">1 agosto 2016</p>

					</figcaption>
                </li>              
            </ul>
        </section>

        <section class="col-xs-12 col-sm-3 col-md-3 col-lg-3 grid">
        	<ul class="grid-lod effect-2" id="grid">

            	<li>

					<figure class="effect-oscar">

						<img src="http://localhost/fimtattoo/wp-content/uploads/2016/09/alice.jpg" alt="" class="img-responsive"/>
					<figcaption>

						<h2 class="oswald-bold">Baleia</h2>

						<p class="author oswald-light">Tatuador: Lorem Ipsum</p>

						<p class="tags oswald-light">Tags: <span>Baleia </span> <span>Animais </span></p>

						<p class="date oswald-light">1 agosto 2016</p>

					</figcaption>
                </li>

                <li>

					<figure class="effect-oscar">

						<img src="http://localhost/fimtattoo/wp-content/uploads/2016/09/alice.jpg" alt="" class="img-responsive"/>
					<figcaption>

						<h2 class="oswald-bold">Baleia</h2>

						<p class="author oswald-light">Tatuador: Lorem Ipsum</p>

						<p class="tags oswald-light">Tags: <span>Baleia </span> <span>Animais </span></p>

						<p class="date oswald-light">1 agosto 2016</p>

					</figcaption>
                </li>
                <li>

					<figure class="effect-oscar">

						<img src="http://localhost/fimtattoo/wp-content/uploads/2016/09/alice.jpg" alt="" class="img-responsive"/>
					<figcaption>

						<h2 class="oswald-bold">Baleia</h2>

						<p class="author oswald-light">Tatuador: Lorem Ipsum</p>

						<p class="tags oswald-light">Tags: <span>Baleia </span> <span>Animais </span></p>

						<p class="date oswald-light">1 agosto 2016</p>

					</figcaption>
                </li>
                <li>

					<figure class="effect-oscar">

						<img src="http://localhost/fimtattoo/wp-content/uploads/2016/09/alice.jpg" alt="" class="img-responsive"/>
					<figcaption>

						<h2 class="oswald-bold">Baleia</h2>

						<p class="author oswald-light">Tatuador: Lorem Ipsum</p>

						<p class="tags oswald-light">Tags: <span>Baleia </span> <span>Animais </span></p>

						<p class="date oswald-light">1 agosto 2016</p>

					</figcaption>
                </li>
                <li>

					<figure class="effect-oscar">

						<img src="http://localhost/fimtattoo/wp-content/uploads/2016/09/alice.jpg" alt="" class="img-responsive"/>
					<figcaption>

						<h2 class="oswald-bold">Baleia</h2>

						<p class="author oswald-light">Tatuador: Lorem Ipsum</p>

						<p class="tags oswald-light">Tags: <span>Baleia </span> <span>Animais </span></p>

						<p class="date oswald-light">1 agosto 2016</p>

					</figcaption>
                </li>
                <li>

					<figure class="effect-oscar">

						<img src="http://localhost/fimtattoo/wp-content/uploads/2016/09/alice.jpg" alt="" class="img-responsive"/>
					<figcaption>

						<h2 class="oswald-bold">Baleia</h2>

						<p class="author oswald-light">Tatuador: Lorem Ipsum</p>

						<p class="tags oswald-light">Tags: <span>Baleia </span> <span>Animais </span></p>

						<p class="date oswald-light">1 agosto 2016</p>

					</figcaption>
                </li>
                <li>

					<figure class="effect-oscar">

						<img src="http://localhost/fimtattoo/wp-content/uploads/2016/09/alice.jpg" alt="" class="img-responsive"/>
					<figcaption>

						<h2 class="oswald-bold">Baleia</h2>

						<p class="author oswald-light">Tatuador: Lorem Ipsum</p>

						<p class="tags oswald-light">Tags: <span>Baleia </span> <span>Animais </span></p>

						<p class="date oswald-light">1 agosto 2016</p>

					</figcaption>
                </li>              
            </ul>
        </section>

        <section class="col-xs-12 col-sm-3 col-md-3 col-lg-3 grid">
        	<ul class="grid-lod effect-2" id="grid">

            	<li>

					<figure class="effect-oscar">

						<img src="http://localhost/fimtattoo/wp-content/uploads/2016/09/alice.jpg" alt="" class="img-responsive"/>
					<figcaption>

						<h2 class="oswald-bold">Baleia</h2>

						<p class="author oswald-light">Tatuador: Lorem Ipsum</p>

						<p class="tags oswald-light">Tags: <span>Baleia </span> <span>Animais </span></p>

						<p class="date oswald-light">1 agosto 2016</p>

					</figcaption>
                </li>

                <li>

					<figure class="effect-oscar">

						<img src="http://localhost/fimtattoo/wp-content/uploads/2016/09/alice.jpg" alt="" class="img-responsive"/>
					<figcaption>

						<h2 class="oswald-bold">Baleia</h2>

						<p class="author oswald-light">Tatuador: Lorem Ipsum</p>

						<p class="tags oswald-light">Tags: <span>Baleia </span> <span>Animais </span></p>

						<p class="date oswald-light">1 agosto 2016</p>

					</figcaption>
                </li>
                <li>

					<figure class="effect-oscar">

						<img src="http://localhost/fimtattoo/wp-content/uploads/2016/09/alice.jpg" alt="" class="img-responsive"/>
					<figcaption>

						<h2 class="oswald-bold">Baleia</h2>

						<p class="author oswald-light">Tatuador: Lorem Ipsum</p>

						<p class="tags oswald-light">Tags: <span>Baleia </span> <span>Animais </span></p>

						<p class="date oswald-light">1 agosto 2016</p>

					</figcaption>
                </li>
                <li>

					<figure class="effect-oscar">

						<img src="http://localhost/fimtattoo/wp-content/uploads/2016/09/alice.jpg" alt="" class="img-responsive"/>
					<figcaption>

						<h2 class="oswald-bold">Baleia</h2>

						<p class="author oswald-light">Tatuador: Lorem Ipsum</p>

						<p class="tags oswald-light">Tags: <span>Baleia </span> <span>Animais </span></p>

						<p class="date oswald-light">1 agosto 2016</p>

					</figcaption>
                </li>
                <li>

					<figure class="effect-oscar">

						<img src="http://localhost/fimtattoo/wp-content/uploads/2016/09/alice.jpg" alt="" class="img-responsive"/>
					<figcaption>

						<h2 class="oswald-bold">Baleia</h2>

						<p class="author oswald-light">Tatuador: Lorem Ipsum</p>

						<p class="tags oswald-light">Tags: <span>Baleia </span> <span>Animais </span></p>

						<p class="date oswald-light">1 agosto 2016</p>

					</figcaption>
                </li>
                <li>

					<figure class="effect-oscar">

						<img src="http://localhost/fimtattoo/wp-content/uploads/2016/09/alice.jpg" alt="" class="img-responsive"/>
					<figcaption>

						<h2 class="oswald-bold">Baleia</h2>

						<p class="author oswald-light">Tatuador: Lorem Ipsum</p>

						<p class="tags oswald-light">Tags: <span>Baleia </span> <span>Animais </span></p>

						<p class="date oswald-light">1 agosto 2016</p>

					</figcaption>
                </li>
                <li>

					<figure class="effect-oscar">

						<img src="http://localhost/fimtattoo/wp-content/uploads/2016/09/alice.jpg" alt="" class="img-responsive"/>
					<figcaption>

						<h2 class="oswald-bold">Baleia</h2>

						<p class="author oswald-light">Tatuador: Lorem Ipsum</p>

						<p class="tags oswald-light">Tags: <span>Baleia </span> <span>Animais </span></p>

						<p class="date oswald-light">1 agosto 2016</p>

					</figcaption>
                </li>              
            </ul>
        </section>

        <section class="col-xs-12 col-sm-3 col-md-3 col-lg-3 grid">
        	<ul class="grid-lod effect-2" id="grid">

            	<li>

					<figure class="effect-oscar">

						<img src="http://localhost/fimtattoo/wp-content/uploads/2016/09/alice.jpg" alt="" class="img-responsive"/>
					<figcaption>

						<h2 class="oswald-bold">Baleia</h2>

						<p class="author oswald-light">Tatuador: Lorem Ipsum</p>

						<p class="tags oswald-light">Tags: <span>Baleia </span> <span>Animais </span></p>

						<p class="date oswald-light">1 agosto 2016</p>

					</figcaption>
                </li>

                <li>

					<figure class="effect-oscar">

						<img src="http://localhost/fimtattoo/wp-content/uploads/2016/09/alice.jpg" alt="" class="img-responsive"/>
					<figcaption>

						<h2 class="oswald-bold">Baleia</h2>

						<p class="author oswald-light">Tatuador: Lorem Ipsum</p>

						<p class="tags oswald-light">Tags: <span>Baleia </span> <span>Animais </span></p>

						<p class="date oswald-light">1 agosto 2016</p>

					</figcaption>
                </li>
                <li>

					<figure class="effect-oscar">

						<img src="http://localhost/fimtattoo/wp-content/uploads/2016/09/alice.jpg" alt="" class="img-responsive"/>
					<figcaption>

						<h2 class="oswald-bold">Baleia</h2>

						<p class="author oswald-light">Tatuador: Lorem Ipsum</p>

						<p class="tags oswald-light">Tags: <span>Baleia </span> <span>Animais </span></p>

						<p class="date oswald-light">1 agosto 2016</p>

					</figcaption>
                </li>
                <li>

					<figure class="effect-oscar">

						<img src="http://localhost/fimtattoo/wp-content/uploads/2016/09/alice.jpg" alt="" class="img-responsive"/>
					<figcaption>

						<h2 class="oswald-bold">Baleia</h2>

						<p class="author oswald-light">Tatuador: Lorem Ipsum</p>

						<p class="tags oswald-light">Tags: <span>Baleia </span> <span>Animais </span></p>

						<p class="date oswald-light">1 agosto 2016</p>

					</figcaption>
                </li>
                <li>

					<figure class="effect-oscar">

						<img src="http://localhost/fimtattoo/wp-content/uploads/2016/09/alice.jpg" alt="" class="img-responsive"/>
					<figcaption>

						<h2 class="oswald-bold">Baleia</h2>

						<p class="author oswald-light">Tatuador: Lorem Ipsum</p>

						<p class="tags oswald-light">Tags: <span>Baleia </span> <span>Animais </span></p>

						<p class="date oswald-light">1 agosto 2016</p>

					</figcaption>
                </li>
                <li>

					<figure class="effect-oscar">

						<img src="http://localhost/fimtattoo/wp-content/uploads/2016/09/alice.jpg" alt="" class="img-responsive"/>
					<figcaption>

						<h2 class="oswald-bold">Baleia</h2>

						<p class="author oswald-light">Tatuador: Lorem Ipsum</p>

						<p class="tags oswald-light">Tags: <span>Baleia </span> <span>Animais </span></p>

						<p class="date oswald-light">1 agosto 2016</p>

					</figcaption>
                </li>
                <li>

					<figure class="effect-oscar">

						<img src="http://localhost/fimtattoo/wp-content/uploads/2016/09/alice.jpg" alt="" class="img-responsive"/>
					<figcaption>

						<h2 class="oswald-bold">Baleia</h2>

						<p class="author oswald-light">Tatuador: Lorem Ipsum</p>

						<p class="tags oswald-light">Tags: <span>Baleia </span> <span>Animais </span></p>

						<p class="date oswald-light">1 agosto 2016</p>

					</figcaption>
                </li>              
            </ul>
        </section>
 -->
	<!-- </div> -->
<!-- </div> -->

<?php get_footer(); ?>
