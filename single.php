<?php get_header(); ?>

<div id="contenedor">
    <div id="single" class="dtsingle">
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="content">
                <!-- Mobile Top Ad -->
                <div class="TopAdMovil">
                    <li id="custom_html-4" class="widget_text widget widget_custom_html">
                        <div class="textwidget custom-html-widget">
                            <iframe width="300" height="100" scrolling="no" frameborder="0" 
                                src="https://a.adtng.com/get/10000650?time=1559751756161" 
                                allowtransparency="true" marginheight="0" marginwidth="0" 
                                name="spot_id_10000650"></iframe>
                        </div>
                    </li>
                </div>
                
                <!-- Post Content -->
                <div class="posts">
                    <!-- Title and Breadcrumbs -->
                    <div class="headerTitle">
                        <header class="pos">
                            <h1 class="titl"><?php the_title(); ?></h1>
                        </header>
                        <div class="meta">
                            <p id="breadcrumbs">
                                <span>
                                    <span><a href="">ChoChoX</a></span> » 
                                    <span><a href="https://chochox.com/category/comics-porno-sex/">Comics Porno</a></span> » 
                                    <span class="breadcrumb_last" aria-current="page"><?php the_title(); ?></span>
                                </span>
                            </p>
                        </div>
                    </div>
                    
                   
                    <div class="wp-content">
                        <figure class="wp-block-gallery has-nested-images columns-default is-cropped wp-block-gallery-1 is-layout-flex wp-block-gallery-is-layout-flex">
                           
                            <figure class="wp-block-image">
                                <img fetchpriority="high" decoding="async" 
                                    data-id="140428" src="<?php the_post_thumbnail_url('full'); ?>" 
                                    alt="<?php the_title(); ?>" class="wp-image-140428">
                            </figure>
                        </figure>
                    </div>
                    
                
                    
                    
                    
                    <!-- Related Posts -->
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 4,
                        'post_status' => 'publish',
                        'category_name' => 'chocox'
                    );
                    $query = new WP_Query($args);
                    ?>

                    <?php if ($query->have_posts()) : ?>
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
                                while ($query->have_posts()) : $query->the_post();
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
                        <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                        <p>No hay publicaciones en esta categoría.</p>
                    <?php endif; ?>
                    
                    <!-- Taxonomy Info -->
                    <div class="tax_post">
                        <!-- Categories -->
                        <div class="tax_box">
                            <div class="title">Categorias</div>
                            <div class="links">
                                <a href="https://chochox.com/category/comics-porno-sex/" rel="category tag">Comics Porno</a>
                            </div>
                        </div>
                        
                        <!-- Tags -->
                        <div class="tax_box">
                            <div class="title">Etiquetas</div>
                            <div class="links"> 
                                <a href="https://chochox.com/tag/comics-3d/" rel="tag">Comics Porno 3D</a> 
                                <a href="https://chochox.com/tag/culonas-comicsporno-xxx/" rel="tag">Culonas</a> 
                                <a href="https://chochox.com/tag/full-color/" rel="tag">Full Color</a> 
                                <a href="https://chochox.com/tag/mamadas-comics-porno/" rel="tag">Mamadas</a> 
                                <a href="https://chochox.com/tag/parodias-porno-comics-porno/" rel="tag">Parodias Porno</a> 
                                <a href="https://chochox.com/tag/tetonas-comics/" rel="tag">Tetonas</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Comments Section -->
                <div id="comments" class="comments-area">
                    <div id="respond" class="comment-respond">
                        <h3 id="reply-title" class="comment-reply-title"></h3>
                        <h3 id="reply-title" class="comment-reply-title">Deja tu comentario</h3> 
                        <small>
                            <a rel="nofollow" id="cancel-comment-reply-link" 
                               href="/the-dark-side-of-lust-mark_joey3d/#respond" 
                               style="display:none;">Cancelar la respuesta</a>
                        </small>
                        <form action="https://chochox.com/wp-comments-post.php" method="post" id="commentform" class="comment-form">
                            <p class="comment-notes">
                                <span id="email-notes">Tu dirección de correo electrónico no será publicada.</span> 
                                <span class="required-field-message">Los campos obligatorios están marcados con <span class="required">*</span></span>
                            </p>
                            <p class="comment-form-comment">
                                <textarea id="comment" name="comment" cols="45" rows="8" required=""></textarea>
                            </p>
                            <p class="comment-form-author">
                                <label for="author">Nombre</label> 
                                <input id="author" name="author" type="text" value="" size="30" maxlength="245" autocomplete="name">
                            </p>
                            <p class="form-submit">
                                <input name="submit" type="submit" id="submit" class="submit" value="Enviar comentario"> 
                                <input type="hidden" name="comment_post_ID" value="140425" id="comment_post_ID">
                                <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                            </p>
                        </form>
                    </div>
                    <p class="no-comments-yet">Aún no hay comentarios. ¡Sé el primero en opinar!</p>
                </div>
            </div>
        </div>
        
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="theiaStickySidebar">
                <!-- Ad Widget -->
                <aside id="custom_html-2" class="widget_text widget widget_custom_html">
                    <div class="textwidget custom-html-widget">
                        <iframe width="300" height="250" scrolling="no" frameborder="0" 
                            src="https://a.adtng.com/get/10000657?time=1559751757264" 
                            allowtransparency="true" marginheight="0" marginwidth="0" 
                            name="spot_id_10000657"></iframe>
                    </div>
                </aside>
                
                <!-- Categories Menu Widget -->
                <aside id="nav_menu-6" class="widget widget_nav_menu">
                    <h2 class="widget-title">Más Comics Porno</h2>
                    <div class="menu-sidebar-categorias-container">
                        <ul id="menu-sidebar-categorias" class="menu">
                            <li id="menu-item-29513" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-29513">
                                <a href="https://chochox.com/category/hora-de-aventuras-xxx-porno/">Adventure Time</a>
                            </li>
                            <li id="menu-item-29596" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-29596">
                                <a href="https://chochox.com/category/american-dad-xxx/">American Dad XXX</a>
                            </li>
                            <li id="menu-item-2695" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-2695">
                                <a href="https://chochox.com/category/comics-porno-sex/">Comics Porno</a>
                            </li>
                            <!-- Additional menu items excluded for brevity -->
                        </ul>
                    </div>
                </aside>
                
                <!-- Twitter Widget -->
                <aside id="custom_html-3" class="widget_text widget widget_custom_html">
                    <h2 class="widget-title">Siguenos en Twitter</h2>
                    <div class="textwidget custom-html-widget">
                        <a href="<?php echo get_template_directory_uri(); ?>/img/twiter.jpg" target="_blank" rel="nofollow noreferrer noopener">
                            <img loading="lazy" style="display: block;margin: 0 auto;border-radius: 5px;" 
                                src="<?php echo get_template_directory_uri(); ?>/img/twiter.jpg" 
                                alt="Chochox Twitter" width="300" height="79">
                        </a>
                    </div>
                </aside>
                
                <!-- Tag Cloud Widget -->
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

<?php get_footer(); ?>