<?php
/**
 * Template para mostrar paginas de categorias
 */
get_header(); ?>
<main>
    <div id="dt_contenedor" style="transform: none;">
        <div id="contenedor" style="transform: none;">
            <div class="module" style="transform: none;">
                <div class="content">
                    <div class="TopAdMovil">
                        <li id="custom_html-4" class="widget_text widget widget_custom_html">
                            <div class="textwidget custom-html-widget">
                                <iframe width="300" height="100" scrolling="no" frameborder="0"
                                    src="https://a.adtng.com/get/10000650?time=1559751756161" allowtransparency="true"
                                    marginheight="0" marginwidth="0" name="spot_id_10000650">
                                </iframe>
                            </div>
                        </li>
                    </div>

                    <header>
                        <h1 style="font-weight:400"><?php single_cat_title(); ?></h1>
                    </header>

                    <?php
                    // Obtiene los posts de la categoria actual
                    if (have_posts()) : ?>
                        <style>
                            .blog-list-items .entry img {
                                width: 250px;
                                height: 347px;
                                object-fit: cover;
                            }
                        </style>
                        <div class="blog-list-items">
                            <div class="entry-group"> 
                                <?php
                                $counter = 0;
                                while (have_posts()) : the_post();
                                    if ($counter > 0 && $counter % 4 == 0) {
                                        echo '</div><div class="entry-group">'; 
                                    }
                                ?>
                                    <div class="entry">
                                        <a class="popimg" href="<?php the_permalink(); ?>">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail('medium', [
                                                    'loading' => 'lazy',
                                                    'width' => '250',
                                                    'height' => '347',
                                                ]); ?>
                                            <?php endif; ?>
                                        </a>
                                        <h2 class="information">
                                            <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
                                                <?php the_title(); ?>
                                            </a>
                                        </h2>
                                    </div>
                                <?php
                                    $counter++;
                                endwhile;
                                ?>
                            </div> 
                        </div>
                    <?php else : ?>
                        <p>No hay publicaciones en esta categoría.</p>
                    <?php endif; ?>

                    <center>
                        <?php
                        
                        the_posts_pagination(array(
                            'prev_text' => '«',
                            'next_text' => '»',
                            'before_page_number' => '',
                            'after_page_number' => '',
                        ));
                        ?>
                    </center>
                </div>

                <div id="sidebar" class="sidebar" style="position: -webkit-sticky; position: sticky; top: 0; overflow: visible; box-sizing: border-box; min-height: 1px;">
                    <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                        
                        <aside id="custom_html-2" class="widget_text widget widget_custom_html">
                            <div class="textwidget custom-html-widget">
                                <iframe width="300" height="250" scrolling="no" frameborder="0"
                                    src="https://a.adtng.com/get/10000657?time=1559751757264" allowtransparency="true"
                                    marginheight="0" marginwidth="0" name="spot_id_10000657">
                                </iframe>
                            </div>
                        </aside>

                        <aside id="nav_menu-6" class="widget widget_nav_menu">
                            <h2 class="widget-title">Más Comics Porno</h2>
                            <div class="menu-sidebar-categorias-container">
                                <ul id="menu-sidebar-categorias" class="menu">
                                    <li><a href="/category/adventure-time">Adventure Time</a></li>
                                    <li><a href="/category/american-dad-xxx">American Dad XXX</a></li>
                                    <li><a href="/category/comics-porno">Comics Porno</a></li>
                                    <li><a href="/category/ben-10">Ben 10</a></li>
                                    <li><a href="/category/dragon-ball-xxx">Dragon Ball XXX</a></li>
                                    <li><a href="/category/drawnsex">Drawnsex</a></li>
                                    <li><a href="/category/padre-de-familia-porno">Padre de Familia Porno</a></li>
                                    <li><a href="/category/futurama-xxx">Futurama XXX</a></li>
                                    <li><a href="/category/lol-hentai">LoL Hentai</a></li>
                                    <li><a href="/category/los-simpson-xxx">Los Simpson XXX</a></li>
                                    <li><a href="/category/mario-bros-xxx">Mario Bros XXX</a></li>
                                    <li><a href="/category/naruto-hentai">Naruto Hentai</a></li>
                                    <li><a href="/category/overwatch-hentai">Overwatch Hentai</a></li>
                                    <li><a href="/category/pokemon-porno">Pokemon Porno</a></li>
                                    <li><a href="/category/shadbase">Shadbase</a></li>
                                    <li><a href="/category/teen-titans">Teen Titans</a></li>
                                </ul>
                            </div>
                        </aside>

                        <aside id="custom_html-3" class="widget_text widget widget_custom_html">
                            <h2 class="widget-title">Siguenos en Twitter</h2>
                            <div class="textwidget custom-html-widget">
                                <a href="" target="_blank" rel="nofollow noreferrer noopener">
                                    <img loading="lazy" style="display: block;margin: 0 auto;border-radius: 5px;"
                                        src="<?php echo get_template_directory_uri(); ?>/img/twiter.jpg"
                                        alt="Chochox Twitter" width="300" height="79">
                                </a>
                            </div>
                        </aside>

                        <aside id="tag_cloud-2" class="widget widget_tag_cloud">
                    <h2 class="widget-title">Etiquetas</h2>
                    <div class="tagcloud"><a href="" class="tag-cloud-link tag-link-883 tag-link-position-1" style="font-size: 14.325301204819pt;" aria-label="Anal (423 elementos)">Anal</a>
                        <a href="" class="tag-cloud-link tag-link-744 tag-link-position-2" style="font-size: 8.5903614457831pt;" aria-label="Comics Porno 3D (89 elementos)">Comics Porno 3D</a>
                        <a href="" class="tag-cloud-link tag-link-767 tag-link-position-3" style="font-size: 20.987951807229pt;" aria-label="Culonas (2.636 elementos)">Culonas</a>
                        <a href="" class="tag-cloud-link tag-link-594 tag-link-position-4" style="font-size: 12.132530120482pt;" aria-label="Dragon Ball (232 elementos)">Dragon Ball</a>
                        <a href="" class="tag-cloud-link tag-link-601 tag-link-position-5" style="font-size: 20.650602409639pt;" aria-label="Full Color (2.384 elementos)">Full Color</a>
                        <a href="" class="tag-cloud-link tag-link-619 tag-link-position-6" style="font-size: 14.578313253012pt;" aria-label="Furry Hentai (458 elementos)">Furry Hentai</a>
                        <a href="" class="tag-cloud-link tag-link-1505 tag-link-position-7" style="font-size: 9.0120481927711pt;" aria-label="Futanari (98 elementos)">Futanari</a>
                        <a href="" class="tag-cloud-link tag-link-643 tag-link-position-8" style="font-size: 10.192771084337pt;" aria-label="Lesbianas (137 elementos)">Lesbianas</a>
                        <a href="" class="tag-cloud-link tag-link-1632 tag-link-position-9" style="font-size: 16.939759036145pt;" aria-label="Mamadas (877 elementos)">Mamadas</a>
                        <a href="" class="tag-cloud-link tag-link-707 tag-link-position-10" style="font-size: 14.409638554217pt;" aria-label="Milfs (431 elementos)">Milfs</a>
                        <a href="" class="tag-cloud-link tag-link-1911 tag-link-position-11" style="font-size: 8.3373493975904pt;" aria-label="My Hero Academia XXX (82 elementos)">My Hero Academia XXX</a>
                        <a href="" class="tag-cloud-link tag-link-615 tag-link-position-12" style="font-size: 10.78313253012pt;" aria-label="Naruto Hentai XXX (160 elementos)">Naruto Hentai XXX</a>
                        <a href="" class="tag-cloud-link tag-link-630 tag-link-position-13" style="font-size: 11.795180722892pt;" aria-label="Parodia Porno (215 elementos)">Parodia Porno</a>
                        <a href="" class="tag-cloud-link tag-link-603 tag-link-position-14" style="font-size: 22pt;" aria-label="Parodias Porno (3.484 elementos)">Parodias Porno</a>
                        <a href="" class="tag-cloud-link tag-link-722 tag-link-position-15" style="font-size: 14.746987951807pt;" aria-label="Series TV Porno (483 elementos)">Series TV Porno</a>
                        <a href="" class="tag-cloud-link tag-link-1608 tag-link-position-16" style="font-size: 8.0843373493976pt;" aria-label="Sonic XXX (76 elementos)">Sonic XXX</a>
                        <a href="" class="tag-cloud-link tag-link-1070 tag-link-position-17" style="font-size: 8.2530120481928pt;" aria-label="Steven Universe (80 elementos)">Steven Universe</a>
                        <a href="" class="tag-cloud-link tag-link-703 tag-link-position-18" style="font-size: 21.493975903614pt;" aria-label="Tetonas (3.004 elementos)">Tetonas</a>
                        <a href="" class="tag-cloud-link tag-link-675 tag-link-position-19" style="font-size: 10.277108433735pt;" aria-label="Vaginal (139 elementos)">Vaginal</a>
                        <a href="" class="tag-cloud-link tag-link-1178 tag-link-position-20" style="font-size: 8pt;" aria-label="Videojuegos Porno (75 elementos)">Videojuegos Porno</a>
                    </div>
                </aside>

                    </div>
                </div>

            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
