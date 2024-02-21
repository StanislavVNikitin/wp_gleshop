<?php get_header();?>
<?php

    global $post;
    $slider = get_posts(array(
       'post_type' => 'slider',
    ));
?>

    <main class="main">

        <?php if ($slider): ?>
        <div id="carousel" class="carousel slide carousel-fade d-none d-sm-block">
            <div class="carousel-indicators">
                <?php for ($i = 0; $i < count($slider); $i++):?>
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="<?php echo $i ?>" <?php if($i == 0):?> class = "active" <?php endif;?> aria-current="true"
                        aria-label="Slide <?php echo $i ?>"></button>
                <?php endfor; ?>
            </div>
            <div class="carousel-inner">

                <?php $i =0; foreach ($slider as $post): setup_postdata($post); ?>
                <div class="carousel-item <?php if($i == 0):?>active<?php endif;?>">
                    <img src="<?php the_post_thumbnail_url('full');?>" class="d-block w-100" alt="<?php the_title();?>">
                    <div class="carousel-caption d-none d-md-block">
                        <h2><?php the_title();?></h2>
                        <?php the_content('');?>
                    </div>
                </div>
                <?php $i++; endforeach;?>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <?php endif;?>

        <section class="advantages">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12">
                        <h2 class="section-title">
                            <span>
                                Наши преимущества
                            </span>

                        </h2>
                    </div>
                </div>
                <div class="row gy-3 items">
                    <div class="col-lg-3 col-sm-6">
                        <div class="item">
                            <p>
                                <i class="fas fa-shipping-fast"></i>
                            </p>
                            <p>Прямые поставки от производтителей брендов</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="item">
                            <p>
                                <i class="fas fa-cubes"></i>
                            </p>
                            <p>Широкий ассортимент товаров. Более 10 тыс. наименований</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="item">
                            <p>
                                <i class="fas fa-hand-holding-usd"></i>
                            </p>
                            <p>Приятные и конкурентные цены</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="item">
                            <p>
                                <i class="fa-solid fa-user-graduate"></i>
                            </p>
                            <p>Консультации от профессионалов</p>
                        </div>
                    </div>
                </div>

            </div>

        </section>
        <section class="product-categories">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12">
                        <h2 class="section-title">
                            <span>
                                <?php  _e('Categories','gleshop');?>
                            </span>
                        </h2>
                    </div>
                </div>
                <?php echo do_shortcode('[product_categories limit="8"]');?>
            </div>

        </section>

        <section class="featured-products">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12">
                        <h2 class="section-title">
                            <span>
                                <?php  _e('Featured products','gleshop');?>
                            </span>

                        </h2>
                    </div>
                </div>

                    <?php echo do_shortcode('[featured_products limit="8"]');?>
<!--                    <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                        <div class="product-card">
                            <div class="product-card-offer">
                                <div class="offer-hit">
                                    Hit
                                </div>
                                <div class="offer-new">New</div>
                            </div>
                            <div class="product-thumb">
                                <a href="product.html"><img src="<?php /*echo get_template_directory_uri() */?>/assets/img/products/1.jpg" alt="image1"></a>
                            </div>
                            <div class="product-details">
                                <h4>
                                    <a href="product.html">Product 1 lorem ipsum dolor sit amet, consectetur adipisicing
                                        adipisicing</a>
                                </h4>
                                <p class="product-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Architecto assumenda delectus exercitationem fuga.</p>
                                <div class="product-bottom-details d-flex justify-content-between">
                                    <div class="product-price">
                                        <small>700₽</small>
                                        550₽
                                    </div>
                                    <div class="product-links">
                                        <a href="#" class="btn btn-outline-secondary add-to-card"><i class="fa-solid fa-heart-circle-plus"></i></a>
                                        <a href="#" class="btn btn-outline-secondary add-to-card"><i
                                                    class="fas fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>-->
                </div>
            </div>
        </section>
        <secton class="new-products">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12">
                        <h2 class="section-title">
                            <span><?php _e('New Products','gleshop');?></span>
                        </h2>
                    </div>
                    <?php echo do_shortcode('[gleshop_new_products]');?>


<!--                <div class="owl-carousel owl-theme owl-carousel-full">

                    <div class="product-card">
                        <div class="product-card-offer">
                            <div class="offer-new">New</div>
                        </div>
                        <div class="product-thumb">
                            <a href="product.html"><img src="<?php /*echo get_template_directory_uri() */?>/assets/img/products/6.jpg" alt="image1"></a>
                        </div>
                        <div class="product-details">
                            <h4>
                                <a href="product.html">Product 6 lorem ipsum dolor sit amet, consectetur adipisicing
                                    adipisicing</a>
                            </h4>
                            <p class="product-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Architecto assumenda delectus exercitationem fuga.Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit.
                                Architecto assumenda delectus exercitationem fuga.Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit.
                                Architecto assumenda delectus exercitationem fuga.</p>
                            <div class="product-bottom-details d-flex justify-content-between">
                                <div class="product-price">
                                    <small>700₽</small>
                                    550₽
                                </div>
                                <div class="product-links">
                                    <a href="#" class="btn btn-outline-secondary add-to-card"><i class="fa-solid fa-heart-circle-plus"></i></a>
                                    <a href="#" class="btn btn-outline-secondary add-to-card"><i
                                                class="fas fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>-->
                </div>
            </div>
        </secton>

        <section class="about-us" id="about">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12">
                        <h2 class="section-title">
                            <span>About Us</span>
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium animi architecto aut
                            consequuntur dolore eos mollitia tempore voluptates! Consectetur id libero neque! Deserunt
                            expedita laborum natus quaerat quasi vero vitae?Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Accusantium animi architecto aut
                            consequuntur dolore eos mollitia tempore voluptates! Consectetur id libero neque! Deserunt
                            expedita laborum natus quaerat quasi vero vitae?Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Accusantium animi architecto aut
                            consequuntur dolore eos mollitia tempore voluptates! Consectetur id libero neque! Deserunt
                            expedita laborum natus quaerat quasi vero vitae?</p>
                        <p>Autem debitis delectus dicta dignissimos dolore, eius hic illum iusto nesciunt, nisi numquam
                            odio optio perspiciatis quisquam quos soluta voluptas. Aliquam cumque cupiditate deleniti et
                            fugiat laborum maiores, perferendis voluptates!Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Accusantium animi architecto aut
                            consequuntur dolore eos mollitia tempore voluptates! Consectetur id libero neque! Deserunt
                            expedita laborum natus quaerat quasi vero vitae?Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Accusantium animi architecto aut
                            consequuntur dolore eos mollitia tempore voluptates! Consectetur id libero neque! Deserunt
                            expedita laborum natus quaerat quasi vero vitae?</p>
                        <p>Alias cumque cupiditate, dicta dignissimos distinctio dolor dolores enim excepturi ipsam
                            ipsum molestiae nulla odit omnis optio qui reprehenderit sequi veritatis? Expedita libero
                            molestias obcaecati perferendis tenetur? Beatae quo, vitae.Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit. Accusantium animi architecto aut
                            consequuntur dolore eos mollitia tempore voluptates! Consectetur id libero neque! Deserunt
                            expedita laborum natus quaerat quasi vero vitae?Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Accusantium animi architecto aut
                            consequuntur dolore eos mollitia tempore voluptates! Consectetur id libero neque! Deserunt
                            expedita laborum natus quaerat quasi vero vitae?</p>
                    </div>
                </div>
            </div>
        </section>

        <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d763.9535692961693!2d36.59338775532344!3d55.1167490790161!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46cad27e91251091%3A0x8ded6223b93abe2!2sFamilia!5e0!3m2!1sru!2sru!4v1707740511333!5m2!1sru!2sru" width="100%" height="450" style="border:0; display: block;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </main>


<?php get_footer();?>