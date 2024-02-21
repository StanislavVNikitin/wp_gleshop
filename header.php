<!doctype html>
<html lang="<?php language_attributes();?>">
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<?php wp_head();?>
</head>
<body <?php body_class();?>>
<?php wp_body_open();?>

<?php
global $gleshop_theme_options;
$gleshop_theme_options = gleshop_theme_options();
global $gleshop_theme_socnetwork;
$gleshop_theme_socnetwork = gleshop_socnet_link_options();
?>

<div class="wraper">

    <header class="header ">
        <div class="header-top py-1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 col-sm-4">
                        <div class="header-top-phone d-flex align-items-center h-100">
                            <?php if(! empty($gleshop_theme_options['phone'])):?>
                                <i class="fa-solid fa-mobile-screen"></i>
                                <a class="ms-2" href="tel:+<?php echo str_replace(array(' ','-','+','(',')'),array('','','','',''), $gleshop_theme_options['phone']);?>"><?php echo $gleshop_theme_options['phone'];?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-sm-4 d-none d-sm-block">
                        <ul class="social-icons d-flex  justify-content-center">
                            <?php foreach ($gleshop_theme_socnetwork as $socnet_item):?>
                                <li><a href="<?php echo $socnet_item['option_link'];?>"><i class="fa-brands <?php echo $socnet_item['option_select'];?>"></i></a></li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                    <div class="col-6 col-sm-4">
                        <div class="header-top-account d-flex justify-content-end">
                            <div class="btn-group me-2">
                                <div class="dropdown">
                                    <button class="btn btn-sm dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                        Account
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="login.html">Sign In</a></li>
                                        <li><a class="dropdown-item" href="register.html">Sign Up</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-group">
                                <div class="dropdown">
                                    <button class="btn btn-sm dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                        EN
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">RU</a></li>
                                        <li><a class="dropdown-item" href="#">DE</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- header-top-account-->


                    </div>
                </div>
            </div>

        </div><!-- header-top-->

        <div class="header-middle bg-white py-4">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-6"><a href="<?php echo home_url('/');?>" class="header-logo h1"><?php bloginfo('name');?></a></div>

                    <div class="col-sm-6 mt-2 mt-md-0">

                        <?php aws_get_search_form( true ); ?>

                       <!-- <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control" name="s" placeholder="Searching..."
                                       aria-label="Recipient's username" aria-describedby="button-search">
                                <button class="btn btn-outline-danger" type="submit" id="button-search"><i
                                            class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </form>
-->
                    </div>
                </div>
            </div>

        </div> <!-- header-middle -->

    </header>



    <div class="header-bottom sticky-top" id="header-nav">
        <nav class="navbar navbar-expand-md bg-dark" data-bs-theme="dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-start" id="offcanvasNavbar" tabindex="-1"
                     aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Catalog</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <?php
                        wp_nav_menu(array(
                           'theme_location'  => 'header_menu',
                            'container'       => false,
                            'menu_class'      => 'navbar-nav',
                            'walker'          => new Gleshop_Header_Menu(),


                        ));
                        ?>
<!--                        <ul class="navbar-nav">-->
<!--                            <li class="nav-item">-->
<!--                                <a class="nav-link active" aria-current="page" href="index.html">Home</a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a class="nav-link" href="#">About</a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a class="nav-link" href="#">Contact</a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a class="nav-link" href="#">Payment</a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a class="nav-link" href="#">Delivery</a>-->
<!--                            </li>-->
<!--                            <li class="nav-item dropdown">-->
<!--                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"-->
<!--                                   aria-expanded="false" data-bs-auto-close="outside">-->
<!--                                    Catalog-->
<!--                                </a>-->
<!--                                <ul class="dropdown-menu dropdown-menu-end">-->
<!--                                    <li>-->
<!--                                        <a class="dropdown-item" href="category.html">Shoes</a>-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        <a class="dropdown-item" href="category.html">Jeans</a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item dropend">-->
<!--                                        <a class="dropdown-item dropdown-toggle" href="category.html" data-bs-toggle="dropdown"-->
<!--                                           data-bs-auto-close="outside">Sportswear</a>-->
<!--                                        <ul class="dropdown-menu dropdown-menu-end">-->
<!--                                            <li>-->
<!--                                                <a class="dropdown-item" href="category.html">Men's Sportswear</a>-->
<!--                                            </li>-->
<!--                                            <li>-->
<!--                                                <a class="dropdown-item" href="category.html">Women's Sportswear</a>-->
<!--                                            </li>-->
<!--                                            <li>-->
<!--                                                <a class="dropdown-item" href="category.html">Baby's Sportswear</a>-->
<!--                                            </li>-->
<!--                                        </ul>-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        <a class="dropdown-item" href="category.html">Coat</a>-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        <a class="dropdown-item" href="category.html">Shirts</a>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </li>-->
<!--                        </ul>-->
                    </div>
                </div>

                <div>
                    <a href="#" class="btn p-1">
                        <i class="fa-solid fa-heart"></i>
                        <span class="badge text-bg-warning cart-badge bg-warning rounded-circle">3</span>
                    </a>

                    <button class="btn p-1" id="cart-open" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart"
                            aria-controls="offcanvasCart">
                        <i class="fa-solid fa-cart-arrow-down"></i>
                        <span class="badge text-bg-warning cart-badge bg-warning rounded-circle">
                            <?php echo WC()->cart->get_cart_contents_count(); /* echo count (WC()-?cart->get_cart());*/
                            ?>
                        </span>
                    </button>
                </div>

            </div>
        </nav>
    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasCart"
         aria-labelledby="offcanvasCartLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasCartLabel">Cart</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <?php woocommerce_mini_cart();?>

<!--            <div class="table-responsive">
                <table class="table offcanvasCart-table">
                    <tbody>
                    <tr>
                        <td class="product-img-td"><a href="#"><img src="<?php /*echo get_template_directory_uri() */?>/assets/img/products/1.jpg" alt="photo1"></a></td>
                        <td><a href="product.html">Product 1 lorem ipsum dolor sit amet, consectetur adipisicing
                                adipisicing</a></td>
                        <td>550₽</td>
                        <td>&times;1</td>
                        <td><button class="btn btn-danger"><i class="fa-regular fa-circle-xmark"></i></button></td>
                    </tr>
                    <tr>
                        <td class="product-img-td"><a href="#"><img src="<?php /*echo get_template_directory_uri() */?>/assets/img/products/2.jpg" alt="photo1"></a></td>
                        <td><a href="product.html">Product 2</a></td>
                        <td>250₽</td>
                        <td>&times;2</td>
                        <td><button class="btn btn-danger"><i class="fa-regular fa-circle-xmark"></i></button></td>
                    </tr>
                    <tr>
                        <td class="product-img-td"><a href="#"><img src="<?php /*echo get_template_directory_uri() */?>/assets/img/products/3.jpg" alt="photo1"></a></td>
                        <td><a href="product.html">Product 3</a></td>
                        <td>750₽</td>
                        <td>&times;3</td>
                        <td><button class="btn btn-danger"><i class="fa-regular fa-circle-xmark"></i></button></td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="4" class="text-end">Total:</td>
                        <td>1550₽</td>
                    </tr>

                    </tfoot>
                </table>
            </div>
            <div class="text-end">
                <a href="cart" class="btn btn-outline-danger">Cart</a>
                <a href="checkout" class="btn btn-outline-secondary">Checout</a>
            </div>-->



        </div>
    </div>
